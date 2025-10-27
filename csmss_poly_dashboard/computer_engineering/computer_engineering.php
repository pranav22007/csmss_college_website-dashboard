<?php include '../common/auth.php'; ?>
<?php
include('../common/dbcon.php');

// DELETE logic
if (isset($_POST['delete_btn'])) {
    $delete_id = $_POST['delete_id'];

    // Fetch filename to delete from server
    $get_file_query = "SELECT pdf FROM computer_engineering WHERE co_id='$delete_id' LIMIT 1";
    $get_file_result = mysqli_query($conn, $get_file_query);

    if ($get_file_result && mysqli_num_rows($get_file_result) > 0) {
        $file_row = mysqli_fetch_assoc($get_file_result);
        $file_name = $file_row['pdf'];

        // Delete file from uploads folder
        $file_path = __DIR__ . "../assets/pdf/computer_engineering/" . $file_name;
        if (!empty($file_name) && file_exists($file_path)) {
            unlink($file_path);
        }
    }

    // Delete record from database
    $delete_query = "DELETE FROM computer_engineering WHERE co_id='$delete_id'";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        header("Location: computer_engineering.php");
        exit();
    } else {
        echo "<script>alert('Error deleting record.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<?php include '../common/header_link.php'; ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <?php include '../common/sidebar.php'; ?>

            <div class="layout-page">

                <?php include '../common/header.php'; ?>

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="text-muted fw-bold py-3 mb-4">COMPUTER ENGINEERING DETAILS</h4>

                    <div class="card">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="h5 card-header">COMPUTER ENGINEERING</div>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-end">
                                <a href="add_computer_engineering.php">
                                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                                </a>
                            </div>
                        </div>

                        <?php
                        $query = "SELECT * FROM computer_engineering ORDER BY co_id ASC";
                        $result = mysqli_query($conn, $query);

                        if ($result && mysqli_num_rows($result) > 0):
                            ?>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Subject Code</th>
                                            <th>PDF</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $serial = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td><?= $serial++; ?></td>
                                                <td><?= htmlspecialchars($row['subject_code']); ?></td>
                                                <td>
                                                    <?php if (!empty($row['pdf'])): ?>
                                                        <a href="../assets/pdf/computer_engineering/<?= htmlspecialchars($row['pdf']); ?>"
                                                            target="_blank"><?= htmlspecialchars($row['pdf']); ?></a>
                                                    <?php else: ?>
                                                        No PDF
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="edit_computer_engineering.php?co_id=<?= $row['co_id']; ?>"
                                                        class="btn btn-primary btn-sm">Edit</a>

                                                    <form method="POST" action="" style="display:inline-block;"
                                                        onsubmit="return confirm('Are you sure you want to delete this record?');">
                                                        <input type="hidden" name="delete_id" value="<?= $row['co_id']; ?>">
                                                        <button type="submit" name="delete_btn"
                                                            class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <p class="m-3">No Records Found</p>
                        <?php endif; ?>
                    </div>
                </div>

                <hr class="my-5" />

                <?php include '../common/footer.php'; ?>

            </div>
        </div>
    </div>

    <?php include '../common/footer-link.php'; ?>
</body>

</html>