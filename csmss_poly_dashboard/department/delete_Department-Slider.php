<?php include '../common/auth.php'; ?>
<?php
include('../common/dbcon.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete_query = "DELETE FROM department_slider WHERE id='$id'";

    if (mysqli_query($conn, $delete_query)) {
        header("Location: show_Department-Slider.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    header("Location: show_Department-Slider.php");
    exit();
}
?>

