<?php include '../common/auth.php'; ?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 --><?php include '../common/auth.php'; ?>

<?php
include '../common/dbcon.php';
// Get event ID from URL
if (!isset($_GET['events_id']) || empty($_GET['events_id'])) {
    die("Invalid event ID");
}
$id = intval($_GET['events_id']);

// Fetch existing event details
$sql = "SELECT * FROM events WHERE events_id = $id";
$result = mysqli_query($conn, $sql);
if (!$result || mysqli_num_rows($result) == 0) {
    die("Event not found");
}
$event = mysqli_fetch_assoc($result);

// Update record when form is submitted
if (isset($_POST['update'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    // Handle image upload
    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . "_" . basename($_FILES['image']['name']);
        $target_dir = "../assets/img/home/events/";
        $target_file = $target_dir . $image_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // Delete old image if it exists
            if (!empty($event['image']) && file_exists("../uploads/" . $event['image'])) {
                unlink("../assets/img/home/events/" . $event['image']);
            }
        } else {
            die("Error uploading new image.");
        }
    } else {
        // Keep old image if no new one is uploaded
        $image_name = $event['image'];
    }

    // Update query
    $update_sql = "UPDATE events SET 
        title = '$title',
        location = '$location',
        image = '$image_name'
        WHERE events_id = $id";

    if (mysqli_query($conn, $update_sql)) {
        header("Location: event.php?msg=Event updated successfully");
        exit;
    } else {
        die("Error updating record: " . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
<div class="layout-wrapper layout-content-navbar">
<div class="layout-container">
<?php include '../common/sidebar.php'; ?>
<div class="layout-page">
<?php include '../common/header.php'; ?>

<div class="container">
    <div class="card my-4">
        <h5 class="card-header">EDIT EVENT</h5>
        <div class="card-body">
            <div class="container mt-3">
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" name="title" value="<?= htmlspecialchars($event['title']) ?>" required>
                                <label>Title</label>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" name="location" value="<?= htmlspecialchars($event['location']) ?>" required>
                                <label>Location</label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <p>Current Image:</p>
                                <img src="../assets/img/home/events/<?= htmlspecialchars($event['image']) ?>" width="100">
                                <input class="form-control p-3 mt-3" type="file" name="image">
                            </div>
                        </div>

                        <!-- <div class="form-floating">
                            <textarea class="form-control" name="description" style="height: 100px"><?= htmlspecialchars($event['description']) ?></textarea>
                            <label class="ms-3">Description</label>
                        </div> -->
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mt-3 text-center">
                            <button type="submit" name="update" class="btn btn-primary">Update Event</button>
                            <a href="event.php" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../common/footer.php'; ?>
</div>
</div>
</div>
<?php include '../common/footer-link.php'; ?>
</body>
</html>

<!-- beautify ignore:start -->
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

?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

       <?php
include '../common/sidebar.php';

?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

                 <?php
include '../common/header.php';

?>

          <!-- / Navbar -->

 <div class="container">
            <div class="card my-4">
              <h5 class="card-header">EDIT EVENT</h5>   
              <div class="card-body">
                <div class="container mt-3">
               <form>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input
                            type="text"
                            class="form-control"
                            id="Text"
                            placeholder="Title"
                            name="Name"
                          />
                          <label for="Name">Title</label>
                        </div>
                      </div>

                       <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input
                            type="text"
                            class="form-control"
                            id="Text"
                            placeholder="Description"
                            name="Name"
                          />
                          <label for="Name">Location</label>
                        </div>
                      </div>
                     
                      
                     <div class="col-lg-6">
                        <div class="mb-3">
                          <input class="form-control p-3 mt-3"  type="file" id="formFile" name="image">
                        </div>
                      </div>

                       

                       <!-- <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                      <label class="ms-3" for="floatingTextarea2">Descripition</label>
                      </div>
     
                    </div> -->

                    <div class="row">
                     <div class="col-lg-12 mt-3 text-center">
                       <button type="submit" class="btn btn-primary">Edit Event</button>
                      <button type="submit" class="btn btn-primary"><a href="event.php" class="text-white">
                        Back
                      </a></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
         </div>

            <hr class="my-5" />

            <!-- Footer -->
             <!-- Footer -->
            <?php
            include '../common/footer.php';
            ?>
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

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->
 <?php
            include '../common/footer-link.php';

            ?>
    <!-- Core JS -->
   
  </body>
</html>
