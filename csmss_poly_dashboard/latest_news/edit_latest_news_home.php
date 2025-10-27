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
            <h5 class="card-header">EDIT LATEST NEWS</h5>
            <div class="card-body">
              <div class="container mt-3">

              <?php
              include '../common/dbcon.php';

              // ✅ Get ID from URL
              if (!isset($_GET['home_news_id'])) {
                  die("<div class='alert alert-danger'>No news ID provided.</div>");
              }
              $id = intval($_GET['home_news_id']);

              // ✅ Fetch record
              $result = mysqli_query($conn, "SELECT * FROM news WHERE home_news_id=$id");
              $row = mysqli_fetch_assoc($result);
              if (!$row) {
                  die("<div class='alert alert-danger'>News not found.</div>");
              }

              // ✅ Handle update
              if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                  $date  = $_POST['date'];
                  $title = mysqli_real_escape_string($conn, $_POST['title']);
                  $image = $row['image']; // keep old image if no new upload

                  // Handle new image
                  if (!empty($_FILES['image']['name'])) {
                      $targetDir = __DIR__ . "/../assets/img/home/latest_news/";
                      if (!is_dir($targetDir)) {
                          mkdir($targetDir, 0777, true);
                      }

                      $image = time() . "_" . basename($_FILES['image']['name']);
                      move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $image);

                      // Delete old image if exists
                      if (!empty($row['image']) && file_exists($targetDir . $row['image'])) {
                          unlink($targetDir . $row['image']);
                      }
                  }

                  $sql = "UPDATE news SET date='$date', title='$title', image='$image' WHERE home_news_id=$id";
                  if (mysqli_query($conn, $sql)) {
                      echo "<div class='alert alert-success'>News updated successfully.</div>";
                      // Refresh data
                      $result = mysqli_query($conn, "SELECT * FROM news WHERE home_news_id=$id");
                      $row = mysqli_fetch_assoc($result);
                  } else {
                      echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
                  }
              }
              ?>

              <!-- ✅ Edit Form -->
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="date" class="form-control" name="date"
                             value="<?= htmlspecialchars($row['date']); ?>" required />
                      <label>Date</label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label>Current Image:</label><br>
                      <?php if ($row['image']) { ?>
                        <img src="../assets/img/home/latest_news//<?= $row['image']; ?>" width="100" class="mb-2">
                      <?php } else { ?>
                        <span>No image uploaded</span>
                      <?php } ?>
                      <input class="form-control p-3 mt-3" type="file" name="image" accept="image/*">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="title"
                             value="<?= htmlspecialchars($row['title']); ?>" required />
                      <label>Title</label>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
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
