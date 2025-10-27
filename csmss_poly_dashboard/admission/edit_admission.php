<?php
include('../common/header_link.php');
include('../common/dbcon.php'); // ✅ Correct DB file

$id = $_GET['id'];
$sql = "SELECT * FROM notification_admission WHERE adnoti_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = $_POST['title'];
  $pdf = $_FILES['pdf']['name'];
  $old_pdf = $_POST['old_pdf'];

  if ($pdf != '') {
    $pdf_temp = $_FILES['pdf']['tmp_name'];
    $upload_folder = "../assets/pdf/admission/" . basename($pdf);
    move_uploaded_file($pdf_temp, $upload_folder);
  } else {
    $pdf = $old_pdf;
  }

  $update = "UPDATE notification_admission SET title='$title', pdf='$pdf' WHERE adnoti_id=$id";
  if (mysqli_query($conn, $update)) {
    echo "<script>alert('Notification updated successfully'); window.location.href='admission.php';</script>";
  } else {
    echo "Error updating: " . mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>
      <div class="layout-page">
        <?php include('../common/header.php'); ?>
        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT NOTIFICATION</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="old_pdf" value="<?= $row['pdf'] ?>">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="title" value="<?= $row['title'] ?>" required />
                      <label for="title">Program</label>
                      <?php if ($row['pdf']) { ?>
                        <p class="mt-2">
                          <a href="../assets/pdf/admission/<?= $row['pdf'] ?>" target="_blank">View Current PDF</a>
                        </p>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <input class="form-control p-3 mt-3" type="file" name="pdf">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="admission.php" class="btn btn-primary text-white">Back</a>
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