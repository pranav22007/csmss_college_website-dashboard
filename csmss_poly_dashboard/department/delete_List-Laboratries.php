<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);


    $deleteQuery = "DELETE FROM list_data WHERE id = $id";


    if (mysqli_query($conn, $deleteQuery)) {
        header("Location: show_List-Laboratries.php?msg=deleted");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    die("ID not provided.");
}

