<?php include '../common/auth.php'; ?>

<?php
include "../common/dbcon.php";  

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $designation = $_POST['designation'];
    $img = "";

    // Handle file upload
    if(isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        // Make sure uploads folder exists
        $uploadDir = "../assets/img/home/members/";
        if(!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $imgName = time() . "_" . basename($_FILES['img']['name']); // unique file name
        $imgTmp = $_FILES['img']['tmp_name'];
        $uploadPath = $uploadDir . $imgName;

        if(move_uploaded_file($imgTmp, $uploadPath)) {
            $img = $imgName; // store only filename in DB
        }
    }

    // Insert query
    $sql = "INSERT INTO `members`(`title`, `designation`, `img`) 
            VALUES ('$title','$designation','$img')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location: members.php?msg=New record created successfully");
        exit;
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

  <?php include '../common/header_link.php'; ?>

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
              <h5 class="card-header">ADD MEMBERS</h5>
              <div class="card-body">
                <div class="container mt-3">

                  <!-- FORM START -->
                  <form method="post" action="" enctype="multipart/form-data">
                    <div class="row">

                      <!-- Title -->
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input
                            type="text"
                            class="form-control"
                            id="title"
                            name="title"
                            placeholder="Title"
                            required
                          />
                          <label for="title">Title</label>
                        </div>
                      </div>

                      <!-- Image Upload -->
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <input class="form-control p-3 mt-3" type="file" id="formFile" name="img" required>
                        </div>
                      </div>

                      <!-- Designation -->
                      <div class="col-lg-12 py-4">
                        <div class="form-floating">
                          <textarea class="form-control" id="designation" name="designation" style="height: 100px" required></textarea>
                          <label for="designation">Designation</label>
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="col-lg-12 text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Add Member</button>
                        <a href="members.php" class="btn btn-secondary">Back</a>
                      </div>
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

    <?php include '../common/footer-link.php'; ?>
  </body>
</html>


