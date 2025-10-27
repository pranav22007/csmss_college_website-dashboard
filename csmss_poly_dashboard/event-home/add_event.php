<?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title       = $_POST['title'];
    $location    = $_POST['location'];

         // Image handling
    $imageName = "";
    if (!empty($_FILES['image']['name'])) {
        $imageTmp  = $_FILES['image']['tmp_name'];

        // Unique filename (to prevent overwrite)
        $imageName = time() . "_" . basename($_FILES['image']['name']);

        // Upload directory
        $uploadDir = "../assets/img/home/events/";

        // ✅ Create the folder if it doesn’t exist
        if (!is_dir($uploadDir)) {
            if (!mkdir($uploadDir, 0777, true)) {
                die("Failed to create folder: " . $uploadDir);
            }
        }

        $imagePath = $uploadDir . $imageName;

        // Move uploaded file
        if (!move_uploaded_file($imageTmp, $imagePath)) {
            die("Image upload failed! Check folder permissions.");
        }
    }



    // Insert into DB
    $insert = "INSERT INTO events (title, location,  image) 
               VALUES ('$title', '$location',  '$imageName')";

    if (mysqli_query($conn, $insert)) {
        header("Location: event.php?msg=Event Added Successfully");
        exit();
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
    <?php include '../common/sidebar.php'; ?>
    <div class="layout-page">
      <?php include '../common/header.php'; ?>

      <div class="container">
        <div class="card my-4">
          <h5 class="card-header">ADD EVENT</h5>
          <div class="card-body">
            <div class="container mt-3">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="title" placeholder="Title" required>
                      <label>Title</label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" name="location" placeholder="Location" required>
                      <label>Location</label>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="mb-3">
                      <input class="form-control p-3 mt-3" type="file" name="image">
                    </div>
                  </div>

                 

                <div class="row">
                  <div class="col-lg-12 mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Add Event</button>
                    <a href="event.php" class="btn btn-secondary">Back</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <?php include '../common/footer.php'; ?>
      <div class="content-backdrop fade"></div>
    </div>
  </div>
  <div class="layout-overlay layout-menu-toggle"></div>
</div>
<?php include '../common/footer-link.php'; ?>
</body>
</html>
