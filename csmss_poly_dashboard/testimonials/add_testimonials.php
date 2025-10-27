<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php'; // Make sure this file connects to your DB

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $designation = $_POST['designation'];
    $description = $_POST['description'];

    // Handle file upload
    if (!empty($_FILES['image']['name'])) {
        $originalName = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];

        // Get file extension safely
        $ext = pathinfo($originalName, PATHINFO_EXTENSION);

        // Generate random unique filename
        $image = uniqid("img_", true) . "." . strtolower($ext);

        // Uploads folder (shared folder)
        $uploadDir = "../uploads/";
        $folder = $uploadDir . $image;

        // Auto-create uploads folder if not exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (move_uploaded_file($temp_name, $folder)) {
            // Save only filename in DB
            $sql = "INSERT INTO testimonials (title, image, designation, description) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $title, $image, $designation, $description);

            if ($stmt->execute()) {
                header("Location: testimonials.php?success=1");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "❌ Failed to upload image.";
        }
    } else {
        echo "⚠️ Please select an image file.";
    }
}
?>


<?php include '../common/header_link.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Testimonial</title>
  </head>
  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php include '../common/sidebar.php'; ?>

        <div class="layout-page">
          <?php include '../common/header.php'; ?>

          <div class="container">
            <div class="card my-4">
              <h5 class="card-header">ADD TESTIMONIALS</h5>
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="title" placeholder="Title" required />
                        <label for="title">Title</label>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="mb-3 mt-3">
                        <input class="form-control p-3" type="file" name="image" required />
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="designation" placeholder="Designation" required />
                        <label for="designation">Designation</label>
                      </div>
                    </div>

                    <div class="col-lg-12 py-4">
                      <div class="form-floating">
                        <textarea class="form-control" name="description" placeholder="Description" style="height: 100px" required></textarea>
                        <label for="description">Description</label>
                      </div>
                    </div>

                    <div class="col-lg-12 text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Add Testimonial</button>
                      <a href="./testimonials.php" class="btn btn-secondary">Back</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <?php include '../common/footer.php'; ?>
          </div>
        </div>
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <?php include '../common/footer-link.php'; ?>
  </body>
</html>
