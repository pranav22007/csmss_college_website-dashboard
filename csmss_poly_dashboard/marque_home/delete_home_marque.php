<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

if (isset($_GET['marquee_id'])) {
    $id = intval($_GET['marquee_id']);

    // fetch file name before deleting (so we can remove file from uploads)
    $sql = "SELECT pdf FROM marquee WHERE marquee_id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $file = "../assets/pdf/marquee-home/marquee/" . $row['pdf'];

        // delete record from database
        $delete = "DELETE FROM marquee WHERE marquee_id=$id";
        if ($conn->query($delete) === TRUE) {
            // remove file if exists
            if (file_exists($file)) {
                unlink($file);
            }
            header("Location: home_marque.php?msg=deleted");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "❌ Invalid request. No record found.";
    }
} else {
    echo "❌ Invalid request. No ID provided.";
}
$conn->close();
?>
