<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<?php
include '../common/header_link.php';
include '../common/dbcon.php';

// Insert logic
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $label = mysqli_real_escape_string($conn, $_POST['label']);
    $seats = mysqli_real_escape_string($conn, $_POST['seats']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);

    // File Upload
    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $uploadDir = "../assets/img/home/courses/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $imagePath = $uploadDir . basename($imageName);
    move_uploaded_file($imageTmp, $imagePath);

    $sql = "INSERT INTO course (title, image, description, label, seats, duration, comments)
            VALUES ('$title', '$imageName', '$description', '$label', '$seats', '$duration', '$comments')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Course Added Successfully'); window.location='courses.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include '../common/sidebar.php'; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php include '../common/header.php'; ?>
          <!-- / Navbar -->

          <div class="container">
            <div class="card my-4">
              <h5 class="card-header">ADD COURSES</h5>
              <div class="card-body">
                <div class="container mt-3">
                  
                  <!-- FORM START -->
                  <form method="POST" enctype="multipart/form-data">
                    <div class="row">

                      <!-- Title -->
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input type="text" class="form-control" name="title" placeholder="Title" required>
                          <label>Title</label>
                        </div>
                      </div>

                      <!-- Image -->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <input class="form-control p-3 mt-3" type="file" name="image" required>
                        </div>
                      </div>

                      <!-- Description -->
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input type="text" class="form-control" name="description" placeholder="Description" required>
                          <label>Description</label>
                        </div>
                      </div>

                      <!-- Label -->
                     <!-- labels -->
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input type="text" class="form-control" name="label" placeholder="write course abbrivation" required>
                          <label>labels</label>
                        </div>
                      </div>

                      <!-- Seats -->
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input type="number" class="form-control" name="seats" placeholder="Seats" required>
                          <label>Seats</label>
                        </div>
                      </div>

                      <!-- Duration -->
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input type="text" class="form-control" name="duration" placeholder="Duration" required>
                          <label>Duration</label>
                        </div>
                      </div>

                      <!-- Comments -->
                      <div class="col-lg-12 py-4">
                        <div class="form-floating">
                          <textarea class="form-control" name="comments" placeholder="Leave a comment here" style="height: 100px"></textarea>
                          <label>Comments</label>
                        </div>
                      </div>

                    </div>

                    <!-- Buttons -->
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-primary">Add Course</button>
                      <a href="courses.php" class="btn btn-secondary">Back</a>
                    </div>
                  </form>
                  <!-- FORM END -->

                </div>
              </div>
            </div>

            <hr class="my-5" />

            <!-- Footer -->
            <?php include '../common/footer.php'; ?>
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
    <!-- / Layout wrapper -->

    <?php include '../common/footer-link.php'; ?>
  </body>
</html>
