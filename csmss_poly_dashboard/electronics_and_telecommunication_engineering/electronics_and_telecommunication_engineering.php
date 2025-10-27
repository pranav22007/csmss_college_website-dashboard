<?php include '../common/auth.php'; ?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr">
<?php
include('../common/header_link.php');
include('../common/dbcon.php'); // DB connection

// Table name
$table_name = "electronics_and_telecommunication_engineering";

// Delete record logic
if (isset($_GET['delete_id'])) {
    $entc_id = $_GET['delete_id'];

    // Delete the record
    $query = "DELETE FROM $table_name WHERE entc_id = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $entc_id); // "i" indicates an integer parameter
        if ($stmt->execute()) {
            $success_message = "Record deleted successfully.";
        } else {
            $error_message = "Error deleting record.";
        }
        $stmt->close();
    } else {
        $error_message = "Error preparing the query.";
    }
}

// Fetch all records in ascending order to show newest at the bottom
$query = "SELECT * FROM $table_name ORDER BY entc_id ASC";  // Updated to ASC
$result = mysqli_query($conn, $query);
?>

<body>
  <!-- Layout wrapper -->
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
            <h4 class="text-muted fw-bold py-3 mb-4">
              ELECTRONICS & TELECOMMUNICATION ENGINEERING DETAILS
            </h4>

            <!-- Messages -->
            <?php if (isset($success_message)): ?>
                <div class="alert alert-success"><?= $success_message; ?></div>
            <?php elseif (isset($error_message)): ?>
                <div class="alert alert-danger"><?= $error_message; ?></div>
            <?php endif; ?>

            <!-- Table -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">ELECTRONICS & TELECOMMUNICATION ENGINEERING</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_electronics_and_telecommunication_engineering.php">
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
                  <tbody class="table-border-bottom-0">
                    <?php 
                    $sr = 1;
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?= $sr++; ?></td>
                        <td><?= htmlspecialchars($row['subject_code']); ?></td>
                        <td>
                          <?php if (!empty($row['pdf'])) { ?>
                            <a href="../assets/pdf/en_tc/<?= $row['pdf']; ?>" target="_blank" class="text-primary">
                              <?= $row['pdf']; ?>
                            </a>
                          <?php } else { ?>
                            <span class="text-muted">No File</span>
                          <?php } ?>
                        </td>
                        <td>
                          <a href="edit_electronics_and_telecommunication_engineering.php?id=<?= $row['entc_id']; ?>">
                            <button type="button" class="btn rounded-pill btn-primary">
                              <i class="bx bx-edit-alt me-1"></i> Edit
                            </button>
                          </a>
                          <a href="?delete_id=<?= $row['entc_id']; ?>" onclick="return confirm('Are you sure to delete this record?');">
                            <button type="button" class="btn rounded-pill btn-danger">
                              <i class="bx bx-trash me-1"></i> Delete
                            </button>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- / Table -->

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
