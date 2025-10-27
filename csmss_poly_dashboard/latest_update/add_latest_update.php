<?php
// include db connection
include __DIR__ . '/../common/dbcon.php';

// Handle form submission
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    if ( isset( $_FILES[ 'image' ] ) && $_FILES[ 'image' ][ 'error' ] == 0 ) {
        $file_name = time() . '_' . basename( $_FILES[ 'image' ][ 'name' ] );
        $target_dir = "../assets/img/home/latest_update/";
        // adjust if uploads folder is elsewhere
        $target_file = $target_dir . $file_name;

        // Create uploads folder if not exists
        if ( !is_dir( $target_dir ) ) {
            mkdir( $target_dir, 0777, true );
        }

        if ( move_uploaded_file( $_FILES[ 'image' ][ 'tmp_name' ], $target_file ) ) {
            // Insert into DB
            $sql = "INSERT INTO latest_update (image) VALUES ('$file_name')";
            if ( $conn->query( $sql ) === TRUE ) {
                $success = 'Image uploaded & saved successfully!';
            } else {
                $error = 'Database error: ' . $conn->error;
            }
        } else {
            $error = 'Failed to upload image.';
        }
    } else {
        $error = 'No image selected or upload error.';
    }
}
?>
<!DOCTYPE html>
<html
lang = 'en'

class = 'light-style layout-menu-fixed'
dir = 'ltr'
data-theme = 'theme-default'
data-assets-path = '../assets/'
data-template = 'vertical-menu-template-free'
>
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
<h5 class = 'card-header'>ADD LATEST UPDATE</h5>
<div class = 'card-body'>
<div class = 'container mt-3'>

<!-- Show success/error alerts -->


<form action = '' method = 'POST' enctype = 'multipart/form-data'>
<div class = 'row'>
<div class = 'col-lg-6'>
<div class = 'mb-3'>
<input class = 'form-control p-3 mt-3' type = 'file' id = 'formFile' name = 'image' required>
</div>
</div>
</div>

<div class = 'col-lg-12 text-center'>
<button type = 'submit' class = 'btn btn-primary'>Add</button>
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
