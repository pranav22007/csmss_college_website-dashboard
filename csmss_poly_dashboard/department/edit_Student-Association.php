<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';



if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $name_of_candidate = mysqli_real_escape_string($conn, $_POST['name_of_candidate']);
    $post = $_POST['post'];
    $department = ($_POST['department']);

    $updateQuery = "UPDATE student_association 
                    SET name_of_candidate = '$name_of_candidate', 
                        post = '$post', 
                        department = '$department' 
                    WHERE id = $id";

    if (mysqli_query($conn, $updateQuery)) {
        header("Location: ./show_Student-Association.php?msg=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM student_association WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        die("Record not found.");
    }
} else {
    die("ID not provided.");
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
                        <h5 class="card-header">EDIT STUDENT ASSOCIATION</h5>
                        <div class="card-body">
                            <div class="container mt-3">
                                <form action="./edit_Student-Association.php" method="POST">
                                    <div class="row">
                                        <input type="hidden" name="department" value="<?php echo (['department']); ?>">
                                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3 mt-3">

                                                <input type="text"
                                                    class="form-control"
                                                    id="Text"
                                                    name="name_of_candidate"
                                                    value="<?php echo htmlspecialchars($data['name_of_candidate'] ?? ''); ?>" />
                                                <label for="Name">Name of Candidate</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-floating mb-3 mt-3">


                                                <input type="text"
                                                    class="form-control"
                                                    id="Text"
                                                    name="post"
                                                    value="<?php echo $data['post'] ?? ''; ?>" />
                                                <label for="Name">Post</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3 mt-3">
                                                <select name="department" class="form-select" id="department">
                                                    <option disabled>Choose Department</option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Electrical Engineering">Electrical Engineering</option>
                                                    <option value="Mechanical Engineering Department">Mechanical Engineering Department</option>
                                                    <option value="Electronics & Tele-communication Engineering">Electronics & Tele-communication Engineering</option>
                                                    <option value="omputer Engineering">Computer Engineering</option>
                                                    <option value="Artificial Intelligence and Machine Learning">Artificial Intelligence and Machine Learning</option>
                                                </select>
                                                <label for="Dropdown"> Department</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-3 text-center">
                                            <button type="submit" name="update" class="btn btn-primary">Update</button>

                                            <a href="show_Student_Association.php" class="btn btn-secondary">Back</a>

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
