<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

// ✅ Get course ID from URL
if (!isset($_GET['course_id']) || empty($_GET['course_id'])) {
  die("Invalid Course ID.");
}
$id = intval($_GET['course_id']);

// ✅ Fetch course details
$query = "SELECT * FROM course WHERE course_id = $id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
  die("Course not found!");
}
$course = mysqli_fetch_assoc($result);

// ✅ Update Course when form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title       = mysqli_real_escape_string($conn, $_POST['title']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $label       = mysqli_real_escape_string($conn, $_POST['label']);
  $seats       = mysqli_real_escape_string($conn, $_POST['seats']);
  $duration    = mysqli_real_escape_string($conn, $_POST['duration']);
  $comments    = mysqli_real_escape_string($conn, $_POST['comments']);

  // Handle image upload
  $image = $course['image']; // keep old image if no new one
  if (!empty($_FILES['image']['name'])) {
    $target_dir = "../assets/img/home/courses/";
    $image = time() . "_" . basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
  }

  $updateQuery = "UPDATE course 
                    SET title='$title', description='$description', label='$label', 
                        seats='$seats', duration='$duration', comments='$comments', image='$image'
                    WHERE course_id=$id";

  if (mysqli_query($conn, $updateQuery)) {
    header("Location: courses.php?msg=Course updated successfully");
    exit;
  } else {
    echo "Error updating course: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php include '../common/sidebar.php'; ?>
      <!-- / Menu -->

      <!-- Layout page -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php include '../common/header.php'; ?>
        <!-- / Navbar -->

        <div class="container">
          <div class="card my-4">
            <h5 class="card-header">EDIT COURSE</h5>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <!-- Title -->
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="title" value="<?= htmlspecialchars($course['title']); ?>" required>
                      <label for="title">Title</label>
                    </div>
                  </div>

                  <!-- Image -->
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <input class="form-control p-3 mt-3" type="file" name="image">
                      <?php if (!empty($course['image'])) { ?>
                        <p class="mt-2">Current Image:</p>
                        <img src="../assets/img/home/courses/<?= $course['image']; ?>" width="80" height="80">
                      <?php } ?>
                    </div>
                  </div>

                  <!-- Description -->
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="description" value="<?= htmlspecialchars($course['description']); ?>">
                      <label for="description">Description</label>
                    </div>
                  </div>

                  <!-- Labels -->
                  <!-- label -->
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="label" value="<?= htmlspecialchars($course['label']); ?>">
                      <label for="label">label</label>
                    </div>
                  </div>


                  <!-- Seats -->
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="number" class="form-control" name="seats" value="<?= htmlspecialchars($course['seats']); ?>">
                      <label for="seats">Seats</label>
                    </div>
                  </div>

                  <!-- Duration -->
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="duration" value="<?= htmlspecialchars($course['duration']); ?>">
                      <label for="duration">Duration</label>
                    </div>
                  </div>

                  <!-- Comments -->
                  <div class="col-lg-12 py-4">
                    <div class="form-floating">
                      <textarea class="form-control" name="comments" style="height: 100px"><?= htmlspecialchars($course['comments']); ?></textarea>
                      <label for="comments">Comments</label>
                    </div>
                  </div>
                </div>

                <!-- Buttons -->
                <div class="col-lg-12 text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="courses.php" class="btn btn-secondary">Back</a>
                </div>
              </form>
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