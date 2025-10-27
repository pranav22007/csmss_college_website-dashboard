<?php
include '../common/dbcon.php';

if (isset($_POST['submit'])) {
    $Title = $_POST['Title'];
    $Image = $_POST['Image'];
    

    $sql = "INSERT INTO Photo_gallery ( Title, Image) VALUES ('$Title', '$Image')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
  data-template="vertical-menu-template-free"
>
  <?php
    include('../common/header_link.php');
  ?>
  <style>
    .one {
      width: 50px;
      height: 50px;
    }
    .new-para {
  width: 300px;
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

         <?php
include '../common/header.php';

?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="text-muted fw-bold py-3 mb-4 ">PHOTO GALLERY</h4>

             

            
              <!-- Hoverable Table rows -->
              <div class="card">
                <div class="row">
                  <div class="col-lg-6 ">
                    <div class="h5 card-header">PHOTO GALLERY </div>
                  </div>
                 
                  <div class="col-lg-6 d-flex justify-content-end">
                    <a href="add-photo.php">
                      <button type="button" class="btn btn-primary m-4">ADD+</button>
                    </a>
                  </div>
                </div>

                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Sr.No</th>
                        <th>Title</th>
                        <th>Img</th>
                        
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td><p  class="new-para">Campus Recruitment Drive od john Deere India Pvt.Ltd</td>
                        <td>
                          <img src="../../assets/img/news-and-events/photos-Gallery/campus-recuritment-of-websum-softwares-images/campus-front-board.jpg" alt="Avatar" class="one" />
                        
                        </td>
                        <td>
                         <div> 
                            <a href="edit-photo.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>2</strong></td>
                        <td><P class="new-para" >Campus Recruitment Drive of Websum Software Pvt.Ltd </p></td>
                         <td>
                          <img src="../../assets/img/news-and-events/photos-Gallery/campus-recuritment-of-websum-softwares-images/campus-front-board.jpg" alt="Avatar" class="one" />

                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-photo.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>3</strong></td>
                        <td><P class="new-para">Campus Drive of Greaves Cotton Ltd. on 21st February 2025.</P></td>
                         <td>
                          <img src="../../assets/img/news-and-events/photos-Gallery/campus-recuritment-of-websum-softwares-images/college-staff.jpg" alt="Avatar" class="one" />
                    
                        
                        </td>

                           
                      
                        <td>
                          
                             <div> <a href="edit-photo.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>4</strong>
                        </td>
                        <td><p  class="new-para">Campus Drive of Core Project Engineers and Consultant Pvt. Ltd. for civil engineering student</p></td>
                         <td>
                          <img src="../../assets/img/news-and-events/photos-Gallery/campus-drive-of-core-project-engineers-and-consultants/certificate.jpg" alt="Avatar" class="one" />
                    
                        
                        </td>
                          
                              
                        <td>
                         
                              
                            
                            <div> <a href="edit-photo.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                                <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>5</strong></td>
                        <td><P class="new-para">Campus Interview of Bajaj Auto Ltd. on 8th February 2025</P></td>
                         <td>
                         <img src="../../assets/img/news-and-events/photos-Gallery/campus-interview-of-bajaj-auto-Ltd/staffs.jpg" alt="Avatar" class="one" />
                    
                        
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-photo.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-primary"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                     <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>6</strong></td>
                        <td> <P class="new-para">Campus Drive for Electrical & Mechanical Engineering students </P></td>
                         <td>
                        <img src="../../assets/img/news-and-events/photos-Gallery/campus-recuritment-of-websum-softwares-images/interview img 2.jpg" alt="Avatar" class="one" />
                    
                        
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-photo.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>7</strong></td>
                        <td><p class="new-para">छत्रपती शाहू पॉलिटेक्निक मध्ये जॉन डियर इंडिया प्रा.ली. तर्फे कॅम्पस ड्राईव्हचे यशस्वी आयोजन-2023 </P></td>
                         <td>
                           <img src="../../assets/img/news-and-events/photos-Gallery/campus-recruitment-of-john-deere-images/induction-photo.jpg" alt="Avatar" class="one" />
                    
                        
                        </td>
                   
                        <td>
                           <div> <a href="edit-photo.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-info"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>8</strong></td>
                        <td> <P class="new-para">Glimpses of annual function Poly Fest 2k23 </P></td>
                           <td>
                         <img src="../../assets/img/news-and-events/photos-Gallery/Glimpses-of-annual-function-2k23/cultural-program.jpg" alt="Avatar" class="one" />
                    
                        
                        </td>
                   
                        <td>
                           <div> <a href="edit-photo.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          
                        </td>
                        <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>9</strong></td>
                        <td><P class="new-para">Campus Interview of John Deere IndiaPvt Ltd 2019 </P></td>
                         <td>
                           <img src="../../assets/img/news-and-events/photos-Gallery/campus-interview-of-john-deere/staff.jpg" alt="Avatar" class="one" />
                        
            
                        </td>
                   
                        <td>
                           <div> <a href="edit-photo.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-primary"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          
                        </td>
                    
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