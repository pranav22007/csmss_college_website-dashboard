<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';

if (!isset($_GET['testimonials_id'])) {
    header('Location: testimonials.php');
    exit();
}

$id = intval($_GET['testimonials_id']);

// Handle form submission
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $designation = $_POST['designation'];
    $description = $_POST['description'];

    // Image handling
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $folder = "../uploads/" . $image;

        move_uploaded_file($temp_name, $folder);

        // Update with new image
        $query = "UPDATE testimonials SET title=?, image=?, designation=?, description=? WHERE testimonials_id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssi", $title, $image, $designation, $description, $id);
    } else {
        // Update without changing image
        $query = "UPDATE testimonials SET title=?, designation=?, description=? WHERE testimonials_id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssi", $title, $designation, $description, $id);
    }

    if ($stmt->execute()) {
        header("Location: testimonials.php?updated=1");
        exit();
    } else {
        echo "Error updating testimonial.";
    }
}

// Fetch existing testimonial data
$query = "SELECT * FROM testimonials WHERE testimonials_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$testimonials = $result->fetch_assoc();

if (!$testimonials) {
    echo "Testimonials not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include '../common/sidebar.php'; ?>

      <!-- Layout page -->
      <div class="layout-page">
        <?php include '../common/header.php'; ?>

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT TESTIMONIAL</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="title" value="<?php echo htmlspecialchars($testimonials['title']); ?>" required />
                        <label for="title">Title</label>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="mb-3 mt-3">
                        <input class="form-control p-3" type="file" name="image" />
                        <?php if (!empty($testimonials['image'])): ?>
                          <div class="mt-2">
                            <img src="../uploads/<?php echo $testimonials['image']; ?>" width="100" height="100" style="object-fit: cover;">
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="designation" value="<?php echo htmlspecialchars($testimonials['designation']); ?>" required />
                        <label for="designation">Designation</label>
                      </div>
                    </div>

                    <div class="col-lg-12 py-4">
                      <div class="form-floating">
                        <textarea class="form-control" name="description" style="height: 100px"><?php echo htmlspecialchars($testimonials['description']); ?></textarea>
                        <label for="description">Description</label>
                      </div>
                    </div>

                    <div class="col-lg-12 text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Update</button>
                      <a href="testimonials.php" class="btn btn-secondary">Back</a>
                    </div>
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
      <!-- /Layout page -->
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <?php include '../common/footer-link.php'; ?>
</body>
</html>
