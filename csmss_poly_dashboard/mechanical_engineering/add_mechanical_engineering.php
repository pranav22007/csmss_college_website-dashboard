<?php include '../common/auth.php'; ?>
<?php
include('../common/dbcon.php');

if (isset($_POST['me_btn'])) {
  $subject_code = mysqli_real_escape_string($conn, $_POST['subject_code']);
  $pdf_file = $_FILES['choose_file'];

  $uploadDir = __DIR__ . "/../assets/pdf/mechanical_engineering/";
  if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

  if (!empty($subject_code) && $pdf_file['error'] === 0) {
    $originalFileName = pathinfo($pdf_file['name'], PATHINFO_FILENAME);
    $fileExtension = pathinfo($pdf_file['name'], PATHINFO_EXTENSION);
    $cleanName = preg_replace("/[^a-zA-Z0-9_-]/", "_", $originalFileName);
    $newFileName = $cleanName . '_' . time() . '.' . $fileExtension;
    $uploadPath = $uploadDir . $newFileName;

    if (move_uploaded_file($pdf_file['tmp_name'], $uploadPath)) {
      $sql = "INSERT INTO mechanical_engineering (subject_code, pdf) VALUES ('$subject_code', '$newFileName')";
      if (mysqli_query($conn, $sql)) {
        echo "<script>alert('File uploaded successfully!'); window.location.href='mechanical_engineering.php';</script>";
      } else {
        echo "<script>alert('Database insertion failed!');</script>";
      }
    } else {
      echo "<script>alert('File move failed!');</script>";
    }
  } else {
    echo "<script>alert('Please fill all fields and upload a valid file.');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php include('../common/header_link.php'); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>

      <div class="layout-page">
        <?php include('../common/header.php'); ?>

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="container">
              <div class="card my-4">
                <h5 class="card-header">ADD MECHANICAL Engineering</h5>
                <div class="card-body">
                  <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input type="text" class="form-control" placeholder="Add Subject Code" name="subject_code" required />
                          <label>Subject Code</label>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="mb-3">
                          <input class="form-control p-3 mt-3" type="file" name="choose_file" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12 mt-3 text-center">
                        <button type="submit" name="me_btn" class="btn btn-primary">Add</button>
                        <a href="mechanical_engineering.php" class="btn btn-secondary">Back</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <hr class="my-5" />
            <?php include('../common/footer.php'); ?>
            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>

      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <?php include('../common/footer-link.php'); ?>
</body>
</html>
