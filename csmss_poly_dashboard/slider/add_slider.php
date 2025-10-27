<?php include '../common/auth.php'; ?>

<?php
// Include common header & database connection
include '../common/header_link.php';
include '../common/dbcon.php'; // ✅ Ensure this file exists and has $conn

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Image upload handling
    $imageName = '';
    if (!empty($_FILES['image']['name'])) {
        $imageName = time() . "_" . basename($_FILES['image']['name']);
        $targetDir = "../assets/img/home/slider/";
        $targetFile = $targetDir . $imageName;

        // Create uploads folder if it doesn't exist
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            echo "<p style='color:red;'>Image upload failed!</p>";
            $imageName = '';
        }
    }

    // Insert into database if image uploaded
    if ($imageName != '') {
        $sql = "INSERT INTO slider ( image) 
                VALUES ( '$imageName')";
        if (mysqli_query($conn, $sql)) {
            header("Location: slider.php?msg=Slider added successfully");
            exit;
        } else {
            echo "<p style='color:red;'>Database error: " . mysqli_error($conn) . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" 
      data-theme="theme-default" data-assets-path="../assets/" 
      data-template="vertical-menu-template-free">

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include '../common/sidebar.php'; ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php include '../common/header.php'; ?>
                <!-- / Navbar -->

                <div class="container">
                    <div class="card my-4">
                        <h5 class="card-header">ADD SLIDER</h5>
                        <div class="card-body">
                            <div class="container mt-3">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="row">


                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <input class="form-control p-3 mt-3" 
                                                       type="file" id="formFile" 
                                                       name="image" accept="image/*" required>
                                            </div>
                                        </div>

                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-primary">Add Slider</button>
                                            <a href="slider.php" class="btn btn-secondary text-white">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <hr class="my-5" />

                    <!-- Footer -->
                    <?php include '../common/footer.php'; ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <?php include '../common/footer-link.php'; ?>
</body>
</html>
