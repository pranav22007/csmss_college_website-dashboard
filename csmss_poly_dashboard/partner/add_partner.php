<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<?php
include '../common/header_link.php';
include '../common/dbcon.php';

// Insert logic
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);

    // File Upload
    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $uploadDir = "../assets/img/home/partner/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Generate unique filename to avoid overwrite
    $uniqueName = time() . "_" . rand(1000, 9999) . "_" . basename($imageName);
    $imagePath = $uploadDir . $uniqueName;

   if (!empty($imageName) && move_uploaded_file($imageTmp, $imagePath)) {
    // Insert with image
    $sql = "INSERT INTO partner (title, link, image)
            VALUES ('$title', '$link', '$uniqueName')";
} else {
    // Insert without image
    $sql = "INSERT INTO partner (title, link, image)
            VALUES ('$title', '$link', '')";
}

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Partner Added Successfully'); window.location='partner.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
}
?>

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
            <h5 class="card-header">ADD PARTNER</h5>
            <div class="card-body">
              <div class="container mt-3">
                
                <!-- FORM START -->
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">

                    <!-- Title -->
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="title" placeholder="Title" required>
                        <label>Title</label>
                      </div>
                    </div>

                    <!-- Image -->
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input class="form-control p-3 mt-3" type="file" name="image" required>
                      </div>
                    </div>

                    <!-- Link -->
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="link" placeholder="Link" required>
                        <label>Link</label>
                      </div>
                    </div>

                  </div>

                  <!-- Buttons -->
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">Add Partner</button>
                    <a href="partner.php" class="btn btn-secondary">Back</a>
                  </div>
                </form>
                <!-- FORM END -->

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
