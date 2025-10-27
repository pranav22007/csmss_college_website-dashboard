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
            <?php include('../common/sidebar.php'); ?>
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="text-muted fw-bold py-3 mb-4"> Gathering (Year‑wise)</h4>
                        <div class="d-flex justify-content-end mb-3">
                            <a href="add_gathering.php" class="btn btn-primary">ADD +</a>
                        </div>
                        <?php
                        $yearsQuery = "SELECT DISTINCT year FROM gathering ORDER BY year ASC";
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
                                                        <th width="15%">Title</th>
                                                        <th width="40%">Image</th>
                                                        <th width="20%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT * FROM gathering WHERE year='$year' ORDER BY gallery_id DESC";
                                                    $result = mysqli_query($conn, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        $sr = 1;
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $sr++; ?></td>
                                                                <td><?php echo htmlspecialchars($year); ?></td>
                                                                <td><?php echo htmlspecialchars($row['title']); ?></td>
                                                                <td><img src="../assets/img/gathering/<?php echo htmlspecialchars($year); ?>/<?php echo htmlspecialchars($row['img']); ?>"
                                                                        alt="Placement Image" class="img-fluid"
                                                                        style="max-height: 150px;">
                                                                </td>
                                                                <td>
                                                                    <a href="edit_gathering.php?id=<?php echo $row['gallery_id']; ?>"
                                                                        class="btn btn-sm btn-primary me-1">
                                                                        <i class="bx bx-edit-alt"></i> Edit
                                                                    </a>
                                                                    <a href="delete_gathering.php?id=<?php echo $row['gallery_id']; ?>"
                                                                        onclick="return confirm('Are you sure you want to delete this record?');"
                                                                        class="btn btn-sm btn-danger">
                                                                        Delete
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    } else {
                                                        echo "<tr><td colspan='5' class='text-muted'>No images for this year.</td></tr>";
                                                    }
                                                    ?>
                                                </tbody>

                                               
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
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
                                                    <th width="25%">Title</th>
                                                    <th width="40%">Image</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="5" style="height:50px;">&nbsp;</td>
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
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <?php include('../common/footer-link.php'); ?>
</body>

</html>