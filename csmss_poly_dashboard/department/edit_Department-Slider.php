<?php include '../common/auth.php'; ?>
<?php
include('../common/dbcon.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM department_slider WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No record found!";
        exit();
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $image= $_POST['image'];
    
    $department = $_POST['department'];
    

    $update_query = "UPDATE department_slider
                     SET Image='$image', 
                         Department='$department'
                     WHERE id='$id'";

    if (mysqli_query($conn, $update_query)) {
        header("Location: show_Department-Slider.php"); // redirect back
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Sidebar -->
            <?php include '../common/sidebar.php'; ?>
            <!-- / Sidebar -->

            <div class="layout-page">
                <!-- Navbar -->
                <?php include '../common/header.php'; ?>
                <!-- / Navbar -->

                <div class="container">
                    <div class="card my-4">
                        <h5 class="card-header">Edit DEPARTMENT SLIDER</h5>
                        <div class="card-body">
                            <form method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <class="row">
                                    <div class="col-lg-5">
                                        <div class="form-floating mb-3 mt-3">
                                            <input type="file" class="form-control p-3 mt-3" name="image" />
                                            <?php if (!empty($dept['image'])) { ?>
                                                <img src="../assets/img/<?php echo htmlspecialchars($dept['image']); ?>" width="80" class="mt-2">
                                            <?php } ?>
                                        </div>
                                    </div>

                                    
                                

                                
                                    <div class="col-lg-5">
                                        <div class="form-floating mb-3 mt-3">
                                            <select class="form-select" name="department" required>
                                                <option disabled>Choose Department</option>
                                                <option value="Civil Engineering" <?php if ($row['department'] == "Civil Engineering") echo "selected"; ?>>Civil Engineering</option>
                                                <option value="Electrical Engineering" <?php if ($row['department'] == "Electrical Engineering") echo "selected"; ?>>Electrical Engineering</option>
                                                <option value="Mechanical Engineering Department" <?php if ($row['department'] == "Mechanical Engineering Department") echo "selected"; ?>>Mechanical Engineering Department</option>
                                                <option value="Electronic and Tele-communication Engineering" <?php if ($row['department'] == "Electronic and Tele-communication Engineering") echo "selected"; ?>>Electronics & Tele-communication Engineering</option>
                                                <option value="Computer Engineering" <?php if ($row['department'] == "Computer Engineering") echo "selected"; ?>>Computer Engineering</option>
                                                <option value="Artificial intelligence Engineering" <?php if ($row['department'] == "Artificial intelligence Engineering") echo "selected"; ?>>Artificial Intelligence and Machine Learning</option>
                                            </select>
                                            <label for="department">Department</label>
                                        </div>
                                    </div>
                                   
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mt-3 text-center">
                                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                                        <a href="show_Department-Slider.php" class="btn btn-secondary">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="my-5" />

                    <?php include '../common/footer.php'; ?>
                </div>
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
    <?php include '../common/footer-link.php'; ?>
</body>

</html>