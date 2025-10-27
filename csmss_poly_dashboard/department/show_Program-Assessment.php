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
                        <h4 class="text-muted fw-bold py-3 mb-4">PROGRAMME ASSESSMENT COMMITTEE (PAC) </h4>

                        <div class="card">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#Civil">Civil Engineering</a></li>
                                <li><a data-toggle="tab" href="#Electrical">Electrical Engineering</a></li>
                                <li><a data-toggle="tab" href="#Mechanical">Mechanical Engineering</a></li>
                                <li><a data-toggle="tab" href="#Electronics">Electronics & Tele-communication Engineering </a></li>
                                <li><a data-toggle="tab" href="#Computer">Computer Engineering</a></li>
                            </ul>

                            <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) start -->
                            <div class="tab-content">
                                <div id="Civil" class="tab-pane fade in active">

                                    <!-- Civil Engineering start -->

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>


                                        <div class="col-lg-6 d-flex justify-content-end">

                                            <a href="add_Program-Assessment.php">
                                                <button type="button" class="btn btn-primary me-2">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <?php
                                        $register = "SELECT * FROM program WHERE choose_department='Civil Engineering'";

                                        $register_run = mysqli_query($conn, $register);
                                        $sr = 1;

                                        if (!$register_run) {
                                            echo "Query Error:" . mysqli_error($conn);
                                        }
                                        if (mysqli_num_rows($register_run) > 0) {
                                        ?>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Name of Faculty</th>
                                                        <th>Representation</th>
                                                        <th>Designation</th>
                                                        <th>Department</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php while ($reg_row = mysqli_fetch_array($register_run)) { ?>
                                                        <tr>
                                                            <td><?= $sr++; ?></td>
                                                            <td><?php echo $reg_row['name_of_faculty']; ?></td>
                                                            <td><?php echo $reg_row['representation']; ?></td>
                                                            <td><?php echo $reg_row['designation']; ?></td>
                                                            <td><?php echo $reg_row['choose_department']; ?></td>

                                                            <td>
                                                                <div>
                                                                    <a href="edit_Program-Assessment.php?id=<?= $reg_row['id']; ?>" class="btn btn-primary rounded-pill"><i class="bx bx-edit-alt me-1"></i>Edit</a>

                                                                    <a href="delete_Program-Assessment.php?id=<?= $reg_row['id']; ?>$reg_row=<?= urlencode($reg_row['choose_department']); ?>" class="btn btn-danger rounded-pill">
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


                                    <!-- Civil Engineering END -->

                                </div>
                                <!--PROGRAMME ASSESSMENT COMMITTEE (PAC) end  -->


                                <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) start -->
                                <!--  Electrical engineering start -->
                                <div id="Electrical" class="tab-pane fade">


                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Program-Assessment.php">
                                                <button type="button" class="btn btn-primary me-2">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <?php
                                        $register = "SELECT * FROM program WHERE choose_department='Electrical Engineering'";
                                        $register_run = mysqli_query($conn, $register);
                                        $sr = 1;

                                        if (!$register_run) {
                                            echo "Query Error:" . mysqli_error($conn);
                                        }
                                        if (mysqli_num_rows($register_run) > 0) {
                                        ?>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Name of Faculty</th>
                                                        <th>Representation</th>
                                                        <th>Designation</th>
                                                        <th>Actions</th>

                                                        <th>Department</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php while ($reg_row = mysqli_fetch_array($register_run)) { ?>

                                                        <!--  Electrical engineering start -->
                                                        <tr>
                                                            <td><?= $sr++; ?></td>
                                                            <td><?php echo $reg_row['name_of_faculty']; ?></td>
                                                            <td><?php echo $reg_row['representation']; ?></td>
                                                            <td><?php echo $reg_row['designation']; ?></td>
                                                            <td><?php echo $reg_row['choose_department']; ?></td>

                                                            <td>
                                                                <div>
                                                                    <a href="edit_Program-Assessment.php?id=<?= $reg_row['id']; ?>" class="btn btn-primary rounded-pill"><i class="bx bx-edit-alt me-1"></i>Edit</a>

                                                                    <a href="delete_Program-Assessment.php?id=<?= $reg_row['id']; ?>$reg_rowt=<?= urlencode($reg_row['choose_department']); ?>" class="btn btn-danger rounded-pill">
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


                                    <!--  Electrical engineering end -->
                                </div>

                                <!-- Mechanical Engineering start-->
                                <div id="Mechanical" class="tab-pane fade">


                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Program-Assessment.php">
                                                <button type="button" class="btn btn-primary me-2">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <?php
                                        $register = "SELECT * FROM program WHERE choose_department='Mechanical Engineering'";
                                        $register_run = mysqli_query($conn, $register);
                                        $sr = 1;

                                        if (!$register_run) {
                                            echo "Query Error:" . mysqli_error($conn);
                                        }
                                        if (mysqli_num_rows($register_run) > 0) {
                                        ?>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Name of Faculty</th>
                                                        <th>Representation</th>
                                                        <th>Designation</th>
                                                        <th>Department</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php while ($reg_row = mysqli_fetch_array($register_run)) { ?>

                                                        <!-- Mechanical Engineering start-->
                                                        <tr>
                                                            <td><?= $sr++; ?></td>
                                                            <td><?php echo $reg_row['name_of_faculty']; ?></td>
                                                            <td><?php echo $reg_row['representation']; ?></td>
                                                            <td><?php echo $reg_row['designation']; ?></td>
                                                            <td><?php echo $reg_row['choose_department']; ?></td>
                                                            <td>
                                                                <div>
                                                                    <a href="edit_Program-Assessment.php?id=<?= $reg_row['id']; ?>" class="btn btn-primary rounded-pill"><i class="bx bx-edit-alt me-1"></i>Edit</a>

                                                                    <a href="delete_Program-Assessment.php?id=<?= $reg_row['id']; ?>$reg_row=<?= urlencode($reg_row['choose_department']); ?>" class="btn btn-danger rounded-pill">
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



                                    <!-- Mechanical Engineering end-->


                                </div>


                                <!-- Electronics & Tele-communication Engineering  start -->
                                <div id="Electronics" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Program-Assessment.php">
                                                <button type="button" class="btn btn-primary me-2">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <?php
                                        $register = "SELECT * FROM program WHERE choose_department='Electronics & Tele-communication Engineering'";
                                        $register_run = mysqli_query($conn, $register);
                                        $sr = 1;

                                        if (!$register_run) {
                                            echo "Query Error:" . mysqli_error($conn);
                                        }
                                        if (mysqli_num_rows($register_run) > 0) {
                                        ?>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Name of Faculty</th>
                                                        <th>Representation</th>
                                                        <th>Designation</th>
                                                        <th>Department</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php while ($reg_row = mysqli_fetch_array($register_run)) { ?>
                                                        <tr>
                                                            <td><?= $sr++; ?></td>
                                                            <td><?php echo $reg_row['name_of_faculty']; ?></td>
                                                            <td><?php echo $reg_row['representation']; ?></td>
                                                            <td><?php echo $reg_row['designation']; ?></td>
                                                            <td><?php echo $reg_row['choose_department']; ?></td>

                                                            <td>
                                                                <div>
                                                                    <a href="edit_Program-Assessment.php?id=<?= $reg_row['id']; ?>" class="btn btn-primary rounded-pill"><i class="bx bx-edit-alt me-1"></i>Edit</a>

                                                                    <a href="delete_Program-Assessment.php?id=<?= $reg_row['id']; ?>$reg_row=<?= urlencode($reg_row['choose_department']); ?>" class="btn btn-danger rounded-pill">
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


                                    <!-- Electronics & Tele-communication end -->



                                </div>

                                <!-- Computer Engineering  start -->
                                <div id="Computer" class="tab-pane fade">

                                    <div class="row">
                                        <div class="col-lg-6 ">

                                        </div>

                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <a href="add_Program-Assessment.php">
                                                <button type="button" class="btn btn-primary me-2">ADD+</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <?php
                                        $register = "SELECT * FROM program WHERE choose_department='Computer Engineering'";
                                        $register_run = mysqli_query($conn, $register);
                                        $sr = 1;

                                        if (!$register_run) {
                                            echo "Query Error:" . mysqli_error($conn);
                                        }
                                        if (mysqli_num_rows($register_run) > 0) {
                                        ?>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Name of Faculty</th>
                                                        <th>Representation</th>
                                                        <th>Designation</th>
                                                        <th>Department</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php while ($reg_row = mysqli_fetch_array($register_run)) { ?>
                                                        <tr>
                                                            <td><?= $sr++; ?></td>
                                                            <td><?php echo $reg_row['name_of_faculty']; ?></td>
                                                            <td><?php echo $reg_row['representation']; ?></td>
                                                            <td><?php echo $reg_row['designation']; ?></td>
                                                            <td><?php echo $reg_row['choose_department']; ?></td>

                                                            <td>
                                                                <div>
                                                                    <a href="edit_Program-Assessment.php?id=<?= $reg_row['id']; ?>" class="btn btn-primary rounded-pill"><i class="bx bx-edit-alt me-1"></i>Edit</a>

                                                                    <a href="delete_Program-Assessment.php?id=<?= $reg_row['id']; ?>$reg_row=<?= urlencode($reg_row['choose_department']); ?>" class="btn btn-danger rounded-pill">
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


                                    <!-- Computer Engineering end -->
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

                        <div class="content-backdrop fade"></div>

                        <!-- Content wrapper -->
                    </div>
                    <!-- / Layout page -->
                </div>
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