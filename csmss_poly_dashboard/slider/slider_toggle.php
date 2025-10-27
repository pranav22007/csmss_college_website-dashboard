<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

$id = intval($_GET['slider_id']);
$status = intval($_GET['status']);

$sql = "UPDATE slider SET status = $status WHERE slider_id = $id";
if (mysqli_query($conn, $sql)) {
    header("Location: slider.php"); // change filename if different
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
