<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';
?>

<!DOCTYPE html>
<html
lang = 'en'

class = 'light-style layout-menu-fixed'
dir = 'ltr'
data-theme = 'theme-default'
data-assets-path = '../assets/'
data-template = 'vertical-menu-template-free'>

<?php include('../common/header_link.php' );
?>

<body>
<!-- Layout wrapper -->
<div class = 'layout-wrapper layout-content-navbar'>
<div class = 'layout-container'>

<!-- Sidebar -->
<?php include( '../common/sidebar.php' );
?>
<!-- / Sidebar -->

<!-- Layout container -->
<div class = 'layout-page'>

<!-- Navbar -->
<?php include '../common/header.php';
?>
<!-- / Navbar -->

<!-- Content wrapper -->
<div class = 'content-wrapper'>

<div class = 'container-xxl flex-grow-1 container-p-y'>
<h4 class = 'text-muted fw-bold py-3 mb-4'>OUR MEMBERS</h4>

<!-- Members Table -->
<div class = 'card'>
<div class = 'row'>
<div class = 'col-lg-6'>
<div class = 'h5 card-header'>MEMBERS</div>
</div>

<div class = 'col-lg-6 d-flex justify-content-end'>
<a href = '../members/add_members.php'>
<button type = 'button' class = 'btn btn-primary m-4'>ADD+</button>
</a>
</div>
</div>

<div class = 'table-responsive text-nowrap'>
<table class = 'table table-hover'>
<thead>
<tr>
<th>SR</th>
<th>Title</th>
<th>Designation</th>
<th>Image</th>
<th>Actions</th>
</tr>
</thead>
<tbody class = 'table-border-bottom-0'>
<?php
$sql = 'SELECT * FROM members ORDER BY members_id DESC';
$result = mysqli_query( $conn, $sql );

if ( mysqli_num_rows( $result ) > 0 ) {
    $sr = 1;
    while( $row = mysqli_fetch_assoc( $result ) ) {
        ?>
        <tr>
        <td><?php echo $sr++;
        ?></td>
        <td><?php echo htmlspecialchars( $row[ 'title' ] );
        ?></td>

        <!-- designation/description column -->
        <td>
        <?php
        // some DBs use `description`, some `designation`
        echo isset( $row[ 'designation' ] ) ?
        htmlspecialchars( $row[ 'designation' ] ) :
        htmlspecialchars( $row[ 'description' ] );
        ?>
        </td>

        <!-- image -->
        <td>
        <?php if ( !empty( $row[ 'img' ] ) ) {
            ?>
            <img src = "../assets/img/home/members/<?php echo htmlspecialchars($row['img']); ?>"
            alt = 'member image' width = '80' height = '80' style = 'object-fit:cover;'>
            <?php } else {
                ?>
                <span class = 'text-muted'>No Image</span>
                <?php }
                ?>
                </td>

                <!-- actions -->
                <td>
                <a href = "edit_members.php?members_id=<?php echo $row['members_id']; ?>" class = 'btn btn-md btn-primary'>Edit</a>
                <a href = "delete_members.php?members_id=<?php echo $row['members_id']; ?>"
                onclick = "return confirm('Are you sure you want to delete this member?');" class = 'btn btn-md btn-danger'>
                Delete
                </a>
                </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='5' class='text-center text-muted'>No Members Found</td></tr>";
        }
        ?>
        </tbody>
        </table>
        </div>
        </div>
        <!-- /Members Table -->

        <hr class = 'my-5' />

        <!-- Footer -->
        <?php include( '../common/footer.php' );
        ?>
        <!-- / Footer -->

        <div class = 'content-backdrop fade'></div>
        </div>
        <!-- Content wrapper -->

        </div>
        <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class = 'layout-overlay layout-menu-toggle'></div>
        </div>
        </div>

        <?php include( '../common/footer-link.php' );



        ?>
        </body>
        </html>
