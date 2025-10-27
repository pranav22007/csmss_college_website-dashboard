<?php
include('../common/header_link.php');
include('../common/dbcon.php'); // ✅ DB connection

// ✅ Handle DELETE Logic
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);

    // Fetch the file name
    $get_sql = "SELECT pdf FROM notification_admission WHERE adnoti_id = $delete_id";
    $get_result = mysqli_query($conn, $get_sql);

    if (mysqli_num_rows($get_result) > 0) {
        $row = mysqli_fetch_assoc($get_result);
        $pdf_file = $row['pdf'];

        // Delete from database
        $delete_sql = "DELETE FROM notification_admission WHERE adnoti_id = $delete_id";
        if (mysqli_query($conn, $delete_sql)) {
            // Delete the file
            $file_path = '../assets/pdf/admission/' . $pdf_file;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
            echo "<script>alert('Notification deleted successfully.'); window.location.href='admission.php';</script>";
            exit;
        } else {
            echo "<script>alert('Database deletion failed.');</script>";
        }
    } else {
        echo "<script>alert('Record not found.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>
      <div class="layout-page">
        <?php include('../common/header.php'); ?>
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">NOTIFICATION</h4>
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">NOTIFICATION</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_admission.php"><button type="button" class="btn btn-primary m-4">ADD+</button></a>
                </div>
              </div>
              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Program</th>
                      <th>PDF</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php
                    $sql = "SELECT * FROM notification_admission ORDER BY adnoti_id ASC";
                    $result = mysqli_query($conn, $sql);
                    $sr = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <tr>
                        <td><?= $sr++ ?></td>
                        <td><?= htmlspecialchars($row['title']) ?></td>
                        <td>
                          <?php if ($row['pdf']) { ?>
                            <a href="../assets/pdf/admission/<?= $row['pdf'] ?>" target="_blank"><?= $row['pdf'] ?></a>
                          <?php } ?>
                        </td>
                        <td>
                          <a href="edit_admission.php?id=<?= $row['adnoti_id'] ?>" class="btn btn-primary rounded-pill">
                            <i class="bx bx-edit-alt me-1"></i> Edit
                          </a>
                          <a href="admission.php?delete_id=<?= $row['adnoti_id'] ?>" class="btn btn-danger rounded-pill" onclick="return confirm('Are you sure you want to delete this notification?')">
                            <i class="bx bx-trash me-1"></i> Delete
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <hr class="my-5" />
            <?php include('../common/footer.php'); ?>
          </div>
          <div class="content-backdrop fade"></div>
        </div>
      </div>
    </div>
  </div>
<?php include('../common/footer-link.php'); ?>
</body>
</html>
