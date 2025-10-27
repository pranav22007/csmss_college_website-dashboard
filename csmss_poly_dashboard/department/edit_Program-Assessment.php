<?php include "../common/dbcon.php" ?>
<?php include '../common/auth.php'; ?>
<?php

$id = $_GET['id'];
$register_query = "SELECT * FROM program WHERE id='$id'";
$register_query_run = mysqli_query(mysql: $conn, query: $register_query);

if (mysqli_num_rows($register_query_run) > 0) {

  while ($row = mysqli_fetch_array($register_query_run)) {

    if (isset($_POST['update_btn'])) {

      $name_of_faculty = $_POST['name_of_faculty'];
      $choose_department = $_POST['choose_department'];
      $representation = $_POST['representation'];
      $designation = $_POST['designation'];

      $query_update = "UPDATE program SET name_of_faculty='$name_of_faculty', choose_department='$choose_department',representation='$representation',designation='$designation' WHERE id='$id'";
      $query_update_run = mysqli_query($conn, $query_update);

      if ($query_update_run) {
        echo "Data updated";

        header("Location: show_Program-Assessment.php");
      } else {
        echo "Data not updated";

        header("Location: show_Program-Assessment.php");
      }
    }

?>
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
      data-template="vertical-menu-template-free">
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
                <h5 class="card-header">EDIT PROGRAMME ASSESSMENT COMMITTEE (PAC)</h5>
                <div class="card-body">
                  <div class="container mt-3">
                    <form action="" method="POST">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="form-floating mb-3 mt-3">
                            <input
                              type="text"
                              class="form-control"
                              id="Text"
                              placeholder=""
                              name="name_of_faculty" value="<?php echo $row['name_of_faculty']; ?>" />
                            <label for="Name">Name of Faculty</label>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-floating mb-3 mt-3">
                             <select class="form-select" id="Dropdown" name="choose_department">
                              <option selected disabled>Choose Department</option>
                              <option value="Civil Engineering" <?= $row['choose_department'] == 'Civil Engineering' ? 'selected' : '' ?>>Civil Engineering</option>
                              <option value="Electrical Engineering" <?= $row['choose_department'] == 'Electrical Engineering' ? 'selected' : '' ?>>Electrical Engineering</option>
                              <option value="Mechanical Engineering" <?= $row['choose_department'] == 'Mechanical Engineering' ? 'selected' : '' ?>>Mechanical Engineering</option>
                              <option value="Electronics & Tele-communication Engineering" <?= $row['choose_department'] == 'Electronics & Tele-communication Engineering' ? 'selected' : '' ?>>Electronics & Tele-communication Engineering</option>
                              <option value="Computer Engineering" <?= $row['choose_department'] == 'Computer Engineering' ? 'selected' : '' ?>>Computer Engineering</option>
                              <option value="Artificial Intelligence and Machine Learning" <?= $row['choose_department'] == 'Artificial Intelligence and Machine Learning' ? 'selected' : '' ?>>Artificial Intelligence and Machine Learning</option>
                            </select>
                            <label for="Dropdown"> Department </label>
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="form-floating mb-3 mt-3">
                            <input
                              type="text"
                              class="form-control"
                              id="Text"
                              placeholder=""
                              name="representation" value="<?php echo $row['representation']; ?>" />
                            <label for="Name">Representation</label>
                          </div>
                        </div>



                        <div class="col-lg-3">
                          <div class="form-floating mb-3 mt-3">
                            <input
                              type="text"
                              class="form-control"
                              id="Text"
                              placeholder=""
                              name="designation" value="<?php echo $row['designation']; ?>" />
                            <label for="Name">Designation</label>
                          </div>
                        </div>


                      </div>

                      <div class="row">
                        <div class="col-lg-12 mt-3 text-center">
                          <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
                          <button type="submit" class="btn btn-primary"><a href="show_Program-Assessment.php" class="text-white">
                              Back
                            </a></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>


          <?php
        }
      } else {
        echo "No Data Found By this URL id";
      }
          ?>

          <hr class="my-5" />

          <!-- Footer -->
          <!-- Footer -->
          <?php
          include '../common/footer.php';
          ?>
          <!-- / Footer -->
            </div>
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