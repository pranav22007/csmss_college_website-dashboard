<?php include '../common/auth.php'; ?>

<?php 
include __DIR__ . '/../common/dbcon.php'; 

// Validate ID
if (!isset($_GET['programs_id'])) {
    die("No program ID provided.");
}
$id = intval($_GET['programs_id']); 

// Fetch program data
$result = mysqli_query($conn, "SELECT * FROM programs WHERE programs_id=$id");
$program = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $program_name = $_POST['program_name'];
    $estd_year    = $_POST['estd_year'];
    $intake       = $_POST['intake'];
    $code         = $_POST['code'];

    // Update without trailing comma
    $sql = "UPDATE programs SET 
                program_name='$program_name', 
                estd_year='$estd_year', 
                intake='$intake', 
                code='$code'
            WHERE programs_id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: programs.php?updated=1");
        exit();
    } else {
        echo "Error updating: " . mysqli_error($conn);
    }
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
<?php include __DIR__ . '/../common/header_link.php'; ?>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Sidebar -->
        <?php include __DIR__ . '/../common/sidebar.php'; ?>
        <!-- /Sidebar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
     

 <?php
include '../common/header.php';

?>          <!-- /Navbar -->

          <div class="container">
            <div class="card my-4">
              <h5 class="card-header">EDIT PROGRAM</h5>
              <div class="card-body">
                <div class="container mt-3">
                  <form method="POST" action="">
                    <div class="row">
                     
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input 
                            type="text" 
                            class="form-control" 
                            name="program_name" 
                            value="<?php echo htmlspecialchars($program['program_name']); ?>" 
                            required />
                          <label>Program Name</label>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input 
                            type="number" 
                            class="form-control" 
                            name="estd_year" 
                            value="<?php echo htmlspecialchars($program['estd_year']); ?>" 
                            required />
                          <label>Estd. Year</label>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input 
                            type="number" 
                            class="form-control" 
                            name="intake" 
                            value="<?php echo htmlspecialchars($program['intake']); ?>" 
                            required />
                          <label>Intake</label>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input 
                            type="text" 
                            class="form-control" 
                            name="code" 
                            value="<?php echo htmlspecialchars($program['code']); ?>" 
                            required />
                          <label>Code</label>
                        </div>
                      </div>

                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-primary">Edit</button>
                      <a href="./programs.php" class="btn btn-secondary">Back</a>
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
