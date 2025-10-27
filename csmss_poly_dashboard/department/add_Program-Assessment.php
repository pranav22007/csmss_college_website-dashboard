<?php include "../common/dbcon.php" ?>
<?php include '../common/auth.php'; ?>
<?php
if (isset($_POST['add_btn'])) {

    $name_of_faculty = mysqli_real_escape_string($conn, $_POST['name_of_faculty']);
    $choose_department = mysqli_real_escape_string($conn, $_POST['choose_department']);
    $representation = mysqli_real_escape_string($conn, $_POST['representation']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);

    $query = "INSERT INTO program (name_of_faculty,choose_department,representation,designation) VALUES
('$name_of_faculty','$choose_department','$representation','$designation')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        // echo "Registered Successfully";
        header('Location: show_Program-Assessment.php?msg=success');
        exit();
    } else {
        header('Location: show_Program-Assessment.php?msg=success');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
<?php
include '../common/header_link.php';
?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include '../common/sidebar.php'; ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php include '../common/header.php'; ?>
                <!-- / Navbar -->

                <div class="container">
                    <div class="card my-4">
                        <h5 class="card-header">ADD PROGRAMME ASSESSMENT COMMITTEE (PAC)</h5>
                        <div class="card-body">
                            <div class="container mt-3">
                                <form method="POST" action="">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" id="Text" placeholder=""
                                                    name="name_of_faculty" />
                                                <label for="Text">Name of Faculty</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-floating mb-3 mt-3">
                                                <select class="form-select" id="Dropdown" name="choose_department">
                                                    <option selected disabled>Choose Department</option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Electrical Engineering">Electrical Engineering</option>
                                                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                                                    <option value="Electronics & Tele-communication Engineering">Electronics & Tele-communication Engineering</option>
                                                    <option value="Computer Engineering">Computer Engineering</option>
                                                    <!-- <option value="6"> -->
                                                    <!-- Artificial Intelligence and Machine Learning</option> -->
                                                </select>
                                                <label for="Dropdown"> Department </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" id="Text2" placeholder=""
                                                    name="representation" />
                                                <label for="Text2">Representation</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" id="Text3" placeholder=""
                                                    name="designation" />
                                                <label for="Text3">Designation</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mt-3 text-center">
                                            <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                                            <a href="show_Program-Assessment.php" class="btn btn-primary">Back</a>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <hr class="my-5" />

                    <!-- Footer -->
                    <?php include '../common/footer.php'; ?>
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
    <?php include '../common/footer-link.php'; ?>
</body>

</html>