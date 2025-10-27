<?php
include '../common/dbcon.php';

// Enable error reporting (remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['add_btn'])) {
  // Escape inputs to prevent SQL injection
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);

  if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0) {
    $pdfName = $_FILES['pdf']['name'];
    $pdfTmp = $_FILES['pdf']['tmp_name'];
    $pdfExt = strtolower(pathinfo($pdfName, PATHINFO_EXTENSION));

    if ($pdfExt === 'pdf') {
      $upload_dir = "../../csmss_poly_dashboard/assets/pdf/notice/";  // fixed variable name here
      if (!is_dir($upload_dir)) {          // fixed variable name here
        mkdir($upload_dir, 0755, true);
      }

      // Generate unique file name to avoid conflicts
      $newPdfName = preg_replace('/[^a-zA-Z0-9-_\.]/', '_', $pdfName);

      $pdfDestination = $upload_dir . $newPdfName;  // fixed variable name here

      if (move_uploaded_file($pdfTmp, $pdfDestination)) {
        $query = "INSERT INTO `notice` (title, description, pdf) VALUES ('$title', '$description', '$newPdfName')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
          // Redirect to notice.php in the same folder (relative path)
          header("Location: notice.php");
          exit();
        } else {
          header('Location: add_notice.php?error=db');
          exit();
        }
      } else {
        header('Location: add_notice.php?error=upload_fail');
        exit();
      }
    } else {
      header('Location: add_notice.php?error=invalid_file');
      exit();
    }
  } else {
    header('Location: add_notice.php?error=nopdf');
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>
<?php include '../common/dbcon.php'; ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>
        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">ADD NOTICE</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Title" name="title" required />
                        <label>Title</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Description" name="description" required />
                        <label>Description</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input class="form-control p-3 mt-3" type="file" name="pdf" accept="application/pdf" required />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 mt-3 text-center">
                      <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                      <a href="notice.php" class="btn btn-primary text-white">Back</a>
                    </div>
                  </div>
                </form>
                <?php
                // Show errors if any
                if (isset($_GET['error'])) {
                  $error = $_GET['error'];
                  $messages = [
                    'db' => 'Database error, please try again.',
                    'upload_fail' => 'File upload failed.',
                    'invalid_file' => 'Invalid file type, only PDF allowed.',
                    'nopdf' => 'No file uploaded.',
                  ];
                  echo '<div class="alert alert-danger mt-3">' . ($messages[$error] ?? 'Unknown error') . '</div>';
                }
                ?>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-5" />
        <?php include '../common/footer.php'; ?>
        <div class="content-backdrop fade"></div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include '../common/footer-link.php'; ?>
</body>

</html>
