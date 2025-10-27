<?php

require '../common/dbcon.php' ?>
<?php include '../common/auth.php'; ?>
<?php

if (isset($_POST['add_btn'])) {

    $name_of_the_committee_member = mysqli_real_escape_string($conn, $_POST['name_of_the_committee_member']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    $query = "INSERT INTO department_advisory (name_of_the_committee_member, details, department) 
              VALUES ('$name_of_the_committee_member', '$details', '$department')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        header('Location: show_Department-Advisory.php?msg=success');
        exit();
    } else {
        // Optionally use session to pass error message
        header('Location: show_Department-Advisory.php?msg=error');
        exit();
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
                        <h5 class="card-header">ADD DEPARTMENT ADVISORY BOARD (DAB)</h5>
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
                                                    name="name_of_the_committee_member" />
                                                <label for="Name">Name of the Committee Member</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3 mt-3">
                                                <select class="form-select" id="Dropdown" name="department">
                                                    <option selected disabled>Choose Department</option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Electrical Engineering">Electrical engineering</option>
                                                    <option value="Mechanical Engineering">Mechanical Engineering </option>
                                                    <option value="Electronics Engineering">Electronics & Tele-communication Engineering</option>
                                                    <option value="Computer Engineering">Computer Engineering</option>
                                                    <option value="6">Artificial Intelligence and Machine Learning</option>
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
                                                    name="details" />
                                                <label for="Name">Details</label>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mt-3 text-center">
                                            <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                                            
                                            <a href="show_Department-Advisory.php" class="text-white btn btn-primary">
                                                Back
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
    include '../common/footer-link.php';

    ?>
    <!-- Core JS -->

</body>

</html>