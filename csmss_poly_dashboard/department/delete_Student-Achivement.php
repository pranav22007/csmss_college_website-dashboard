<?php include '../common/auth.php'; ?>
<?php
$conn = mysqli_connect("localhost", "root", "", "csmss");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // secure cast to int

    $sql = "DELETE FROM student_achievement WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        // redirect back to list page
        header("Location: show_Student-Achivement.php?msg=Record+deleted+successfully");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>
