<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title  = mysqli_real_escape_string($conn, $_POST['title']);
    $count  = intval($_POST['count']);
    $status = intval($_POST['status']);
    
    // Only use icon if column exists in DB
    $icon   = isset($_POST['icon']) ? mysqli_real_escape_string($conn, $_POST['icon']) : '';

    // Check if 'icon' column exists
    $col_check = mysqli_query($conn, "SHOW COLUMNS FROM counters LIKE 'icon'");
    if (mysqli_num_rows($col_check) > 0) {
        // If 'icon' exists in table
        $sql = "INSERT INTO counters (Title, count, icon, status) 
                VALUES ('$title', '$count', '$icon', '$status')";
    } else {
        // If 'icon' does not exist in table
        $sql = "INSERT INTO counters (Title, count, status) 
                VALUES ('$title', '$count', '$status')";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: counters.php?msg=added");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Counter</title>
    <?php include('../common/header_link.php'); ?>
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

       <?php
include '../common/sidebar.php';

?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

                        <?php
include '../common/header.php';

?>
<div class="container mt-4">
    <h3>Add Counter</h3>
    <form method="post">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Count</label>
            <input type="number" name="count" class="form-control" required>
        </div>

        <div class="col-lg-12 text-center">
        <button type="submit" class="btn btn-primary">Add Counters</button>
        <a href="counters.php" class="btn btn-secondary">Back</a>
</div>
    </form>
</div>
<hr class="my-5" />

                <!-- Footer -->
                <!-- Footer -->
                <?php
                include '../common/footer.php';
                ?>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

   
    <?php
    include '../common/footer-link.php';

    ?>
    <!-- Core JS -->

</body>

</html>