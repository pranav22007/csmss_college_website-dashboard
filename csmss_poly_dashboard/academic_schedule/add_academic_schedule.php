<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';

if (isset($_POST['add_btn'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];

  // File upload handling
  if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0) {
    $upload_dir = "../../csmss_poly_dashboard/assets/pdf/academic_schedule/";
    if (!is_dir($upload_dir)) {
      mkdir($upload_dir, 0777, true);
    }

    // Keep original filename (remove timestamp prefix)
    $pdf_name = basename($_FILES['pdf']['name']);
    $target_file = $upload_dir . $pdf_name;

    if (move_uploaded_file($_FILES['pdf']['tmp_name'], $target_file)) {
      $query = "INSERT INTO academic_schedule (title, description, pdf) 
                VALUES ('$title', '$description', '$pdf_name')";
      $query_run = mysqli_query($conn, $query);

      if ($query_run) {
        header('Location: academic_schedule.php?success=1');
        exit;
      } else {
        header('Location: add_academic_schedule.php?error=db');
        exit;
      }
    } else {
      header('Location: add_academic_schedule.php?error=upload');
      exit;
    }
  } else {
    header('Location: add_academic_schedule.php?error=nofile');
    exit;
  }
}

if(isset($_POST['delete_btn']))
{
  $delete_id = $_POST['delete_id'];
  $academic_schedule_query = "DELETE FROM academic_schedule WHERE aca_id ='$delete_id'";
  $academic_schedule_query_run = mysqli_query($conn,$academic_schedule_query);
  if($academic_schedule_query_run)
  {
    // echo "Data Deleted";
    header("Location: academic_schedule.php");
  }
  else{
    // echo "Data Not Deleted";
    header("Location: academic_schedule.php");
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
            <h5 class="card-header">ADD ACADEMIC SCHEDULE</h5>
            <div class="card-body">
              <div class="container mt-3">
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Title" name="title" required />
                        <label for="title">Title</label>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Description" name="description" required />
                        <label for="description">Description</label>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="mb-3">
                        <input class="form-control p-3 mt-3" type="file" name="pdf" accept="application/pdf" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 mt-3 text-center">
                      <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                      <a href="academic_schedule.php" class="btn btn-secondary">Back</a>
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
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include '../common/footer-link.php'; ?>
</body>
</html>
