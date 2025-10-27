<?php
include '../common/dbcon.php';

if (isset($_POST['submit'])) {
    $Title = $_POST['Title'];
    $Image = $_POST['Image'];
    

    $sql = "INSERT INTO news ( Title, Image) VALUES ('$Title', '$Image')";
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
    .page-para {
  width: 300px;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}
.one{
  width:50px;
  height:50px;
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
              <h4 class="text-muted fw-bold py-3 mb-4">NEWS </h4>

             

            
              <!-- Hoverable Table rows -->
              <div class="card">
                <div class="row">
                  <div class="col-lg-6 ">
                    <div class="h5 card-header">NEWS </div>
                  </div>
                 
                  <div class="col-lg-6 d-flex justify-content-end">
                    <a href="add-news.php">
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
                        <th></th>
                        <th>img</th>
                        
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td><p class="page-para ">Mechanical Engineering Department Second year students got second price</p></td>
                        <td>
                        
                        
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>2</strong></td>
                        <td><p class="page-para ">Institute Level Admission Round 2023-24</p></td>
                        <td>
                        <td>
                            <img src="../../assets/img/news-and-events/news/institute-level.jpg" alt="Avatar" class="one" />

                        </td>
                           

                        </td>
                        
                        </td>

                           
                      
                        <td>
                          
                             <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-info"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>3</strong>
                        </td>
                        <td><p class="page-para ">OTO Registration Circular</p></td>
                        <td>
                        <td>
                            <img src="../../assets/img/news-and-events/news/oto-registration.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        </td>

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                                <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                              
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>4</strong></td>
                        <td><p class="page-para ">Anti-Ragging Committee</p></td>
                        <td>
                        <td>
                            <img src="../../assets/img/news-and-events/news/anti-ragging.jpeg" alt="Avatar" class="one" />

                        </td>
                       
                          
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-primary"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-primary"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>

                            </div>
                          
                        </td>
                      </tr>
                     <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>5</strong></td>
                        <td><p class="page-para ">ICC(Internal Complaint Committee) Committee</p></td>
                        <td>
                        <td>
                            <img src="../../assets/img/news-and-events/news/icc-committee.jpeg" alt="Avatar" class="one" />

                        </td>
                            

                        </td>
                       
                          
                            
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>6</strong></td>
                        <td><p class="page-para ">Grievance Redressal Committee(GRC) for Faculty/Staff</p></td>
                        <td>
                        <td>
                            <img src="../../assets/img/news-and-events/news/grc.jpeg" alt="Avatar" class="one" />

                        </td>

                       
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-info"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-info"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>7</strong></td>
                        <td><p class="page-para ">POST SSC Diploma admission circular</p></td>
                        <td>
                        <td>
                            <img src="../../assets/img/news-and-events/news/post-ssc.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          

                        </td>
                        <td>
                         <div> 
                            <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>8</strong></td>
                        <td><p class="page-para ">PHOTOCOPY SCHEDULE</p></td>
                        <td>
                        <td>
                            <img src="../../assets/img/news-and-events/news/photocopy-schedule.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>9</strong></td>
                        <td><p class="page-para ">150th Birth Anniversary Celebration of Chhatrapati Rajarshi Shahu Maharaj</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/150th birth.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                        </td>

                           
                      
                        <td>
                          
                             <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>10</strong>
                        </td>
                        <td><p class="page-para ">Umesh Nagdive Sir has Visited FC Center(CSMSS COP)</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/umesha-sir.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        </td>

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                                <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>11</strong></td>
                        <td><p class="page-para ">Appointment of various posts 2023</p></td>
                        <td>
                          <td>
                            <img src="../../assets/img/news-and-events/news/appoitment-2023.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          

                        </td>
                        <td>
                         <div> 
                            <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>12</strong></td>
                        <td><p class="page-para ">STATE LEVEL TECHNICAL PAPER PRESENTATION COMPETITION</p></td>
                        <td>
                            <td>
                            <img src="../../assets/img/news-and-events/news/paper-presentation.png" alt="Avatar" class="one" />

                        </td>
                        
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>13</strong></td>
                        <td><p class="page-para ">List of selected candidates in John Deere India Pvt Ltd. 2022-23</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/list-of-select-candid.jpeg" alt="Avatar" class="one" />

                        </td>
                        </td>

                           
                      
                        <td>
                          
                             <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>14</strong>
                        </td>
                        <td><p class="page-para ">Class test 1 time table AY 2022-23 (Even)</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/class-test-1.png" alt="Avatar" class="one" />

                        </td>
                        
                          
                        </td>

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                                <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>15</strong></td>
                        <td><p class="page-para ">जॉन डियर इंडिया प्रा.ली. तर्फे कॅम्पस ड्राईव्ह</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/jon-dear.jpg" alt="Avatar" class="one" />

                        </td>
                        </td>
                        
                          

                        </td>
                        <td>
                         <div> 
                            <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>16</strong></td>
                        <td><p class="page-para ">Fees structure for academic year 2022-23</p></td>
                       <td><td>
                            <img src="../../assets/img/news-and-events/news/fees-structure-22-23.jpg" alt="Avatar" class="one" />

                        </td>
                        </td>
                        
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>17</strong></td>
                        <td><p class="page-para ">CORRUPTION FREE INDIA FOR A DEVELOPED NATION</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/corruption-free.png" alt="Avatar" class="one" />

                        </td>
                        </td>
                        
                        </td>

                           
                      
                        <td>
                          
                             <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>18</strong>
                        </td>
                        <td><p class="page-para "> Against CAP General Merit List A.Y. 2022-23</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/against-cap-list-22-23.jpg" alt="Avatar" class="one" />

                        </td>
                        </td>
                        
                          
                        </td>

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                                <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>19</strong></td>
                        <td><p class="page-para ">MSBTE One time opportunity (OTO) registration time table 2022-23</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/msbte-oto-time-table-22-23.png" alt="Avatar" class="one" />

                        </td>
                        </td>
                        
                          

                        </td>
                        <td>
                         <div> 
                            <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>20</strong></td>
                        <td><p class="page-para ">पॉलिटेक्निक शैक्षणिक वर्ष २०२२-२३ अनुत्तीर्ण विद्यार्थांना दिलासा</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/polytechnic-year 22-23.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>21</strong></td>
                        <td><p class="page-para ">CSMSS Polytechnic च्या सर्व शाखांना MSBTE कडून excellent दर्जा</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/excellent-shakha.24" alt="Avatar" class="one" />

                        </td>

                        </td>
                        
                        </td>

                           
                      
                        <td>
                          
                             <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>22</strong>
                        </td>
                        <td><p class="page-para "> छत्रपती शाहू पॉलिटेक्निक व मसिआमध्ये सामंजस्य करार</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/csmss-masiaam-karar.jpeg" alt="Avatar" class="one" />

                        </td>
                          
                        </td>

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                                <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>23</strong></td>
                        <td><p class="page-para ">Post SSC Diploma/Polytechnic admissions Facilitation Center 2176</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/post-ssc-admission-center2176.jpg" alt="Avatar" class="one" />

                        </td>
                          

                        </td>
                        <td>
                         <div> 
                            <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>24</strong></td>
                        <td><p class="page-para ">online student grievance notice</p></td>
<td><td>
                            <img src="../../assets/img/news-and-events/news/online-grievance-notice.png" alt="Avatar" class="one" />

                        </td>
                        
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>25</strong></td>
                        <td><p class="page-para ">Class test 1 time table (s-2022)</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/class-test-1-s-2022.png" alt="Avatar" class="one" />

                        </td>

                        </td>
                        
                        </td>

                           
                      
                        <td>
                          
                             <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>26</strong>
                        </td>
                        <td><p class="page-para "> छत्रपती शाहू पॉलीटेक्निकने राखली निकालाची उज्ज्वल परंपरा</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/news-result-parampare.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        </td>

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                                <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>27</strong></td>
                        <td><p class="page-para ">छत्रपती शाहू पॉलीटेकनिक मधील २४ विद्यार्थ्यांची कॅम्पस प्लेसमेंट</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/csmss-24-stu-campus-placement.jpg" alt="Avatar" class="one" />

                        </td>
                          

                        </td>
                        <td>
                         <div> 
                            <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>28</strong></td>
                        <td><p class="page-para ">MAGICx Interview Series Announcement for 15 January 2022!</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/magicx-interview-15th-jan.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>29</strong></td>
                        <td><p class="page-para ">Organized Virtual Surya Namaskar Programme Event held at CSMSS College of Polytechnic.</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/org-surya-namskar.51" alt="Avatar" class="one" />

                        </td>
                        
                        </td>

                           
                      
                        <td>
                          
                             <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>30</strong>
                        </td>
                        <td><p class="page-para "> Arrangement of Covid-19 Mega Vaccination for all the students who are above 15 years old on the Occasion of National Youth Day January 12, 2022.</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/arrangement-covid-19.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        </td>

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                                <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>31</strong></td>
                        <td><p class="page-para ">Visit of Delegation of Directorate of Technical Education, Uttar Pradesh for Study tour of Polytechnic Colleges in Maharashtra</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/visit-delegation-uttar-pradesh.jpg" alt="Avatar" class="one" />

                        </td>
                          

                        </td>
                        <td>
                         <div> 
                            <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>32</strong></td>
                        <td><p class="page-para ">Arrangement of Special vaccination drive against corona virus disease (Covid-19) at CSMSS College of Polytechnic</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/vaccination-drive-covid-19.jpeg" alt="Avatar" class="one" />

                        </td>
                          
                        </td>
                   
                        <td>
                           <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                             <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                              <button type="button" class="btn rounded-pill btn-success"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>33</strong></td>
                        <td><p class="page-para ">TC Issue of Final year Pass out student</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/tc-issue-final-year-student.jpg" alt="Avatar" class="one" />

                        </td>
                        
                        </td>

                           
                      
                        <td>
                          
                             <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>34</strong>
                        </td>
                        <td> <p class="page-para ">तंत्रशिक्षण पदविका प्रवेश</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/tantrashikshan-padavika.png" alt="Avatar" class="one" />

                        </td>

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                                <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>35</strong></td>
                        <td><p class="page-para ">Padma-vibhushan Hon. Dr. Anil Kakodkar inaugurates CSMSS SAT-COM lab</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/padma-vibhushan.jpg" alt="Avatar" class="one" />

                        </td>
                          

                        </td>
                        <td>
                         <div> 
                            <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-primary">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-primary"> 
                                 <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>36</strong></td>
                        <td><p class="page-para ">CSMSS College of Polytechnic Fees for academic year 2017-18</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/csmss-poly-fees-2017-18.png" alt="Avatar" class="one" />

                        </td>
                        </td>

                           
                      
                        <td>
                          
                             <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-info">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                              <a  href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-info"> 
                             <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>37</strong>
                        </td>
                        <td><p class="page-para ">Polytechnic is the best option After tenth in order to get early jobs:  Dr. M. V. Mankar</p></td>
                        <td><td>
                            <img src="../../assets/img/news-and-events/news/poly-best-option-after-10th.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        </td>

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-news.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a>
                                <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                               <a href="#" class=" text-white">
                             <button type="button" class="btn rounded-pill btn-warning"> 
                              <i class="bx bx-trash me-1 "></i> Disable
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
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