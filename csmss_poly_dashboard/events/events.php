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
              <h4 class="text-muted fw-bold py-3 mb-4">EVENTS</h4>

             
                          
            
              <!-- Hoverable Table rows -->
              <div class="card">
                <div class="row">
                  <div class="col-lg-6 ">
                    <div class="h5 card-header">EVENTS </div>
                  </div>
                 
                  <div class="col-lg-6 d-flex justify-content-end">
                    <a href="add-events.php">
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
                        <th>img</th>
                       
                        
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td><p class="page-para ">On the
                                            occasion of the death anniversary, a heartfelt tribute to Chhatrapati Shahu
                                            Maharaj</p></td>
                       
                        <td>
                            <img src="../../assets/img/news-and-events/Events/death-anniversary/statue.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                      
                   
                        <td>
                            
                         <div> 
                            <a href="edit-events.php" class=" text-white">
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
                        <td><p class="page-para ">Blood
                                            Donation Camp on the Occasion of the Birthday of Hon. Secretary Padmakarji
                                            Mulay Sir</p></td>
                        
                          
                        
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Blood-donation-camp/camp1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        
                   
                        </td>
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><p class="page-para ">Expert Talk on "Personality
                                            Development"</p></td>
                        
                       
                        
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Exepert-talk-personality-development/personality1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                   
                        

                           
                      
                        <td>
                          
                             <div> <a href="edit-events.php" class=" text-white">
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
                        <td><p class="page-para ">Expert
                                            Talk on "Business Opportunities and Product Selection"</p></td>
                                            
                        
                          
                        
                       
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Exepert-talk-business-oportunity/bisness1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                   

                        
                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-events.php" class=" text-white">
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
                        <td><p class="page-para ">Expert Talk on "Entrepreneurship as
                                            a Career Choice"</p></td>
                                            
                          
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Expert-talk-entrepreneurship/career1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                   

                        
                       
                          
                          
                        
                   
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><p class="page-para ">ISTE
                                            Sponsored State Level Technical Paper Presentation and Quiz Competition</p></td>
                       
                          
                            
                          
                      
                        <td>
                            <img src="../../assets/img/news-and-events/Events/ISTE-Sponsored-State-Level/inaguration.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><p class="page-para ">Inaugration of Project lab and
                                            Software development lab</p></td>
                       
                          
                       
                        <td>
                            <img src="../../assets/img/news-and-events/Events/INAUGRATION-PROJECT-LAB/lab1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>8</strong></td>
                        <td><p class="page-para ">Expert
                                            talk on "Employability in Defence Services"</p></td>
                        
                          

                        
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Exepert-Talk-on-employbility/employbility.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        <td>
                         <div> 
                            <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>9</strong></td>
                        <td><p class="page-para ">National Road Safety Week</p></td>
                        
                          
                       
                        <td>
                            <img src="../../assets/img/news-and-events/Events/National-road-safeety/national1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>10</strong></td>
                        <td><p class="page-para ">52th
                                            District Level Science Exhibition</p></td>
                        
                        
                        <td>
                            <img src="../../assets/img/news-and-events/Events/52th-district-level-science/district1.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        
                   
                          
                           
                      
                        <td>
                          
                             <div> <a href="edit-events.php" class=" text-white">
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
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>11</strong>
                        </td>
                        <td><p class="page-para ">Faculty Development Training Program
                                            on "Comprehensive Python and Machine Learning "</p></td>
                        
                          
                       
                        <td>
                            <img src="../../assets/img/news-and-events/news/mechanical-1.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        
                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>12</strong></td>
                        <td><p class="page-para ">Faculty Development Training
                                            program</p></td>
                        
                          

                        
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Faculty-development-training/faculty1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        <td>
                         <div> 
                            <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>13</strong></td>
                        <td><p class="page-para ">PM
                                            Vishawkarma Program</p></td>
                        
                          
                        
                        <td>
                            <img src="../../assets/img/news-and-events/Events/PM-vishavkarma/PM1.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>14</strong></td>
                        <td><p class="page-para ">First
                                            Year Induction Program 2024-25</p></td>
                        
                        
                        <td>
                            <img src="../../assets/img/news-and-events/Events/FIRST-YEAR-INDUCTION-PROGRAM/induction1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                           
                      
                        <td>
                          
                             <div> <a href="edit-events.php" class=" text-white">
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
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>15</strong>
                        </td>
                        <td><p class="page-para ">Entrepreneurship development
                                            Program</p></td>
                        
                          
                        
                            
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Enterprenship-program/enterprenship1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                     
                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>16</strong></td>
                        <td><p class="page-para ">Online
                                            webinar on 100% Free Education for Girls</p></td>
                                           
                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/online-webinar-100%/webinar1.png" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        
                          

                       
                        <td>
                         <div> 
                            <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>17</strong></td>
                        <td><p class="page-para ">John Deere
                                            Campus Drive</p></td>
                        
                          
                        
                        <td>
                            <img src="../../assets/img/news-and-events/Events/john-deere/john1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>18</strong></td>
                        <td><p class="page-para ">School Connect Program</p></td>
                        
                        
                            
                        <td>
                            <img src="../../assets/img/news-and-events/Events/school-connect-program/school1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                   

                        
                           
                      
                        <td>
                          
                             <div> <a href="edit-events.php" class=" text-white">
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
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>19</strong>
                        </td>
                        <td><p class="page-para "> State
                                            level Technical Event 2k24</p></td>
                        
                          
                        
                        <td>
                            <img src="../../assets/img/news-and-events/Events/state-level-techanical-events/techanical-events1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                   

                        
                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>20</strong></td>
                        <td><p class="page-para ">industrial visit to Devgiri Mahanand
                                            Dairy Gandheli Chhatrapati Sambhajinagar/p></td>
                                           
                            
                        <td>
                            <img src="../../assets/img/news-and-events/Events/industrial-event-to-devgiri/devgiri1.png" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        
                          

                        </td>
                        <td>
                         <div> 
                            <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>21</strong></td>
                        <td><p class="page-para ">Annual
                                            Social Gathering Polyfest 2k24</p></td>
                                          
                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Annual-social-gathering/annual1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        
                          
                        
                   
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>22</strong></td>
                        <td><p class="page-para ">Hackathon-2023</p></td>
                        
                        
                        <td>
                            <img src="../../assets/img/news-and-events/Events/hacathon/hacathon.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                           
                      
                        <td>
                          
                             <div> <a href="edit-events.php" class=" text-white">
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
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>23</strong>
                        </td>
                        <td><p class="page-para "> MERI MATI
                                            MERA DESH ABHIYAANर</p></td>
                                            
                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/meri-mathi-mera-desh/meri mati.png" alt="Avatar" class="one" />

                        </td>
                        
                          
                      
                   
                        

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>24</strong></td>
                        <td><p class="page-para ">First year
                                            induction program</p></td>
                        
                          
                            
                        <td>
                            <img src="../../assets/img/news-and-events/Events/firs-year-induction-program2/FS1.jpg" alt="Avatar" class="one" />

                        </td>
                        
                       
                        <td>
                         <div> 
                            <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>25</strong></td>
                        <td><p class="page-para ">Campus
                                            Drive for Electrical & Mechanical Engineering students By Gangamai
                                            Industries and Constructions Ltd/p></td>
                                            
                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/CAMPUS-DREVE-FOR-ELECTRICAL/DRIVE1.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                   
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>26</strong></td>
                        <td><p class="page-para ">Result
                                            Summer 202</p></td>
                                            
                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/result-summer-2023/result1.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                        

                           
                      
                        <td>
                          
                             <div> <a href="edit-events.php" class=" text-white">
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
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>27</strong>
                        </td>
                        <td><p class="page-para ">CSMSS Celebrates 150th Birth
                                            Anniversary of Rajarshri Chhatrapati shivaji Maharaj</p></td>
                                            
                            
                        <td>
                            <img src="../../assets/img/news-and-events/Events/csmss-celebrate-150th/15th1.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>28</strong></td>
                        <td><p class="page-para ">Placement in Forbes and Company</p></td>
                        
                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/placement-in-forbase/placement.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        <td>
                         <div> 
                            <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>29</strong></td>
                        <td><p class="page-para "> National Conference 2022-23</p></td>
                       
                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/National-Conference-2022-23/National-Conference-2022-23-1.png" alt="Avatar" class="one" />

                        </td>
                        
                          
                      
                   
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>30</strong></td>
                        <td><p class="page-para ">Annual
                                            social gathering 2023</p></td>
                                            
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Annual-social-gathering/annual1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       

                           
                      
                        <td>
                          
                             <div> <a href="edit-events.php" class=" text-white">
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
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>31</strong>
                        </td>
                        <td><p class="page-para "> IEDSSA 2022-23
                                            G-1 ZONE GLIMPSE</p></td>
                                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/IEDSSA-2022-23-G-1-ZONE-GLIMPSE/IEDSSA-2022-23-G-1-ONE-GLIMPSE-1.png" alt="Avatar" class="one" />

                        </td>
                        
                          
                       

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>32</strong></td>
                        <td><p class="page-para ">Inter Engineering Diploma Students
                                            Sports Association (IEDSSA) Kabaddi Matches</p></td>
                                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Inter-Engineering-Diploma-Students-Sports-Association/(IEDSSA)-Kabaddi-Matches-1.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        <td>
                         <div> 
                            <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>33</strong></td>
                        <td><p class="page-para ">Corruption
                                            Free India for a Developed Nation</p></td>
                                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Corruption-Free-India-for-a-Developed-Nation/corruption.png" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                   
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>34</strong></td>
                        <td><p class="page-para ">8th
                                            International Yoga Day Celebration at CSMSS College of Polytechnic</p></td>
                                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/8th-International-Yoga-Day-Celebration-at-CSMSS-College-of-Polytechnic/8th1.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                      
                           
                      
                        <td>
                          
                             <div> <a href="edit-events.php" class=" text-white">
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
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>35</strong>
                        </td>
                        <td> <p class="page-para ">Arrangement Of Covid-19 Mega
                                            Vaccination Drive For All The Students Who Are Above 15 Years Old On The
                                            Occasion Of National Youth Day January 12, 2022.</p></td>
                                            
                          
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Arrangement-Of-Covid-19/Arrangement-Of-Covid-19.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>36</strong></td>
                        <td><p class="page-para ">Arrangement Of Special Vaccination
                                            Drive Against Corona Virus Disease (Covid-19) At CSMSS College Of
                                            Polytechnic</p></td>
                                            
                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Arrangement-Of-Covid-19/Arrangement-Of-Covid-19.jpeg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       
                        <td>
                         <div> 
                            <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>37</strong></td>
                        <td><p class="page-para ">National Conference on Emerging
                                            Areas in Engineering and Technology</p></td>
                                           
                        <td>
                            <img src="../../assets/img/news and events/Events/National-Conference-on-Emerging-Areas-in-Engineering-and-Technology/National-Conference.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                      
                   
                        <td>
                           <div> <a href="edit-events.php" class=" text-white">
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
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>38</strong></td>
                        <td><p class="page-para ">A State
                                            Level Technical Paper Presentation Competition (Electronics Group)</p></td>
                                           
                            
                        <td>
                            <img src="../../assets/img/news-and-events/Events/A-State-Level-Technical-Paper-Presentation-Competition-(Electronics Group)/a state1.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                       

                           
                      
                        <td>
                          
                             <div> <a href="edit-events.php" class=" text-white">
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
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>39</strong>
                        </td>
                        <td><p class="page-para ">Two days
                                            state level workshop on "NBA Accreditation for polytechnic" on 08-04-2019 to
                                            09-04-2019</p></td>
                                           
                        <td>
                            <img src="../../assets/img/news-and-events/Events/Two-days-state-level-workshop-on-NBA-Accreditation-for-polytechnic-on-08-04-2019-to-09-04-2019/two1.jpg" alt="Avatar" class="one" />

                        </td>
                        
                          
                      

                         
                       
                        <td>
                         
                              
                            
                            <div> <a href="edit-events.php" class=" text-white">
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