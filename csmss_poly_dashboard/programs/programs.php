<?php include '../common/auth.php'; ?>

<?php
include('../common/header_link.php');
include('../common/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Sidebar -->
      <?php include('../common/sidebar.php'); ?>
      <!-- / Sidebar -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                  aria-label="Search..." />
              </div>
            </div>
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-grow-1 d-flex justify-content-center">
                          <small class="text-muted text-center">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-basic.html">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">PROGRAM</h4>

            <!-- Programs Table -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">PROGRAMS</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_programs.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr.No</th>
                      <th>Program</th>
                      <th>Estd. Year</th>
                      <th>Intake</th>
                      <th>Code</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php
                    $sql = "SELECT * FROM programs ORDER BY programs_id ASC";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      $sr_no = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "
  <tr>
    <td>{$sr_no}</td>
    <td>{$row['program_name']}</td>
    <td>{$row['estd_year']}</td>
    <td>{$row['intake']}</td>
    <td>{$row['code']}</td>
    <td>
      <a href='edit_programs.php?programs_id={$row['programs_id']}' class='btn btn-sm btn-primary rounded-pill'>
        <i class='bx bx-edit-alt me-1'></i> Edit
      </a>
      <a href='delete_programs.php?programs_id={$row['programs_id']}' class='btn btn-sm btn-danger rounded-pill'
        onclick=\"return confirm('Are you sure you want to delete this program?');\">
        <i class='bx bx-trash me-1'></i> Delete
      </a>
    </td>
  </tr>";
                        $sr_no++;
                      }

                    } else {
                      echo "<tr><td colspan='6' class='text-center'>No Programs Found</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!--/ Programs Table -->

            <hr class="my-5" />
            <?php include('../common/footer.php'); ?>
            <div class="content-backdrop fade"></div>
          </div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include('../common/footer-link.php'); ?>
</body>

</html>