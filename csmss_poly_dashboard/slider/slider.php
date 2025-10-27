<?php include '../common/auth.php'; ?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<?php
include('../common/header_link.php');


?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php
      include('../common/sidebar.php');

      ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php
        include '../common/header.php';
        ?>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">SLIDER</h4>




            <!-- Hoverable Table rows -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6 ">
                  <div class="h5 card-header">SLIDER</div>
                </div>

                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="../slider/add_slider.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>SR</th>
                      <!-- <th>Title</th>
                        <th>Descripition</th> -->
                      <th>img</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php
                    include('../common/dbcon.php');

                    $sql = "SELECT * FROM slider ORDER BY slider_id DESC";
                    $result = mysqli_query($conn, $sql);
                    $sr = 1;

                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <tr>
                        <td><?= $sr++; ?></td>

                        <td>
                          <img src="../assets/img/home/slider/<?= htmlspecialchars($row['image']); ?>"
                            alt="Slider Image"
                            style="width:50px; height:50px; object-fit:cover;">
                        </td>
                        <td>
                          <div class="d-flex">
                            <a href="edit_slider.php?slider_id=<?= $row['slider_id']; ?>" class="me-2">
                              <button type="button" class="btn rounded-pill btn-primary">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </button>
                            </a>

                            <a href="delete_slider.php?slider_id=<?= $row['slider_id']; ?>"
                              onclick="return confirm('Are you sure you want to delete this news?');"
                              class="me-2">
                              <button type="button" class="btn rounded-pill btn-danger">
                                <i class="bx bx-trash me-1"></i> Delete
                              </button>
                            </a>

                            <?php if ($row['status'] == 1) { ?>
                              <a href="slider_toggle.php?slider_id=<?= $row['slider_id']; ?>&status=0">
                                <button type="button" class="btn rounded-pill btn-warning">Disable</button>
                              </a>
                            <?php } else { ?>
                              <a href="slider_toggle.php?slider_id=<?= $row['slider_id']; ?>&status=1">
                                <button type="button" class="btn rounded-pill btn-success">Enable</button>
                              </a>
                            <?php } ?>
                          </div>
                        </td>

                      </tr>
                    <?php } ?>
                  </tbody>

                </table>
              </div>
            </div>
            <!--/ Hoverable Table rows -->


            <hr class="my-5" />


            <!-- Footer -->
            <!-- Footer -->
            <?php
            include('../common/footer.php');

            ?>
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
    <?php
    include('../common/footer-link.php');


    ?>
    <!-- Core JS -->

</body>

</html>