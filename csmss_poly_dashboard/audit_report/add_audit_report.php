<?php include '../common/auth.php'; ?>

<!DOCTYPE html>

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
include '../common/dbcon.php';

// Insert logic
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);

    // File Upload (PDF)
    $pdfName = $_FILES['pdf']['name'];
    $pdfTmp = $_FILES['pdf']['tmp_name'];
    $uploadDir = "../assets/pdf/audit_report_fy/report/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Generate unique filename to avoid overwrite
    $uniqueName = time() . "" . rand(1000, 9999) . "" . basename($pdfName);
    $pdfPath = $uploadDir . $uniqueName;

    // Move file to destination
    if (move_uploaded_file($pdfTmp, $pdfPath)) {
        // Save into DB
        $sql = "INSERT INTO audit (title, pdf) VALUES ('$title', '$uniqueName')";
        
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Partner Added Successfully'); window.location='audit_report.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
    } else {
        echo "Failed to upload PDF file.";
    }
}

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

          <!-- / Navbar -->

          <div class="container">
            <div class="card my-4">
              <h5 class="card-header">ADD AUDIT REPORT</h5>
              <div class="card-body">
                <div class="container mt-3">
               <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input
                            type="text"
                            class="form-control"
                            id="title"
                            placeholder="Title"
                            name="title"
                          />
                          <label for="titel">Title</label>
                        </div>
                      </div>
                     
                      
                     <div class="col-lg-6">
                        <div class="mb-3">
                          <input class="form-control p-3 mt-3"  type="file" id="formFile" name="pdf" required>
                        </div>
                      </div>


               
                    
                    </div>

                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-primary">ADD AUDIT REPORT</button>
                                              <button type="submit" class="btn btn-primary">
                         <a href="audit_report.php " class="text-white">Back</a></button>
                 
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