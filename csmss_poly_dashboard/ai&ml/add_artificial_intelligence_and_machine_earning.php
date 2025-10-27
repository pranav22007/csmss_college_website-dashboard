<?php include '../common/auth.php'; ?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
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
            <h5 class="card-header">ADD ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING</h5>
            <div class="card-body">
              <div class="container mt-3">

                <!-- FORM -->
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Add Subject Code" name="subject_code"
                          required />
                        <label>Subject Code</label>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input class="form-control p-3 mt-3" type="file" name="choose_file">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 mt-3 text-center">
                      <button type="submit" name="al_ml_btn" class="btn btn-primary">Add</button>
                      <a href="artificial_intelligence_and_machine_learning.php" class="btn btn-secondary">Back</a>
                    </div>
                  </div>
                </form>
                <!-- /FORM -->

                <?php
                include '../common/dbcon.php'; // connection file
                
                if (isset($_POST['al_ml_btn'])) {
                  $subject_code = mysqli_real_escape_string($conn, $_POST['subject_code']);

                  // File upload handling
                  $file_name = null;
                  if (!empty($_FILES['choose_file']['name'])) {
                    $target_dir = "../assets/pdf/ai_ml/";
                    if (!is_dir($target_dir)) {
                      mkdir($target_dir, 0777, true);
                    }
                    $file_name = basename($_FILES["choose_file"]["name"]);
                    $target_file = $target_dir . $file_name;

                    move_uploaded_file($_FILES["choose_file"]["tmp_name"], $target_file);

                  }

                  // Insert into DB (table: al_ml, column: pdf)
                  $query = "INSERT INTO al_ml (subject_code, pdf) 
                              VALUES ('$subject_code', '$file_name')";
                  if (mysqli_query($conn, $query)) {
                    echo "<script>alert('Record Added Successfully'); 
                        window.location.href='artificial_intelligence_and_machine_learning.php';</script>";
                  } else {
                    echo "Error: " . mysqli_error($conn);
                  }
                }
                ?>


              </div>
            </div>
          </div>
        </div>

        <hr class="my-5" />
        <?php include '../common/footer.php'; ?>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <?php include '../common/footer-link.php'; ?>
</body>

</html>