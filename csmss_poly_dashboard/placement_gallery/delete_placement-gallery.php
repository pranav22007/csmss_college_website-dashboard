<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

// Debugging enabled (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ✅ Match the parameter name with placement.php link (?id=...)
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
    die("❌ Invalid placement gallery ID.");
}

// Fetch record to delete
$sql = "SELECT * FROM placement_gallery WHERE placement_gallery_id=$id LIMIT 1";
$result = mysqli_query($conn, $sql);
if (!$result || mysqli_num_rows($result) == 0) {
    die("❌ Record not found.");
}
$row = mysqli_fetch_assoc($result);

// Delete image file if exists
$uploadDir = "../assets/img/placement_gallery/";
if (!empty($row['img']) && file_exists($uploadDir . $row['img'])) {
    unlink($uploadDir . $row['img']);
}

// Delete from database
$delete = "DELETE FROM placement_gallery WHERE placement_gallery_id=$id";
if (mysqli_query($conn, $delete)) {
    header("Location: placement-gallery.php?deleted=1");
    exit();
} else {
    echo "❌ Database Error: " . mysqli_error($conn);
}
?>
