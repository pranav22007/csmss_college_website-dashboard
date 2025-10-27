<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default">
<?php include('../common/header_link.php'); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Sidebar -->
      <?php include('../common/sidebar.php'); ?>
      <!-- /Sidebar -->

      <div class="layout-page">
        <!-- Navbar -->
        <?php include('../common/header.php'); ?>
        <!-- /Navbar -->

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">ADD HOME MARQUE</h4>

            <div class="card mb-4">
              <div class="card-body">
                <?php
                include '../common/dbcon.php';

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $title = $conn->real_escape_string($_POST['title']);
                    $pdfName = '';

                    if (!empty($_FILES['pdf']['name'])) {
    $pdfName = time() . "_" . basename($_FILES['pdf']['name']);
    $uploadDir = "../assets/pdf/marquee-home/marquee/";

    // Create folder if it doesn't exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // recursive = true
    }

    $targetPath = $uploadDir . $pdfName;

    if (!move_uploaded_file($_FILES['pdf']['tmp_name'], $targetPath)) {
        echo "<div class='alert alert-danger'>Error uploading file.</div>";
        $pdfName = '';
    }
}


                    $sql = "INSERT INTO marquee (title, pdf) VALUES ('$title', '$pdfName')";
                    if ($conn->query($sql)) {
                        echo "<script>alert('✅ Record added successfully'); window.location='home_marque.php';</script>";
                    } else {
                        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
                    }
                }
                ?>
     

                <form method="POST" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">Title</label>
                      <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Choose File</label>
                      <input type="file" name="pdf" class="form-control" accept="application/pdf">
                    </div>
                  </div>
                  <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="home_marque.php" class="btn btn-secondary">Cancel</a>
              </div>
                </form>
              </div>
            </div>
          </div>

          <?php include('../common/footer.php'); ?>
        </div>
      </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include('../common/footer-link.php'); ?>
</body>
</html>
