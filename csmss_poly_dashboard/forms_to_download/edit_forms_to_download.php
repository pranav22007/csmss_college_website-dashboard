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

        if (!isset($_GET['id'])) {
          echo "<script>alert('ID missing'); window.location.href='forms_to_download.php';</script>";
          exit();
        }

        $id = (int)$_GET['id'];

        $forms_to_download_query = "SELECT * FROM forms_to_download WHERE id=$id";
        $forms_to_download_query_run = mysqli_query($conn, $forms_to_download_query);

        if (mysqli_num_rows($forms_to_download_query_run) == 0) {
          echo "<script>alert('No record found'); window.location.href='forms_to_download.php';</script>";
          exit();
        }

        $row = mysqli_fetch_assoc($forms_to_download_query_run);
        ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT FORM</h5>
            <div class="card-body">
              <form action="forms_to_download.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="update_id" value="<?= $row['id'] ?>" />

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?= htmlspecialchars($row['title']); ?>" required />
                      <label for="title">Title</label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label for="formFile" class="form-label"></label>
                      <input class="form-control p-3" type="file" id="formFile" name="image" accept="application/pdf" />
                    </div>
                    <p>Current File: <a href="../../csmss_poly_dashboard/assets/pdf/forms_to_download/<?= htmlspecialchars($row['pdf']); ?>" target="_blank">
                      <?= htmlspecialchars(preg_replace('/^form_[^_]+_/', '', $row['pdf'])); ?>
                    </a></p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 mt-3 text-center">
                    <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
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
