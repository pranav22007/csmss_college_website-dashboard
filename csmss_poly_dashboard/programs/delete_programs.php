<?php include '../common/auth.php'; ?>

<?php
include __DIR__ . '/../common/dbcon.php';

// Check if ID is provided
if (!isset($_GET['programs_id']) || empty($_GET['programs_id'])) {
    die("Invalid request. No ID provided.");
}

$id = intval($_GET['programs_id']);

// Fetch the record
$result = mysqli_query($conn, "SELECT * FROM programs WHERE programs_id=$id");
$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("Program not found.");
}

// Delete pdf if exists
$targetDir = __DIR__ . "/../uploads/programs/pdf/";
if (!empty($row['pdf']) && file_exists($targetDir . $row['pdf'])) {
    unlink($targetDir . $row['pdf']);
}

// Delete the record
mysqli_query($conn, "DELETE FROM programs WHERE programs_id=$id");

// (Optional) Renumber IDs - not recommended, but you had in your code
mysqli_query($conn, "SET @num := 0");
mysqli_query($conn, "UPDATE programs SET programs_id = (@num := @num + 1) ORDER BY programs_id");
mysqli_query($conn, "ALTER TABLE programs AUTO_INCREMENT = 1");

// Redirect with message
header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>