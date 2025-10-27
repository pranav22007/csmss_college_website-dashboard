<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

// Enable error reporting (remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['add_btn'])) {
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $email    = mysqli_real_escape_string($conn, $_POST['email']);
  $phone    = mysqli_real_escape_string($conn, $_POST['phone']);

  $query = "INSERT INTO enquiry_form (fullname, email, phone) 
            VALUES ('$fullname', '$email', '$phone')";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    header("Location: enquiry.php");
    exit();
  } else {
    header('Location: add_enquiry.php?error=db');
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../common/header_link.php'; ?>
<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>
        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">ADD ENQUIRY</h5>
            <div class="card-body">
              <form action="" method="POST">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" placeholder="Full name" name="fullname" required />
                      <label>Full Name</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" placeholder="Email-Address" name="email" required />
                      <label>Email-Address</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" placeholder="Phone-number" name="phone" required />
                      <label>Phone-number</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 mt-3 text-center">
                    <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                    <a href="enquiry.php" class="btn btn-primary">Back</a>
                  </div>
                </div>
              </form>

              <?php
              if (isset($_GET['error']) && $_GET['error'] === 'db') {
                echo '<div class="alert alert-danger mt-3">Database error, please try again.</div>';
              }
              ?>
            </div>
          </div>
        </div>
        <?php include '../common/footer.php'; ?>
      </div>
    </div>
  </div>
  <?php include '../common/footer-link.php'; ?>
</body>
</html>
