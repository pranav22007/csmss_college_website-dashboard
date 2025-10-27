<?php
include('../common/header_link.php');
include('../common/dbcon.php'); // ✅ Correct DB file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $pdf = $_FILES['pdf']['name'];
    $pdf_temp = $_FILES['pdf']['tmp_name'];

    $upload_dir = "../assets/pdf/admission/";

    // ✅ Create folder if not exists
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $upload_path = $upload_dir . basename($pdf);

    if (move_uploaded_file($pdf_temp, $upload_path)) {
        $sql = "INSERT INTO notification_admission (title, pdf) VALUES ('$title', '$pdf')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Notification added successfully'); window.location.href='admission.php';</script>";
        } else {
            echo "Database Error: " . mysqli_error($conn);
        }
    } else {
        echo "❌ File upload failed. Check folder permissions or file name.";
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>
      <div class="layout-page">
        <?php include('../common/header.php'); ?>
        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">ADD NOTIFICATION</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="title" placeholder="Add Program" required />
                      <label for="title">Programs</label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <input class="form-control p-3 mt-3" type="file" name="pdf" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="admission.php" class="btn btn-primary text-white">Back</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <hr class="my-5" />
          <?php include('../common/footer.php'); ?>
        </div>
      </div>
    </div>
  </div>
<?php include('../common/footer-link.php'); ?>
</body>
</html>
