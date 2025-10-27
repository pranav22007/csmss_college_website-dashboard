<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
  data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>
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
            <h5 class="card-header">ADD LATEST NEWS</h5>
            <div class="card-body">
              <div class="container mt-3">

              <!-- ✅ Backend PHP -->
              <?php
              include '../common/dbcon.php';
              if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                  $date  = $_POST['date'];
                  $title = mysqli_real_escape_string($conn, $_POST['title']);

                  // Handle image upload
                  $image = "";
                  $targetDir = __DIR__ . "/../assets/img/home/latest_news/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true); // auto create folder if missing
}

$image = time() . "_" . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $image);


                  $sql = "INSERT INTO news (date, title, image) VALUES ('$date', '$title', '$image')";
                  if (mysqli_query($conn, $sql)) {
                      echo "<div class='alert alert-success'>News Added Successfully</div>";
                  } else {
                      echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
                  }
              }
              ?>

              <!-- ✅ Form -->
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="date" class="form-control" name="date" required />
                      <label>Date</label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <input class="form-control p-3 mt-3" type="file" name="image" accept="image/*">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="title" placeholder="Title" required />
                      <label>Title</label>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 text-center">
                  <button type="submit" class="btn btn-primary">Add Latest News</button>
                  <a href="./latest_news_home.php" class="btn btn-secondary">Back</a>
                  
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
  <?php include '../common/footer-link.php'; ?>
</body>
</html>
