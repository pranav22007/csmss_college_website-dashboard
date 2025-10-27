<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php'; // DB connection

if (isset($_GET['audit_id'])) {
    $id = intval($_GET['audit_id']);

    // 1. Get file name before deleting
    $query = "SELECT pdf FROM audit WHERE audit_id=$id";
    $result = mysqli_query($conn, $query);
    $report = mysqli_fetch_assoc($result);

    if ($report) {
        $filePath = "../assets/pdf/audit_report_fy/report/" . $report['pdf'];

        // 2. Delete record from DB
        $deleteQuery = "DELETE FROM audit WHERE audit_id=$id";
        if (mysqli_query($conn, $deleteQuery)) {
            // 3. Delete file from server (if exists)
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            header("Location: audit_report.php?msg=deleted");
            exit;
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "Record not found.";
    }
} else {
    echo "Invalid request.";
}
?>
