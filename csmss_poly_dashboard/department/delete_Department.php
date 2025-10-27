<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php'; // DB connection

// Get department ID from URL
$id = $_GET['id'] ?? null;

if (!$id) {
    die("Department ID is missing");
}

// Fetch department image name so we can delete it from folder
$result = $conn->query("SELECT image FROM department WHERE id = $id");
$dept = $result->fetch_assoc();

if ($dept) {
    // Delete image file if exists
    if (!empty($dept['image']) && file_exists("../assets/img/department/" . $dept['image'])) {
        unlink("../assets/img/department/" . $dept['image']);
    }

    // Delete record from database
    $sql = "DELETE FROM department WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Department deleted successfully');window.location='show_Department.php';</script>";
    } else {
        echo "<script>alert('Delete failed: " . $stmt->error . "');window.location='show_Department.php';</script>";
    }
} else {
    echo "<script>alert('Department not found');window.location='show_Department.php';</script>";
}
?>
