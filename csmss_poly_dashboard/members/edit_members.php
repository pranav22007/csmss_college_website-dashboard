<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';

$id = isset( $_GET[ 'members_id' ] ) ? intval( $_GET[ 'members_id' ] ) : 0;

if ( $id <= 0 ) {
    die( 'Invalid member ID' );
}

// Fetch existing member data
$sql = "SELECT * FROM members WHERE members_id=$id LIMIT 1";
$result = mysqli_query( $conn, $sql );
$row = mysqli_fetch_assoc( $result );

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    $img = $row['img']; // keep old image by default

    // Handle file upload if new image is chosen
    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $uploadDir = __DIR__ . '/../assets/img/home/members/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $imgName = time() . '_' . basename($_FILES['img']['name']);
        $imgTmp = $_FILES['img']['tmp_name'];
        $uploadPath = $uploadDir . $imgName;

        if (move_uploaded_file($imgTmp, $uploadPath)) {
            $img = $imgName;
        }
    }

    $sql = "UPDATE `members` 
            SET `title`='$title', `designation`='$designation', `img`='$img' 
            WHERE members_id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: members.php?msg=Data updated successfully');
        exit;
    } else {
        header('Location: members.php?msg=Update failed');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang = 'en' class = 'light-style layout-menu-fixed' dir = 'ltr' data-theme = 'theme-default' data-assets-path = '../assets/' data-template = 'vertical-menu-template-free'>
<?php include '../common/header_link.php';
?>

<body>
<div class = 'layout-wrapper layout-content-navbar'>
<div class = 'layout-container'>

<!-- Sidebar -->
<?php include '../common/sidebar.php';
?>
<!-- / Sidebar -->

<div class = 'layout-page'>

<!-- Navbar -->
<?php include '../common/header.php';
?>
<!-- / Navbar -->

<div class = 'container'>
<div class = 'card my-4'>
<h5 class = 'card-header'>EDIT MEMBERS</h5>
<div class = 'card-body'>
<div class = 'container mt-3'>

<!-- FORM START -->
<form method = 'post' action = '' enctype = 'multipart/form-data'>
<div class = 'row'>

<!-- Title -->
<div class = 'col-lg-6'>
<div class = 'form-floating mb-3 mt-3'>
<input
type = 'text'

class = 'form-control'
id = 'title'
name = 'title'
value = "<?php echo htmlspecialchars($row['title']); ?>"
required
/>
<label for = 'title'>Title</label>
</div>
</div>

<!-- Image Upload -->
<div class = 'col-lg-6'>
<div class = 'mb-3'>
<input class = 'form-control p-3 mt-3' type = 'file' id = 'formFile' name = 'img'>
<?php if ( !empty( $row[ 'img' ] ) ) {
    ?>
    <p class = 'mt-2'>
    <img src = "../assets/img/home/members/<?php echo htmlspecialchars($row['img']); ?>" width = '100' height = '100' style = 'object-fit:cover;' alt = 'member image'>
    </p>
    <?php }
    ?>
    </div>
    </div>

    <!-- Designation -->
    <div class = 'col-lg-12 py-4'>
    <div class = 'form-floating'>
    <textarea class = 'form-control' id = 'designation' name = 'designation' style = 'height: 100px' required><?php echo htmlspecialchars( $row[ 'designation' ] );
    ?></textarea>
    <label for = 'designation'>Designation</label>
    </div>
    </div>

    <!-- Buttons -->
    <div class = 'col-lg-12 text-center'>
    <button type = 'submit' name = 'submit' class = 'btn btn-primary'>Update</button>
    <a href = 'members.php' class = 'btn btn-secondary'>Back</a>
    </div>
    </div>
    </form>
    <!-- FORM END -->

    </div>
    </div>
    </div>

    <hr class = 'my-5' />

    <!-- Footer -->
    <?php include '../common/footer.php';
    ?>
    <!-- / Footer -->

    <div class = 'content-backdrop fade'></div>
    </div>
    </div>
    </div>

    <div class = 'layout-overlay layout-menu-toggle'></div>
    </div>

    <?php include '../common/footer-link.php';
    ?>
    </body>
    </html>
