<?php
include '../common/auth.php';
include('../common/dbcon.php');

$id = intval($_GET['home_news_id']);
$status = intval($_GET['status']);

$sql = "UPDATE news SET status = $status WHERE home_news_id = $id";
if (mysqli_query($conn, $sql)) {
    // Redirect back to the same page instead of hardcoding
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
