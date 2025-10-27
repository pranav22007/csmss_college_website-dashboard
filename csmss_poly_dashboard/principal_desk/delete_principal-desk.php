<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

if (isset($_GET['principle_id'])) {
    $id = $_GET['principle_id'];

    // Optional: get image name first to delete file from uploads
    $img_sql = "SELECT image FROM principle  WHERE principle_id=$id";
    $img_result = mysqli_query($conn, $img_sql);
    $img_row = mysqli_fetch_assoc($img_result);

    if ($img_row && file_exists("../assets/img/college/principal-desk/" . $img_row['image'])) {
        unlink("../assets/img/college/principal-desk/" . $img_row['image']); // delete image file
    }

    // Delete record from DB
    $sql = "DELETE FROM principle WHERE principle_id=$id";
    if (mysqli_query($conn, $sql)) {
        header("Location: principal-desk.php?msg=deleted");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    header("Location: principal-desk.php?msg=invalid");
    exit;
}
?>
