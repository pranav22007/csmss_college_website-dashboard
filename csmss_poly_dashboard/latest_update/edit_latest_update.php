<?php
// include db connection
include __DIR__ . '/../common/dbcon.php';

// Get record ID from URL
if ( isset( $_GET[ 'latest_update_id' ] ) ) {
    $id = intval( $_GET[ 'latest_update_id' ] );
    $sql = "SELECT * FROM latest_update WHERE latest_update_id = $id";
    $result = $conn->query( $sql );

    if ( $result->num_rows > 0 ) {
        $row = $result->fetch_assoc();
    } else {
        die( 'Record not found.' );
    }
} else {
    die( 'ID not provided.' );
}

// Handle update form submit
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    if ( isset( $_FILES[ 'image' ] ) && $_FILES[ 'image' ][ 'error' ] == 0 ) {
        $file_name = time() . '_' . basename( $_FILES[ 'image' ][ 'name' ] );
        $target_dir = __DIR__ . '/../assets/img/home/latest_update/';
        $target_file = $target_dir . $file_name;

        // create folder if not exists
        if ( !is_dir( $target_dir ) ) {
            mkdir( $target_dir, 0777, true );
        }

        if ( move_uploaded_file( $_FILES[ 'image' ][ 'tmp_name' ], $target_file ) ) {
            // update DB
            $sql = "UPDATE latest_update SET image='$file_name' WHERE latest_update_id=$id";
            if ( $conn->query( $sql ) === TRUE ) {
                $success = 'Image updated successfully!';
                $row[ 'image' ] = $file_name;
                // update preview
            } else {
                $error = 'DB Error: ' . $conn->error;
            }
        } else {
            $error = 'Failed to upload new image.';
        }
    } else {
        $error = 'Please select an image.';
    }
}
?>
<!DOCTYPE html>
<html lang = 'en' class = 'light-style layout-menu-fixed' dir = 'ltr' data-theme = 'theme-default'
data-assets-path = '../assets/' data-template = 'vertical-menu-template-free'>

<?php include '../common/header_link.php';
?>

<body>
<div class = 'layout-wrapper layout-content-navbar'>
<div class = 'layout-container'>
<!-- Sidebar -->
<?php include '../common/sidebar.php';
?>

<div class = 'layout-page'>
<!-- Navbar -->
<?php include '../common/header.php';
?>

<div class = 'container'>
<div class = 'card my-4'>
<h5 class = 'card-header'>EDIT LATEST UPDATE</h5>
<div class = 'card-body'>
<div class = 'container mt-3'>

<!-- show alerts -->
<?php if ( !empty( $success ) ): ?>
<div class = 'alert alert-success'>< ?= $success;
?></div>
<?php endif;
?>
<?php if ( !empty( $error ) ): ?>
<div class = 'alert alert-danger'>< ?= $error;
?></div>
<?php endif;
?>

<form action = '' method = 'POST' enctype = 'multipart/form-data'>
<div class = 'row'>
<div class = 'col-lg-6'>
<div class = 'mb-3'>
<label class = 'form-label'>Upload New Image</label>
<input class = 'form-control p-3' type = 'file' name = 'image' required>
</div>
</div>
<div class = 'col-lg-6'>
<?php if ( !empty( $row[ 'image' ] ) ): ?>
<label class = 'form-label'>Current Image</label><br>
<img src = "../assets/img/home/latest_update/<?= htmlspecialchars($row['image']); ?>" width = '150' height = '100'>
<?php endif;
?>
</div>
</div>

<div class = 'col-lg-12 text-center mt-3'>
<button type = 'submit' class = 'btn btn-primary'>Update</button>
<a href = 'latest_update.php' class = 'btn btn-secondary'>Back</a>
</div>
</form>

</div>
</div>
</div>

<hr class = 'my-5' />

<!-- Footer -->
<?php include '../common/footer.php';
?>
</div>
</div>
</div>
<div class = 'layout-overlay layout-menu-toggle'></div>
</div>
<?php include '../common/footer-link.php';
?>
</body>
</html>
