<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';

// Check if ID is provided
if (!isset($_GET['extension_of_approval_id']) || empty($_GET['extension_of_approval_id'])) {
    die("Invalid request. No ID provided.");
}

$id = intval($_GET['extension_of_approval_id']);

// Fetch the record
$result = mysqli_query($conn, "SELECT * FROM extension_of_approval WHERE extension_of_approval_id=$id");
$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("extension_of_approval not found.");
}

// Delete pdf 
$targetDir = __DIR__ . "/../assets/pdf/audit_report_fy/extension_approval/";
if (!empty($row['pdf']) && file_exists($targetDir . $row['pdf'])) {
    unlink($targetDir . $row['pdf']);
}

mysqli_query($conn, "DELETE FROM extension_of_approval WHERE extension_of_approval_id=$id");

mysqli_query($conn, "SET @num := 0");
mysqli_query($conn, "UPDATE extension_of_approval SET extension_of_approval_id = (@num := @num + 1) ORDER BY extension_of_approval_id");
mysqli_query($conn, "ALTER TABLE extension_of_approval AUTO_INCREMENT = 1");

header("Location: extension_approval.php?msg=extension_approval data Deleted Successfully");
exit;
