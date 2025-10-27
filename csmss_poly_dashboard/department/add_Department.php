<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php include '../common/auth.php'; ?>
<?php
include '../common/header_link.php';
include '../common/dbcon.php'; // DB connection

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $deptName = $_POST['Name'];

    // Upload Image
    $imgName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $uploadPath = "../assets/img/department/" . basename($imgName);

    if (move_uploaded_file($tmpName, $uploadPath)) {
        // Prepared statement
        $sql = "INSERT INTO department (department, image) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("ss", $deptName, $imgName); // store only filename in DB

        if ($stmt->execute()) {
            echo "<script>alert('Department added successfully');window.location='show_Department.php';</script>";
        } else {
            echo "<script>alert('Database error: could not add department');</script>";
        }
    } else {
        echo "<script>alert('Image upload failed');</script>";
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
            <h5 class="card-header">ADD Department</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-floating mb-3 mt-3">
                        <input
                          type="file"
                          class="form-control p-3 mt-3"
                          id="formFile"
                          name="image"
                          required />
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-floating mb-3 mt-3">
                        <input
                          type="text"
                          class="form-control"
                          id="Text"
                          placeholder="Department"
                          name="Name"
                          required />
                        <label for="Name">Department</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 mt-3 text-center">
                      <button type="submit" class="btn btn-primary">ADD</button>
                      <a href="show_Department.php" class="btn btn-secondary text-white">Back</a>
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

  <?php include '../common/footer-link.php'; ?>
</body>
</html>
