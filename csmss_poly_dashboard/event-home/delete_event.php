<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';

if (isset($_GET['events_id'])) {
    $id = intval($_GET['events_id']);

    // First, fetch the image name so we can delete it from the uploads folder
    $query = "SELECT image FROM events WHERE events_id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $event = mysqli_fetch_assoc($result);
        $imagePath = "../assets/img/home/events/" . $event['image'];

        // Delete the record from the database
        $deleteQuery = "DELETE FROM events WHERE events_id = $id";
        if (mysqli_query($conn, $deleteQuery)) {
            // Delete the image file if it exists
            if (file_exists($imagePath) && !empty($event['image'])) {
                unlink($imagePath);
            }
            header("Location: event.php?msg=Event deleted successfully");
            exit();
        } else {
            die("Error deleting record: " . mysqli_error($conn));
        }
    } 
}
?>
