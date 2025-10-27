<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';
if (isset($_POST['delete_btn'])) {
  $delete_id = $_POST['delete_id'];
  $get_pdf_query = "SELECT pdf FROM exam_timetable WHERE exam_id = '$delete_id'";
  $get_pdf_result = mysqli_query($conn, $get_pdf_query);
  if ($get_pdf_result && mysqli_num_rows($get_pdf_result) > 0) {
    $pdf_row = mysqli_fetch_assoc($get_pdf_result);
    $pdf_name = $pdf_row['pdf'];
    $file_path = __DIR__ . "" . $pdf_name;
    if (!empty($pdf_name) && file_exists($file_path)) {
      unlink($file_path);
    }
  }
  $delete_query = "DELETE FROM exam_timetable WHERE exam_id = '$delete_id'";
  $delete_run = mysqli_query($conn, $delete_query);
  if ($delete_run) {
    header("Location: exam_timetable.php?msg=deleted");
    exit();
  } else {
    echo "<script>alert('Failed to delete record.');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed">
<?php include('../common/header_link.php'); ?>
<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>
      <div class="layout-page">
        <?php include('../common/header.php'); ?>
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">EXAM TIMETABLE DETAILS</h4>
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">EXAM TIMETABLE</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_exam_timetable.php"><button type="button" class="btn btn-primary m-4">ADD+</button></a>
                </div>
              </div>
              <div class="table-responsive text-nowrap">
                <?php
                $exam_timetable = "SELECT * FROM exam_timetable";
                $exam_timetable_run = mysqli_query($conn, $exam_timetable);
                if (mysqli_num_rows($exam_timetable_run) > 0):
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
                    <tbody>
                      <?php
                      $serial = 1;
                      while ($row = mysqli_fetch_assoc($exam_timetable_run)):
                        ?>
                        <tr>
                          <td><?= $serial++ ?></td>
                          <td><strong><?php echo $row['title']; ?></strong></td>
                          <td><?php echo $row['description']; ?></td>
                          <td>
                            <?php
                            if (!empty($row['pdf'])) {
                              echo '<a href="../assets/pdf/exam_timetable/' . $row['pdf'] . '" target="_blank">' . $row['pdf'] . '</a>';
                            } else {
                              echo "No PDF";
                            }
                            ?>
                          </td>
                          <td>
                            <a href="edit_exam_timetable.php?id=<?= $row['exam_id'] ?>"
                              class="btn btn-primary btn-sm">Edit</a>
                            <form method="POST" style="display:inline-block;"
                              onsubmit="return confirm('Are you sure you want to delete this record?');">
                              <input type="hidden" name="delete_id" value="<?= $row['exam_id'] ?>">
                              <button type="submit" name="delete_btn" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                          </td>
                        </tr>
                      <?php endwhile; ?>
                    </tbody>
                  </table>
                <?php else: ?>
                  <div class="p-3">No Record Found</div>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php include('../common/footer.php'); ?>
        </div>
      </div>
    </div>
    <?php include('../common/footer-link.php'); ?>
  </div>
</body>
</html>