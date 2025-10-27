<?php include '../common/auth.php'; ?>

<?php
include "../common/dbcon.php";  // use correct path

if (isset($_GET['members_id'])) {
    $id = intval($_GET['members_id']); // security: only allow numbers

    $sql = "DELETE FROM `members` WHERE members_id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: members.php?msg=Record deleted successfully");
        exit;
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
} else {
    echo "No ID provided!";
}
?>
