<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

$id = intval($_GET['features_id'] ?? 0);
if ($id > 0) {
    $stmt = $conn->prepare("DELETE FROM features WHERE features_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: features.php?msg=Feature deleted successfully");
exit;
?>
