<?php
// include __DIR__ . "/../common/dbcon.php";

// if (isset($_GET['id']) && isset($_GET['status'])) {
//     $id = intval($_GET['id']);
//     $status = intval($_GET['status']);

//     $sql = "UPDATE latest_update SET status = $status WHERE id = $id";
//     if ($conn->query($sql) === TRUE) {
//         header("Location: latest_update.php?msg=Status updated");
//     } else {
//         echo "Error updating record: " . $conn->error;
//     }
// }
// $conn->close();
?>









<?php
include __DIR__ . "/../common/dbcon.php";

if (isset($_GET['latest_update_id']) && isset($_GET['status'])) {
    $course_id = intval($_GET['latest_update_id']);   // record id
    $status = intval($_GET['status']);  // status value (0 or 1)

    // ✅ Use correct variable $course_id
    $sql = "UPDATE latest_update SET status = $status WHERE latest_update_id = $course_id";

    if (mysqli_query($conn, $sql)) {
        header("Location: latest_update.php?msg=Course status updated");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request!";
}
?>
