<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';

// Check if ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("❌ Invalid request. No ID provided.");
}

$id = intval($_GET['id']);

// Fetch the record
$result = mysqli_query($conn, "SELECT * FROM partner WHERE partner_id=$id");
$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("❌ Partner not found.");
}

// Delete image if exists
$targetDir = __DIR__ . "/../assets/img/home/partner/";
if (!empty($row['image']) && file_exists($targetDir . $row['image'])) {
    unlink($targetDir . $row['image']);
}

// Delete record from database
$delete = mysqli_query($conn, "DELETE FROM partner WHERE partner_id=$id");
if (!$delete) {
    die("❌ Database Error: " . mysqli_error($conn));
}
header("Location: partner.php?msg=Partner Deleted Successfully");
exit;
