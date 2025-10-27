<?php include '../common/auth.php'; ?>

<?php
include '../common/header_link.php';
include '../common/dbcon.php';

// Get extension_of_approval Data
if (isset($_GET['extension_of_approval_id'])) {
    $id = intval($_GET['extension_of_approval_id']);
    $query = "SELECT * FROM extension_of_approval WHERE extension_of_approval_id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    $extension_of_approval = mysqli_fetch_assoc($result);

    if (!$extension_of_approval) {
        echo "<script>alert('extension_approval data not found'); window.location='extension_approval.php';</script>";
        exit;
    }
}

// Update extension_of_approval Data
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $updatepdf = $extension_of_approval['pdf']; // keep old pdf by default

    if (!empty($_FILES['pdf']['name'])) {
        $pdfName = $_FILES['pdf']['name'];
        $pdfTmp  = $_FILES['pdf']['tmp_name'];
        $uploadDir = "../assets/pdf/audit_report_fy/extension_approval/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $uniqueName = time() . "_" . rand(1000, 9999) . "_" . basename($pdfName);
        $pdfPath  = $uploadDir . $uniqueName;

        if (move_uploaded_file($pdfTmp, $pdfPath)) {
            // delete old pdf if exists
            if (!empty($extension_of_approval['pdf']) && file_exists($uploadDir . $extension_of_approval['pdf'])) {
                unlink($uploadDir . $extension_of_approval['pdf']);
            }
            $updatepdf = $uniqueName;
        }
    }

    $sql = "UPDATE extension_of_approval SET title='$title', pdf='$updatepdf' WHERE extension_of_approval_id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('extension_approval Data Updated Successfully'); window.location='extension_approval.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
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
        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT extension_approval</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <!-- Title -->
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input
                        type="text"
                        class="form-control"
                        id="title"
                        placeholder="Title"
                        name="title"
                        value="<?= htmlspecialchars($extension_of_approval['title']) ?>"
                        required
                      />
                      <label for="title">Title</label>
                    </div>
                  </div>

                  <!-- PDF Upload -->
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <input class="form-control p-3 mt-3" type="file" id="formFile" name="pdf">
                    </div>
                    <div class="mt-2">
                  <?php if (!empty($extension_of_approval['pdf'])) { ?>
                    <a href="../assets/pdf/audit_report_fy/extension_approval/<?= htmlspecialchars($extension_of_approval['pdf']) ?>" target="_blank">
                      View Current PDF
                    </a> 
                  <?php } else { ?>
                    <span>No PDF uploaded</span>
                  <?php } ?>
                </div>
                  </div>
                </div>
                

                <!-- Buttons -->
                <div class="row mt-4">
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="extension_approval.php" class="btn btn-secondary">Back</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <hr class="my-5" />
          <?php include '../common/footer.php'; ?>
        </div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include '../common/footer-link.php'; ?>
</body>
</html>
