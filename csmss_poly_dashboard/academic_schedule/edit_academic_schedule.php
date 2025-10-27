<?php include '../common/auth.php'; ?>
<?php
include '../common/header_link.php';
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>
        <?php include '../common/dbcon.php'; ?>

        <?php
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $select_query = "SELECT * FROM academic_schedule WHERE aca_id = '$id'";
          $result = mysqli_query($conn, $select_query);
          if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $title = $_POST['Name'];
              $description = $_POST['description'];

              $pdfName = $row['pdf'];
              $uploadDir = "../../csmss_poly_dashboard/assets/pdf/academic_schedule/";

              // Check if new PDF is uploaded
              if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
                // Create upload directory if it doesn't exist
                if (!is_dir(filename: $uploadDir)) {
                  mkdir($uploadDir, 0777, true);
                }

                // Delete old file
                $oldPdfPath = $uploadDir . $row['pdf'];
                if (!empty($row['pdf']) && file_exists($oldPdfPath)) {
                  unlink($oldPdfPath);
                }

                // Upload new file
                $pdfName = time() . "_" . basename($_FILES['pdf']['name']);
                $uploadPath = $uploadDir . $pdfName;
                if (!move_uploaded_file($_FILES['pdf']['tmp_name'], $uploadPath)) {
                  echo "<script>alert('File upload failed');</script>";
                }
              }

              // Update database
              $update_query = "UPDATE academic_schedule 
                               SET title='$title', description='$description', pdf='$pdfName' 
                               WHERE aca_id='$id'";
              $update_run = mysqli_query($conn, $update_query);

              if ($update_run) {
                echo "<script>alert('Updated successfully'); window.location.href='academic_schedule.php';</script>";
                exit();
              } else {
                echo "<script>alert('Update failed');</script>";
              }
            }
          } else {
            echo "<div class='container mt-5'><div class='alert alert-warning'>No Data Found for this ID.</div></div>";
          }
        } else {
          echo "<div class='container mt-5'><div class='alert alert-warning'>Invalid request. No ID provided.</div></div>";
        }
        ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT ACADEMIC SCHEDULE</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="Name" value="<?php echo $row['title']; ?>"
                          required />
                        <label for="Name">Title</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="description"
                          value="<?php echo $row['description']; ?>" required />
                        <label for="description">Description</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 mb-3">
                      <label class="form-label">Current PDF:</label><br />
                      <?php if (!empty($row['pdf'])): ?>
                        <a href="../../csmss_poly_dashboard/assets/pdf/academic_schedule/<?= htmlspecialchars($row['pdf']); ?>" target="_blank">
                          <?php echo htmlspecialchars($row['pdf']); ?>
                        </a>
                      <?php else: ?>
                        No File
                      <?php endif; ?>
                    </div>

                    <div class="col-lg-6 mb-3">
                      <!-- <label for="pdf" class="form-label">Upload New PDF (optional):</label> -->
                      <input class="form-control p-3 mt-3" type="file" id="pdf" name="pdf" accept="application/pdf" />
                      <!-- <small class="text-muted">Leave blank to keep existing file.</small> -->
                    </div>
                  </div>

                  <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="academic_schedule.php" class="btn btn-secondary">Back</a>
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