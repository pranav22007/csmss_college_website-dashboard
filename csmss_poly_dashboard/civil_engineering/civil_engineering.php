<?php include '../common/auth.php'; ?>
<?php
include('../common/dbcon.php');

// ✅ Handle delete if ID is passed via GET
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $delete_id = intval($_GET['id']);

    // Get file name before deletion
    $getFile = mysqli_query($conn, "SELECT pdf FROM civil_engineering WHERE ce_id = $delete_id");
    $fileData = mysqli_fetch_assoc($getFile);

    if ($fileData && !empty($fileData['pdf']) && file_exists($fileData['pdf'])) {
        unlink($fileData['pdf']); // Delete file from folder
    }

    // Delete from database
    $delete = mysqli_query($conn, "DELETE FROM civil_engineering WHERE ce_id = $delete_id");

    if ($delete) {
        echo "<script>alert('Record deleted successfully'); window.location.href='civil_engineering.php';</script>";
        exit;
    } else {
        echo "<script>alert('Error deleting record');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default">
<?php include('../common/header_link.php'); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>
      <div class="layout-page">
        <?php include('../common/header.php'); ?>

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="text-muted fw-bold py-3 mb-4">CIVIL ENGINEERING DETAILS</h4>
          <div class="card">
            <div class="row">
              <div class="col-lg-6">
                <div class="h5 card-header">CIVIL ENGINEERING</div>
              </div>
              <div class="col-lg-6 d-flex justify-content-end">
                <a href="add_civil_engineering.php">
                  <button type="button" class="btn btn-primary m-4">ADD+</button>
                </a>
              </div>
            </div>
            <div class="table-responsive text-nowrap">
              <?php
              $query = "SELECT * FROM civil_engineering ORDER BY ce_id ASC";
              $result = mysqli_query($conn, $query);
              $sr = 1;

              if (mysqli_num_rows($result) > 0): ?>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr No</th>
                      <th>Subject Code</th>
                      <th>PDF</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                      <tr>
                        <td><?= $sr++; ?></td>
                        <td><?= htmlspecialchars($row['subject_code']); ?></td>
                        <td>
                          <?php if (!empty($row['pdf']) && file_exists($row['pdf'])): ?>
                            <a href="<?= $row['pdf']; ?>" target="_blank"><?= basename($row['pdf']); ?></a>
                          <?php else: ?>
                            No File
                          <?php endif; ?>
                        </td>
                        <td>
                          <a href="edit_civil_engineering.php?id=<?= $row['ce_id']; ?>" class="btn btn-primary">Edit</a>
                          <a href="?id=<?= $row['ce_id']; ?>" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              <?php else: ?>
                <p class="m-3">No Records Found</p>
              <?php endif; ?>
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
