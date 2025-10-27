
<?php include '../common/auth.php'; ?>
<?php
include('../common/header_link.php');
include('../common/dbcon.php');  // Use existing connection from here

// Function to truncate long file names
function truncateFileName($filename, $maxLength = 25)
{
  if (strlen($filename) > $maxLength) {
    return substr($filename, 0, $maxLength - 3) . '...';
  }
  return $filename;
}
?>
<?php
if (isset($_POST['enquiry_delete_btn'])) {
  $delete_id = $_POST['delete_id'];
  $delete_query = "DELETE FROM enquiry_form WHERE eq_id='$delete_id'";
  $delete_query_run = mysqli_query($conn, $delete_query);



  if ($enq_query_run) {
    // echo "Data Deleted";
    header("location:enquiry.php");
  } else {
    //  echo "Data Not Deleted";
    header("location:enquiry.php");
  }
}

?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <!-- Sidebar -->
      <?php include('../common/sidebar.php'); ?>
      <!-- /Sidebar -->

      <div class="layout-page">

        <!-- Navbar -->
        <?php include('../common/header.php'); ?>
        <!-- /Navbar -->

        <!-- Page content -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">ENQUIRY FORM</h4>

            <!-- Card start -->
            <div class="card">

              <!-- Header row -->
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">Enquiry form</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_enquiry.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <!-- Table -->
              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Full Name</th>
                      <th>Email Address</th>
                      <th>Phone Number</th>
                      <th>city</th>
                      <th>Qualification</th>
                      <th>Course Interested</th>
                      <th>Additional info</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php
                    // Use connection from included dbcon.php
$result = mysqli_query($conn, "SELECT * FROM `enquiry_form` ORDER BY eq_id ASC");

if (mysqli_num_rows($result) > 0) {
    $srNo = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $eq_id   = htmlspecialchars($row['eq_id']);
        $fullname = htmlspecialchars($row['fullname']);
        $email   = htmlspecialchars($row['email']);
        $phone   = htmlspecialchars($row['phone']);
        $city = htmlspecialchars($row['city']);
        $qualification = htmlspecialchars($row['qualification']);
        $course_interested = htmlspecialchars($row['course_interested']);
        $additional_info = htmlspecialchars($row['additional_info']);



                        // Truncate PDF file name for display
                        // $pdfDisplay = $pdf ? truncateFileName($pdf) : 'No file';
                        ?>
                        <tr>
  <td><?php echo $srNo++; ?></td>
  <td><strong><?php echo $fullname; ?></strong></td>
  <td><?php echo $email; ?></td>
  <td><?php echo $phone; ?></td>
  <td><?php echo $city; ?></td>
  <td><?php echo $qualification; ?></td>
  <td><?php echo $course_interested; ?></td>
  <td><?php echo $additional_info; ?></td>
  <td class="d-flex gap-2 align-items-center">
    <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this enquiry?');" class="m-0">
      <input type="hidden" name="delete_id" value="<?php echo $eq_id; ?>">
      <button type="submit" class="btn rounded-pill btn-danger px-3 py-2" name="enquiry_delete_btn">
        <i class="bx bx-trash me-1"></i> Delete
      </button>
    </form>
  </td>
</tr>


                        <?php
                      }
                    } else {
                      echo '<tr><td colspan="5" class="text-center">No Record Found</td></tr>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /Table -->

            </div>
            <!-- /Card -->

            <hr class="my-5" />
          </div>

          <!-- Footer -->
          <?php include('../common/footer.php'); ?>
          <div class="content-backdrop fade"></div>
        </div>
        <!-- /Page content -->
      </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <?php include('../common/footer-link.php'); ?>
</body>

</html>