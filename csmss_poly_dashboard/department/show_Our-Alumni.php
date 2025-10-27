<?php include "../common/dbcon.php" ?>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

        <!-- Hoverable Table rows -->
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">OUR ALUMNI</h4>

            <div class="card">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#civil">Civil Engineering</a></li>
                <li><a data-toggle="tab" href="#Electrical">Electrical Engineering</a></li>
                <li><a data-toggle="tab" href="#Mechanical">Mechanical Engineering</a></li>
                <li><a data-toggle="tab" href="#Computer">Computer Engineering</a></li>
              </ul>
              <div class="tab-content">
                <div id="civil" class="tab-pane fade in active">

                  <!-- Content -->
                  <div class="row">
                    <div class="col-lg-6 ">
                      <div class="h5 card-header">OUR ALUMNI </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_Our-Alumni.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">
                    <?php
                    $department = "SELECT * FROM our_alumni WHERE department='Civil Engineering'";
                    $department_run = mysqli_query($conn, $department);
                    if (!$department_run) {
                      echo "Query Error: " . mysqli_error($conn);
                    }
                    if (mysqli_num_rows($department_run) > 0) {
                    ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Sr. No.</th>
                            <th>Name of Student</th>
                            <th>Year of Passing</th>
                            <th>Achievement Details</th>
                            <th>DEPARTMENT</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php
                          while ($reg_now = mysqli_fetch_array($department_run)) {
                          ?>
                            <tr>
                              <td><?php echo $reg_now['id']; ?></td>
                              <td><?php echo $reg_now['sname']; ?></td>
                              <td><?php echo $reg_now['ypassing']; ?></td>
                              <td><?php echo $reg_now['achievement_d']; ?></td>
                              <td><?php echo $reg_now['department']; ?></td>
                              <td>
                                <a href="edit_Our-Alumni.php?id=<?php echo $reg_now['id']; ?>" class="text-white">
                                  <button type="button" class="btn rounded-pill btn-primary">
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                  </button>
                                </a>
                                <a href="delete_Our-Alumni.php?id=<?php echo $reg_now['id']; ?>&department=<?php echo urlencode($reg_now['department']); ?>">
                                  <button type="button" class="btn rounded-pill btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this record?');">
                                    <i class="bx bx-trash me-1"></i> Delete
                                  </button>
                                </a>
                              </td>
                            </tr>
                            <tr>
                            <?php } ?>
                        </tbody>
                      </table>
                    <?php
                    } else {
                      echo "no record found";
                    }
                    ?>
                  </div>
                </div>

                <!--/ Hoverable Table rows -->

                <div id="Electrical" class="tab-pane fade">

                  <!-- Content -->
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="h5 card-header">OUR ALUMNI </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_Our-Alumni.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">
                    <?php
                    $query = "SELECT * FROM our_alumni WHERE department='Electrical Engineering'";
                    $result = mysqli_query($conn, $query);

                    if (!$result) {
                      echo "Query Error: " . mysqli_error($conn);
                    } elseif (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Sr. No.</th>
                            <th>Name of Student</th>
                            <th>Year of Passing</th>
                            <th>Achievement Details</th>
                            <th>Department</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php while ($reg_now = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                              <td><?php echo $reg_now['id']; ?></td>
                              <td><?php echo $reg_now['sname']; ?></td>
                              <td><?php echo $reg_now['ypassing']; ?></td>
                              <td><?php echo $reg_now['achievement_d']; ?></td>
                              <td><?php echo $reg_now['department']; ?></td>
                              <td>
                                <a href="edit_Our-Alumni.php?id=<?php echo $reg_now['id']; ?>" class="btn btn-info">Edit</a>
                                <a href="delete_Our-Alumni.php?id=<?php echo $reg_now['id']; ?>&department=<?php echo urlencode($reg_now['department']); ?>">
                                  <button type="button" class="btn rounded-pill btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this record?');">
                                    <i class="bx bx-trash me-1"></i> Delete
                                  </button>
                                </a>

                              </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    <?php
                    } else {
                      echo "No record found";
                    }
                    ?>
                  </div>
                </div>

                <div id="Mechanical" class="tab-pane fade">

                  <!-- Content -->
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="h5 card-header">OUR ALUMNI</div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_Our-Alumni.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">
                    <?php
                    $query = "SELECT * FROM our_alumni WHERE department='Mechanical Engineering'";
                    $result = mysqli_query($conn, $query);

                    if (!$result) {
                      echo "Query Error: " . mysqli_error($conn);
                    } elseif (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Sr. No.</th>
                            <th>Name of Student</th>
                            <th>Year of Passing</th>
                            <th>Achievement Details</th>
                            <th>Department</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php while ($reg_now = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                              <td><?php echo $reg_now['id']; ?></td>
                              <td><?php echo $reg_now['sname']; ?></td>
                              <td><?php echo $reg_now['ypassing']; ?></td>
                              <td><?php echo $reg_now['achievement_d']; ?></td>
                              <td><?php echo $reg_now['department']; ?></td>
                              <td>
                                <a href="edit_Our-Alumni.php?id=<?php echo $reg_now['id']; ?>" class="btn btn-info">Edit</a>
                                <a href="delete_Our-Alumni.php?id=<?php echo $reg_now['id']; ?>&department=<?php echo urlencode($reg_now['department']); ?>">
                                  <button type="button" class="btn rounded-pill btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this record?');">
                                    <i class="bx bx-trash me-1"></i> Delete
                                  </button>
                                </a>

                              </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    <?php
                    } else {
                      echo "No record found";
                    }
                    ?>
                  </div>
                </div>

                <div id="Computer" class="tab-pane fade">
                  <!-- Content -->
                  <div class="row">
                    <div class="col-lg-6 ">
                      <div class="h5 card-header">OUR ALUMNI </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_Our-Alumni.php">
                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                      </a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">
                    <?php
                    $department = "SELECT * FROM our_alumni WHERE department='Computer Engineering'";
                    $department_run = mysqli_query($conn, $department);
                    if (!$department_run) {
                      echo "Query Error: " . mysqli_error($conn);
                    }
                    if (mysqli_num_rows($department_run) > 0) {
                    ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Sr. No.</th>
                            <th>Name of Student</th>
                            <th>Year of Passing</th>
                            <th>Achievement Details</th>
                            <th>Department</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php
                          while ($reg_now = mysqli_fetch_array($department_run)) {
                          ?>
                            <tr>
                              <td><?php echo $reg_now['id']; ?></td>
                              <td><?php echo $reg_now['sname']; ?></td>
                              <td><?php echo $reg_now['ypassing']; ?></td>
                              <td><?php echo $reg_now['achievement_d']; ?></td>
                              <td><?php echo $reg_now['department']; ?></td>
                              <td>
                                <a href="edit_Our-Alumni.php?id=<?php echo $reg_now['id']; ?>" class="btn btn-info ">edit</a>
                                <a href="delete_Our-Alumni.php?id=<?php echo $reg_now['id']; ?>&department=<?php echo urlencode($reg_now['department']); ?>">
                                  <button type="button" class="btn rounded-pill btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this record?');">
                                    <i class="bx bx-trash me-1"></i> Delete
                                  </button>
                                </a>



                              </td>
                            </tr>
                            <tr>
                            <?php } ?>
                        </tbody>
                      </table>
                    <?php
                    } else {
                      echo "no record found";
                    }
                    ?>
                  </div>
                </div>


              </div>
            </div>

            <hr class="my-5" />


            <!-- Footer -->
            <!-- Footer -->
            <?php
            include('../common/footer.php');

            ?>
            <!-- / Footer -->
          </div>
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->

        <!-- / Layout page -->


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