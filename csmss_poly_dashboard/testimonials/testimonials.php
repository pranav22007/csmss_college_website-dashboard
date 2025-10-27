<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php include('../common/header_link.php'); ?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Sidebar -->
      <?php include('../common/sidebar.php'); ?>
      <!-- / Sidebar -->

      <!-- Layout page -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php include('../common/header.php'); ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">TESTIMONIALS</h4>

            <!-- Table card -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">Testimonials List</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_testimonials.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Designation</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php
                    include('../common/dbcon.php');

                    $query = "SELECT * FROM testimonials";  // Removed ORDER BY created_at DESC
                    $result = $conn->query($query);

                    if ($result === false) {
                      echo '<tr><td colspan="6" class="text-danger">Query failed: ' . $conn->error . '</td></tr>';
                    } elseif ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                          <td><?php echo $row['testimonials_id']; ?></td>
                          <td><?php echo htmlspecialchars($row['title']); ?></td>
                          <td class=''><?php echo htmlspecialchars($row['description']); ?></td>
                          <td>
                            <img src="../uploads/<?php echo $row['image']; ?>" alt="Image" width="60" height="60"
                              style="object-fit: cover;">
                          </td>
                          <td><?php echo htmlspecialchars($row['designation']); ?></td>
                          <td class="table-data w-25">
                            <a href="edit_testimonials.php?testimonials_id=<?php echo $row['testimonials_id']; ?>"
                              class="btn btn-md btn-primary">Edit</a>
                            <a href="delete_testimonials.php?testimonials_id=<?php echo $row['testimonials_id']; ?>" class="btn btn-md btn-danger"
                              onclick="return confirm('Are you sure you want to delete this testimonial?');">Delete</a>

                          </td>
                        </tr>
                        <?php
                      }
                    } else {
                      echo '<tr><td colspan="6" class="text-center">No testimonials found.</td></tr>';
                    }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /Table card -->

            <hr class="my-5" />

            <!-- Footer -->
            <?php include('../common/footer.php'); ?>
            <!-- /Footer -->

            <div class="content-backdrop fade"></div>
          </div>
        </div>
        <!-- /Content wrapper -->
      </div>
      <!-- /Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- /Layout wrapper -->

  <?php include('../common/footer-link.php'); ?>
</body>

</html>