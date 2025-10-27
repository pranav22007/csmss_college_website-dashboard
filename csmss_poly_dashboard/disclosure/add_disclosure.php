<?php 
include "../common/dbcon.php";

if(isset($_POST['add_btn'])) {
  $title = $_POST['title'];

  $pdf_name = $_FILES['pdf']['name'];
  $pdf_tmp  = $_FILES['pdf']['tmp_name'];

  $upload_dir = "../../csmss_poly_dashboard/assets/pdf/disclosure/";
  $target = $upload_dir . basename($pdf_name);

  if(move_uploaded_file($pdf_tmp, $target)) {
      $query = "INSERT INTO disclosure (title, pdf) 
                VALUES ('$title','$pdf_name')";
      $query_run = mysqli_query($conn, $query);

      if($query_run){
        header('Location: disclosure.php');
        exit;
      } else {
        header('Location: add_disclosure.php?error=db');
        exit;
      }
  } else {
      header('Location: add_disclosure.php?error=upload');
      exit;
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
            <h5 class="card-header">ADD MANDATORY DISCLOSURE</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
                        <label for="title">Title</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input class="form-control p-3 mt-3" type="file" id="formFile" name="pdf" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 mt-3 text-center">
                      <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                      <a href="disclosure.php" class="btn btn-secondary text-white">Back</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-5" />
        <?php include '../common/footer.php'; ?>
        <div class="content-backdrop fade"></div>
      </div>
    </div>
  </div>
  <div class="layout-overlay layout-menu-toggle"></div>
  <?php include '../common/footer-link.php'; ?>
</body>
</html>
