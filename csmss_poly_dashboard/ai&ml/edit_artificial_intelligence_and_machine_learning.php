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
                  include '../common/dbcon.php';
                  ?>
              <?php
              if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $select_query = "SELECT * FROM al_ml WHERE ai_id = '$id'";
                $result = mysqli_query($conn, $select_query);
                if ($result && mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $subject_code = $_POST['subject_code'];
                    $pdfName = $row['pdf'];
                    $uploadDir = __DIR__ . '../assets/pdf/ai_ml/';
                    // Check if new PDF is uploaded
                    if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
                      // Create upload directory if it doesn't exist
                      if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                      }
                      // Delete old file
                      $oldPdfPath = $uploadDir . $row['pdf'];
                      if (!empty($row['pdf']) && file_exists($oldPdfPath)) {
                        unlink($oldPdfPath);
                      }
                      // Upload new file
                      $pdfName = time() . "_" . basename($_FILES['pdf']['name']);
                      $uploadPath = $uploadDir . $pdfName;
                      if (!move_uploaded_file($_FILES['pdf']['tmp_name'], $uploadPath)) {
                        echo "<script>alert('File upload failed');</script>";
                      }
                    }
                    // Update database
                    $update_query = "UPDATE al_ml
                               SET subject_code='$subject_code', pdf='$pdfName'
                               WHERE ai_id='$id'";
                    $update_run = mysqli_query($conn, $update_query);
                    if ($update_run) {
                      echo "<script>alert('Updated successfully'); window.location.href='artificial_intelligence_and_machine_learning.php';</script>";
                      exit();
                    } else {
                      echo "<script>alert('Update failed');</script>";
                    }
                  }
                } else {
                  echo "<div class='container mt-5'><div class='alert alert-warning'>No Data Found for this ID.</div></div>";
                }
              } else {
                echo "<div class='container mt-5'><div class='alert alert-warning'>Invalid request. No ID provided.</div></div>";
              }
              ?>





          <!-- / Navbar -->

          <div class="container">
            <div class="card my-4">
              <h5 class="card-header">EDIT ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING </h5>
              <div class="card-body">
                <div class="container mt-3">
                  <form method="POST" enctype="multipart/form-data">
  <div class="row">
    <!-- Subject Code -->
    <div class="col-lg-6">
      <div class="form-floating mb-3 mt-3">
        <input 
          type="text" 
          class="form-control" 
          id="Text" 
          placeholder="Subject Code"  
          name="subject_code"
          value="<?php echo htmlspecialchars($row['subject_code']); ?>" />
        <label for="Name">Subject Code</label>
      </div>

      <!-- Show current PDF below subject code -->
     <?php if (!empty($row['pdf'])): ?>
      <div class="mt-2">
          <p>Current File: 
              <a href="../assets/pdf/ai_ml/<?php echo htmlspecialchars($row['pdf']); ?>" target="_blank">
                  View PDF
              </a>
          </p>
      </div>
<?php endif; ?>

    </div>

    <!-- PDF Upload -->
    <div class="col-lg-6">
      <div class="mb-3">
        <input class="form-control p-3 mt-3" type="file" id="formFile" name="pdf">
      </div>
    </div>
  </div>

  <!-- Buttons -->
  <div class="col-lg-12 text-center">
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="artificial_intelligence_and_machine_learning.php" class="btn btn-secondary">Back</a>
  </div>
</form>

                </div>
              </div>
            </div>

            <hr class="my-5" />


            <!-- Edit Form -->
<!-- <div class="container mt-4">
  <h4 class="mb-4">Edit Artificial Intelligence and Machine Learning</h4>
  <form method="POST" enctype="multipart/form-data">
    <div class="row"> -->

    <!--update form-->
<?php

// if (isset($_POST['update_btn'])) {
//     $subject_code = $_POST['subject_code'];

//     $image = $data['image']; 
//     if (!empty($_FILES['image']['name'])) {
//         $image = time() . '_' . $_FILES['image']['name'];
//         move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/" . $image);
//     }

//     $update = "UPDATE artificial_intelligence 
//                SET subject_code='$subject_code', image='$image' 
//                WHERE id='$id'";
//     if (mysqli_query($conn, $update)) {
//         echo "<script>alert('Record Updated Successfully'); window.location='artificial_intelligence_and_machine_learning.php';</script>";
//     } else {
//         echo "<script>alert('Update Failed');</script>";
//     }
// }
?>
<?php

if (isset($_POST['delete_btn'])) {
  $delete = "DELETE FROM al_ml WHERE ai_id='$id'";
  if (mysqli_query($conn, $delete)) {
    echo "<script>s
                alert('Record Deleted Successfully');
                window.location='artificial_intelligence_and_machine_learning.php';
              </script>";
    exit;
  } else {
    echo "<script>
                alert('Delete Failed: " . mysqli_error($conn) . "');
              </script>";
  }
}
?>
      

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