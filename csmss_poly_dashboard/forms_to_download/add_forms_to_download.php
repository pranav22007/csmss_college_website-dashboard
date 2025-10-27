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

        <?php
        include '../common/dbcon.php';

        if (isset($_POST['add_btn'])) {
          $title = mysqli_real_escape_string($conn, $_POST['title']);

          if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === 0) {
            $fileTmpPath = $_FILES['pdf']['tmp_name'];
            $fileName = $_FILES['pdf']['name'];
            $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $uploadDir = '../assets/pdf/forms_to_download/';

            if (!is_dir($uploadDir)) {
              mkdir($uploadDir, 0755, true);
            }

            if ($ext === 'pdf') {
              $newFileName = uniqid("form_", true) . '_' . $fileName;
              $destPath = $uploadDir . $newFileName;

              if (move_uploaded_file($fileTmpPath, $destPath)) {
                $query = "INSERT INTO forms_to_download (title, pdf) VALUES ('$title', '$newFileName')";
                $query_run = mysqli_query($conn, $query);

                if ($query_run) {
                  echo "<script>alert('Added successfully'); window.location.href='forms_to_download.php';</script>";
                  exit();
                } else {
                  echo "<script>alert('Database insert failed.'); window.location.href='add_forms_to_download.php';</script>";
                  exit();
                }
              } else {
                echo "<script>alert('File upload failed.'); window.location.href='add_forms_to_download.php';</script>";
                exit();
              }
            } else {
              echo "<script>alert('Only PDF files allowed.'); window.location.href='add_forms_to_download.php';</script>";
              exit();
            }
          } else {
            echo "<script>alert('No file uploaded or upload error.'); window.location.href='add_forms_to_download.php';</script>";
            exit();
          }
        }
        ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">ADD FORMS</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="Text" placeholder="Title" name="title" required />
                      <label for="Text">Title</label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <input class="form-control p-3 mt-3" type="file" id="formFile" name="pdf" accept="application/pdf" required />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 mt-3 text-center">
                    <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-primary">
                      <a href="forms_to_download.php" class="text-white text-decoration-none">Back</a>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <?php include '../common/footer.php'; ?>
      </div>
    </div>
  </div>

  <?php include '../common/footer-link.php'; ?>
</body>

</html>
