<?php include "../common/dbcon.php"; ?>
<?php include '../common/auth.php'; ?>
<?php
if (isset($_POST['add_btn'])) {

  $sname = mysqli_real_escape_string($conn, $_POST['student_name']);
  $ypassing = mysqli_real_escape_string($conn, $_POST['passing_year']);
  $achievement_d = mysqli_real_escape_string($conn, $_POST['department_achievement']);
  $department = mysqli_real_escape_string($conn, $_POST['department']);

  // Corrected INSERT query
  $query = "INSERT INTO our_alumni (sname, ypassing, achievement_d, department) 
            VALUES ('$sname', '$ypassing', '$achievement_d', '$department')";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    // Redirect after success
    header("Location: show_Our-Alumni.php?status=success");
    exit();
  } else {
    // Show MySQL error for debugging
    die("Error inserting record: " . mysqli_error($conn));
  }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <?php include '../common/sidebar.php'; ?>

      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">ADD OUR ALUMNI</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form action="" method="POST">
                  <div class="row">

                    <!-- Student Name -->
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="student_name" placeholder="Name of student" name="student_name" required>
                        <label for="student_name">Name of student</label>
                      </div>
                    </div>

                    <!-- Year of Passing -->
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="passing_year" placeholder="Year of Passing" name="passing_year" required>
                        <label for="passing_year">Year of Passing</label>
                      </div>
                    </div>

                    <!-- Achievement Details -->
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="department_achievement" placeholder="Achievement Details" name="department_achievement" required>
                        <label for="department_achievement">Achievement Details</label>
                      </div>
                    </div>

                    <!-- Department -->
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <select class="form-select" id="department" name="department" required>
                          <option selected disabled>Choose Department</option>
                          <option value="Civil Engineering">Civil Engineering</option>
                          <option value="Electrical Engineering">Electrical Engineering</option>
                          <option value="Mechanical Engineering">Mechanical Engineering</option>
                          <option value="Computer Engineering">Computer Engineering</option>
                        </select>
                        <label for="department">Department</label>
                      </div>
                    </div>
                  </div>

                  <!-- Buttons -->
                  <div class="row">
                    <div class="col-lg-12 mt-3 text-center">
                      <button type="submit" class="btn btn-primary" name="add_btn">ADD</button>
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
