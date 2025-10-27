<?php include '../common/auth.php'; ?>

<?php
include '../common/header_link.php';
include '../common/dbcon.php';

$report = null;

// Get audit data
if (isset($_GET['audit_id'])) {   // Check audit_id from URL
    $id = intval($_GET['audit_id']);
    $query = "SELECT * FROM audit WHERE audit_id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    $report = mysqli_fetch_assoc($result);

    if (!$report) {
        echo "<script>alert('Audit report data not found'); window.location='audit_report.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('No audit ID specified'); window.location='audit_report.php';</script>";
    exit;
}

// Update audit data
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $updatepdf = $report['pdf'];

    // Handle new PDF upload
    if (!empty($_FILES['pdf']['name'])) {
        $pdfName = $_FILES['pdf']['name'];
        $pdfTmp  = $_FILES['pdf']['tmp_name'];
        $uploadDir = "../assets/pdf/audit_report_fy/report/";

        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

        $uniqueName = time() . rand(1000,9999) . "_" . basename($pdfName);
        $pdfPath = $uploadDir . $uniqueName;

        if (move_uploaded_file($pdfTmp, $pdfPath)) {
            // Delete old PDF if exists
            if (!empty($report['pdf']) && file_exists($uploadDir . $report['pdf'])) {
                unlink($uploadDir . $report['pdf']);
            }
            $updatepdf = $uniqueName;
        }
    }

    $sql = "UPDATE audit SET title='$title', pdf='$updatepdf' WHERE audit_id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Audit report updated successfully'); window.location='audit_report.php';</script>";
        exit;
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
                    <h5 class="card-header">EDIT AUDIT REPORT</h5>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <!-- Title -->
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3 mt-3">
                                        <input type="text" class="form-control" id="title" name="title"
                                               placeholder="Title" value="<?= htmlspecialchars($report['title'] ?? '') ?>" required>
                                        <label for="title">Title</label>
                                    </div>
                                </div>

                                <!-- PDF Upload -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input class="form-control p-3 mt-3" type="file" id="formFile" name="pdf">
                                        <small class="text-muted">Leave blank to keep existing PDF</small>
                                    </div>
                                    <div class="mt-2">
                                        <?php 
                                        $pdfPath = "../assets/pdf/audit_report_fy/report/" . ($report['pdf'] ?? '');
                                        if (!empty($report['pdf']) && file_exists($pdfPath)) { ?>
                                            <a href="<?= $pdfPath ?>" target="_blank">View Current PDF</a>
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
                                    <a href="audit_report.php" class="btn btn-secondary">Back</a>
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
