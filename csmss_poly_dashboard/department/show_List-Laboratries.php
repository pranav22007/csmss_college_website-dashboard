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
<style>
  .nav-tabs {
    display: flex;
    overflow-x: auto;
    white-space: nowrap;
    flex-wrap: nowrap;
  }

  .nav-tabs::-webkit-scrollbar {
    height: 6px;
    /* Horizontal scrollbar height */
  }

  .nav-tabs::-webkit-scrollbar-thumb:hover {
    background: #555;
  }

  .nav-tabs li {
    flex: 0 0 auto;
    /* Prevent shrinking */
  }
</style>

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
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">LIST OF LABORATORIES </h4>
            <div class="card">


              <ul class="nav nav-tabs overflow-x-auto ">
                <li class="active"><a data-toggle="tab" href="#home">Civil Engineering</a></li>
                <li><a data-toggle="tab" href="#menu1">Electrical Engineering</a></li>
                <li><a data-toggle="tab" href="#menu2">Mechanical Engineering</a></li>
                <li><a data-toggle="tab" href="#menu3">Electronic and Telecommunication Engineering</a></li>
                <li><a data-toggle="tab" href="#menu4">Computer Engineering</a></li>
                <li><a data-toggle="tab" href="#menu5">Artificial Intelligence and Machine Learning</a></li>
              </ul>


              <!-- CIVIL DEPARTMENT START -->
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-lg-6 ">

                    </div>

                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_list-laboratries.php?department=<?php echo urlencode($_GET['department'] ?? 'Civil Engineering'); ?>">
                        <button type="button" name="add" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <?php
                    require '../common/dbcon.php';
                    ?>
                    <?php
                    $department = 'Civil Engineering'; // or get from tab
                    $list_data = "SELECT * FROM list_data WHERE department = '$department'";
                    $list_data_run = mysqli_query($conn, $list_data);
                    $sr = 1;

                    if (mysqli_num_rows($list_data_run) > 0) {
                    ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Sr. No.</th>
                            <th>Name of Laboratories</th>
                            <th>Cost of Equipments (Rs.)</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php
                          while ($list_row = mysqli_fetch_array($list_data_run)) {
                            $data[] = $list_row;
                            echo "<script>console.log(" . json_encode($data) . ");</script>";
                          ?>
                            <tr>
                              <td><?= $sr++; ?></td>
                              <td><strong><?php echo $list_row['name_of_laboratries']; ?></strong></td>
                              <td><?php echo $list_row['cost']; ?></td>

                              <td>
                                <div>
                                  <a href="edit_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-primary">
                                      <i class="bx bx-edit-alt me-1"></i> Edit
                                    </button>
                                  </a>
                                  <a href="delete_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-danger">
                                      <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    <?php
                    } else {
                      echo "no record found";
                    }
                    ?>
                  </div>
                </div>
                <!-- CIVIL DEPARTMENT END -->


                <!-- electrical depaertment start -->
                <div id="menu1" class="tab-pane fade">
                  <div class="row">
                    <div class="col-lg-6 "></div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_List-Laboratries.php?department=<?php echo urlencode($_GET['department'] ?? 'Electrical Engineering'); ?>">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <?php
                    require '../common/dbcon.php';
                    ?>
                    <?php
                    $department = 'Electrical Engineering'; // or get from tab
                    $list_data = "SELECT * FROM list_data WHERE department = '$department'";
                    $list_data_run = mysqli_query($conn, $list_data);
                    $sr = 1;

                    $data = [];
                    if (mysqli_num_rows($list_data_run) > 0) {
                    ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Sr.No.</th>
                            <th>Name of Laboratries</th>
                            <th>Cost of Equipments (Rs.)</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php
                          while ($list_row = mysqli_fetch_array($list_data_run)) {
                            $data[] = $list_row;
                            echo "<script>console.log(" . json_encode($data) . ");</script>";
                          ?>
                            <tr>
                              <td><?= $sr++; ?></td>
                              <td><strong><?php echo $list_row['name_of_laboratries']; ?></strong></td>
                              <td><?php echo $list_row['cost']; ?></td>

                              <td>
                                <div>
                                  <a href="edit_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-primary">
                                      <i class="bx bx-edit-alt me-1"></i> Edit
                                    </button>
                                  </a>
                                  <a href="delete_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-danger">
                                      <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                  </a>

                                </div>
                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    <?php
                    } else {
                      echo "no record found";
                    }
                    ?>
                  </div>
                </div>
                <!-- electrical depaertment end -->

                <!-- mechanical depaertment start -->
                <div id="menu2" class="tab-pane fade">
                  <div class="row">
                    <div class="col-lg-6 "></div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_List-Laboratries.php?department=<?php echo urlencode($_GET['department'] ?? 'Mechanical Engineering'); ?>">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <?php
                    require '../common/dbcon.php';
                    ?>
                    <?php
                    $department = 'Mechanical Engineering'; // or get from tab
                    $list_data = "SELECT * FROM list_data WHERE department = '$department'";
                    $list_data_run = mysqli_query($conn, $list_data);
                    $sr = 1;

                    $data = [];
                    if (mysqli_num_rows($list_data_run) > 0) {
                    ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Sr.No.</th>
                            <th>Name of Laboratries</th>
                            <th>Cost of Equipments (Rs.)</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php
                          while ($list_row = mysqli_fetch_array($list_data_run)) {
                            $data[] = $list_row;
                            echo "<script>console.log(" . json_encode($data) . ");</script>";
                          ?>
                            <tr>
                              <td><?= $sr++; ?></td>
                              <td><strong><?php echo $list_row['name_of_laboratries']; ?></strong></td>
                              <td><?php echo $list_row['cost']; ?></td>

                              <td>
                                <div>
                                  <a href="edit_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-primary">
                                      <i class="bx bx-edit-alt me-1"></i> Edit
                                    </button>
                                  </a>
                                  <a href="delete_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-danger">
                                      <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    <?php
                    } else {
                      echo "no record found";
                    }
                    ?>
                  </div>
                </div>
                <!-- mechanical department end -->


                <!-- Electronics department start -->
                <div id="menu3" class="tab-pane fade">
                  <div class="row">
                    <div class="col-lg-6 "></div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_List-Laboratries.php?department=<?php echo urlencode($_GET['department'] ?? 'Electronics & Tele-communication Engineering'); ?>">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <?php
                    require '../common/dbcon.php';
                    ?>
                    <?php
                    $department = 'Electronics & Tele-communication Engineering'; // or get from tab
                    $list_data = "SELECT * FROM list_data WHERE department = '$department'";
                    $list_data_run = mysqli_query($conn, $list_data);
                    $sr = 1;

                    $data = [];
                    if (mysqli_num_rows($list_data_run) > 0) {
                    ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Sr.No.</th>
                            <th>Name of Laboratries</th>
                            <th>Cost of Equipments (Rs.)</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php
                          while ($list_row = mysqli_fetch_array($list_data_run)) {
                            $data[] = $list_row;
                            echo "<script>console.log(" . json_encode($data) . ");</script>";
                          ?>
                            <tr>
                              <td><?= $sr++; ?></td>
                              <td><strong><?php echo $list_row['name_of_laboratries']; ?></strong></td>
                              <td><?php echo $list_row['cost']; ?></td>

                              <td>
                                <div>
                                  <a href="edit_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-primary">
                                      <i class="bx bx-edit-alt me-1"></i> Edit
                                    </button>
                                  </a>
                                  <a href="delete_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-danger">
                                      <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    <?php
                    } else {
                      echo "no record found";
                    }
                    ?>
                  </div>
                </div>
                <!-- electronics department end -->


                <!-- computer department start -->
                <div id="menu4" class="tab-pane fade">
                  <div class="row">
                    <div class="col-lg-6 "></div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_List-Laboratries.php?department=<?php echo urlencode($_GET['department'] ?? 'Computer Engineering'); ?>">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <?php
                    require '../common/dbcon.php';
                    ?>
                    <?php
                    $department = 'Computer Engineering'; // or get from tab
                    $list_data = "SELECT * FROM list_data WHERE department = '$department'";
                    $list_data_run = mysqli_query($conn, $list_data);
                    $sr = 1;

                    $data = [];
                    if (mysqli_num_rows($list_data_run) > 0) {
                    ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Sr.No.</th>
                            <th>Name of Laboratries</th>
                            <th>Cost of Equipments (Rs.)</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php
                          while ($list_row = mysqli_fetch_array($list_data_run)) {
                            $data[] = $list_row;
                            echo "<script>console.log(" . json_encode($data) . ");</script>";
                          ?>
                            <tr>
                              <td><?= $sr++; ?></td>
                              <td><strong><?php echo $list_row['name_of_laboratries']; ?></strong></td>
                              <td><?php echo $list_row['cost']; ?></td>

                              <td>
                                <div>
                                  <a href="edit_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-primary">
                                      <i class="bx bx-edit-alt me-1"></i> Edit
                                    </button>
                                  </a>
                                  <a href="delete_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-danger">
                                      <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    <?php
                    } else {
                      echo "no record found";
                    }
                    ?>
                  </div>
                </div>
                <!-- computer department end -->

                <!-- artificial department start -->
                <div id="menu5" class="tab-pane fade">
                  <div class="row">
                    <div class="col-lg-6 "></div>
                    <div class="col-lg-6 d-flex justify-content-end">
                      <a href="add_List-Laboratries.php?department=<?php echo urlencode($_GET['department'] ?? 'Artificial Intelligence and Machine Learning'); ?>">
                        <button type="button" class="btn btn-primary me-4">ADD+</button>
                      </a>
                    </div>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <?php
                    require '../common/dbcon.php';
                    ?>
                    <?php
                    $department = 'Artificial Intelligence and Machine Learning'; // or get from tab
                    $list_data = "SELECT * FROM list_data WHERE department = '$department'";
                    $list_data_run = mysqli_query($conn, $list_data);
                    $sr = 1;

                    $data = [];
                    if (mysqli_num_rows($list_data_run) > 0) {
                    ?>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Sr.No.</th>
                            <th>Name of Laboratries</th>
                            <th>Cost of Equipments (Rs.)</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php
                          while ($list_row = mysqli_fetch_array($list_data_run)) {
                            $data[] = $list_row;
                            echo "<script>console.log(" . json_encode($data) . ");</script>";
                          ?>
                            <tr>
                              <td><?= $sr++; ?></td>
                              <td><strong><?php echo $list_row['name_of_laboratries']; ?></strong></td>
                              <td><?php echo $list_row['cost']; ?></td>

                              <td>
                                <div>
                                  <a href="edit_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-primary">
                                      <i class="bx bx-edit-alt me-1"></i> Edit
                                    </button>
                                  </a>
                                  <a href="delete_List-Laboratries.php?id=<?php echo $list_row['id']; ?>" class="text-white">
                                    <button type="button" class="btn rounded-pill btn-danger">
                                      <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    <?php
                    } else {
                      echo "no record found";
                    }
                    ?>
                  </div>
                </div>
                <!-- artificial department end -->



              </div>
            </div>

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