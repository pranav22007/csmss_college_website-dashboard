<?php include '../common/auth.php'; ?>
<?php
include('../common/header_link.php');
include('../common/dbcon.php'); // DB connection

if (!isset($_GET['id'])) {
    header('Location: electronics_and_telecommunication_engineering.php');
    exit;
}

$id = intval($_GET['id']);
$table_name = "electronics_and_telecommunication_engineering";

// Fetch record
$query = "SELECT * FROM $table_name WHERE entc_id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 0) {
    echo "<script>alert('Record not found'); window.location='electronics_and_telecommunication_engineering.php';</script>";
    exit;
}
$row = mysqli_fetch_assoc($result);

// Update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subject_code = $_POST['subject_code'];
    $pdf_file = $row['pdf'];

    if (!empty($_FILES['pdf']['name'])) {
        // Define the new directory where files should be uploaded
        $upload_dir = "../assets/pdf/en_tc/";

        // Ensure the directory exists
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); // Create the directory if not exists
        }

        // Update the file name with timestamp to prevent overwriting
        $pdf_file = time() . '_' . $_FILES['pdf']['name'];
        move_uploaded_file($_FILES['pdf']['tmp_name'], $upload_dir . $pdf_file);
    }

    $update_query = "UPDATE $table_name SET subject_code = ?, pdf = ? WHERE entc_id = ?";
    $stmt_update = mysqli_prepare($conn, $update_query);
    mysqli_stmt_bind_param($stmt_update, "ssi", $subject_code, $pdf_file, $id);

    if (mysqli_stmt_execute($stmt_update)) {
        echo "<script>alert('Record updated successfully'); window.location='electronics_and_telecommunication_engineering.php';</script>";
        exit;
    } else {
        echo "<script>alert('Update failed');</script>";
    }
}
?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Sidebar -->
            <?php include('../common/sidebar.php'); ?>
            <!-- / Sidebar -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                <?php include('../common/header.php'); ?>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">EDIT ELECTRONICS AND TELECOMMUNICATION ENGINEERING</h4>

                        <div class="card">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data" class="row g-3">
                                    <!-- Title -->
                                    <div class="col-md-6">
                                        <label class="form-label">Title</label>
                                        <input type="text" name="subject_code" class="form-control"
                                            value="<?= htmlspecialchars($row['subject_code']) ?>" required> <br>
                                        <?php if (!empty($row['pdf'])): ?>
                                            <small class="d-block mt-1">
                                                Current File:
                                                <a href="../assets/pdf/en_tc/<?= $row['pdf'] ?>"
                                                    target="_blank" class="text-primary">
                                                    <?= $row['pdf'] ?>
                                                </a>
                                            </small>
                                        <?php endif; ?>
                                    </div>

                                    <!-- PDF File -->
                                    <div class="col-md-6">
                                        <label class="form-label">Choose File</label>
                                        <input type="file" name="pdf" class="form-control">
                                    </div>

                                    <!-- Buttons -->
                                    <div class="col-12 d-flex justify-content-center mt-4">
                                        <button type="submit" class="btn btn-primary me-2">Update</button>
                                        <a href="electronics_and_telecommunication_engineering.php"
                                            class="btn btn-primary">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <hr class="my-5" />

                        <!-- Footer -->
                        <?php include('../common/footer.php'); ?>
                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>
                    </div>
                </div>
                <!-- / Content wrapper -->
            </div>
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <?php include('../common/footer-link.php'); ?>
</body>

</html>