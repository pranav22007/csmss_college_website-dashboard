<?php include __DIR__ . '/csmss_poly_dashboard/common/dbcon.php'; ?>
<?php
$sql = "SELECT * FROM committees ";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from live.themewild.com/eduka/academic-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:27 GMT -->

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
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Committees</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Committees</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- Student-Corner -->
        <div class="department-single-area py-120 faq-area">
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="department-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">STUDENT CORNER</h4>
                                    <div class="category-list">
                                        <a href="notices.php"><i class="far fa-long-arrow-right"></i>Notices</a>
                                        <a href="academic-schedule.php"><i class="far fa-long-arrow-right"></i>Academic
                                            Schedule</a>
                                        <a href="exam-timetable.php"><i class="far fa-long-arrow-right"></i>Exam
                                            Timetable</a>
                                        <a href="college-timetable.php"><i class="far fa-long-arrow-right"></i>College
                                            Timetable</a>
                                        <a href="curriculum.php"><i class="far fa-long-arrow-right"></i>Curriculum</a>
                                        <a href="committees.php"><i class="far fa-long-arrow-right"></i>Committees</a>
                                        <a href="forms-to-download.php"><i class="far fa-long-arrow-right"></i>Forms To
                                            Download</a>

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
                        <div class="col-xl-8 col-lg-8">
                            <div class="accordion" id="accordionExample">
                                <div class="widget event-single-info">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h4 class="widget-title mt-5 text-center">COMMITTEES</h4>
                                    </button>
                                    </h2>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="choose-item m-3">
                                                    <div class="choose-item-icon">
                                                        <img src="assets/img/icon/teacher-2.svg" alt="">
                                                    </div>
                                                    <div
                                                        class="choose-item-info d-flex align-items-center justify-content-between">
                                                        <!-- Placement Summary Text on the left -->
                                                        <a href="../csmss-polytechnic-website/csmss_poly_dashboard/assets/pdf/committees/<?php echo $row['pdf'] ?>"
                                                        target="_blank"
                                                            class="flex-grow-1">
                                                            <h4><?php echo $row['title'] ?></h4>
                                                            <p class="choose-item-discription mt-0 mb-0"><?php echo $row['description'] ?></p>
                                                        </a>
                                                        <!-- Download Button on the right -->
                                                        <a href="../csmss-polytechnic-website/csmss_poly_dashboard/assets/pdf/committees/<?php echo $row['pdf'] ?>" download
                                                            class="download-btn ms-3">
                                                            <i class="fa-solid fa-file-arrow-down"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }

                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>




        <!-- department-single end-->
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


<!-- Mirrored from live.themewild.com/eduka/academic-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:32 GMT -->

</html>