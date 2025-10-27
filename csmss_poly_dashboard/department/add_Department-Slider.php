<?php include '../common/auth.php'; ?>
<?php
include "../common/dbcon.php";

if (isset($_POST['add_btn'])) {
    $department = $_POST['department'];

    // ✅ Make folder safe (lowercase, underscores)
    $folderName = strtolower(str_replace(" ", "_", $department));
    $targetDir = "../assets/img/department/" . $folderName . "/";

    // Create folder if not exists
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        // ✅ Save relative path in DB (not full path)
        $relativePath = "department/" . $folderName . "/" . $fileName;

        $sql = "INSERT INTO department_slider (department, image) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $department, $relativePath);

        if ($stmt->execute()) {
            $msg = "✅ Uploaded Successfully!";
        } else {
            $msg = "❌ Database insert failed: " . $conn->error;
        }
    } else {
        $msg = "❌ File upload failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <?php include '../common/sidebar.php'; ?>
    <div class="layout-page">
      <?php include '../common/header.php'; ?>
      <div class="container">
        <div class="card my-4">
          <h5 class="card-header">ADD DEPARTMENT SLIDER</h5>
          <div class="card-body">

            <?php if (!empty($msg)) { ?>
              <div class="alert alert-info"><?= $msg ?></div>
            <?php } ?>

            <form action="" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" name="department" required>
                      <option selected disabled>Choose Department</option>
                      <option value="Civil Engineering">Civil Engineering</option>
                      <option value="Electrical Engineering">Electrical Engineering</option>
                      <option value="Mechanical Engineering">Mechanical Engineering</option>
                      <option value="Electronic and Tele-communication Engineering">Electronics & Tele-communication Engineering</option>
                      <option value="Computer Engineering">Computer Engineering</option>
                      <option value="Artificial intelligence Engineering">Artificial Intelligence and Machine Learning</option>
                    </select>
                    <label>Department</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-floating mb-3 ">
                    <input type="file" class="form-control p-3" name="image" required />
                  </div>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                <a href="show_Department-slider.php" class="btn btn-secondary">Back</a>
              </div>
            </form>

          </div>
        </div>
        <?php include '../common/footer.php'; ?>
      </div>
    </div>
  </div>
</div>
<?php include '../common/footer-link.php'; ?>
</body>
</html>
