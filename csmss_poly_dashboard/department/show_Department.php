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
        <?php
        include '../common/header.php';
        ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">DEPARTMENT DETAILS</h4>

            <!-- Hoverable Table rows -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6 ">
                  <div class="h5 card-header">Department </div>
                </div>

                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_Department.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Img</th>
                      <th>Department</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php
                    include('../common/dbcon.php');

                    $sql = "SELECT * FROM department";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      while ($dept = $result->fetch_assoc()) {
                        echo "<tr>
            <td>
                <ul class='list-unstyled users-list m-0 avatar-group d-flex align-items-center'>
                    <li class='avatar avatar-xs'>
                        <img src='../assets/img/department/{$dept['image']}' alt='Avatar' style='height:40px; width:50px;'/>
                    </li>
                </ul>
            </td>
            <td>{$dept['department']}</td>
            <td>
                <a href='edit_Department.php?id={$dept['id']}' class='text-white'>
                    <button type='button' class='btn rounded-pill btn-primary'>
                        <i class='bx bx-edit-alt me-1'></i> Edit
                    </button>
                </a>
                <a href='delete_Department.php?id={$dept['id']}' onclick='return confirm(\"Are you sure?\")' class='text-white'>
                    <button type='button' class='btn rounded-pill btn-primary'>
                        <i class='bx bx-trash me-1'></i> Delete
                    </button>
                </a>
            </td>
        </tr>";
                      }
                    } else {
                      echo "<tr><td colspan='3'>No departments found</td></tr>";
                    }
                    ?>
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