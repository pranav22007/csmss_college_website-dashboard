<?php include '../common/auth.php'; ?>
<?php
$conn = mysqli_connect("localhost", "root", "", "csmss");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle Form Submit 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event      = mysqli_real_escape_string($conn, $_POST['name_of_event']);
    $year       = mysqli_real_escape_string($conn, $_POST['year']);
    $organized  = mysqli_real_escape_string($conn, $_POST['organized']);
    $student    = mysqli_real_escape_string($conn, $_POST['name_of_student']);
    $remark     = mysqli_real_escape_string($conn, $_POST['remark']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    $sql = "INSERT INTO student_achievement 
            (name_of_event, year, organized, name_of_student, remark, department) 
            VALUES ('$event', '$year', '$organized', '$student', '$remark', '$department')";

    mysqli_query($conn, $sql);
    header("Location: show_Student-Achivement.php?msg=Record+added+successfully");
    exit();
}

// Fetch records
$sql = "SELECT * FROM student_achievement ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php include '../common/header_link.php'; ?>

<body>
<div class="layout-wrapper layout-content-navbar">
<div class="layout-container">

    <!-- Sidebar -->
    <?php include '../common/sidebar.php'; ?>
    <!-- / Sidebar -->

    <div class="layout-page">
        <!-- Header -->
        <?php include '../common/header.php'; ?>
        <!-- / Header -->

        <div class="container">
            <div class="card my-4">
                <h5 class="card-header">ADD STUDENTS' ACHIEVEMENT</h5>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name_of_event" placeholder="Name of Event" required>
                                    <label>Name of Event</label>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="year" placeholder="Year" required>
                                    <label>Year</label>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="organized" placeholder="Organized" required>
                                    <label>Organized</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name_of_student" placeholder="Name of Student" required>
                                    <label>Name of Student</label>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="remark" placeholder="Remark">
                                    <label>Remark</label>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="department" required>
                                        <option selected disabled>Choose Department</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Electrical Engineering">Electrical Engineering</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                        <option value="Electronics & Telecommunication">Electronics & Tele-communication</option>
                                        <option value="Computer Engineering">Computer Engineering</option>
                                        <option value="Artificial Intelligence">Artificial Intelligence & ML</option>
                                    </select>
                                    <label>Department</label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary">ADD</button>
                            <button type="submit" class="btn btn-primary"><a href="show_Student-Achivement.php" class="text-white">
                                                    Back
                                                </a></button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Show Records -->
          
            <?php include '../common/footer.php'; ?>
        </div>
    </div>
</div>
</div>

<?php include '../common/footer-link.php'; ?>
</body>
</html>
