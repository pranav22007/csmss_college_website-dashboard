<?php include "../common/dbcon.php"; ?>
<?php include '../common/auth.php'; ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM our_alumni WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);                                                                                                                                                              
}

if (isset($_POST['csmss_update_btn'])) {
    $update_id = $_POST['update_id'];
    $sname = mysqli_real_escape_string($conn, $_POST['student_name']);
    $ypassing = mysqli_real_escape_string($conn, $_POST['passing_year']);
    $achievement_d = mysqli_real_escape_string($conn, $_POST['department_achievement']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    $query_update = "UPDATE our_alumni 
                     SET sname='$sname',
                         ypassing='$ypassing',
                         achievement_d='$achievement_d',
                         department='$department'
                     WHERE id='$update_id'";

    $query_update_run = mysqli_query($conn, $query_update);

    if ($query_update_run) {
        header("Location: show_Our-Alumni.php?status=updated");
        exit();
    } else {
        header("Location: show_Our-Alumni.php?status=error");
        exit();
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
                        <h5 class="card-header">EDIT OUR ALUMNI</h5>
                        <div class="card-body">
                            <div class="container mt-3">

                                <form action="" method="POST">

                                    <!-- Hidden ID field -->
                                    <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">

                                    <div class="row">
                                        <!-- Student Name -->
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" id="student_name"
                                                       name="student_name"
                                                       value="<?php echo $row['sname']; ?>" required />
                                                <label for="student_name">Name of Student</label>
                                            </div>
                                        </div>

                                        <!-- Year of Passing -->
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" id="passing_year"
                                                       name="passing_year"
                                                       value="<?php echo $row['ypassing']; ?>" required />
                                                <label for="passing_year">Year of Passing</label>
                                            </div>
                                        </div>

                                        <!-- Achievement -->
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" id="achievement"
                                                       name="department_achievement"
                                                       value="<?php echo $row['achievement_d']; ?>" required />
                                                <label for="achievement">Achievement Details</label>
                                            </div>
                                        </div>

                                        <!-- Department -->
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3 mt-3">
                                                <select class="form-select" id="department" name="department" required>
                                                    <option disabled>Choose Department</option>
                                                    <option value="Civil Engineering" <?php if ($row['department']=="Civil Engineering") echo "selected"; ?>>Civil Engineering</option>
                                                    <option value="Electrical Engineering" <?php if ($row['department']=="Electrical Engineering") echo "selected"; ?>>Electrical Engineering</option>
                                                    <option value="Mechanical Engineering" <?php if ($row['department']=="Mechanical Engineering") echo "selected"; ?>>Mechanical Engineering</option>
                                                    <option value="Computer Engineering" <?php if ($row['department']=="Computer Engineering") echo "selected"; ?>>Computer Engineering</option>
                                                </select>
                                                <label for="department">Department</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mt-3 text-center">
                                            <button type="submit" class="btn btn-primary" name="csmss_update_btn">Update</button>
                                            <a href="show_Our-Alumni.php" class="btn btn-secondary">Back</a>
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
