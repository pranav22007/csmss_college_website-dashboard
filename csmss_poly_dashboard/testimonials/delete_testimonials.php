<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';

// Check if ID is provided
if (!isset($_GET['testimonials_id']) || empty($_GET['testimonials_id'])) {
    die("Invalid request. No ID provided.");
}

$id = intval($_GET['testimonials_id']);

// Fetch the record
$result = mysqli_query($conn, "SELECT * FROM testimonials WHERE testimonials_id=$id");
$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("testimonials not found.");
}

// Delete pdf 
$targetDir = __DIR__ . "/../assets/pdf/";
if (!empty($row['image']) && file_exists($targetDir . $row['image'])) {
    unlink($targetDir . $row['image']);
}

mysqli_query($conn, "DELETE FROM testimonials WHERE testimonials_id=$id");

mysqli_query($conn, "SET @num := 0");
mysqli_query($conn, "UPDATE testimonials SET testimonials_id = (@num := @num + 1) ORDER BY testimonials_id");
mysqli_query($conn, "ALTER TABLE testimonials AUTO_INCREMENT = 1");

header("Location: testimonials.php?msg=testimonials data Deleted Successfully");
exit;
?>