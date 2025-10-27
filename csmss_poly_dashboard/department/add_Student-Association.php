<?php include('../common/dbcon.php') ?>
<?php include '../common/auth.php'; ?>
<?php


if (isset($_POST['add'])) {
    $name_of_candidate = $_POST['name_of_candidate'];
    $post = $_POST['post'];
    $department = $_POST['department'];

    $query = "INSERT INTO student_association (name_of_candidate,post,department) VALUES ('$name_of_candidate','$post','$department')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        header("location: show_Student-Association.php");
    } else {
        header("location: show_Student-Association.php");
    }
}
?>

<!DOCTYPE html>

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
                        <h5 class="card-header">STUDENTS' ASSOCIATION (EESA)-2024-25</h5>
                        <div class="card-body">
                            <div class="container mt-3">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3 mt-3">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="Text"
                                                    placeholder="Name of the Candidate"
                                                    name="name_of_candidate" />
                                                <label for="Name">Name of the Candidate</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3 mt-3">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="Text"
                                                    placeholder="Post"
                                                    name="post" />
                                                <label for="Name">Post</label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3 mt-3">
                                                <select class="form-select" id="Dropdown" name="department">
                                                    <option selected disabled>Choose Department</option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Electrical engineering">Electrical engineering</option>
                                                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                                                    <option value="Electronics & Tele-communication Engineering">Electronics & Tele-communication Engineering</option>
                                                    <option value="Computer Engineering">Computer Engineering</option>
                                                    <option value="Artificial Intelligence and Machine Learning">Artificial Intelligence and Machine Learning</option>
                                                </select>
                                                <label for="Dropdown">Department</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-3 text-center">
                                            <button type="submit" name="add" class="btn btn-primary">Add</button>
                                            <a href="show_Student-Association.php" class="btn btn-secondary">Back</a>
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