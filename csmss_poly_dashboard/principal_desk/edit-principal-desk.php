<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

// Get ID from URL
$id = $_GET['principle_id'] ?? 0;

// Fetch record
$sql = "SELECT * FROM principle WHERE principle_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("Record not found!");
}

// Handle form submission
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Check if new image uploaded
    if (!empty($_FILES['image']['name'])) {
        $img_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $folder = "../assets/img/college/principal-desk/" . $img_name;

        move_uploaded_file($tmp_name, $folder);

        $update_sql = "UPDATE principle
                       SET name='$name', description='$description', image='$img_name' 
                       WHERE principle_id=$id";
    } else {
        $update_sql = "UPDATE principle 
                       SET name='$name', description='$description' 
                       WHERE principle_id=$id";
    }

    if (mysqli_query($conn, $update_sql)) {
        header("Location: principal-desk.php?msg=updated");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default">
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
            <h5 class="card-header">EDIT PRINCIPAL-DESK</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="<?= $row['name']; ?>"
                        required
                      />
                      <label for="name">Name</label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <input class="form-control p-3 mt-3" type="file" id="formFile" name="image">
                      <small class="text-muted">Leave blank to keep existing image.</small><br>
                      <img src="../assets/img/college/principal-desk/<?= $row['image']; ?>" width="100" class="mt-2 rounded">
                    </div>
                  </div>

                  <div class="col-lg-12 py-4">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        name="description"
                        id="floatingTextarea2"
                        style="height: 100px"
                        required><?= $row['description']; ?></textarea>
                      <label for="floatingTextarea2">Description</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 text-center">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                    <a href="principal-desk.php" class="btn btn-secondary">Back</a>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <hr class="my-5" />

          <!-- Footer -->
          <?php include '../common/footer.php'; ?>
        </div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include '../common/footer-link.php'; ?>
</body>
</html>
