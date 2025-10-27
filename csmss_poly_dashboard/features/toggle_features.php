<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

$id = intval($_GET['features_id'] ?? 0);
$status = intval($_GET['status'] ?? 0);

if ($id > 0) {
    $stmt = $conn->prepare("UPDATE features SET status = ? WHERE features_id = ?");
    $stmt->bind_param("ii", $status, $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: features.php?msg=Feature status updated");
exit;
?>

