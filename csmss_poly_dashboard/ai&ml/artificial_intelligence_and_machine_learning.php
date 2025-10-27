<?php include '../common/auth.php'; ?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<?php
include('../common/header_link.php');
include('../common/dbcon.php');

// ✅ Delete logic handled here
if (isset($_POST['delete_btn'])) {
    $id = intval($_POST['delete_id']);

    // Fetch file name
    $query = "SELECT pdf FROM al_ml WHERE ai_id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Delete file if exists
    if (!empty($row['pdf'])) {
        $filePath = "../assets/pdf/ai_ml/" . $row['pdf']; // ✅ Adjusted relative path
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    // Delete record from DB
    $delete = "DELETE FROM al_ml WHERE ai_id='$id'";
    $run_delete = mysqli_query($conn, $delete);

   
}
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
            <h4 class="text-muted fw-bold py-3 mb-4">
              ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING DETAILS
            </h4>

            <?php if (isset($msg)) { ?>
              <div class="alert alert-info alert-dismissible fade show" role="alert">
                <?= $msg; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php } ?>

            <!-- Hoverable Table rows -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING</div>
                </div>

                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_artificial_intelligence_and_machine_earning.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <?php
                $csmss = "SELECT * FROM al_ml";
                $csmss_run = mysqli_query($conn, $csmss);

                if (mysqli_num_rows($csmss_run) > 0) {
                ?>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Sr no</th>
                        <th>Subject Code</th>
                        <th>PDF</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $sr = 1; while ($al_ml_row = mysqli_fetch_array($csmss_run)) { ?>
                        <tr>
                          <td><?= $sr++; ?></td>
                          <td><?= htmlspecialchars($al_ml_row['subject_code']); ?></td>
                          <td>
                            <?php if (!empty($al_ml_row['pdf'])): ?>
                              <a href="../assets/pdf/ai_ml/<?= htmlspecialchars($al_ml_row['pdf']); ?>" target="_blank">
                                <?= basename($al_ml_row['pdf']); ?>
                              </a>
                            <?php else: ?>
                              No File
                            <?php endif; ?>
                          </td>
                          <td>
                            <!-- Edit Button -->
                            <a href="edit_artificial_intelligence_and_machine_learning.php?id=<?= $al_ml_row['ai_id']; ?>"
                              class="btn btn-primary d-inline-flex align-items-center px-4 py-2 rounded-pill">
                              <i class="bx bx-edit-alt me-2"></i> Edit
                            </a>

                            <!-- Delete Button -->
                            <form method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this record?');">
                              <input type="hidden" name="delete_id" value="<?= $al_ml_row['ai_id']; ?>">
                              <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">
                                <i class="bx bx-trash me-1"></i> Delete
                              </button>
                            </form>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                <?php
                } else {
                  echo "<p class='text-center p-3'>NO Data Found</p>";
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
    <!-- / Layout wrapper -->

    <?php include('../common/footer-link.php'); ?>
</body>
</html>
