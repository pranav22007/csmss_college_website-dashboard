<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
  data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php
include('../common/header_link.php');
include('../common/dbcon.php'); // DB connection
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
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#"><small class="text-muted text-center">Admin</small></a>
                  </li>
                  <li><div class="dropdown-divider"></div></li>
                  <li>
                    <a class="dropdown-item" href="auth-login-basic.html">
                      <i class="bx bx-power-off me-2"></i> <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">OUR PLACEMENT</h4>

            <!-- Placement Table -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6 ">
                  <div class="h5 card-header">PLACEMENT DATA</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_placement.php" class="btn btn-primary m-4">ADD+</a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>SR</th>
                      <th>Title</th>
                      <th>PDF</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php
                    $sql = "SELECT * FROM placement_data ORDER BY placement_data_id DESC";
                    $result = mysqli_query($conn, $sql);

                    if (!$result) {
                      die("Query Failed: " . mysqli_error($conn));
                    }

                    if (mysqli_num_rows($result) > 0) {
                      $sr = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $sr++ . "</td>";
                        echo "<td><strong>" . htmlspecialchars($row['title']) . "</strong></td>";
                        echo "<td>
                                <a href='../assets/pdf/placement/placement_data/" . $row['pdf'] . "' target='_blank' class='btn btn-sm btn-outline-primary'>
                                  View PDF
                                </a>
                              </td>";
                        echo "<td>
                                <a href='edit_placement.php?placement_data_id=" . $row['placement_data_id'] . "' class='btn rounded-pill btn-primary btn-mb'>
                                  <i class='bx bx-edit-alt me-1'></i> Edit
                                </a>
                                <a href='delete_placement.php?placement_data_id=" . $row['placement_data_id'] . "' class='btn rounded-pill btn-danger btn-mb' onclick='return confirm(\"Are you sure you want to delete this?\")'>
                                  <i class='bx bx-trash me-1'></i> Delete
                                </a>
                              </td>";
                        echo "</tr>";
                      }
                    } else {
                      echo "<tr><td colspan='4' class='text-center text-muted'>No placements found</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!--/ Placement Table -->

            <hr class="my-5" />

            <!-- Footer -->
            <?php include('../common/footer.php'); ?>
          </div>
        </div>
        <!-- / Content wrapper -->
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
