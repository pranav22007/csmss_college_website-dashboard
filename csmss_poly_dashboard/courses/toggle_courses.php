<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';

if (isset($_GET['course_id']) && isset($_GET['status'])) {
    $course_id = intval($_GET['course_id']);
    $status = intval($_GET['status']);

    $sql = "UPDATE course SET status = $status WHERE course_id = $course_id";

    if (mysqli_query($conn, $sql)) {
        header("Location: courses.php?msg=Course status updated");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request!";
}
