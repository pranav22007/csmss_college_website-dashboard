<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php'; // your DB connection

if (isset($_GET['placement_data_id'])) {
    $id = intval($_GET['placement_data_id']);

    // Fetch record first
    $sql = "SELECT * FROM placement_data WHERE placement_data_id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fileName = $row['pdf'];

        // Delete file if exists
        $filePath = "../assets/pdf/placement/placement_data/" . $fileName;
        if (!empty($fileName) && file_exists($filePath)) {
            unlink($filePath);
        }

        // Delete record from DB
        $delete = "DELETE FROM placement_data WHERE placement_data_id = $id";
        if (mysqli_query($conn, $delete)) {
            echo "<script>alert('Placement deleted successfully!'); window.location='placement.php';</script>";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "Placement not found.";
    }
} else {
    echo "No placement ID provided.";
}
?>
