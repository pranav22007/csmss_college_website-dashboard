<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

$uploadsDirFs = __DIR__ . '/../assets/pdf/electrical_engineering/';
if (!is_dir($uploadsDirFs)) {
    mkdir($uploadsDirFs, 0777, true);
}


$uploadsDirUrl = '../assets/pdf/electrical_engineering/';

/* ----- Delete Logic ----- */
if (isset($_GET['delete_id']) && is_numeric($_GET['delete_id'])) {
    $id = (int) $_GET['delete_id'];
    $res = mysqli_query($conn, "SELECT pdf FROM electrical_engineering WHERE ee_id=$id");
    if ($res && mysqli_num_rows($res) > 0) {
        $f = mysqli_fetch_assoc($res);
        $file = $f['pdf'];
        if (!empty($file) && file_exists($uploadsDirFs . $file)) {
            @unlink($uploadsDirFs . $file);
        }
    }
    mysqli_query($conn, "DELETE FROM electrical_engineering WHERE ee_id=$id");
    echo "<script>location.href='electrical_engineering.php?msg=deleted';</script>";
    exit;
}

/* ----- Fetch rows for table ----- */
$list = mysqli_query($conn, "SELECT * FROM electrical_engineering ORDER BY ee_id ASC");
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr">
<?php include('../common/header_link.php'); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">ELECTRICAL ENGINEERING DETAILS</h4>

            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">ELECTRICAL ENGINEERING</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_electrical_engineering.php"><button type="button" class="btn btn-primary m-4">ADD+</button></a>
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
                    $sr = 1;
                    if ($list && mysqli_num_rows($list) > 0):
                        while ($r = mysqli_fetch_assoc($list)): ?>
                        <tr>
                          <td><?= $sr++; ?></td>
                          <td><?= htmlspecialchars($r['subject_code']); ?></td>
                          <td>
                            <?php if (!empty($r['pdf'])): ?>
                              <a href="<?= htmlspecialchars($uploadsDirUrl . $r['pdf']); ?>" target="_blank">
                                <?= htmlspecialchars($r['pdf']); ?>
                              </a>
                            <?php else: ?> No File <?php endif; ?>
                          </td>
                          <td>
                            <a href="edit_electrical_engineering.php?id=<?= $r['ee_id']; ?>">
                              <button class="btn btn-primary">Edit</button>
                            </a>
                            <a href="electrical_engineering.php?delete_id=<?= $r['ee_id']; ?>" onclick="return confirm('Delete?');">
                              <button class="btn btn-danger">Delete</button>
                            </a>
                          </td>
                        </tr>
                    <?php
                        endwhile;
                    else: ?>
                      <tr>
                        <td colspan="4" class="text-center">No records found</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>

            <?php include('../common/footer.php'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('../common/footer-link.php'); ?>
</body>
</html>
