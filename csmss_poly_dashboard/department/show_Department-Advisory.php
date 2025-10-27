<?php include "../common/dbcon.php" ?>
<?php include '../common/auth.php'; ?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
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
                        <h4 class="text-muted fw-bold py-3 mb-4 ms-3">DEPARTMENT ADVISORY BOARD (DAB)</h4>
                        <div class="card">
                            <ul class="nav nav-tabs ">
                                <li class="active"><a data-toggle="tab" href="#Civil">Civil Engineering</a></li>
                                <li><a data-toggle="tab" href="#Electrical">Electrical Engineering</a></li>
                                <li><a data-toggle="tab" href="#Mechanical">Mechanical Engineering</a></li>
                                <li><a data-toggle="tab" href="#Electronic">Electronic and Engineering</a></li>
                                <li><a data-toggle="tab" href="#Computer">Computer Engineering</a></li>
                                <li><a data-toggle="tab" href="#Artificial">Artificial intelligence Engineering</a></li>
                            </ul>


                            <div class="tab-content">
                                <div id="Civil" class="tab-pane fade in active">

                                    <!-- new civil start -->


                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Advisory.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <?php

                                        $department = "SELECT * FROM department_advisory WHERE department='Civil Engineering'";
                                        $department_run = mysqli_query($conn, $department);
                                        $sr = 1;

                                        if (!$department_run) {
                                            echo "Query Error: " . mysqli_error($conn);
                                        }

                                        if (mysqli_num_rows($department_run) > 0) {
                                        ?>


                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>sr.no.</th>
                                                        <th>Name of the Committee Member</th>
                                                        <th>Details</th>
                                                        <th>Department</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    while ($Advisory = mysqli_fetch_array($department_run)) {


                                                    ?>
                                                        <tr>
                                                            <td><?= $sr++; ?></td>
                                                            <td><?php echo $Advisory['name_of_the_committee_member']; ?></td>
                                                            <td><?php echo $Advisory['details']; ?></td>
                                                            <td><?php echo $Advisory['department']; ?></td>
                                                            <td>
                                                                <div>
                                                                    <a href="edit_Department-Advisory.php?id=<?= $Advisory['id']; ?>" class="btn btn-primary rounded-pill"><i class="bx bx-edit-alt me-1"></i>Edit</a>

                                                                    <a href="delete_Department-Advisory.php?id=<?= $Advisory['id']; ?>&department=<?= urlencode($Advisory['department']); ?>" class="btn btn-danger rounded-pill">
                                                                        <i class="bx bx-trash me-1"></i> Delete
                                                                    </a>


                                                                </div>

                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        <?php
                                        } else {
                                            echo "No Record Found";
                                        }
                                        ?>
                                    </div>

                                </div>
                                <!-- Civil Department End -->


                                <div id="Electrical" class="tab-pane fade">

                                    <!-- Electrical department start -->

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Advisory.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">

                                        <?php

                                        $department = "SELECT * FROM department_advisory WHERE department='Electrical Engineering'";
                                        $department_run = mysqli_query($conn, $department);
                                        $sr = 1;
                                        if (!$department_run) {
                                            echo "Query Error: " . mysqli_error($conn);
                                        }

                                        if (mysqli_num_rows($department_run) > 0) {
                                        ?>


                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>sr.no.</th>
                                                        <th>Name of the Committee Member</th>
                                                        <th>Details</th>
                                                        <th>Department</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    while ($Advisory = mysqli_fetch_array($department_run)) {

                                                    ?>
                                                        <tr>
                                                            <td><?= $sr++; ?></td>
                                                            <td><?php echo $Advisory['name_of_the_committee_member']; ?></td>
                                                            <td><?php echo $Advisory['details']; ?></td>
                                                            <td><?php echo $Advisory['department']; ?></td>
                                                            <td>
                                                                <div>
                                                                    <a href="edit_Department-Advisory.php?id=<?= $Advisory['id']; ?>" class="btn btn-primary rounded-pill"><i class="bx bx-edit-alt me-1"></i>Edit</a>

                                                                    <a href="delete_Department-Advisory.php?id=<?= $Advisory['id']; ?>&department=<?= urlencode($Advisory['department']); ?>" class="btn btn-danger rounded-pill">
                                                                        <i class="bx bx-trash me-1"></i> Delete
                                                                    </a>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        <?php
                                        } else {
                                            echo "No Record Found";
                                        }

                                        ?>
                                    </div>

                                </div>
                                <!-- electrical end -->

                                <!-- mechanical start -->
                                <div id="Mechanical" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Advisory.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">

                                        <?php

                                        $department = "SELECT * FROM department_advisory WHERE department='Mechanical Engineering'";
                                        $department_run = mysqli_query($conn, $department);
                                        $sr = 1;
                                        if (!$department_run) {
                                            echo "Query Error: " . mysqli_error($conn);
                                        }

                                        if (mysqli_num_rows($department_run) > 0) {
                                        ?>


                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>sr.no.</th>
                                                        <th>Name of the Committee Member</th>
                                                        <th>Details</th>
                                                        <th>Department</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    while ($Advisory = mysqli_fetch_array($department_run)) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $sr++; ?></td>
                                                            <td><?php echo $Advisory['name_of_the_committee_member']; ?></td>
                                                            <td><?php echo $Advisory['details']; ?></td>
                                                            <td><?php echo $Advisory['department']; ?></td>

                                                            <td>

                                                                <div><a href="edit_Department-Advisory.php?id=<?= $Advisory['id']; ?>" class="btn btn-primary rounded-pill"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                                    <a href="delete_Department-Advisory.php?id=<?= $Advisory['id']; ?>&department=<?= urlencode($reg_row['department']); ?>" class="btn btn-danger rounded-pill">
                                                                        <i class="bx bx-trash me-1"></i> Delete
                                                                    </a>



                                                                </div>

                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>

                                            </table>
                                        <?php
                                        } else {
                                            echo "No Record Found";
                                        }
                                        ?>
                                    </div>

                                </div>
                                <!-- mechanical department end -->

                                <!-- electronic start -->
                                <div id="Electronic" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Advisory.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <?php

                                        $department = "SELECT * FROM department_advisory WHERE department='Electronics Engineering'";
                                        $department_run = mysqli_query($conn, $department);
                                        $sr = 1;
                                        if (!$department_run) {
                                            echo "Query Error: " . mysqli_error($conn);
                                        }

                                        if (mysqli_num_rows($department_run) > 0) {
                                        ?>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>sr.no.</th>
                                                        <th>Name of the Committee Member</th>
                                                        <th>Details</th>
                                                        <th>Department</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    while ($reg_row = mysqli_fetch_array($department_run)) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $reg_row['id']; ?></td>
                                                            <td><?php echo $reg_row['name_of_the_committee_member']; ?></td>
                                                            <td><?php echo $reg_row['details']; ?></td>
                                                            <td><?php echo $reg_row['department']; ?></td>

                                                            </td>

                                                            <td>

                                                                <div> <a href="edit_Department-Advisory.php?id=<?= $reg_row['id']; ?>" class="btn btn-primary rounded-pill"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                                    <a href="delete_Department-Advisory.php?id=<?= $reg_row['id']; ?>&department=<?= urlencode($reg_row['department']); ?>" class="btn btn-danger rounded-pill">
                                                                        <i class="bx bx-trash me-1"></i> Delete
                                                                    </a>


                                                                </div>

                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        <?php
                                        } else {
                                            echo "No Record Found";
                                        }
                                        ?>
                                    </div>

                                </div>
                                <!-- electronic end -->

                                <!-- computer start -->
                                <div id="Computer" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Department-Advisory.php">
                                                <button type="button" class="btn btn-primary me-3">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <?php

                                        $department = "SELECT * FROM department_advisory WHERE department='Computer Engineering'";
                                        $department_run = mysqli_query($conn, $department);
                                        $sr = 1;
                                        if (!$department_run) {
                                            echo "Query Error: " . mysqli_error($conn);
                                        }

                                        if (mysqli_num_rows($department_run) > 0) {
                                        ?>



                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>sr.no.</th>
                                                        <th>Name of the Committee Member</th>
                                                        <th>Details</th>
                                                        <th>Department</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    while ($reg_row = mysqli_fetch_array($department_run)) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $reg_row['id']; ?></td>
                                                            <td><?php echo $reg_row['name_of_the_committee_member']; ?></td>
                                                            <td><?php echo $reg_row['details']; ?></td>
                                                            <td><?php echo $reg_row['department']; ?></td>

                                                            <td>
                                                                <div> <a href="edit_Department-Advisory.php?id=<?= $reg_row['id']; ?>" class="btn btn-primary rounded-pill"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                                    <a href="delete_Department-Advisory.php?id=<?= $reg_row['id']; ?>&department=<?= urlencode($reg_row['department']); ?>" class="btn btn-danger rounded-pill">
                                                                        <i class="bx bx-trash me-1"></i> Delete
                                                                    </a>

                                                                </div>

                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        <?php
                                        } else {
                                            echo "No Record Found";
                                        }
                                        ?>
                                    </div>


                                </div>

                                <!-- computer department end -->

                                <!-- artificial department start -->
                                <div id="Artificial" class="tab-pane fade">

                                </div>
                            </div>
                        </div>

                        <!-- artificial department end -->


                        <!-- Content -->

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