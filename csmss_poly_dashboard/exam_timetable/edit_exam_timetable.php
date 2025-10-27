<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

// Fetch the data for the record to be edited
if (isset($_GET['id'])) {
    $exam_id = $_GET['id'];
    $query = "SELECT * FROM exam_timetable WHERE exam_id = '$exam_id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Record not found.'); window.location.href='exam_timetable.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('No exam ID provided.'); window.location.href='exam_timetable.php';</script>";
    exit();
}

// Update logic
if (isset($_POST['update_btn'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $exam_id = $_POST['exam_id'];

    // Handle PDF upload
    $pdf_name = $row['pdf']; // default to existing PDF
    if (isset($_FILES['pdf']['name']) && $_FILES['pdf']['name'] != '') {
        $pdf_name = $_FILES['pdf']['name'];
        $pdf_tmp = $_FILES['pdf']['tmp_name'];
        $upload_path = __DIR__ . "../assets/pdf/exam_timetable/" . $pdf_name;
        move_uploaded_file($pdf_tmp, $upload_path);
    }

    $update_query = "UPDATE exam_timetable SET title = '$title', description = '$description', pdf = '$pdf_name' WHERE exam_id = '$exam_id'";
    $update_run = mysqli_query($conn, $update_query);

    if ($update_run) {
        echo "<script>alert('Exam timetable updated successfully.'); window.location.href='exam_timetable.php';</script>";
        exit();
    } else {
        echo "<script>alert('Failed to update record.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed">
<?php include('../common/header_link.php'); ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include('../common/sidebar.php'); ?>
            <div class="layout-page">
                <?php include('../common/header.php'); ?>

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="text-muted fw-bold py-3 mb-4">Edit Exam Timetable</h4>

                        <div class="card mb-4">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="exam_id" value="<?= $row['exam_id'] ?>">

                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" required value="<?= $row['title'] ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="description" required><?= $row['description'] ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">PDF</label>
                                        <input type="file" class="form-control" name="pdf">
                                        <?php if (!empty($row['pdf'])): ?>
                                            <p>Current PDF: <a href="../../csmss_poly_dashboard/assets/pdf/exam_timetable/<?= $row['pdf'] ?>" target="_blank"><?= $row['pdf'] ?></a></p>
                                        <?php endif; ?>
                                    </div>

                                    <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
                                    <a href="exam_timetable.php" class="btn btn-secondary">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php include('../common/footer.php'); ?>
                </div>
            </div>
        </div>

        <?php include('../common/footer-link.php'); ?>
    </div>
</body>
</html>
