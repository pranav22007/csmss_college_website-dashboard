<?php include '../common/auth.php'; ?>

<?php
include __DIR__ . '/../common/dbcon.php';

// ✅ Handle delete request before any HTML is sent
if ( isset( $_GET[ 'delete' ] ) ) {
    $delete_id = intval( $_GET[ 'delete' ] );

    // Delete image file
    $imgRes = $conn->query( "SELECT image FROM latest_update WHERE latest_update_id=$delete_id" );
    if ( $imgRes && $imgRes->num_rows > 0 ) {
        $imgRow = $imgRes->fetch_assoc();
        if ( !empty( $imgRow[ 'image' ] ) && file_exists( __DIR__ . '../assets/img/home/latest_update/' . $imgRow[ 'image' ] ) ) {
            unlink( __DIR__ . '../assets/img/home/latest_update/' . $imgRow[ 'image' ] );
        }
    }
    // Delete from database
    $conn->query( "DELETE FROM latest_update WHERE latest_update_id=$delete_id" );

    // Redirect safely
    header( 'Location: latest_update.php?msg=deleted' );
    exit;
}
?>

<!DOCTYPE html>
<html lang = 'en' class = 'light-style layout-menu-fixed' dir = 'ltr' data-theme = 'theme-default' data-assets-path = '../assets/' data-template = 'vertical-menu-template-free'>
<?php include( '../common/header_link.php' );
?>

<body>
<!-- Layout wrapper -->
<div class = 'layout-wrapper layout-content-navbar'>
<div class = 'layout-container'>

<!-- Sidebar -->
<?php include( '../common/sidebar.php' );
?>
<!-- /Sidebar -->

<!-- Layout container -->
<div class = 'layout-page'>

<!-- Navbar -->
<?php include( '../common/header.php' );
?>
<!-- /Navbar -->

<!-- Content wrapper -->
<div class = 'content-wrapper'>
<!-- Content -->
<div class = 'container-xxl flex-grow-1 container-p-y'>

<h4 class = 'text-muted fw-bold py-3 mb-4'>LATEST UPDATE</h4>

<!-- Card -->
<div class = 'card'>
<div class = 'row'>
<div class = 'col-lg-6'>
<div class = 'h5 card-header'>LATEST UPDATE</div>
</div>
<div class = 'col-lg-6 d-flex justify-content-end'>
<a href = 'add_latest_update.php'>
<button type = 'button' class = 'btn btn-primary m-4'>ADD+</button>
</a>
</div>
</div>

<div class = 'table-responsive text-nowrap'>
<table class = 'table table-hover'>
<thead>
<tr>
<th>SR</th>
<th>Image</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php
include __DIR__ . '/../common/dbcon.php';

$result = $conn->query('SELECT * FROM latest_update ORDER BY latest_update_id DESC');

if ($result && $result->num_rows > 0) {
    $sr = 1;
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $sr++ . '</td>';

        // ✅ Image column
        echo '<td>';
        if (!empty($row['image']) && $row['image'] != "0") {
            echo '<img src="../assets/img/home/latest_update/' . htmlspecialchars($row['image']) . '" alt="Image" width="50">';
        } else {
            echo '<span style="color:red;">No image uploaded</span>';
        }
        echo '</td>';

        // ✅ Actions column
        echo "<td>
                <a href='edit_latest_update.php?latest_update_id=" . $row['latest_update_id'] . "'>
                    <button type='button' class='btn rounded-pill btn-primary me-2'>
                        <i class='bx bx-edit-alt'></i> Edit
                    </button>  
                </a>
                <a href='latest_update.php?delete=" . $row['latest_update_id'] . "'>
                    <button type='button' class='btn rounded-pill btn-danger me-2'>
                        <i class='bx bx-trash'></i> Delete
                    </button>
                </a>";

        // ✅ Enable/Disable button
        if ($row['status'] == 1) {
            echo "<a href='toggle_latest_update.php?latest_update_id=" . $row['latest_update_id'] . "&status=0'>
                    <button type='button' class='btn rounded-pill btn-warning'>Disable</button>
                  </a>";
        } else {
            echo "<a href='toggle_latest_update.php?latest_update_id=" . $row['latest_update_id'] . "&status=1'>
                    <button type='button' class='btn rounded-pill btn-success'>Enable</button>
                  </a>";
        }

        echo '</td>';
        echo '</tr>';
    }
} else {
    echo "<tr><td colspan='4'>No records found</td></tr>";
}

$conn->close();
?>

</tbody>
</table>
</div>
</div>
<!--/ Card -->

<hr class = 'my-5' />

<!-- Footer -->
<?php include( '../common/footer.php' );
?>
<!-- /Footer -->

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
