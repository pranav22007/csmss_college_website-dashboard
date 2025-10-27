<?php include '../common/auth.php'; ?>
<?php
ob_start(); // Start output buffering
include "../common/dbcon.php";

// ===== DELETE FUNCTIONALITY =====
if (isset($_GET['delete_id'])) {
  $delete_id = $_GET['delete_id'];

  // Get PDF filename
  $get_pdf_query = "SELECT pdf FROM disclosure WHERE d_id = '$delete_id'";//changed
  $pdf_result = mysqli_query($conn, $get_pdf_query);
  $pdf_row = mysqli_fetch_array($pdf_result);

  if ($pdf_row && !empty($pdf_row['pdf'])) {
    $pdf_path = "../assets/pdf/disclosure/" . $pdf_row['pdf'];
    if (file_exists($pdf_path)) {
      unlink($pdf_path); // Delete the PDF file
    }
  }

  // Delete the record from DB
  $delete_query = "DELETE FROM disclosure WHERE d_id = '$delete_id'";
  mysqli_query($conn, $delete_query);

  // Redirect to avoid header already sent warning
  header("Location: disclosure.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<?php include('../common/header_link.php'); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <!-- Sidebar -->
      <?php include('../common/sidebar.php'); ?>
      <!-- / Sidebar -->

      <!-- Layout page -->
      <div class="layout-page">

        <!-- Navbar -->
        <?php include('../common/header.php'); ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">MANDATORY DISCLOSURE</h4>

            <!-- Card -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">MANDATORY DISCLOSURE</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_disclosure.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <!-- Table -->
              <div class="table-responsive text-nowrap">
                <?php
                $disclosure = "SELECT * FROM disclosure ORDER BY d_id ASC";
                $disclosure_run = mysqli_query($conn, $disclosure);

                if (mysqli_num_rows($disclosure_run) > 0) {
                  ?>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Sr No</th>
                        <th>Title</th>
                        <th>PDF Name</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php
                      $sr = 1;
                      while ($csmss_row = mysqli_fetch_assoc($disclosure_run)) {
                        ?>
                        <tr>
                          <td><?php echo $sr++; ?></td>
                          <td><?php echo $csmss_row['title']; ?></td>
                          <td>
                            <?php
                            if (!empty($csmss_row['pdf'])) {
                              echo '<a href="../../csmss_poly_dashboard/assets/pdf/disclosure/' . $csmss_row['pdf'] . '" target="_blank">' . $csmss_row['pdf'] . '</a>';
                            } else {
                              echo "No PDF";
                            }
                            ?>
                          </td>
                          <td>
                            <a href="edit_disclosure.php?id=<?php echo $csmss_row['d_id']; ?>"
                              class="btn rounded-pill btn-primary">
                              <i class="bx bx-edit-alt me-1"></i> Edit
                            </a>
                            <a href="disclosure.php?delete_id=<?php echo $csmss_row['d_id']; ?>"
                              class="btn rounded-pill btn-danger"
                              onclick="return confirm('Are you sure you want to delete this record?');">
                              <i class="bx bx-trash me-1"></i> Delete
                            </a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <?php
                } else {
                  echo "<p class='text-center text-muted m-3'>No Record Found</p>";
                }
                ?>
              </div>
            </div>

            <hr class="my-5" />

            <!-- Footer -->
            <?php include('../common/footer.php'); ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
        </div>
        <!-- / Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <?php include('../common/footer-link.php'); ?>
</body>

</html>

<?php ob_end_flush(); // End output buffering ?>