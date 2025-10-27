<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php
include('../common/header_link.php');


?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php
      include('../common/sidebar.php');

      ?>
      <!-- / Menu -->

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
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input
                  type="text"
                  class="form-control border-0 shadow-none"
                  placeholder="Search..."
                  aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">


              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a
                  class="nav-link dropdown-toggle hide-arrow"
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img
                      src="../assets/img/avatars/1.png"
                      alt
                      class="w-px-40 h-auto rounded-circle" />
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
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">PRINCIPAL DESK</h4>




            <!-- Hoverable Table rows -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6 ">
                  <div class="h5 card-header">PRINCIPAL DESK</div>
                </div>

                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_principal-desk.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Descripition</th>
                      <th>Img</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <?php
                  include('../common/dbcon.php');
                  $result = mysqli_query($conn, "SELECT * FROM principle ORDER BY principle_id DESC");
                  ?>

                  <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><strong><?= $row['name']; ?></strong></td>
                        <td class="table-data"><?= $row['description']; ?></td>
                        <td><img src="../assets/img/college/principal-desk/<?= $row['image']; ?>" width="60"></td>
                        <td>
                          <div class="d-flex">
                            <a href="edit-principal-desk.php?principle_id=<?= $row['principle_id']; ?>" class="me-2">
                              <button type="button" class="btn rounded-pill btn-primary" style="width: 109px;">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </button>
                            </a>

                            <a href="delete_principal-desk.php?principle_id=<?= $row['principle_id']; ?>"
                              onclick="return confirm('Are you sure you want to delete this news?');"
                              class="me-2">
                              <button type="button" class="btn rounded-pill btn-danger" style="width: 113px;">
                                <i class="bx bx-trash me-1"></i> Delete
                              </button>
                            </a>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>

                </table>
              </div>
            </div>
            <!--/ Hoverable Table rows -->


            <hr class="my-5" />


            <!-- Footer -->
            <!-- Footer -->
            <?php
            include('../common/footer.php');

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

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->
    <?php
    include('../common/footer-link.php');


    ?>
    <!-- Core JS -->

</body>

</html>