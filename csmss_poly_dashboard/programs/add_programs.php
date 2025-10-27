<?php include '../common/auth.php'; ?>

<?php
include __DIR__ . '/../common/dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize inputs
    $program_name = trim($_POST['program_name']);
    $estd_year    = trim($_POST['estd_year']);
    $intake       = trim($_POST['intake']);
    $code         = trim($_POST['code']);

    // Prepare SQL (only 4 fields, no trailing comma)
    $stmt = $conn->prepare("INSERT INTO programs (program_name, estd_year, intake, code) 
                            VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $program_name, $estd_year, $intake, $code);

    if ($stmt->execute()) {
        // Redirect back to programs list with success msg
        header("Location: programs.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Program</title>
  <?php include __DIR__ . '/../common/header_link.php'; ?>
</head>
<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      
      <!-- Sidebar -->
      <?php include __DIR__ . '/../common/sidebar.php'; ?>
      <!-- /Sidebar -->

      <!-- Layout container -->
      <div class="layout-page">
        
              <div class="container">
          <div class="card my-4">
            <h5 class="card-header">ADD PROGRAM</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form method="POST" action="">
                  <div class="row">
                    
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="program_name" required />
                        <label>Program Name</label>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="number" class="form-control" name="estd_year" required />
                        <label>Estd. Year</label>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="number" class="form-control" name="intake" required />
                        <label>Intake</label>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="code" required />
                        <label>Code</label>
                      </div>
                    </div>

                  <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="programs.php" class="btn btn-secondary">Back</a>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <hr class="my-5" />
          <?php include __DIR__ . '/../common/footer.php'; ?>
        </div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <?php include __DIR__ . '/../common/footer-link.php'; ?>
</body>
</html>
