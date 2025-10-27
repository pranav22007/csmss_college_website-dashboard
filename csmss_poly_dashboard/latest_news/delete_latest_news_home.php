<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';

// Check if ID is provided
if (!isset($_GET['home_news_id']) || empty($_GET['home_news_id'])) {
    die("Invalid request. No ID provided.");
}

$id = intval($_GET['home_news_id']);

// Fetch the record
$result = mysqli_query($conn, "SELECT * FROM news WHERE home_news_id=$id");
$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("News not found.");
}

// Delete image if exists
$targetDir = __DIR__ . "/assets/img/home/latest_news/";
if (!empty($row['image']) && file_exists($targetDir . $row['image'])) {
    unlink($targetDir . $row['image']);
}

// Delete record from database
mysqli_query($conn, "DELETE FROM news WHERE home_news_id=$id");

// Redirect back with message
header("Location: latest_news_home.php?msg=News Deleted Successfully");
exit;
?>