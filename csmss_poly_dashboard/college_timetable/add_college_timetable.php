<?php include '../common/auth.php'; ?>
<?php
include "../common/dbcon.php";

if (isset($_POST['add_btn'])) {
  $title = $_POST['Title'];
  $description = $_POST['Description'];

  // File upload
  $pdf_name = $_FILES['Pdf']['name'];
  $pdf_tmp = $_FILES['Pdf']['tmp_name'];
  $upload_dir = "../../csmss_poly_dashboard/assets/pdf/college_timetable/";


  if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
  }

  $pdf_path = $upload_dir . time() . "_" . basename($pdf_name);

  if (move_uploaded_file($pdf_tmp, $pdf_path)) {
    $query = "INSERT INTO college_timetable (title, description, pdf) 
                  VALUES ('$title', '$description', '$pdf_path')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
      header("Location: college_timetable.php");
      exit;
    } else {
      echo "Database Error: " . mysqli_error($conn);
    }
  } else {
    echo "File upload failed.";
  }
}
?>



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


          <!-- / Navbar -->

          <div class="container">
            <div class="card my-4">
              <h5 class="card-header">ADD COLLEGE TIMETABLE</h5>
              <div class="card-body">
                <div class="container mt-3">
              <!-- <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input type="text" class="form-control" id="Text"  placeholder="Add Title"name="Title"/>
                          <label for="Name">Title</label>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input  type="text" class="form-control"  id="Text" placeholder=" Description" name="Description"/>
                          <label for="Name">Description</label>
                        </div>
                      </div>
       
                     <div class="col-lg-6">
                        <div class="mb-3">
                          <input class="form-control p-3 mt-3"  type="file" id="formFile" name="Pdf">
                        </div>
                      </div>

                      
                    </div>

                    <div class="row">
                     <div class="col-lg-12 mt-3 text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Add</button>
                      
                       <button type="submit" class="btn btn-primary"><a href="college_timetable.php" class="text-white">
                        Back
                      </a></button>
                    </div>

                     <div class="col-lg-12 mt-3 text-center">
                      <button type="submit" class="btn btn-primary">Add Event</button>
                    </div> -->
                  </form> 


                  <form action="" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">  
            <input type="text" name="Title" class="form-control p-3" id="text" placeholder="Title">
        </div>
        <div class="col-md-6">
           
            <input type="text" name="Description" class="form-control p-3" placeholder="Description">
        </div>
        <div class="col-md-6 mt-3">
            <input type="file" name="Pdf" class="form-control p-3" accept="application/pdf" required>
        </div>
        <div class="col-md-12 text-center mt-3">
            <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
            <a href="college_timetable.php" class="btn btn-secondary">Back</a>
        </div>
    </div>
</form>
                </div>
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