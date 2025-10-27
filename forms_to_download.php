<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php include('../common/header_link.php'); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>

      <div class="layout-page">
        <?php include('../common/header.php'); ?>
        <?php
        include('../common/dbcon.php');

        // Handle Delete
        if (isset($_GET['delete_id'])) {
          $delete_id = (int) $_GET['delete_id'];

          // Get the file name to delete from server
          $file_query = "SELECT pdf FROM forms_to_download WHERE id=$delete_id";
          $file_result = mysqli_query($conn, $file_query);
          if ($file_result && mysqli_num_rows($file_result) > 0) {
            $file_row = mysqli_fetch_assoc($file_result);
            $file_to_delete = '../../assets/pdf/forms_to_download/' . $file_row['pdf'];

            if (file_exists($file_to_delete)) {
              unlink($file_to_delete);
            }
          }

          // Delete from DB
          $delete_query = "DELETE FROM forms_to_download WHERE id=$delete_id";
          $delete_run = mysqli_query($conn, $delete_query);

          if ($delete_run) {
            echo "<script>alert('Deleted successfully'); window.location.href='forms_to_download.php';</script>";
            exit();
          } else {
            echo "<script>alert('Delete failed'); window.location.href='forms_to_download.php';</script>";
            exit();
          }
        }

        // Handle Update
        if (isset($_POST['update_btn'])) {
          $update_id = (int) $_POST['update_id'];
          $title = mysqli_real_escape_string($conn, $_POST['title']);
          $pdf = null;

          if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $fileTmpPath = $_FILES['image']['tmp_name'];
            $fileName = $_FILES['image']['name'];
            $uploadDir = '../../csmss_poly_dashboard/assets/pdf/forms_to_download/';

            // Get old file to delete
            $old_file_query = "SELECT pdf FROM forms_to_download WHERE id=$update_id";
            $old_file_result = mysqli_query($conn, $old_file_query);
            $old_file_row = mysqli_fetch_assoc($old_file_result);
            $old_file_path = '../../csmss_poly_dashboard/assets/pdf/forms_to_download/' . $old_file_row['pdf'];
            if (file_exists($old_file_path)) {
              unlink($old_file_path);
            }

            // New file name
            $newFileName = uniqid("form_", true) . '_' . $fileName;
            $destPath = $uploadDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $destPath)) {
              $pdf = $newFileName;
            } else {
              echo "<script>alert('File upload failed.'); window.location.href='forms_to_download.php';</script>";
              exit();
            }
          }

          if ($pdf) {
            $query_update = "UPDATE forms_to_download SET title='$title', pdf='$pdf' WHERE id=$update_id";
          } else {
            $query_update = "UPDATE forms_to_download SET title='$title' WHERE id=$update_id";
          }
          $query_update_run = mysqli_query($conn, $query_update);
          if ($query_update_run) {
            echo "<script>
            alert('Data updated successfully');
            window.location.href = 'forms_to_download.php';
          </script>";
            exit();
          } else {
            echo "<script>
            alert('Data not updated');
            window.location.href = 'forms_to_download.php';
          </script>";
            exit();
          }

        }

        // Fetch all forms
        $forms_to_download = "SELECT * FROM forms_to_download";
        $forms_to_download_run = mysqli_query($conn, $forms_to_download);
        ?>

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">FORMS FOR DOWNLOAD</h4>

            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">FORMS FOR DOWNLOAD</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_forms_to_download.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <?php if (mysqli_num_rows($forms_to_download_run) > 0) { ?>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Sr No</th>
                        <th>Title</th>
                        <th>File</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php
                      $sr_no = 1;
                      while ($forms_row = mysqli_fetch_array($forms_to_download_run)) {
                        $full_filename = $forms_row['pdf'];
                        // Remove unique prefix for display:
                        $clean_filename = preg_replace('/^form_[^_]+_/', '', $full_filename);
                        ?>
                        <tr>
                          <th><?= $sr_no++; ?></th>
                          <td><?= htmlspecialchars($forms_row['title']); ?></td>
                          <td>
                            <a href="../uploads/<?= htmlspecialchars($full_filename) ?>" target="_blank">
                              <?= htmlspecialchars($clean_filename) ?>
                            </a>
                          </td>
                          <td>
                            <div>
                              <a href="edit_forms_to_download.php?id=<?= $forms_row['id']; ?>" class="text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button>
                              </a>
                              <a href="forms_to_download.php?delete_id=<?= $forms_row['id']; ?>"
                                onclick="return confirm('Are you sure you want to delete this form?');" class="text-white">
                                <button type="button" class="btn rounded-pill btn-danger">
                                  <i class="bx bx-trash me-1"></i> Delete
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                <?php } else {
                  echo "<p class='p-3'>No data found</p>";
                } ?>
              </div>
            </div>

            <hr class="my-5" />
          </div>

          <?php include('../common/footer.php'); ?>

          <div class="content-backdrop fade"></div>
        </div>
      </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <?php include('../common/footer-link.php'); ?>
</body>

</html>