<?php include '../common/auth.php'; ?>
<?php
include '../common/dbcon.php';


if (isset($_GET['delete_id'])) {
  $delete_id = $_GET['delete_id'];

  // Get PDF filename
  $get_pdf_query = "SELECT pdf FROM academic_schedule WHERE aca_id = '$delete_id'";
  $pdf_result = mysqli_query($conn, $get_pdf_query);
  $pdf_row = mysqli_fetch_array($pdf_result);

  if ($pdf_row && !empty($pdf_row['pdf'])) {
    $pdf_path = "../../csmss_poly_dashboard/assets/pdf/academic_schedule/" . $pdf_row['pdf'];
    if (file_exists($pdf_path)) {
      unlink($pdf_path); // Delete the PDF file
    }
  }

  // Delete the record from DB  
  $delete_query = "DELETE FROM academic_schedule WHERE aca_id = '$delete_id'";
  mysqli_query($conn, $delete_query);

  // Redirect to avoid header issues
  header("Location: academic_schedule.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php include('../common/header_link.php'); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>
      <div class="layout-page">
        <?php include '../common/header.php'; ?>
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">ACADEMIC SCHEDULE DETAILS</h4>
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">ACADEMIC SCHEDULE</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_academic_schedule.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>
              <div class="table-responsive text-nowrap">
                <?php
              
                $academic_schedule = "SELECT * FROM academic_schedule";
                $academic_schedule_run = mysqli_query($conn, $academic_schedule);

                if (mysqli_num_rows($academic_schedule_run) > 0) {
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

                      while ($row = mysqli_fetch_assoc($academic_schedule_run)) { ?>
                        <tr>
                          <td><?php echo $serial++; ?></td>
                          <td><strong><?php echo $row['title']; ?></strong></td>
                          <td><?php echo $row['description']; ?></td>
                          <td>
                            <?php
                            if (!empty($row['pdf'])) {
                              echo '<a href="../../csmss_poly_dashboard/assets/pdf/academic_schedule/' . $row['pdf'] . '" target="_blank">' . $row['pdf'] . '</a>';
                            } else {
                              echo "No PDF";
                            }
                            ?>
                          </td>
                          <td>
                            <a href="edit_academic_schedule.php?id=<?php echo $row['aca_id']; ?>"
                              class="btn rounded-pill btn-primary">
                              <i class="bx bx-edit-alt me-1"></i> Edit
                            </a>
                            <a href="academic_schedule.php?delete_id=<?php echo $row['aca_id']; ?>"
                              class="btn rounded-pill btn-danger"
                              onclick="return confirm('Are you sure you want to delete this record?');">
                              <i class="bx bx-trash me-1"></i> Delete
                            </a>

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
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include('../common/footer-link.php'); ?>
</body>

</html>