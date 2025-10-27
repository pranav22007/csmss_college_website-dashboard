<?php include '../common/auth.php'; ?>
<?php
include('../common/dbcon.php');

if (isset($_POST['add_btn'])) {
  $subject_code = $_POST['subject_code'];
  $pdf_name = $_FILES['pdf']['name'];
  $pdf_tmp = $_FILES['pdf']['tmp_name'];
  $upload_dir = '../assets/pdf/civil_engineering/';
  if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
  }

  $pdf_path = $upload_dir . time() . "_" . basename($pdf_name);
  if (move_uploaded_file($pdf_tmp, $pdf_path)) {
    $query = "INSERT INTO civil_engineering (subject_code, pdf) VALUES ('$subject_code', '$pdf_path')";
    if (mysqli_query($conn, $query)) {
      header('Location: civil_engineering.php');
      exit();
    } else {
      echo "Database error!";
    }
  } else {
    echo "File upload failed!";
  }
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default">
<?php include '../common/header_link.php'; ?>
<body>
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <?php include '../common/sidebar.php'; ?>
    <div class="layout-page">
      <?php include '../common/header.php'; ?>
      <div class="container">
        <div class="card my-4">
          <h5 class="card-header">ADD CIVIL ENGINEERING</h5>
          <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" name="subject_code" required>
                    <label>Subject Code</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <input class="form-control p-3 mt-3" type="file" name="pdf" required>
                  </div>
                </div>
              </div>
              <div class="row text-center">
                <div class="col-lg-12 mt-3">
                  <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                  <a href="civil_engineering.php" class="btn btn-secondary">Back</a>
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
  