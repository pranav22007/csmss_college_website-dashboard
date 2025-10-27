<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

if (isset($_POST['add_btn'])) {
    $title       = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $pdf         = '';

    if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0) {
        $uploadDir = __DIR__ . "/../../csmss_poly_dashboard/assets/pdf/committees/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $pdf_name = basename($_FILES['pdf']['name']);
        $pdf_name = preg_replace("/[^a-zA-Z0-9_\.-]/", "", $pdf_name);
        $pdf_tmp  = $_FILES['pdf']['tmp_name'];
        $targetFile = $uploadDir . $pdf_name;

        if (move_uploaded_file($pdf_tmp, $targetFile)) {
            $pdf = $pdf_name;
        } else {
            echo "<script>alert('Failed to upload PDF.');</script>";
        }
    } else if (isset($_FILES['pdf']['error']) && $_FILES['pdf']['error'] != 4) {
        echo "<script>alert('File upload error: " . $_FILES['pdf']['error'] . "');</script>";
    }

    $query = "INSERT INTO committees (title, description, pdf) VALUES ('$title', '$description', '$pdf')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo "<script>alert('Committee Added Successfully'); window.location='committees.php';</script>";
    } else {
        echo "Something Went Wrong: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">ADD COMMITTEES</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="title" placeholder="Add Title" name="title" required />
                        <label for="title">Title</label>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="description" placeholder="Add Description" name="description" required />
                        <label for="description">Description</label>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input class="form-control p-3 mt-3" type="file" id="formFile" name="pdf" accept=".pdf" />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 mt-3 text-center">
                      <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                      <a href="committees.php" class="btn btn-secondary">Back</a>
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
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <?php include '../common/footer-link.php'; ?>
</body>
</html>
