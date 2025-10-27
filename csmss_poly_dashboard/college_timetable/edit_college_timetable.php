<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

// Step 1: Fetch record by ID
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = intval($_GET['id']);
  $college_timetable_query = "SELECT * FROM college_timetable WHERE ct_id = $id";
  $college_timetable_query_run = mysqli_query($conn, $college_timetable_query);
  if ($college_timetable_query_run && mysqli_num_rows($college_timetable_query_run) > 0) {
    $row = mysqli_fetch_assoc($college_timetable_query_run);
  } else {
    echo "No Data found by this URL Id.";
    exit;
  }
} else {
  echo "Invalid request.";
  exit;
}

// Step 2: Handle Update
if (isset($_POST['college_timetable_update_btn'])) {
  $title = $_POST['title'] ?? '';
  $description = $_POST['description'] ?? '';
  $pdf_name = $row['pdf']; // keep old pdf if no new file uploaded

  // Handle file upload if new PDF uploaded
  if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0) {
    $uploadDir = __DIR__ . "../assets/pdf/college_timetable/"; // physical folder: csmss_poly_dashboard/college_timetable/uploads/
    if (!is_dir($uploadDir)) {
      mkdir($uploadDir, 0777, true);
    }

    $pdf_name = time() . "_" . basename($_FILES['pdf']['name']); // unique filename
    $uploadFile = $uploadDir . $pdf_name;

    if (move_uploaded_file($_FILES['pdf']['tmp_name'], $uploadFile)) {
      // success
    }
  }

  // Update query
  $update_query = "UPDATE college_timetable
                     SET title = ?, description = ?, pdf = ?
                     WHERE ct_id = ?";
  $stmt = mysqli_prepare($conn, $update_query);
  mysqli_stmt_bind_param($stmt, "sssi", $title, $description, $pdf_name, $id);
  if (mysqli_stmt_execute($stmt)) {
    header("Location: college_timetable.php?msg=College_timetable updated successfully");
    exit;
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
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
            <h5 class="card-header">EDIT COLLEGE_TIMETABLE</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $row['ct_id']; ?>">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="Text" placeholder="Title" name="title"
                          value="<?php echo htmlspecialchars($row['title']); ?>" />
                        <label for="Name">Title</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" name="description" class="form-control"
                          value="<?php echo htmlspecialchars($row['description']); ?>" />
                        <label for="Name">Description</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Current File Column -->
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label class="form-label">Current PDF:</label>
                        <?php if (!empty($row['pdf'])): ?>
                          <a href="<?= htmlspecialchars($row['pdf']); ?>" target="_blank">
                            <?= basename(htmlspecialchars($row['pdf'])) ?>
                          </a>
                        <?php else: ?>
                          No File
                        <?php endif; ?>


                      </div>
                    </div>

                    <!-- Choose New File Column -->
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input class="form-control p-3" type="file" id="formFile" name="pdf" accept=".pdf">
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12 text-center">
                    <button type="submit" name="college_timetable_update_btn" class="btn btn-primary">Update</button>
                    <a href="college_timetable.php" class="btn btn-secondary">Back</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
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