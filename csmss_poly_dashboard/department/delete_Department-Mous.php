<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $checkQuery = "SELECT * FROM mous_data WHERE id = $id";
    $checkResult = mysqli_query($conn, $checkQuery);
    if (mysqli_num_rows($checkResult) > 0) {
        $deleteQuery = "DELETE FROM mous_data WHERE id = $id";
        if (mysqli_query($conn, $deleteQuery)) {
            header("Location: ./show_Department-Mous.php?msg=deleted");
            exit;
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
}
