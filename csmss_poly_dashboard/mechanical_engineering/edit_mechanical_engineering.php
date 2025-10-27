<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

$id = intval($_GET['id']);
$result = mysqli_query($conn, "SELECT * FROM mechanical_engineering WHERE me_id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update_btn'])) {
  $subject_code = mysqli_real_escape_string($conn, $_POST['subject_code']);
  $uploadDir = __DIR__ . "../assets/pdf/mechanical_engineering/";
  if (!is_dir($uploadDir))
    mkdir($uploadDir, 0777, true);

  $file_name = $row['pdf'];
  if (!empty($_FILES['pdf']['name'])) {
    $originalFileName = pathinfo($_FILES['pdf']['name'], PATHINFO_FILENAME);
    $fileExtension = pathinfo($_FILES['pdf']['name'], PATHINFO_EXTENSION);
    $cleanName = preg_replace("/[^a-zA-Z0-9_-]/", "_", $originalFileName);
    $newFileName = $cleanName . '_' . time() . '.' . $fileExtension;
    $file_name = $newFileName;
    $uploadPath = $uploadDir . $newFileName;

    if (move_uploaded_file($_FILES['pdf']['tmp_name'], $uploadPath)) {
      if (!empty($row['pdf']) && file_exists($uploadDir . $row['pdf'])) {
        unlink($uploadDir . $row['pdf']);
      }
    }
  }

  $query = "UPDATE mechanical_engineering SET subject_code='$subject_code', pdf='$file_name' WHERE me_id=$id";
  if (mysqli_query($conn, $query)) {
    echo "<script>alert('Record Updated Successfully'); window.location.href='mechanical_engineering.php';</script>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../common/header_link.php'; ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT MECHANICAL ENGINEERING</h5>
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="subject_code" name="subject_code"
                        value="<?= htmlspecialchars($row['subject_code']); ?>" required>
                      <label for="subject_code">Subject Code</label>
                      <br>
                      <?php if (!empty($row['pdf'])): ?>
                        <a href="../assets/pdf/mechanical_engineering/<?= htmlspecialchars($row['pdf']); ?>" target="_blank">
                          <?= htmlspecialchars($row['pdf']); ?>
                        </a>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <input type="file" class="form-control p-3 mt-3" name="pdf">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-lg-12 text-center">
                    <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
                    <a href="mechanical_engineering.php" class="btn btn-secondary">Back</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <?php include '../common/footer.php'; ?>
        <div class="content-backdrop fade"></div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include '../common/footer-link.php'; ?>
</body>

</html>