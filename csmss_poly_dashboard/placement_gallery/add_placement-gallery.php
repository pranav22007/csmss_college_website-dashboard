<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    
    $imgName = $_FILES['image']['name'];
    $imgTmp  = $_FILES['image']['tmp_name'];
    $uploadDir = "../assets/img/placement_gallery/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $newFileName = time() . "_" . basename($imgName);
    $targetFile = $uploadDir . $newFileName;

    if (move_uploaded_file($imgTmp, $targetFile)) {
        $sql = "INSERT INTO placement_gallery (year, img) VALUES ('$year', '$newFileName')";
        if (mysqli_query($conn, $sql)) {
            header("Location: placement-gallery.php?success=1");
            exit();
        } else {
            echo "❌ Database Error: " . mysqli_error($conn);
        }
    } else {
        echo "❌ Failed to upload image.";
    }
}
?>

<!-- HTML form same as your current code -->

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr">
<head>
  <?php include '../common/header_link.php'; ?>
</head>
<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>

      <div class="layout-page">
        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">Add Placement Gallery</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data" novalidate>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="year" name="year" placeholder="Enter Year" required>
                      <label for="year">Year</label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <input class="form-control p-3 mt-3" type="file" id="formFile" name="image" required>
                    </div>
                  </div>

                  <div class="col-lg-12 text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Add Placement Gallery</button>
                    <a href="placement-gallery.php" class="btn btn-secondary">Back</a>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <?php include '../common/footer.php'; ?>
        </div>
      </div>
    </div>
  </div>

  <?php include '../common/footer-link.php'; ?>
</body>
</html>
