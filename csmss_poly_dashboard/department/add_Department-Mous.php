<?php
require '../common/dbcon.php';
?>
<?php include '../common/auth.php'; ?>
<?php

if (isset($_POST['add'])) {
    $name_of_company = $_POST['name_of_company'];
    $from_datem = $_POST['from_datem'];
    $upto = $_POST['upto'];
    $department = $_POST['department'];

    $query = "INSERT INTO mous_data (name_of_company, from_datem, upto, department) 
              VALUES ('$name_of_company', '$from_datem', '$upto', '$department')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        header("Location: show_Department-Mous.php");
        exit();
    } else {
        die("Error inserting data: " . mysqli_error($conn));
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
                        <h5 class="card-header">ADD DEPARTMENT MOU's</h5>
                        <div class="card-body">
                            <div class="container mt-3">
                                <form action="./add_Department-Mous.php" method="POST">
                                    <div class="row">
                                        <input type="hidden" name="department" value="<?php echo htmlspecialchars($_GET['department']); ?>">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3 mt-3">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="Text"
                                                    placeholder=""
                                                    name="name_of_company" />
                                                <label for="Name">Name of Company</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-floating mb-3 mt-3">
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    id="Text"
                                                    placeholder=""
                                                    name="from_datem" />
                                                <label for="Name">From</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-floating mb-3 mt-3">
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    id="Text"
                                                    placeholder=""
                                                    name="upto" />
                                                <label for="Name">Upto</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3 mt-3">
                                                <select class="form-select" id="Dropdown" name="Dropdown">
                                                    <option selected disabled>Choose Department</option>
                                                    <option value="1">Civil Engineering</option>
                                                    <option value="2">Electrical engineering</option>
                                                    <option value="3">Mechanical Engineering Department</option>
                                                    <option value="4">Electronics & Tele-communication Engineering</option>
                                                    <option value="5">Computer Engineering</option>
                                                    <option value="6">Artificial Intelligence and Machine Learning</option>
                                                </select>
                                                <label for="Dropdown"> Department</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-3 text-center">
                                            <a href="add_Department-Mous.php?department=Civil Engineering">
                                                <button type="submit" name="add" class="btn btn-primary">ADD+</button>
                                            </a>
                                            <button type="submit"  class="btn btn-primary"><a href="show_Department-Mous.php" class="text-white">
                                                    Back
                                                </a></button>
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