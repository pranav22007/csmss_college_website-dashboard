<?php include '../common/auth.php'; ?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
 <?php
 include '../common/header_link.php';

 ?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

       <?php
       include '../common/sidebar.php';

       ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
        <?php
        include '../common/header.php';

        ?>

        <?php
        include('../common/dbcon.php');
        ?>


          <?php
          include '../common/dbcon.php';
          $id = $_GET['co_id'];
          $query = "SELECT * FROM computer_engineering WHERE co_id='$id'";
          $result = mysqli_query($conn, $query);
          $row = mysqli_fetch_assoc($result);
          if (isset($_POST['update_btn'])) {
            $subject_code = $_POST['subject_code'];
            // Handle file update
            if ($_FILES['pdf']['name'] != "") {
              $pdf_name = time() . "_" . $_FILES['pdf']['name']; // Only the filename
              $pdf_tmp = $_FILES['pdf']['tmp_name'];
              $upload_dir = "../assets/pdf/computer_engineering/";
              $pdf_path = $pdf_name;

              if (move_uploaded_file($pdf_tmp, $upload_dir . $pdf_path)) {
                // file moved successfully
              } else {
                echo "Failed to move uploaded file.";
              }
            } else {
              $pdf_path = $row['pdf'];
            }

            $update = "UPDATE computer_engineering SET subject_code='$subject_code', pdf='$pdf_path' WHERE co_id='$id'";
            $update_run = mysqli_query($conn, $update);
            if ($update_run) {
              echo "<script>alert('Updated Successfully'); window.location.href='computer_engineering.php';</script>";
            } else {
              echo "<script>alert('Something Went Wrong');</script>";
            }
          }
          ?>

            
              <!-- / Navbar -->

              
              <div class="container">
                <div class="card my-4">
                  <h5 class="card-header">EDIT COMPUTER ENGINEERING </h5>
                  <div class="card-body">
                    <div class="container mt-3">
                      <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                           <div class="col-lg-6">
                            <div class="form-floating mb-3 mt-3">
                              <input type="text" class="form-control" value="<?php echo $row['subject_code']; ?>" name="subject_code" />
                              <!-- <input type="text" class="form-control" id="Text" value"  name="Name"/> -->
                              <label for="Name">Subject Code</label>
                            </div>
                          </div>
            
                         <div class="col-lg-6">
                            <div class="mb-3">
                              <input class="form-control p-3 mt-3"  type="file" id="formFile" name="pdf">
                            </div>
                          </div>

                          <div class="row">
                          <div class="col-lg-6 mb-3">
                      <label class="form-label">Current PDF:</label><br />
                      <?php if (!empty($row['pdf'])): ?>
                        <a href="../assets/pdf/computer_engineering/<?= htmlspecialchars($row['pdf']); ?>" target="_blank">
                          <?php echo htmlspecialchars($row['pdf']); ?>
                        </a>
                      <?php else: ?>
                        No File
                      <?php endif; ?>
                    </div>

                

                        <div class="col-lg-12 text-center">
                          <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
                          <a href="computer_engineering.php" class="btn btn-primary text-white">Back</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <hr class="my-5" />

                <!-- Footer -->
                 <!-- Footer -->
                <?php
                include '../common/footer.php';
                ?>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
              </div>


              
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->
 <?php
 include '../common/footer-link.php';

 ?>
    <!-- Core JS -->
   
  </body>
</html>