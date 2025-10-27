<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

$id = $_GET['counters_id'];
$sql = "DELETE FROM counters WHERE counters_id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: counters.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
?>