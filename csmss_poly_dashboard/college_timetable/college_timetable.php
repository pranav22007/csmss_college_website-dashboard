<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';
if (isset($_POST['college_timetable_delete_btn'])) {
  $delete_id = $_POST['delete_id'];
  $college_timetable_query = "DELETE FROM college_timetable WHERE ct_id='$delete_id'";
  $delete_run = mysqli_query($conn, $college_timetable_query);
  if ($delete_run) {
    header("Location: college_timetable.php?msg=Deleted Successfully");
    exit;
  } else {
    header("Location: college_timetable.php?msg=Delete Failed");
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php
include('../common/header_link.php');
?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>

      <div class="layout-page">
        <?php include('../common/header.php'); ?>

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">COLLEGE TIMETABLE DETAILS</h4>

            <div class="card">
              <div class="row">
                <div class="col-lg-6 ">
                  <div class="h5 card-header">COLLEGE TIMETABLE</div>
                </div>

                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_college_timetable.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <?php
                include "../common/dbcon.php";
                $csmss = "SELECT * FROM college_timetable";
                $csmss_run = mysqli_query($conn, $csmss);

                if (mysqli_num_rows($csmss_run) > 0) {
                  ?>

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Sr no</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>PDF</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php
                      $serial = 1;
                      while ($college_timetable_row = mysqli_fetch_array($csmss_run)) {
                        ?>
                        <tr>
                          <td><?php echo $serial++; ?></td>
                          <td>
                            <strong><?php echo $college_timetable_row['title']; ?></strong>
                          </td>
                          <td><?php echo $college_timetable_row['description']; ?></td>

                          <td>
                            <a href="<?= $college_timetable_row['pdf']; ?>" target="_blank">
                              <?= basename($college_timetable_row['pdf']); ?>
                            </a>
                          </td>



                          <td>
                            <div class="d-flex gap-2">
                              <a href="edit_college_timetable.php?id=<?= $college_timetable_row['ct_id']; ?>"
                                class="text-white">
                                <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button>
                              </a>

                              <form method="POST" action="" enctype="multipart/form-data"
                                onsubmit="return confirm('Are you sure you want to delete this college_timetable?');">
                                <input type="hidden" name="delete_id" value="<?= $college_timetable_row['ct_id']; ?>">
                                <button type="submit" name="college_timetable_delete_btn"
                                  class="btn rounded-pill btn-danger">Delete</button>
                              </form>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <?php
                } else {
                  echo "No Record Found";
                }
                ?>
              </div>
            </div>

            <hr class="my-5" />

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