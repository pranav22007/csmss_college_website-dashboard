<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
  <?php include('../common/header_link.php'); ?>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
      data-theme="theme-default"
      data-assets-path="../assets/"
      data-template="vertical-menu-template-free">


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 


<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <!-- Sidebar -->
      <?php include('../common/sidebar.php'); ?>

      <div class="layout-page">
        <!-- Navbar -->
       
                        <?php
include '../common/header.php';

?>

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">Counters Details</h4>

            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">COUNTERS</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_counters.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>SR</th>
                      <th>Title</th>
                      <th>Count</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include('../common/dbcon.php');
                      $sql = "SELECT * FROM counters ORDER BY counters_id ASC";
                      $result = mysqli_query($conn, $sql);
                      $sr = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <td><?= $sr++; ?></td>
                      <td><?= htmlspecialchars($row['Title']); ?></td>
                      <td><?= htmlspecialchars($row['count']); ?></td>
                     
                      <td>
                        <a href="edit_counters.php?counters_id=<?= $row['counters_id']; ?>" class="btn btn-primary rounded-pill">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                        </a>
                        <a href="delete_counters.php?counters_id=<?= $row['counters_id']; ?>" onclick="return confirm('Are you sure?');" class="btn btn-danger rounded-pill">
                          <i class="bx bx-trash me-1"></i> Delete
                        </a>
                        <?php if ($row['status'] == 1) { ?>
                          <a href="toggle_counters.php?counters_id=<?= $row['counters_id']; ?>&status=0" class="btn rounded-pill btn-warning">Disable</a>
                        <?php } else { ?>
                          <a href="toggle_counters.php?counters_id=<?= $row['counters_id']; ?>&status=1" class="btn rounded-pill btn-success">Enable</a>
                        <?php } ?>
                      </td>
                    </tr>
                    <?php } ?>  
                  </tbody>
                </table>
              </div>
            </div>

            <hr class="my-5" />

                <!-- Footer -->
                <!-- Footer -->
                <?php
                include '../common/footer.php';
                ?>
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


    <?php
    include '../common/footer-link.php';

    ?>
    <!-- Core JS -->

</body>

</html>