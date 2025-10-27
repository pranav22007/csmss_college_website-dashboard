<?php include '../common/auth.php'; ?>
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
              <h4 class="text-muted fw-bold py-3 mb-4">AWARDS & RECOGNITIONS</h4>

             

            
              <!-- Hoverable Table rows -->
              <div class="card">
                <div class="row">
                  <div class="col-lg-6 ">
                    <div class="h5 card-header">AWARDS & RECOGNITIONS</div>
                  </div>
                 
                  <div class="col-lg-6 d-flex justify-content-end">
                    <a href="award-add.php">
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
                        <th>IMG</th>
                       
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td><p  class="new-para"> Accredited by National Board of Accreditation </p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/award-resize.jpg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>2</strong></td>
                        <td><p  class="new-para">Mechanical Engineering Department Second year students..</p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/Mechanical.jpg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                        
                        <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>3</strong></td>
                        <td><p  class="new-para">Appreciation Award 2024 for maximum enrollment of Life members of ISTE<p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/award-resize.jpg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>4</strong></td>
                        <td><p  class="new-para">Secured Runner-Up position in IEDSSA State Level Athletic Competition.</p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/Athletic-Competition.jpeg" alt="Avatar" class="rounded-circle" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      

                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>5</strong></td>
                        <td><p  class="new-para">Second Year Students won first prize</p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/Artificial-Intelligence.jpeg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>6</strong></td>
                        <td><p  class="new-para">Third Year Students got Second Prize</p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/ELectronics.jpeg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>


                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>7</strong></td>
                        <td><p class="new-para">Excellent remark by MSBTE for A.Y.2022-23</p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/Excellent-remark.jpeg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>8</strong></td>
                        <td><p  class="new-para">ISO 21001:2018 Certificate of registration</p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/Certificate-of-registration.jpg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>


                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>9</strong></td>
                        <td><p  class="new-para">Excellent remark by MSBTE for A. Y. 2021-22</p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/Excellent-remark.jpeg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>10</strong></td>
                        <td><p  class="new-para">Gold medal in IEDSSA sport event</p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/Gold medal.jpg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>


                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>11</strong></td>
                        <td><p class="new-para">Preface by MSBTE Director Dr. Abhay Wagh</p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/director-resize.jpg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>12</strong></td>
                        <td ><p  class="new-para">MSBTE SPONSORED STATE LEVEL PAPER PRESENTATION COMPETITION</p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/MSBTE-SPONSORED.jpeg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-warning">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-warning"> 
                                 <i class="bx bx-trash me-1 "></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                      </tr>


                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>13</strong></td>
                        <td><p  class="new-para">Letter of Appreciation By MSBTE, Mumbai</p></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/letter-resize.jpg" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
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
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>14</strong></td>
                        <td class="new-para">First Prize in MSBTE State level paper presentation Competition</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/news-and-events/Awards-and-Recognitions/paper-presentation-Competition.png" alt="Avatar" class="one" />
                            </li>
                            
                          </ul>
                       </td>
                        <td>
                         <div> 

                            <a href="award-edit.php" class=" text-white">
                               <button type="button" class="btn rounded-pill btn-success">
                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                </button></a> 
                                <a  href="#" class=" text-white">
                                <button type="button" class="btn rounded-pill btn-success"> 
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