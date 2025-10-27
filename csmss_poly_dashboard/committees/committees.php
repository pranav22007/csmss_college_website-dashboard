<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';  // adjust path if needed
if (isset($_POST['committes_delete_btn'])) {
  $delete_id = $_POST['delete_id'];
  $committees_query = "DELETE FROM committees WHERE com_id='$delete_id'";
  $delete_run = mysqli_query($conn, $committees_query);
  if ($delete_run) {
    header("Location: committees.php?msg=Deleted Successfully");
    exit;
  } else {
    header("Location: committees.php?msg=Delete Failed");
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php
include('../common/header_link.php');
?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php include('../common/sidebar.php'); ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php include '../common/header.php'; ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">COMMITTEES DETAILS</h4>

            <!-- Hoverable Table rows -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">COMMITTEES</div>
                </div>

                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_committees.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <?php
                include '../common/dbcon.php';
                $csmss = "SELECT * FROM committees";
                $csmss_run = mysqli_query($conn, $csmss);

                if (mysqli_num_rows($csmss_run) > 0) {
                  ?>

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Sr No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>PDF</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php
                      $serial = 1;
                      while ($committees_row = mysqli_fetch_array($csmss_run)) {
                        ?>
                        <tr>
                          <td><?php echo $serial++; ?></td>
                          <td><?php echo $committees_row['title']; ?></td>
                          <td><?php echo $committees_row['description']; ?></td>
                          <td>
                            <?php
                            if (!empty($committees_row['pdf'])) {
                              echo '<a href="../../csmss_poly_dashboard/assets/pdf/committees/' . $committees_row['pdf'] . '" target="_blank">' . $committees_row['pdf'] . '</a>';
                            } else {
                              echo "No PDF";
                            }
                            ?>
                          </td>

                          <td>
                            <div>
                              <a href="edit_committees.php?id=<?php echo $committees_row['com_id']; ?>" class="text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button>
                              </a>

                              <form method="POST" action=""
                                onsubmit="return confirm('Are you sure you want to delete this record?');"
                                style="display:inline-block;">
                                <input type="hidden" name="delete_id" value="<?php echo $committees_row['com_id']; ?>">
                                <button type="submit" name="committes_delete_btn" class="btn rounded-pill btn-danger">
                                  <i class="bx bx-trash me-1"></i> Delete
                                </button>
                              </form>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <?php
                } else {
                  echo "No Record Found";
                }
                ?>
              </div>
            </div>
            <!--/ Hoverable Table rows -->

            <hr class="my-5" />

            <!-- Footer -->
            <?php include('../common/footer.php'); ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
  </div>
  <!-- / Layout wrapper -->

  <?php include('../common/footer-link.php'); ?>
</body>

</html>