<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

$id = $_GET['counters_id'];
$status = $_GET['status'];

// If enabling a counter
if ($status == 1) {
    // Count how many are already enabled
    $checkSql = "SELECT counters_id FROM counters WHERE status = 1 ORDER BY counters_id ASC";
    $checkResult = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($checkResult) >= 4) {
        // If already 4 enabled, disable the oldest one
        $oldest = mysqli_fetch_assoc($checkResult);
        $oldestId = $oldest['counters_id'];
        mysqli_query($conn, "UPDATE counters SET status = 0 WHERE counters_id = $oldestId");
    }
}

// Update the selected counter
$sql = "UPDATE counters SET status = $status WHERE counters_id = $id";
mysqli_query($conn, $sql);

header("Location: counters.php"); // redirect back
exit;
?>
