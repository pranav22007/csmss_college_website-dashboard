<?php include '../common/auth.php'; ?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
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
            <h4 class="text-muted fw-bold py-3 mb-4">LATEST NEWS</h4>




            <!-- Hoverable Table rows -->
            <div class="card">
              <div class="row">
                <div class="col-lg-6 ">
                  <div class="h5 card-header">LATEST NEWS</div>
                </div>

                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="../latest_news/add_latest_news_home.php">
                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>SR</th>
                      <th>DATE</th>
                      <th>IMG</th>
                      <th>TITLE</th>
                      <th>ACTIONS</th>
                    </tr>
                  </thead>
                  <?php
                  include('../common/dbcon.php');

                  $sql = "SELECT * FROM news ORDER BY home_news_id DESC";
                  $result = mysqli_query($conn, $sql);
                  $sr = 1;
                  ?>
                  <tbody class="table-border-bottom-0">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?= $sr++; ?></td>
                        <td><?= date("d-m-Y", strtotime($row['date'])); ?></td>
                        <td>
                          <img src="../assets/img/home/latest_news/<?= $row['image']; ?>" alt="News Image" width="40"
                            height="40" />
                        </td>
                        <td class=""><?= htmlspecialchars($row['title']); ?></td>

                        <td>
                          <div class="d-flex">
                            <a href="edit_latest_news_home.php?home_news_id=<?= $row['home_news_id']; ?>" class="me-2">
                              <button type="button" class="btn rounded-pill btn-primary">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </button>
                            </a>


                            <a href="delete_latest_news_home.php?home_news_id=<?= $row['home_news_id']; ?>"
                              onclick="return confirm('Are you sure you want to delete this news?');" class="me-2">
                              <button type="button" class="btn rounded-pill btn-danger">
                                <i class="bx bx-trash me-1"></i> Delete
                              </button>
                            </a>
                            <?php if ($row['status'] == 1) { ?>
                              <a href="toggle_news_home.php?home_news_id=<?= $row['home_news_id']; ?>&status=0"
                                class="btn rounded-pill btn-warning">Disable</a>
                            <?php } else { ?>
                              <a href="toggle_news_home.php?home_news_id=<?= $row['home_news_id']; ?>&status=1"
                                class="btn rounded-pill btn-success">Enable</a>
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