<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php'; // DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['faculty_name'];
    $qualification = $_POST['qualification'];
    $designation = $_POST['designation'];
    $department = $_POST['department'];
    $profile = $_POST['profile'];

    // ✅ Insert into faculty table
    $query = "INSERT INTO faculty_details(name, qualification, designation, department, profile) 
              VALUES ('$name', '$qualification', '$designation', '$department', '$profile')";
    if (mysqli_query($conn, $query)) {
        header("Location: show_faculty-details.php?msg=added");
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
                    <h5 class="card-header">ADD Faculty</h5>
                    <div class="card-body">
                        <form method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="faculty_name" required />
                                        <label>Faculty Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="qualification" required />
                                        <label>Qualification</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="designation" required />
                                        <label>Designation</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="department" required>
                                            <option selected disabled>Choose Department</option>
                                            <option value="Civil Engineering">Civil Engineering</option>
                                            <option value="Electrical Engineering">Electrical Engineering</option>
                                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                                            <option value="Electronic and Tele-communication Engineering">Electronics & Tele-communication Engineering</option>
                                            <option value="Computer Engineering">Computer Engineering</option>
                                            <option value="Artificial intelligence Engineering">Artificial Intelligence</option>
                                        </select>
                                        <label>Department</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="profile" placeholder="Profile link or description" />
                                        <label>Profile</label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add Faculty</button>
                                <a href="show_Faculty-Details.php" class="btn btn-secondary">Back</a>
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
