<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
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
  <style>
    .new-para {
  width: 441px;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}
  </style>
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

         <!-- Navbar -->
        <?php
include '../common/header.php';

?>

          <!-- / Navbar -->

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="text-muted fw-bold py-3 mb-4">NEWS MEDIA</h4>

             

            
              <!-- Hoverable Table rows -->
              <div class="card">
                <div class="row">
                  <div class="col-lg-6 ">
                    <div class="h5 card-header">NEWS MEDIA</div>
                  </div>
                 
                  <div class="col-lg-6 d-flex justify-content-end">
                    <a href="add-news-media.php">
                      <button type="button" class="btn btn-primary m-4">ADD+</button>
                    </a>
                  </div>
                </div>

                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>SR.NO</th>
                        <th>Title</th>
                        <th> img</th>
                       
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      
                       <?php
                      include '../common/dbcon.php';
                      $sql = "SELECT newsmedia_id,Title,Image FROM news_media";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "
                          <tr>
                            <td><i class=\"fab fa-angular fa-lg text-danger me-3\"></i> <strong>".htmlspecialchars($row['newsmedia_id'])."</strong></td>
                            <td><p class=\"page-para \">".htmlspecialchars($row['Title'])."</p></td>
                            <td>
                              <img src=\"".htmlspecialchars($row['Image'])."\" alt=\"Avatar\" class=\"one\" />
                            </td>
                            <td>
                         <div>
                            <a href=\"edit-events.php\" class=\" text-white\">
                               <button type=\"button\" class=\"btn rounded-pill btn-primary\">
                                  <i class=\"bx bx-edit-alt me-1\"></i> Edit
                                </button></a>
                                <a  href=\"#\" class=\" text-white\">
                                <button type=\"button\" class=\"btn rounded-pill btn-primary\">
                                 <i class=\"bx bx-trash me-1 \"></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                        </tr>
                          ";
                        }
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