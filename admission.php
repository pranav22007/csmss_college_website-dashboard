<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from live.themewild.com/eduka/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:34 GMT -->

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->

    <!-- favicon -->


    <?php
    include 'common/header-link.php';
    ?>

    <!-- style for blink -->
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            content: "\f105";
            /* Font Awesome chevron-right */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            padding: 0 0.5rem;
            color: #6c757d;
        }

        .breadcrumb {

            height: 0;
            padding-bottom: 8px;
            padding-top: 16px;
        }
    </style>

</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="loader-book">
            <div class="loader-book-page"></div>
            <div class="loader-book-page"></div>
            <div class="loader-book-page"></div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- header area -->
    <?php
    include 'common/header.php';
    ?>
    <!-- header area end -->


    <!-- popup search -->
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->


    <main class="main">

        <!-- breadcrumb -->

        <!-- breadcrumb end -->


        <!-- about area -->
        <div class="department-single-area py-120 faq-area">
            <div class="container ">
                <div class="department-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Admission</li>
                                </ol>
                            </nav>
                            <div class="department-sidebar">
                                <div class="widget category mt-5">
                                    <h4 class="widget-title">STUDENT CORNER</h4>
                                    <div class="category-list">
                                        <a href="admission.php"><i class="far fa-long-arrow-right"></i>Admission</a>
                                        <a href="placement.php"><i class="far fa-long-arrow-right"></i>Placement</a>
                                    </div>
                                </div>
                                <!-- <div class="widget department-download">
                                    <h4 class="widget-title">Download</h4>
                                    <a href="#"><i class="far fa-file-pdf"></i> Download Brochure</a>
                                    <a href="#"><i class="far fa-file-pdf"></i> Department Details</a>
                                    <a href="#"><i class="far fa-file-pdf"></i> Journals Departments</a>
                                    <a href="#"><i class="far fa-file-alt"></i> Download Application</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8"
                            style="overflow-y: scroll; height: 800px; scrollbar-width: none; -ms-overflow-style: none;">
                            <div class="site-heading mb-4 mt-5 fa-1x">
                                <h4 class="site-title text-center">
                                    ADMISSION 2025-26
                                </h4>
                            </div>
                            <p class="about-text">
                                <b class="text-dark"> CSMSS College of Polytechnic</b>
                                is established in 2009 and is one of the leading technical
                                education institutes in the Maharashtra state. The college has been the vanguard of
                                continuous development in technical education since its inception. Considering the
                                expertise and facilities developed over the years, excellence and achievements in regard
                                to standards of education and its overall curricular and technical developments.
                            </p>
                            <p class="mt-5">
                                Here you can find all the details about admission
                            </p>
                            <!-- blinking area-->
                            <!-- intake and choice code table -->

                            <div class="container mt-3 table-responsive">
                                <h4>Program Wise Intake and Choice Code</h4>
                                <table class=" table table-bordered table-hover mt-2">
                                    <thead>
                                        <tr>
                                            <th>Programs</th>
                                            <th class="text-center">Intake</th>
                                            <th class="text-center">Choice Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Civil Engineering</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">217619110</td>
                                        </tr>
                                        <tr>
                                            <td>Computer Engineering</td>
                                            <td class="text-center">180</td>
                                            <td class="text-center">217624510</td>
                                        </tr>
                                        <tr>
                                            <td>Electrical Engineering</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">217629310
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Electronics & Telecommunication Engineering</td>
                                            <td class="text-center"> 60</td>
                                            <td class="text-center">217637210</td>
                                        </tr>
                                        <tr>
                                            <td>Mechanical Engineering</td>
                                            <td class="text-center"> 60</td>
                                            <td class="text-center">217661210</td>
                                        </tr>
                                        <tr>
                                            <td>Artificial Intelligence and Machine Learning</td>
                                            <td class="text-center"> 60</td>
                                            <td class="text-center">217699810</td>
                                        </tr>
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>




                            <!-- NOTIFICATIONS TABLE -->
                            <div class="container mt-3 table-responsive">
                                <h4>Notifications</h4>
                                <table class=" table table-bordered table-hover mt-2">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Programs</th>
                                            <th class="text-center">View</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include('csmss_poly_dashboard/common/dbcon.php');
                                    $sql = "SELECT * FROM notification_admission ORDER BY adnoti_id DESC";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tbody>
                                            <tr>

                                                <td><?php echo $row['title'] ?></td>
                                                <td class="text-center">
                                                    <a href="../csmss-polytechnic-website/csmss_poly_dashboard/assets/pdf/admission/<?php echo $row['pdf'] ?>"
                                                        class="btn text-white" id="view-button">
                                                        <i class="fa-regular fa-eye text-white"></i> View
                                                    </a>
                                                </td>

                                            </tr>
                                        </tbody>
                                        <?php
                                    }

                                    ?>
                                </table>
                            </div>




                            <!-- about area end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <!-- footer area -->
    <?php
    include 'common/footer.php';
    ?>
    <!-- footer area end -->




    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
    <!-- scroll-top end -->



    <?php
    include 'common/footer-link.php';
    ?>

</body>


<!-- Mirrored from live.themewild.com/eduka/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:34 GMT -->

</html>