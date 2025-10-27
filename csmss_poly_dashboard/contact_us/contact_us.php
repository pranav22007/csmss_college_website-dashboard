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
<?php
require '../common/dbcon.php';
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
              <h4 class="text-muted fw-bold py-3 mb-4">CONTACT US</h4>

             

            
              <!-- Hoverable Table rows -->
              <div class="card">
                <div class="row">
                  <div class="col-lg-6 ">
                    <div class="h5 card-header">CONTACT US</div>
                  </div>
                 
                  <!-- <div class="col-lg-6 d-flex justify-content-end">
                    <a href="add_contact_us.php">
                      <button type="button" class="btn btn-primary m-4">ADD+</button>
                    </a>
                  </div> -->
                </div>

                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>SR</th>
                        <th>NAME</th>
                         <th>EMAIL ADDRESS</th>
                        <th>PHONE NUMBER</th>
                         <th>WHAT IS THE CONCERN</th>
                         <th>MESSAGE</th>
                        <!-- <th>ACTION</th> -->

                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php
                      $query = "SELECT * FROM contact_us";
                      $query_run = mysqli_query($conn, $query);

                      if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $contact_us) {
                      ?>
                      <tr>
                      <td><?= htmlspecialchars($contact_us['contact_us_id']) ?></td>
                      <td><strong><?= htmlspecialchars($contact_us['name']) ?></strong></td>
                      <td><?= htmlspecialchars($contact_us['email']) ?></td>
                      <td><?= htmlspecialchars($contact_us['number']) ?></td>
                      <td><?= htmlspecialchars($contact_us['subject']) ?></td>
                      <td><?= htmlspecialchars($contact_us['message']) ?></td>
                      </tr>
                      <?php
                        }
                      } else {
                      ?>
                      <tr>
                      <td colspan="6" class="text-center">No record found</td>
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