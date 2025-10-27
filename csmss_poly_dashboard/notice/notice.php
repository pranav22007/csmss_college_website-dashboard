<?php
include('../common/header_link.php');
include('../common/dbcon.php'); 

// Function to truncate long file names
function truncateFileName($filename, $maxLength = 25) {
  if (strlen($filename) > $maxLength) {
    return substr($filename, 0, $maxLength - 3) . '...';
  }
  return $filename;
}

// Handle delete request
if (isset($_POST['notice_delete_btn'])) {
  $delete_id = (int) $_POST['delete_id'];
  $notice_query = "DELETE FROM notice WHERE n_id='$delete_id'";
  $notice_query_run = mysqli_query($conn, $notice_query);
  header("Location: notice.php");
  exit;
}
?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>
      <div class="layout-page">
        <?php include('../common/header.php'); ?>

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">NOTICES</h4>

            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">Notices</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_notice.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>PDF</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php
                    $notice = "SELECT * FROM `notice` ORDER BY n_id ASC";
                    $notice_run = mysqli_query($conn, $notice);

                    if (mysqli_num_rows($notice_run) > 0) {
                      $srNo = 1;
                      while ($not_row = mysqli_fetch_assoc($notice_run)) {
                        $id = htmlspecialchars($not_row['n_id']);
                        $title = htmlspecialchars($not_row['title']);
                        $desc = htmlspecialchars($not_row['description']);
                        $pdf = htmlspecialchars($not_row['pdf']);

                        // Use existing pdf column directly
                        $pdfOriginal = $pdf;  
                        $pdfDisplay = $pdfOriginal ? truncateFileName($pdfOriginal) : 'No file';
                        ?>
                        <tr>
                          <td><?php echo $srNo++; ?></td>
                          <td><strong><?php echo $title; ?></strong></td>
                          <td><?php echo $desc; ?></td>
                          <td>
                            <?php if (!empty($pdf)) { ?>
                              <a href="../../csmss_poly_dashboard/assets/pdf/notice/<?php echo $pdf; ?>" target="_blank">
                                <?php echo $pdfDisplay; ?>
                              </a>
                            <?php } else { echo "No PDF"; } ?>
                          </td>
                          <td class="d-flex gap-2 align-items-center">
                            <form action="edit_notice.php" method="GET" class="m-0">
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                              <button type="submit" class="btn rounded-pill btn-primary px-3 py-2">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </button>
                            </form>
                            <form action="" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this notice?');" class="m-0">
                              <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                              <button type="submit" class="btn rounded-pill btn-danger px-3 py-2" name="notice_delete_btn">
                                <i class="bx bx-trash me-1"></i> Delete
                              </button>
                            </form>
                          </td>
                        </tr>
                        <?php
                      }
                    } else {
                      echo '<tr><td colspan="5" class="text-center">No Record Found</td></tr>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <hr class="my-5" />
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
