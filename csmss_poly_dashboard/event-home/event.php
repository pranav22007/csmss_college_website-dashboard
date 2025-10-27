<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
<?php
include('../common/header_link.php');
?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include('../common/sidebar.php'); ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php include('../common/header.php'); ?>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="text-muted fw-bold py-3 mb-4">EVENT DETAILS</h4>

                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="h5 card-header">EVENT</div>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <a href="../event-home/add_event.php">
                                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td>SR</td>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Location</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <?php
                                        include('../common/dbcon.php');

                                        // Fetch events
                                        $sql = "SELECT * FROM events ORDER BY events_id DESC";
                                        $result = mysqli_query($conn, $sql);
                                        $sr = 1;

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {

                                                // Ensure correct image path
                                                $imagePath = "../assets/img/home/events/" . $row['image'];

                                                // If file does not exist, use placeholder
                                                // if (!file_exists(__DIR__ . "/assets/img/home/events/noimg.png" . $row['image'])) {
                                                //     $imagePath = "https://via.placeholder.com/50?text=No+Image";
                                                // }

                                                echo "<tr>
                                                    <td>{$sr}</td>
                                                    <td ><strong>{$row['title']}</strong></td>
                                                    <td><img src='{$imagePath}' width='50'></td>
                                                    <td >{$row['location']}</td>
                                                    <td>
                                                        <a href='edit_event.php?events_id={$row['events_id']}' class='btn rounded-pill btn-primary'>
                                                            <i class='bx bx-edit-alt me-1'></i> Edit
                                                        </a>
                                                        <a href='delete_event.php?events_id={$row['events_id']}' class='btn rounded-pill btn-danger' onclick='return confirm(\"Are you sure?\")'>
                                                            <i class='bx bx-trash me-1'></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>";

                                                $sr++;
                                            }
                                        } else {
                                            echo "<tr><td colspan='6' class='text-center'>No events found</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Hoverable Table rows -->

                        <hr class="my-5" />

                        <!-- Footer -->
                        <?php include('../common/footer.php'); ?>
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

        <?php include('../common/footer-link.php'); ?>
    </div>
</body>
</html>