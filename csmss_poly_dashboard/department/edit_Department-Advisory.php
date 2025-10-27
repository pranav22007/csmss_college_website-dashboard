<?php include "../common/dbcon.php" ?>
<?php include '../common/auth.php'; ?>
<?php

$id = $_GET['id'];
$department_query = "SELECT * FROM department_advisory WHERE id='$id'";
$department_query_run = mysqli_query($conn, $department_query);


if (mysqli_num_rows($department_query_run) > 0) {
    while ($row = mysqli_fetch_array($department_query_run)) {


        if (isset($_POST['update_btn'])) {

            $name_of_the_committee_member = $_POST['name_of_the_committee_member'];
            $department = $_POST['department'];
            $details = $_POST['details'];

            $query_update = "UPDATE department_advisory 
                 SET name_of_the_committee_member='$name_of_the_committee_member', 
                     department='$department', 
                     details='$details' 
                 WHERE id='$id'";
                 
            $query_update_run = mysqli_query($conn, $query_update);

            if ($query_update_run) {
                echo "Data updated";

                header("Location: show_Department-Advisory.php");
            } else {
                echo "Data not updated";
                header("Location: show_Department-Advisory.php");
            }
        }


?>






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
        include '../common/header_link.php';

        ?>

        <body>
            <!-- Layout wrapper -->
            <div class="layout-wrapper layout-content-navbar">
                <div class="layout-container">
                    <!-- Menu -->

                    <?php
                    include '../common/sidebar.php';

                    ?>
                    <!-- / Menu -->

                    <!-- Layout container -->
                    <div class="layout-page">
                        <!-- Navbar -->

                        <?php
                        include '../common/header.php';

                        ?>

                        <!-- / Navbar -->

                        <div class="container">
                            <div class="card my-4">
                                <h5 class="card-header">EDIT DEPARTMENT ADVISORY BOARD (DAB)</h5>
                                <div class="card-body">
                                    <div class="container mt-3">
                                        <form action="" method="POST">
                                            <div class="row">



                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3 mt-3">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="Text"
                                                            placeholder="Add Programs"
                                                            name="name_of_the_committee_member" value="<?php echo $row['name_of_the_committee_member']; ?>" />
                                                        <label for="Name">Name of the Committee Member</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3 mt-3">
                                                        <select class="form-select" id="Dropdown" name="department">
                                                            <option selected disabled>Choose Department</option>
                                                            <option value="Civil Engineering" <?= $row['department'] == 'Civil Engineering' ? 'selected' : '' ?>>Civil Engineering</option>
                                                            <option value="Electrical Engineering" <?= $row['department'] == 'Electrical Engineering' ? 'selected' : '' ?>>Electrical engineering</option>
                                                            <option value="Mechanical Engineering " <?= $row['department'] == 'Mechanical Engineering' ? 'selected' : '' ?>>Mechanical Engineering</option>
                                                            <option value="Electronics Engineering" <?= $row['department'] == 'Electronics Engineering' ? 'selected' : '' ?>>Electronics & Tele-communication Engineering</option>
                                                            <option value="Computer Engineering" <?= $row['department'] == 'Computer Engineering' ? 'selected' : '' ?>>Computer Engineering</option>
                                                            <!-- <option value="">Artificial Intelligence and Machine Learning</option> -->
                                                        </select>
                                                        <label for="Dropdown"> Department</label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3 mt-3">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="Text"
                                                            placeholder="Add Programs"
                                                            name="details" value="<?php echo $row['details']; ?>" />
                                                        <label for="Name">Details</label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 mt-3 text-center">
                                                    <button type="submit" name="update_btn" class="btn btn-primary">Update</button>

                                                    <a href="show_Department-Advisory.php" class="btn btn-primary">Back</a>

                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-5" />

                            <!-- Footer -->
                            <!-- Footer -->
                            <?php
                            include '../common/footer.php';
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
    }
} else {
    echo "No Data Found By this URL id";
}
    ?>
    <?php
    include '../common/footer-link.php';

    ?>
    <!-- Core JS -->

        </body>

        </html>