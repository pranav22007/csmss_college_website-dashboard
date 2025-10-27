<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<?php
include('../common/header_link.php');
include('../common/dbcon.php');

// Fetch courses
$result = mysqli_query($conn, "SELECT * FROM course ORDER BY course_id DESC");
?>
 
<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php include('../common/sidebar.php'); ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php include '../common/header.php'; ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">LATEST COURSES DETAIL'S</h4>

            <!-- Hoverable Table rows -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6 ">
                  <div class="h5 card-header">COURSES</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_courses.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>SR</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Label</th>
                      <th>Seats</th>
                      <th>Duration</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php 
                    $sr = 1;
                    if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                          <td><?= $sr++; ?></td>
                          <td><strong><?= htmlspecialchars($row['title']); ?></strong></td>
                          <td class=""><?= htmlspecialchars($row['description']); ?></td>
                          <td>
                            <?php if(!empty($row['image'])) { ?>
                              <img src="../assets/img/home/courses/<?= $row['image']; ?>" width="60" height="50" >
                            <?php } else { ?>
                              <span>No Image</span>
                            <?php } ?>
                          </td>
                          <td><?= htmlspecialchars($row['label']); ?></td>
                          <td><?= htmlspecialchars($row['seats']); ?></td>
                          <td><?= htmlspecialchars($row['duration']); ?></td>
                          <td>
                            <div class="d-flex gap-2">
                              <div class="d-flex">
                                <a href="edit_courses.php?course_id=<?= $row['course_id']; ?>" class="me-2">
                                  <button type="button" class="btn rounded-pill btn-primary" style="width: 100px">
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                  </button>
                                </a>

                                <a href="delete_courses.php?course_id=<?= $row['course_id']; ?>" 
                                   onclick="return confirm('Are you sure you want to delete this news?');" 
                                   class="me-2">
                                  <button type="button" class="btn rounded-pill btn-danger" style="width: 109px"> 
                                    <i class="bx bx-trash"></i> Delete
                                  </button>
                                </a>
                                <?php if ($row['status'] == 1) { ?>
                                <a href="toggle_courses.php?course_id=<?= $row['course_id']; ?>&status=0">
                                  <button type="button" class="btn rounded-pill btn-warning">Disable</button>
                                </a>
                                <?php } else { ?>
                                  <a href="toggle_courses.php?course_id=<?= $row['course_id']; ?>&status=1">
                                    <button type="button" class="btn rounded-pill btn-success">Enable</button>
                                  </a>
                                <?php } ?>
                            </div>
                          </td>
                        </tr>
                    <?php } 
                    } else { ?>
                      <tr>
                        <td colspan="8" class="text-center">No courses found</td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!--/ Hoverable Table rows -->

            <hr class="my-5" />

            <!-- Footer -->
            <?php include('../common/footer.php'); ?>
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

    <?php include('../common/footer-link.php'); ?>
</body>
</html>
