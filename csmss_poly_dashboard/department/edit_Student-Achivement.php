<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">
<?php include '../common/auth.php'; ?>
<?php
include '../common/header_link.php';

// Database connection
$conn = mysqli_connect("localhost", "root", "", "csmss");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get ID from URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch existing data
$sql = "SELECT * FROM student_achievement WHERE id = $id";
$result = mysqli_query($conn, $sql);
$achievement = mysqli_fetch_assoc($result);

// Handle form update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_of_event = mysqli_real_escape_string($conn, $_POST['name_of_event']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $organized = mysqli_real_escape_string($conn, $_POST['organized']);
    $name_of_student = mysqli_real_escape_string($conn, $_POST['name_of_student']);
    $remark = mysqli_real_escape_string($conn, $_POST['remark']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    $update_sql = "UPDATE student_achievement 
                   SET name_of_event='$name_of_event', year='$year', organized='$organized', 
                       name_of_student='$name_of_student', remark='$remark', department='$department'
                   WHERE id=$id";

    if (mysqli_query($conn, $update_sql)) {
        echo "<script>alert('Record updated successfully');window.location.href='show_Student-Achivement.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include '../common/sidebar.php'; ?>
            <div class="layout-page">
                <?php include '../common/header.php'; ?>

                <div class="container">
                    <div class="card my-4">
                        <h5 class="card-header">EDIT STUDENTS' ACHIEVEMENT</h5>
                        <div class="card-body">
                            <div class="container mt-3">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" name="name_of_event"
                                                    value="<?php echo htmlspecialchars($achievement['name_of_event']); ?>"
                                                    required>
                                                <label>Name of Event</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" name="year"
                                                    value="<?php echo htmlspecialchars($achievement['year']); ?>"
                                                    required>
                                                <label>Year</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" name="organized"
                                                    value="<?php echo htmlspecialchars($achievement['organized']); ?>"
                                                    required>
                                                <label>Organized</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" name="name_of_student"
                                                    value="<?php echo htmlspecialchars($achievement['name_of_student']); ?>"
                                                    required>
                                                <label>Name of Student</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" name="remark"
                                                    value="<?php echo htmlspecialchars($achievement['remark']); ?>">
                                                <label>Remark</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-floating mb-3 mt-3">
                                                <select class="form-select" name="department" required>
                                                    <option disabled>Choose Department</option>
                                                    <option value="Civil Engineering" <?php if ($achievement['department']=="Civil Engineering") echo "selected"; ?>>Civil Engineering</option>
                                                    <option value="Electrical Engineering" <?php if ($achievement['department']=="Electrical Engineering") echo "selected"; ?>>Electrical Engineering</option>
                                                    <option value="Mechanical Engineering" <?php if ($achievement['department']=="Mechanical Engineering") echo "selected"; ?>>Mechanical Engineering Department</option>
                                                    <option value="Electronics & Telecommunication" <?php if ($achievement['department']=="Electronics & Telecommunication") echo "selected"; ?>>Electronics & Tele-communication Engineering</option>
                                                    <option value="Computer Engineering" <?php if ($achievement['department']=="Computer Engineering") echo "selected"; ?>>Computer Engineering</option>
                                                    <option value="Artificial Intelligence" <?php if ($achievement['department']=="Artificial Intelligence") echo "selected"; ?>>Artificial Intelligence and Machine Learning</option>
                                                </select>
                                                <label>Department</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mt-3 text-center">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="show_Student-Achivement.php" class="btn btn-secondary">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php include '../common/footer.php'; ?>
                </div>
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    <?php include '../common/footer-link.php'; ?>
</body>
</html>
