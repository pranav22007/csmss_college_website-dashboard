<?php include '../common/auth.php'; ?>
<?php
include "../common/dbcon.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $select_query = "SELECT * FROM disclosure WHERE d_id = '$id'";
  $result = mysqli_query($conn, $select_query);
  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $title = $_POST['title'];
      $pdfName = $row['pdf'];
      $uploadDir = "../assets/pdf/disclosure/";

      if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
        if (!is_dir($uploadDir)) {
          mkdir($uploadDir, 0777, true);
        }
        $oldPdfPath = $uploadDir . $row['pdf'];
        if (!empty($row['pdf']) && file_exists($oldPdfPath)) {
          unlink($oldPdfPath);
        }
        $pdfName = time() . "_" . basename($_FILES['pdf']['name']);
        $uploadPath = $uploadDir . $pdfName;
        if (!move_uploaded_file($_FILES['pdf']['tmp_name'], $uploadPath)) {
          echo "<script>alert('File upload failed');</script>";
        }
      }

      $update_query = "UPDATE disclosure SET title='$title', pdf='$pdfName' WHERE d_id='$id'";
      $update_run = mysqli_query($conn, $update_query);
      if ($update_run) {
        echo "<script>alert('Updated successfully'); window.location.href='disclosure.php';</script>";
        exit();
      } else {
        echo "<script>alert('Update failed');</script>";
      }
    }
  } else {
    echo "<div class='container mt-5'><div class='alert alert-warning'>No Data Found for this ID.</div></div>";
    exit;
  }
} else {
  echo "<div class='container mt-5'><div class='alert alert-warning'>Invalid request. No ID provided.</div></div>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>
        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT DISCLOSURE</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <!-- Title Field -->
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="Text" value="<?php echo $row['title']; ?>" name="title" required />
                        <label for="Text">Title</label>
                      </div>

                      <?php if (!empty($row['pdf'])): ?>
                        <div class="mt-2">
                          <strong>Previous PDF:</strong><br>

                          <!-- Clickable PDF Link (browser-accessible) -->
                          <a href="../../csmss_poly_dashboard/assets/pdf/disclosure/<?php echo $row['pdf']; ?>" target="_blank">
                            <?php echo $row['pdf']; ?>
                          </a><br>

                          <!-- Absolute file system path -->

                        </div>
                      <?php endif; ?>
                    </div>

                    <!-- PDF Upload Field -->
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input class="form-control p-3 mt-3" type="file" id="formFile" name="pdf">
                      </div>
                    </div>
                  </div>

                  <!-- Buttons -->
                  <div class="row">
                    <div class="col-lg-12 mt-3 text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Update</button>
                      <a href="disclosure.php" class="btn btn-secondary text-white">Back</a>
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