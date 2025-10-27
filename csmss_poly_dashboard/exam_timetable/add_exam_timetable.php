<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

if (isset($_POST['add_btn'])) {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);

  $uploadDir = __DIR__ . '/../../csmss_poly_dashboard/assets/pdf/exam_timetable/';
  $fileNameSaved = '';

  if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
    $fileTmp = $_FILES['pdf']['tmp_name'];
    $fileName = basename($_FILES['pdf']['name']);

    // create safe name (timestamp + original)
    $fileNameSaved = time() . '_' . preg_replace('/[^a-zA-Z0-9_\-\.]/', '_', $fileName);

    if (!is_dir($uploadDir))
      mkdir($uploadDir, 0777, true);
    move_uploaded_file($fileTmp, $uploadDir . $fileNameSaved);
  }

  $query = "INSERT INTO exam_timetable (title, description, pdf) VALUES ('$title', '$description', '$fileNameSaved')";
  if (mysqli_query($conn, $query)) {
    header("Location: exam_timetable.php");
    exit();
  } else {
    echo "<script>alert('Insert failed.');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed">
<?php include('../common/header_link.php'); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>
      <div class="layout-page">
        <?php include('../common/header.php'); ?>
        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">ADD EXAM TIMETABLE</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" name="title" class="form-control" placeholder="Title" required>
                      <label>Title</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" name="description" class="form-control" placeholder="Description" required>
                      <label>Description</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="mb-3">
                      <input type="file" name="pdf" class="form-control p-3 mt-3">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 mt-3 text-center">
                    <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                    <a href="exam_timetable.php" class="btn btn-secondary">Back</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php include('../common/footer.php'); ?>
      </div>
    </div>
    <?php include('../common/footer-link.php'); ?>
  </div>
</body>

</html>