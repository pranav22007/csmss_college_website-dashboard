<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php'; // ✅ Ensure this file exists and has $conn
include '../common/header_link.php';

if (!isset($_GET['slider_id'])) {
  die("Slider ID not provided.");
}

$id = (int) $_GET['slider_id'];

// Fetch slider details
$result = mysqli_query($conn, "SELECT * FROM slider WHERE slider_id = $id");
$slider = mysqli_fetch_assoc($result);

if (!$slider) {
  die("Slider not found.");
}

// Handle form submit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {

  $imageName = $slider['image']; // keep old image by default

  if (!empty($_FILES['image']['name'])) {
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageName = time() . "_" . basename($_FILES['image']['name']);
    $targetPath = "../assets/img/home/slider/" . $imageName;

    if (!is_dir("../assets/img/home/slider/")) {
      mkdir("../assets/img/home/slider/", 0777, true);
    }

    if (move_uploaded_file($imageTmpName, $targetPath)) {
      // Delete old image
      if (!empty($slider['image']) && file_exists("../assets/img/home/slider/" . $slider['image'])) {
        unlink("../assets/img/home/slider/" . $slider['image']);
      }
    } else {
      die("Image upload failed.");
    }
  }

  // Update record
  $query = "UPDATE slider SET image='$imageName' WHERE slider_id=$id";
  if (mysqli_query($conn, $query)) {
    header("Location: slider.php");
    exit;
  } else {
    die("Error updating record: " . mysqli_error($conn));
  }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT SLIDER</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">


                    <div class="col-lg-12">
                      <div class="mb-3">
                        <input class="form-control p-3 mt-3" type="file" id="formFile" name="image">
                        <?php if (!empty($slider['image'])): ?>
                          <div class="mt-2">
                            <img src="../assets/img/home/slider/<?= htmlspecialchars($slider['image']); ?>" width="100" style="border:1px solid #ddd;">
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>


                  </div>

                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <button type="submit" name="update" class="btn btn-primary">Update</button>
                      <a href="slider.php" class="btn btn-secondary">Back</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <hr class="my-5" />
          <?php include '../common/footer.php'; ?>
          <div class="content-backdrop fade"></div>
        </div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <?php include '../common/footer-link.php'; ?>
</body>

</html>