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


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="text-muted fw-bold py-3 mb-4">AUDIT REPORT</h4>

             

            
              <!-- Hoverable Table rows -->
              <div class="card">
                <div class="row">
                  <div class="col-lg-6 ">
                    <div class="h5 card-header">AUDIT REPORT</div>
                  </div>
                 
                  <div class="col-lg-6 d-flex justify-content-end">
                    <a href="add_audit_report.php">
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
                        <th>PDF</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php
                      include '../common/dbcon.php';
                      $query = "SELECT * FROM audit ORDER BY audit_id ASC";
                      $result = mysqli_query($conn, $query);
                      $sr = 1;

                      while ($placement = mysqli_fetch_assoc($result)) {
                          ?>
                          <tr>
                            <td><?= $sr++; ?></td>
                            <td><?= htmlspecialchars($placement['title']); ?></td>
                            <td>
                              <a href="../assets/pdf/audit_report_fy/report/<?= htmlspecialchars($placement['pdf']); ?>" target="_blank">
                                <?= htmlspecialchars($placement['pdf']); ?>
                              </a>
                            </td>
                            <td>
                              <a href="edit_audit_report.php?audit_id=<?= $placement['audit_id']; ?>" class="btn rounded-pill btn-primary">Edit</a>
<a href="delete_audit_report.php?audit_id=<?= $placement['audit_id']; ?>" class="btn rounded-pill btn-danger">Delete</a>
                            </td>
                          </tr>
                          <?php
                      }
                      ?>
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

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->
 <?php
            include('../common/footer-link.php');


            ?>
    <!-- Core JS -->
   
  </body>
</html>