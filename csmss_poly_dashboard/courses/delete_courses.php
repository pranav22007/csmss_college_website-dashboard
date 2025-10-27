<?php include '../common/auth.php'; ?>

<?php
// delete_course.php

// Include database connection
include '../common/dbcon.php';

// Check if ID is provided in URL
if (isset($_GET['course_id'])) {
    $course_id = intval($_GET['course_id']); // sanitize input (only number)

    // Prepare delete query
    $sql = "DELETE FROM course WHERE course_id = $course_id";

    if (mysqli_query($conn, $sql)) {
        // Redirect after deletion
        header("Location: courses.php?msg=Course+deleted+successfully");
        exit();
    } else {
        echo "Error deleting course: " . mysqli_error($conn);
    }
} else {
    echo "Invalid Request!";
}
