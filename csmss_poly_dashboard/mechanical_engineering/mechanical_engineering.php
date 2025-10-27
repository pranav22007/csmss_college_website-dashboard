<?php include '../common/auth.php'; ?>
<?php
include('../common/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<?php include('../common/header_link.php'); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>

      <div class="layout-page">
        <?php include('../common/header.php'); ?>

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">MECHANICAL ENGINEERING DETAILS</h4>

            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">MECHANICAL ENGINEERING</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_mechanical_engineering.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Subject Code</th>
                      <th>PDF</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM mechanical_engineering ORDER BY me_id ASC";
                    $result = mysqli_query($conn, $sql);
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= htmlspecialchars($row['subject_code']); ?></td>
                        <td>
                          <?php if (!empty($row['pdf'])): ?>
                            <a href="../assets/pdf/mechanical_engineering/<?= htmlspecialchars($row['pdf']); ?>" target="_blank">
                              <?= htmlspecialchars($row['pdf']); ?>
                            </a>
                          <?php else: ?>
                            No File
                          <?php endif; ?>
                        </td>
                        <td>
                          <div>
                            <a href="edit_mechanical_engineering.php?id=<?= $row['me_id']; ?>" class="text-white">
                              <button type="button" class="btn rounded-pill btn-primary">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </button>
                            </a>
                            <form action="" method="POST" style="display:inline;">
                              <input type="hidden" name="delete_id" value="<?= $row['me_id']; ?>">
                              <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">
                                <i class="bx bx-trash me-1"></i> Delete
                              </button>
                            </form>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

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

<?php
// DELETE FUNCTIONALITY
if (isset($_POST['delete_btn'])) {
  $delete_id = intval($_POST['delete_id']);

  $check = mysqli_query($conn, "SELECT pdf FROM mechanical_engineering WHERE me_id=$delete_id");
  $file = mysqli_fetch_assoc($check);

  $filePath = __DIR__ . "/uploads/" . $file['pdf'];
  if (!empty($file['pdf']) && file_exists($filePath)) {
    unlink($filePath);
  }

  mysqli_query($conn, "DELETE FROM mechanical_engineering WHERE me_id=$delete_id");

  echo "<script>alert('Record Deleted Successfully'); window.location.href='mechanical_engineering.php';</script>";
}
?>
