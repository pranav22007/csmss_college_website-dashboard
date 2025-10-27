<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php'; // Database connection

if (isset($_GET['slider_id'])) {
    $id = intval($_GET['slider_id']);

    // First, get the image name from the database
    $result = mysqli_query($conn, "SELECT image FROM slider WHERE slider_id = $id");
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $imageName = $row['image'];

        // Delete the image file from uploads folder
        $imagePath = "../assets/img/home/slider/" . $imageName;
        if (!empty($imageName) && file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the database record
        $deleteQuery = mysqli_query($conn, "DELETE FROM slider WHERE slider_id = $id");

        if ($deleteQuery) {
            header("Location: slider.php?msg=deleted");
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "Record not found.";
    }
} else {
    echo "Invalid request.";
}
?>
