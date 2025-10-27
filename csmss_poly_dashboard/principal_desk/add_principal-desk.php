<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

if (isset($_POST['submit'])) {
    // Escape special characters
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Upload image
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = "../assets/img/college/principal-desk/" . $img_name;

    if (move_uploaded_file($tmp_name, $folder)) {
        $sql = "INSERT INTO principle (name, description, image) 
                VALUES ('$name', '$description', '$img_name')";
        
        if (mysqli_query($conn, $sql)) {
            header("Location: principal-desk.php?msg=added");
            exit;
        } else {
            echo "DB Error: " . mysqli_error($conn);
        }
    } else {
        echo "Image upload failed!";
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

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php include '../common/header.php'; ?>
        <!-- / Navbar -->

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">ADD PRINCIPAL DESK</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        placeholder="Name"
                        name="name"
                        required
                      />
                      <label for="name">Name</label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <input class="form-control p-3 mt-3" type="file" id="formFile" name="image" required>
                    </div>
                  </div>

                  <div class="col-lg-12 py-4">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Enter description"
                        name="description"
                        id="floatingTextarea2"
                        style="height: 100px"
                        required
                      ></textarea>
                      <label for="floatingTextarea2">Description</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Add Principal Desk</button>
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
        <!-- Content wrapper -->
      </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include '../common/footer-link.php'; ?>
</body>
</html>
