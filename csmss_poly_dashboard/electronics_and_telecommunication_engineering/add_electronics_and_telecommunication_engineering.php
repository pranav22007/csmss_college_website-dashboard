<?php include '../common/auth.php'; ?>
<?php
// Include header and DB connection
include('../common/header_link.php');
include('../common/dbcon.php'); // make sure this file defines $conn = mysqli_connect(...)

// ---------- INSERT NEW RECORD ----------
if (isset($_POST['save'])) {
    $subject_code = trim($_POST['subject_code']);
    $pdf_name = "";

    if (!empty($_FILES['pdf']['name'])) {
        $upload_dir = "../assets/pdf/en_tc/"; // Path to your custom folder

        // Check if the directory exists, if not, create it
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); // Make the directory if it doesn't exist
        }

        // Prefix timestamp to avoid duplicate names
        $pdf_name = time() . "-" . basename($_FILES['pdf']['name']);
        $target_file = $upload_dir . $pdf_name;

        // Move the file to the target directory
        if (!move_uploaded_file($_FILES['pdf']['tmp_name'], $target_file)) {
            echo "<script>alert('File upload failed!');</script>";
            $pdf_name = "";
        }
    }

    // Insert into table
    $sql = "INSERT INTO electronics_and_telecommunication_engineering (subject_code, pdf)
            VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $subject_code, $pdf_name);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Record Added Successfully!'); window.location='electronics_and_telecommunication_engineering.php';</script>";
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="UTF-8">
    <title>Add Electronics and Telecommunication Engineering</title>
</head>
<body>
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">

    <!-- Sidebar -->
    <?php include('../common/sidebar.php'); ?>
    <!-- / Sidebar -->

    <!-- Layout page -->
    <div class="layout-page">

      <!-- Navbar -->
      <?php include('../common/header.php'); ?>
      <!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

          <!-- Card -->
          <div class="card shadow-sm">
            <div class="card-header">
              <span class="h6 mb-0 text-uppercase text-muted fw-bold">ADD ELECTRONICS AND TELECOMMUNICATION ENGINEERING</span>
            </div>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row g-3 align-items-center">
                  <div class="col-md-6">
                    <input type="text" name="subject_code" class="form-control" placeholder="Title" required>
                  </div>
                  <div class="col-md-6">
                    <input type="file" name="pdf" class="form-control" accept="application/pdf">
                  </div>
                </div>

                <div class="d-flex justify-content-center gap-2 mt-4">
                  <button type="submit" name="save" class="btn btn-primary px-4">Add</button>
                  <a href="electronics_and_telecommunication_engineering.php" class="btn btn-primary px-4">Back</a>
                </div>
              </form>
            </div>
          </div>
          <!-- / Card -->

        </div>

        <hr class="my-5" />
        <?php include('../common/footer.php'); ?>
        <div class="content-backdrop fade"></div>
      </div>
      <!-- / Content wrapper -->

    </div>
    <!-- / Layout page -->
  </div>

  <div class="layout-overlay layout-menu-toggle"></div>
</div>

<?php include('../common/footer-link.php'); ?>
</body>
</html>
