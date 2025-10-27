<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
  data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<?php
include('../common/header_link.php');
include('../common/dbcon.php'); // DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $fileName = "";

    // Handle PDF upload
    if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0) {
        $targetDir = "../assets/pdf/placement/placement_data/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $fileName = time() . "_" . basename($_FILES['pdf']['name']);
        $targetFilePath = $targetDir . $fileName;

        if (!move_uploaded_file($_FILES['pdf']['tmp_name'], $targetFilePath)) {
            echo "<script>alert('File upload failed');</script>";
            $fileName = "";
        }
    }

    if (!empty($title) && !empty($fileName)) {
        $sql = "INSERT INTO placement_data (title, pdf) VALUES ('$title', '$fileName')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Placement added successfully!'); window.location='placement.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Please enter title and upload a PDF');</script>";
    }
}
?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Sidebar -->
      <?php include('../common/sidebar.php'); ?>
      <!-- / Sidebar -->

      <div class="layout-page">
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#"><small class="text-muted text-center">Admin</small></a></li>
                  <li><div class="dropdown-divider"></div></li>
                  <li>
                    <a class="dropdown-item" href="auth-login-basic.html">
                      <i class="bx bx-power-off me-2"></i> <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">ADD PLACEMENT</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                      <label for="title">Title</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Upload PDF</label>
                      <input class="form-control" type="file" name="pdf" accept="application/pdf" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="placement.php" class="btn btn-secondary">Back</a>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <!-- Footer -->
          <?php include('../common/footer.php'); ?>
        </div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <?php include('../common/footer-link.php'); ?>
</body>
</html>
