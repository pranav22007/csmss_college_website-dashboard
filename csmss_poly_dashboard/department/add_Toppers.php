<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php'; // DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['student_name'];
    $percentage = $_POST['percentage'];
    $class_awarded = $_POST['class_awarded'];
    $department = $_POST['department'];
    $year = $_POST['year'];

    // ✅ Insert into ONE common toppers table
    $query = "INSERT INTO toppers (student_name, percentage, class_awarded, department, year) 
              VALUES ('$name', '$percentage', '$class_awarded', '$department', '$year')";
    if (mysqli_query($conn, $query)) {
        header("Location: show_Toppers.php?msg=added");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <?php include '../common/sidebar.php'; ?>
        <div class="layout-page">
            <?php include '../common/header.php'; ?>
            <div class="container">
                <div class="card my-4">
                    <h5 class="card-header">ADD Topper</h5>
                    <div class="card-body">
                        <form method="POST">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="student_name" required />
                                        <label>Topper Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">
                                        <input type="number" step="0.01" class="form-control" name="percentage" required />
                                        <label>Percentage</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="class_awarded" required />
                                        <label>Class Awarded</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="department" required>
                                            <option selected disabled>Choose Department</option>
                                            <option value="Civil Engineering">Civil Engineering</option>
                                            <option value="Electrical Engineering">Electrical Engineering</option>
                                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                                            <option value="Electronic and Tele-communication Engineering">Electronics & Tele-communication Engineering</option>
                                            <option value="Computer Engineering">Computer Engineering</option>
                                            <option value="Artificial intelligence Engineering">Artificial Intelligence and Machine Learning</option>
                                        </select>
                                        <label>Department</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="year" required>
                                            <option selected disabled>Select Year</option>
                                            <option value="First-Year">First-Year</option>
                                            <option value="Second-Year">Second-Year</option>
                                            <option value="Third-Year">Third-Year</option>
                                        </select>
                                        <label>Year</label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add</button>
                                <a href="show_Toppers.php" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
                <?php include '../common/footer.php'; ?>
            </div>
        </div>
    </div>
</div>
<?php include '../common/footer-link.php'; ?>
</body>
</html>
