<?php include '../common/auth.php'; ?>

<?php
include '../common/header_link.php';
include '../common/dbcon.php';

$partner = null;

// Get Partner Data
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Correct GET parameter

    $query = "SELECT * FROM partner WHERE partner_id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    $partner = mysqli_fetch_assoc($result);

    if (!$partner) {
        echo "<script>alert('Partner not found'); window.location='partner.php';</script>";
        exit;
    }
}

// Update Partner Data
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);

    $updateImage = $partner['image']; // keep old image by default

    if (!empty($_FILES['image']['name'])) {
        $imageName = $_FILES['image']['name'];
        $imageTmp = $_FILES['image']['tmp_name'];
        $uploadDir = "../assets/img/home/partner/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $uniqueName = time() . "_" . rand(1000, 9999) . "_" . basename($imageName);
        $imagePath = $uploadDir . $uniqueName;

        if (move_uploaded_file($imageTmp, $imagePath)) {
            // delete old image if exists
            if (!empty($partner['image']) && file_exists($uploadDir . $partner['image'])) {
                unlink($uploadDir . $partner['image']);
            }
            $updateImage = $uniqueName;
        }
    }

    $sql = "UPDATE partner SET title='$title', link='$link', image='$updateImage' WHERE partner_id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Partner Updated Successfully'); window.location='partner.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT PARTNER</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">

                    <!-- Title -->
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="title" name="title"
                          value="<?php echo htmlspecialchars($partner['title']); ?>" required>
                        <label for="title">Title</label>
                      </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input class="form-control p-3 mt-3" type="file" name="image">
                      </div>
                      <!-- Show Old Image -->
                      <div class="mt-2">
                        <?php if (!empty($partner['image'])) { ?>
                          <img src="../assets/img/home/partner/<?php echo htmlspecialchars($partner['image']); ?>" width="80" height="60">
                        <?php } else { ?>
                          <span>No Image</span>
                        <?php } ?>
                      </div>
                    </div>

                    <!-- Link -->
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="url" class="form-control" name="link"
                          value="<?php echo htmlspecialchars($partner['link']); ?>" required>
                        <label>Website URL</label>
                      </div>
                    </div>

                  </div>

                  <!-- Buttons -->
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="partner.php" class="btn btn-secondary">Back</a>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <hr class="my-5" />
          <?php include '../common/footer.php'; ?>
          <div class="content-backdrop fade"></div>
        </div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include '../common/footer-link.php'; ?>
</body>

</html>
