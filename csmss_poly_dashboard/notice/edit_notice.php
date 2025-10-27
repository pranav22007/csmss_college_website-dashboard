<?php
include '../common/dbcon.php'; // DB connection needed first

if (isset($_POST['notice_update_btn'])) {
    $update_id = (int)$_POST['edit_id'];  // cast to int for safety
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $pdf = '';
   if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0) {
    $tmp_name = $_FILES['pdf']['tmp_name'];
    $upload_dir = rtrim('../../csmss_poly_dashboard/assets/pdf/notice/', '/') . '/';

    // Use original file name (but make it safe)
    $pdfOriginal = basename($_FILES['pdf']['name']);
    $pdf = preg_replace("/[^A-Za-z0-9_\-\.]/", "_", $pdfOriginal); // sanitize name

    if (!move_uploaded_file($tmp_name, $upload_dir . $pdf)) {
        die("Failed to upload file.");
    }
} else {
    $old_pdf_query = "SELECT pdf FROM notice WHERE n_id=$update_id";
    $old_pdf_result = mysqli_query($conn, $old_pdf_query);
    if ($row_pdf = mysqli_fetch_assoc($old_pdf_result)) {
        $pdf = $row_pdf['pdf'];
    }
}
    

    $query_update = "UPDATE notice SET title='$title', description='$description', pdf='$pdf' WHERE n_id=$update_id";
    $query_update_run = mysqli_query($conn, $query_update);

    if ($query_update_run) {
        header("Location: notice.php");
        exit;
    } else {
        echo "Error updating notice: " . mysqli_error($conn);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php
include '../common/header_link.php';
?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>

      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <?php
        $id = (int)$_GET['id'];  // cast to int for safety
        $notice_query = "SELECT * FROM notice WHERE n_id=$id";
        $notice_query_run = mysqli_query($conn, $notice_query);

        if (mysqli_num_rows($notice_query_run) > 0) {
          $row = mysqli_fetch_assoc($notice_query_run);
        ?>

            <div class="container">
              <div class="card my-4">
                <h5 class="card-header">EDIT NOTICE</h5>
                <div class="card-body">
                  <div class="container mt-3">
                    <form action="" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="edit_id" value="<?php echo $row['n_id']; ?>">

                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>
                            <label for="title">Title</label>
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="description" name="description" value="<?php echo htmlspecialchars($row['description']); ?>" required>
                            <label for="description">Description</label>
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="pdf" class="form-label">Upload PDF</label>
                            <input class="form-control p-3 mt-3" type="file" id="pdf" name="pdf" accept="application/pdf">
                            <?php if (!empty($row['pdf'])) {
                              echo "<p>Current file: " . htmlspecialchars($row['pdf']) . "</p>";
                            } ?>
                          </div>
                        </div>

                        <div class="col-lg-12 text-center">
                          <button type="submit" name="notice_update_btn" class="btn btn-primary">Update</button>
                          <a href="notice.php" class="btn btn-primary text-white">Back</a>
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

        <?php
        } else {
          echo "No data Found by this URL Id";
        }
        ?>
      </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <?php include '../common/footer-link.php'; ?>
</body>

</html>
