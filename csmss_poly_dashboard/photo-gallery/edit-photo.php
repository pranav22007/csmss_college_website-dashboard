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
include '../common/header_link.php';

?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

       <?php
include '../common/sidebar.php';

?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
   
          <?php
include '../common/header.php';

?>
         

          <!-- / Navbar -->

          <div class="container">
            <div class="card my-4">
              <h5 class="card-header">EDIT PHOTOS</h5>
              <div class="card-body">
                <div class="container mt-3">
                  <form>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-floating mb-3 mt-3">
                          <input
                            type="text"
                            class="form-control"
                            id="Text"
                            placeholder="Title"
                            name="Name"
                          />
                          <label for="Name">Title</label>
                        </div>
                      </div>
                     
                      
                     <div class="col-lg-6">
                        <div class="mb-3">
                          <input class="form-control p-3 mt-3"  type="file" id="formFile" name="image">
                        </div>
                      </div>
                      
                        <!-- <div class="col-lg-12  py-4">
                                        <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Comments</label>
                    </div>
                </div> -->

               
                    
                    </div>

                    <div class="col-lg-12 text-center">
                     <button type="submit" class="btn btn-primary">Update</button> 
                     <button type="submit" class="btn btn-primary"><a href="photo.php" class="text-white">Back</a></button> 
                     
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <hr class="my-5" />

            <!-- Footer -->
             <!-- Footer -->
            <?php
            include '../common/footer.php';
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
            include '../common/footer-link.php';

            ?>
    <!-- Core JS -->
   
  </body>
</html>