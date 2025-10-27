<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

// Step 1: Fetch record by ID
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); 

    $committees_query = "SELECT * FROM committees WHERE com_id = $id";
    $committees_query_run = mysqli_query($conn, $committees_query);

    if ($committees_query_run && mysqli_num_rows($committees_query_run) > 0) {
        $row = mysqli_fetch_assoc($committees_query_run);
    } else {
        echo "No Data found by this URL Id.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}

// Step 2: Handle Update
if (isset($_POST['committees_update_btn'])) {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $pdf_name = $row['pdf']; // keep old pdf if no new file uploaded

    // Handle file upload if new PDF uploaded
    if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0) {
        $uploadDir = __DIR__ . "/../../csmss_poly_dashboard/assets/pdf/committees/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

       $pdf_name = basename($_FILES['pdf']['name']);
$uploadFile = $uploadDir . $pdf_name;

if (move_uploaded_file($_FILES['pdf']['tmp_name'], $uploadFile)) {
    
}
    }

    // Update query
    $update_query = "UPDATE committees 
                     SET title = ?, description = ?, pdf = ? 
                     WHERE com_id = ?";
    $stmt = mysqli_prepare($conn, $update_query);
    mysqli_stmt_bind_param($stmt, "sssi", $title, $description, $pdf_name, $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: committees.php?msg=Committee updated successfully");
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>

      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT COMMITTEES</h5>
            <div class="card-body">
              <div class="container mt-3">

                <form method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $committees_row['comm_id']; ?>">

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="Text"
                          placeholder="Title" name="title"
                          value="<?php echo htmlspecialchars($row['title']); ?>" />
                        <label for="Name">Title</label>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" name="description" class="form-control"
                          value="<?php echo $row['description']; ?>" />
                        <label for="Name">Description</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 mb-3">
                     <label class="form-label">Current PDF:</label><br />
                  <?php if (!empty($row['pdf'])): ?>
                    <a href="../../csmss_poly_dashboard/assets/pdf/committees/<?= htmlspecialchars($row['pdf']); ?>" target="_blank">
                           <?= basename(htmlspecialchars($row['pdf'])) ?>
                        </a>
                  <?php else: ?>
                        No File
                  <?php endif; ?>
                    </div>
                    <div class="col-lg-6 mb-3">
                      <!-- <label for="pdf" class="form-label">Upload New PDF (optional):</label> -->
                      <input class="form-control" type="file" name="pdf" id="pdf" accept="application/pdf" />
                      <!-- <small class="text-muted">Leave blank to keep existing file.</small> -->
                    </div>
                  </div>

                  <div class="col-lg-12 text-center">
                    <button type="submit" name="committees_update_btn" class="btn btn-primary">Update</button>
                    <a href="committees.php" class="btn btn-secondary">Back</a>
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
