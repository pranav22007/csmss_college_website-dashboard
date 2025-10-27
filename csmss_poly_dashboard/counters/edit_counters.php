<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

// Get counter ID safely
$id = isset($_GET['counters_id']) ? intval($_GET['counters_id']) : 0;

// Fetch the record
$sql = "SELECT * FROM counters WHERE counters_id = $id";
$result = mysqli_query($conn, $sql);
$counter = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $count = intval($_POST['count']);

    // Update query (fixed syntax)
    $sql = "UPDATE counters 
            SET Title='$title', count='$count' 
            WHERE counters_id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: counters.php?msg=updated");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>


    <?php include('../common/header_link.php'); ?>

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
    <h3>Edit Counter</h3>

    <?php if ($counter): ?>
    <form method="post">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" 
                   value="<?= htmlspecialchars($counter['Title'] ?? '') ?>" 
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Count</label>
            <input type="number" name="count" 
                   value="<?= htmlspecialchars($counter['count'] ?? 0) ?>" 
                   class="form-control" required>
        </div>

        <div class="col-lg-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="counters.php" class="btn btn-secondary">Back</a>
        </div>

    </form>
    <?php else: ?>
        <div class="alert alert-danger">Counter not found!</div>
    <?php endif; ?>
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
