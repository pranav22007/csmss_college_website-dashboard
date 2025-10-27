<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<?php include('../common/header_link.php'); ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Sidebar -->
            <?php include('../common/sidebar.php'); ?>
            <!-- / Sidebar -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="text-muted fw-bold py-3 mb-4">Placement Gallery (Year-wise)</h4>

                        <!-- Add Button -->
                        <div class="d-flex justify-content-end mb-3">
                            <a href="add_placement-gallery.php" class="btn btn-primary">ADD +</a>
                        </div>

                        <?php
                        // Fetch years
// 🔽 Change DESC to ASC here
                        $yearsQuery = "SELECT DISTINCT year FROM placement_gallery ORDER BY year ASC";
                        $yearsResult = mysqli_query($conn, $yearsQuery);



                        if (mysqli_num_rows($yearsResult) > 0) {
                            while ($yearRow = mysqli_fetch_assoc($yearsResult)) {
                                $year = $yearRow['year'];
                                ?>

                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Year: <?php echo htmlspecialchars($year); ?></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered align-middle text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th width="5%">Sr. No.</th>
                                                        <th width="15%">Year</th>
                                                        <th width="40%">Image</th>
                                                        <th width="20%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT * FROM placement_gallery WHERE year='$year' ORDER BY placement_gallery_id DESC";
                                                    $result = mysqli_query($conn, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        $sr = 1;
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $sr++; ?></td>
                                                                <td><?php echo htmlspecialchars($year); ?></td>
                                                                <td>
                                                                    <img src="../assets/img/placement_gallery/<?php echo htmlspecialchars($row['img']); ?>"
                                                                        alt="Placement Image" class="img-thumbnail" width="50"
                                                                        height="50">
                                                                </td>
                                                                <td>
                                                                    <a href="edit_placement-gallery.php?id=<?php echo $row['placement_gallery_id']; ?>"
                                                                        class="btn btn-sm btn-primary me-1 rounded-pill px-4 py-2">
                                                                        <i class="bx bx-edit-alt "></i> Edit
                                                                    </a>
                                                                    <a href="delete_placement-gallery.php?id=<?php echo $row['placement_gallery_id']; ?>"
                                                                        onclick="return confirm('Are you sure you want to delete this record?');"
                                                                        class="btn btn-sm btn-danger rounded-pill px-4 py-2">
                                                                        Delete
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    } else {
                                                        echo "<tr><td colspan='4' class='text-muted'>No images for this year.</td></tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            } // end years loop
                        } else {
                            // No years in DB, render one empty table
                            ?>
                            <div class="card mb-4">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Year: -</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th width="5%">Sr. No.</th>
                                                    <th width="15%">Year</th>
                                                    <th width="40%">Image</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="4" style="height:50px;">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>


                        <?php include('../common/footer.php'); ?>
                        <div class="content-backdrop fade"></div>
                    </div>
                </div>
                <!-- / Content wrapper -->
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <?php include('../common/footer-link.php'); ?>
</body>

</html>