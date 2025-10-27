<?php include '../common/auth.php'; ?>
<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';

// Debugging enabled
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get gallery_id from URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
    die("❌ Invalid gathering ID.");
}

// Fetch existing record
$sql = "SELECT * FROM gathering WHERE gallery_id = $id LIMIT 1";
$result = mysqli_query($conn, $sql);
if (!$result || mysqli_num_rows($result) == 0) {
    die("❌ Record not found.");
}
$row = mysqli_fetch_assoc($result);

// Handle form submission
if (isset($_POST['submit'])) {
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $newFileName = $row['img']; // default to old image

    // If new image uploaded
    if (!empty($_FILES['image']['name'])) {
        $imgName = $_FILES['image']['name'];
        $imgTmp  = $_FILES['image']['tmp_name'];
        $uploadDir = "../assets/img/gathering/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $newFileName = time() . "_" . basename($imgName);
        $targetFile = $uploadDir . $newFileName;

        if (!move_uploaded_file($imgTmp, $targetFile)) {
            die("❌ Failed to upload image.");
        }

        // Delete old image if exists
        if (!empty($row['img']) && file_exists($uploadDir . $row['img'])) {
            unlink($uploadDir . $row['img']);
        }
    }

    // Update database
    $update = "UPDATE gathering SET year='$year', title='$title', img='$newFileName' WHERE gallery_id=$id";
    if (mysqli_query($conn, $update)) {
       header("Location: /csmss-polytechnic-website/csmss_poly_dashboard/gathering/gathering.php?updated=1");
exit();


    } else {
        echo "❌ Database Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
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
            <h5 class="card-header">Edit Gathering</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <!-- Year -->
                  <div class="col-lg-4">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="year" name="year" placeholder="Enter Year" value="<?php echo htmlspecialchars($row['year']); ?>" required>
                      <label for="year">Year</label>
                    </div>
                  </div>

                  <!-- Title -->
                  <div class="col-lg-4">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?php echo htmlspecialchars($row['title']); ?>" required>
                      <label for="title">Title</label>
                    </div>
                  </div>

                  <!-- Image Upload -->
                  <div class="col-lg-4">
                    <div class="mb-3 mt-3">
                      <input class="form-control p-3" type="file" id="formFile" name="image">
                      <small class="text-muted">Leave blank to keep old image.</small><br>
                      <?php if (!empty($row['img'])) { ?>
                        <img src="../assets/img/gathering/<?php echo htmlspecialchars($row['img']); ?>" alt="Current Image" class="img-thumbnail mt-2" width="120">
                      <?php } ?>
                    </div>
                  </div>
                </div>

                <!-- Buttons -->
                <div class="col-lg-12 text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Update Gathering</button>
                  <a href="gathering.php" class="btn btn-secondary">Back</a>
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
