<?php include '../common/auth.php'; ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('../common/dbcon.php');

if (isset($_POST['add_btn'])) {
    $subject_code = mysqli_real_escape_string($conn, $_POST['subject_code']);


    $file_name = $_FILES['pdf']['name'];
    $file_tmp = $_FILES['pdf']['tmp_name'];

  
    $upload_dir = __DIR__ . "/../assets/pdf/computer_engineering/";

    // Create folder if not exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Full path where file will be stored
    $file_path = $upload_dir . basename($file_name);

    // Move uploaded file
    if (move_uploaded_file($file_tmp, $file_path)) {
        // Insert only filename into DB
        $query = "INSERT INTO computer_engineering (subject_code, pdf) 
              VALUES ('$subject_code', '$file_name')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            header("Location: computer_engineering.php");
            exit();
        } else {
            echo "❌ Database insert failed: " . mysqli_error($conn);
        }
    } else {
        echo "❌ File upload failed!";
    }

}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<?php include('../common/header_link.php'); ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <?php include('../common/sidebar.php'); ?>

            <div class="layout-page">

                <?php include('../common/header.php'); ?>

                <div class="container">
                    <div class="card my-4">
                        <h5 class="card-header">ADD COMPUTER ENGINEERING</h5>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Subject Code"
                                                name="subject_code" required />
                                            <label>Subject Code</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="file" class="form-control p-3 mt-3" name="pdf" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mt-3 text-center">
                                        <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                                        <a href="computer_engineering.php" class="btn btn-secondary">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php include('../common/footer.php'); ?>
            </div>
        </div>
    </div>

    <?php include('../common/footer-link.php'); ?>
</body>

</html>