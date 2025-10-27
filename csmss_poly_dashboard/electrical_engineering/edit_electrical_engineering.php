<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

/* === Uploads path helpers === */
$uploadsDirFs = __DIR__ . '/../assets/pdf/electrical_engineering/';
if (!is_dir($uploadsDirFs)) {
    mkdir($uploadsDirFs, 0777, true);
}

$uploadsDirUrl = '../assets/pdf/electrical_engineering/';

/* --- Get record --- */
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) die('Invalid request');
$id = (int)$_GET['id'];
$rec = mysqli_query($conn, "SELECT * FROM electrical_engineering WHERE ee_id=$id");
if (!$rec || mysqli_num_rows($rec) === 0) die('Record not found');
$row = mysqli_fetch_assoc($rec);

/* --- Handle update --- */
if (isset($_POST['update_btn'])) {
    $subject_code = trim($_POST['subject_code'] ?? $row['subject_code']);
    $newFileName = $row['pdf'];

    if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === 0) {
        $orig = basename($_FILES['pdf']['name']);
        $safe = preg_replace('/[^A-Za-z0-9._-]/', '_', $orig);
        $newFileName = time() . '_' . $safe;

        if (move_uploaded_file($_FILES['pdf']['tmp_name'], $uploadsDirFs . $newFileName)) {
            // Delete old file if exists
            if (!empty($row['pdf']) && file_exists($uploadsDirFs . $row['pdf'])) {
                @unlink($uploadsDirFs . $row['pdf']);
            }
        } else {
            $newFileName = $row['pdf']; // fallback to old file on upload failure
        }
    }

    $subject_code_esc = mysqli_real_escape_string($conn, $subject_code);
    $file_esc = mysqli_real_escape_string($conn, $newFileName);
    $upd = "UPDATE electrical_engineering SET subject_code='$subject_code_esc', pdf='$file_esc' WHERE ee_id=$id";

    if (mysqli_query($conn, $upd)) {
        echo "<script>location.href='electrical_engineering.php?msg=updated';</script>";
        exit;
    } else {
        echo "<script>alert('Update failed');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr">
<?php include '../common/header_link.php'; ?>
<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT ELECTRICAL ENGINEERING</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="subject_code" value="<?= htmlspecialchars($row['subject_code']); ?>" required>
                      <label>Subject Code</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                  <div class="mb-3">
                     <input class="form-control p-3 mt-3" type="file" name="pdf" accept="application/pdf">

                  </div>
                </div>
               
                  <?php if (!empty($row['pdf'])): ?>
                    <small class="d-block mt-2">
                      Current file: 
                      <a href="<?= htmlspecialchars($uploadsDirUrl . $row['pdf']); ?>" target="_blank">
                        <?= htmlspecialchars($row['pdf']); ?>
                      </a>
                    </small>
                  <?php else: ?>
                    <small class="d-block mt-2 text-muted">No PDF uploaded</small>
                  <?php endif; ?>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
                  <a href="electrical_engineering.php" class="btn btn-secondary">Back</a>
                </div>
              </form>
            </div>
          </div>
        </div>

        <?php include('../common/footer.php'); ?>
      </div>
    </div>
  </div>
  <?php include('../common/footer-link.php'); ?>
</body>
</html>
