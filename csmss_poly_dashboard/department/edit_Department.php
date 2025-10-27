<?php include '../common/auth.php'; ?>
<?php
include '../common/header_link.php';
include '../common/dbcon.php'; // DB connection

// Get department ID from URL
$id = $_GET['id'] ?? null;
if (!$id) {
    die("Department ID is missing");
}

// Fetch existing department data
$result = $conn->query("SELECT * FROM department WHERE id = $id");
$dept = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $deptName = $_POST['Name'];

    // Check if new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $imgName = $_FILES['image']['name'];
        $tmpName = $_FILES['image']['tmp_name'];
        $uploadPath = "../assets/img/department/" . basename($imgName);
        move_uploaded_file($tmpName, $uploadPath);

        // Update with image
        $sql = "UPDATE department SET department=?, image=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $deptName, $imgName, $id);
    } else {
        // Update without changing image
        $sql = "UPDATE department SET department=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $deptName, $id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Department updated successfully');window.location='show_Department.php';</script>";
    } else {
        echo "<script>alert('Update failed: " . $stmt->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default">
<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">Update Department</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-floating mb-3 mt-3">
                      <input type="file" class="form-control p-3 mt-3" name="image" />
                      <?php if (!empty($dept['image'])) { ?>
                        <img src="../assets/img/<?php echo htmlspecialchars($dept['image']); ?>" width="80" class="mt-2">
                      <?php } ?>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="Name" value="<?php echo htmlspecialchars($dept['department']); ?>" required />
                      <label for="Name">Department</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="show_Department.php" class="btn btn-secondary">Back</a>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <?php include '../common/footer.php'; ?>
        </div>
      </div>
    </div>
  </div>
  <?php include '../common/footer-link.php'; ?>
</body>
</html>
