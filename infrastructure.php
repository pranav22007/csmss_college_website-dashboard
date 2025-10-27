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



    <?php
    include 'common/header-link.php';
    ?>


    <style>
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fda31b;
            background-color: transparent;
        }

        .nav-link {
            color: black;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: "\f105";
            /* Font Awesome chevron-right */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            padding: 0 0.5rem;
            color: #6c757d;
        }

        .breadcrumb {
            margin-left: 587px;
            height: 0;
            padding-top: 21px;
        }
        @media screen and (max-width: 768px) {
          .breadcrumb {
            margin-bottom: 35px;
            margin-left: 40px !important;
        }  
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
        <!-- <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Infrastructure</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Infrastructure</li>
                </ul>
            </div>
        </div> -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Infrastructure</li>
            </ol>
        </nav>
        <!-- breadcrumb end -->



        <!-- department-single -->
        <div class="department-single-area d-none d-md-block">
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="department-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">Infrastructure</h4>
                                    <div class="category-list">
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="nav-item col-lg-12 col-md-6 col-12 px-4">
                                                <a data-bs-toggle="pill" href="#campus" class="nav-link active">
                                                    <i class="far fa-long-arrow-right"></i> Campus
                                                </a>
                                            </li>
                                            <li class="nav-item col-lg-12  col-md-6 col-12 px-4">
                                                <a data-bs-toggle="pill" href="#Canteen" class="nav-link ">
                                                    <i class="far fa-long-arrow-right"></i> Canteen
                                                </a>
                                            </li>
                                            <li class="nav-item col-lg-12 col-md-6 col-12 px-4">
                                                <a data-bs-toggle="pill" href="#Girls" class="nav-link">
                                                    <i class="far fa-long-arrow-right"></i> Girls Hostel
                                                </a>
                                            </li>
                                            <li class="nav-item col-lg-12 col-md-6 col-12 px-4">
                                                <a data-bs-toggle="pill" href="#Boys" class="nav-link">
                                                    <i class="far fa-long-arrow-right"></i> Boys Hostel
                                                </a>
                                            </li>
                                            <li class="nav-item col-lg-12 col-md-6 col-12 px-4">
                                                <a data-bs-toggle="pill" href="#Auditorium" class="nav-link">
                                                    <i class="far fa-long-arrow-right"></i> Auditorium
                                                </a>
                                            </li>
                                            <li class="nav-item col-lg-12 col-md-6 col-12 px-4">
                                                <a data-bs-toggle="pill" href="#Library" class="nav-link">
                                                    <i class="far fa-long-arrow-right"></i> Library
                                                </a>
                                            </li>
                                            <li class="nav-item col-lg-12 col-md-6 col-12 px-4">
                                                <a data-bs-toggle="pill" href="#Gymnasium" class="nav-link">
                                                    <i class="far fa-long-arrow-right"></i> Gymnasium
                                                </a>
                                            </li>
                                            <li class="nav-item col-lg-12 col-md-6 col-12 px-4">
                                                <a data-bs-toggle="pill" href="#Bus" class="nav-link">
                                                    <i class="far fa-long-arrow-right"></i> Bus
                                                </a>
                                            </li>
                                            <li class="nav-item col-lg-12 col-md-6 col-12 px-4">
                                                <a data-bs-toggle="pill" href="#Hospital" class="nav-link">
                                                    <i class="far fa-long-arrow-right"></i> In House Hospital Facility
                                                </a>
                                            </li>
                                            <li class="nav-item col-lg-12 col-md-6 col-12 px-4">
                                                <a data-bs-toggle="pill" href="#Basketball" class="nav-link">
                                                    <i class="far fa-long-arrow-right"></i> Basketball Court
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="department-details">
                                <div class="tab-content show">
                                    <!-- Campus - Active by default -->
                                    <div id="campus" class="container tab-pane active show"><br>
                                        <div class="department-details-img mb-30">
                                            <img src="assets/img/infrastructure/campuspoly.png" alt=""
                                                style="height: 472px; width: 723px;">
                                        </div>
                                        <h3 class="mb-20">Campus</h3>
                                        <p class="mb-20">CSMSS College Campus includes libraries, lecture halls,
                                            residence halls,
                                            student centers, dining halls, playground, canteen and hostel facilities.
                                        </p>
                                    </div>
                                    <!-- Other Tabs -->
                                    <div id="Canteen" class="container tab-pane fade"><br>
                                        <div class="department-details-img mb-30">
                                            <img src="assets/img/infrastructure/canteen.jpg" alt=""
                                                style="height: 472px; width: 723px;">
                                        </div>
                                        <h3 class="mb-20">Canteen</h3>
                                        <p class="mb-20">A spacious and well-designed canteen with a modern kitchen that
                                            provides
                                            a variety of food options.
                                        </p>
                                    </div>
                                    <div id="Girls" class="container tab-pane fade"><br>
                                        <div class="department-details-img mb-30">
                                            <img src="assets/img/infrastructure/girls.jpg" alt=""
                                                style="height: 472px; width: 723px;">
                                        </div>
                                        <h3 class="mb-20">Girls Hostel</h3>
                                        <p class="mb-20">Separate hostel for girls with 24/7 security and mess facility.
                                        </p>
                                    </div>
                                    <div id="Boys" class="container tab-pane fade"><br>
                                        <div class="department-details-img mb-30">
                                            <img src="assets/img/infrastructure/boys.jpg" alt=""
                                                style="height: 472px; width: 723px;">
                                        </div>
                                        <h3 class="mb-20">Boys Hostel</h3>
                                        <p class="mb-20">Separate hostel for boys with necessary amenities.</p>
                                    </div>
                                    <div id="Auditorium" class="container tab-pane fade"><br>
                                        <div class="department-details-img mb-30">
                                            <img src="assets/img/infrastructure/auditorium.jpg" alt=""
                                                style="height: 472px; width: 723px;">
                                        </div>
                                        <h3 class="mb-20">Auditorium</h3>
                                        <p class="mb-20">A well-established auditorium with 500 seating capacity for
                                            various college functions.</p>
                                    </div>
                                    <div id="Library" class="container tab-pane fade"><br>
                                        <div class="department-details-img mb-30">
                                            <img src="assets/img/infrastructure/library.jpg" alt=""
                                                style="height: 472px; width: 723px;">
                                        </div>
                                        <h3 class="mb-20">Library</h3>
                                        <p class="mb-20">Includes 25 national journals, 1609 book titles, 155521
                                            volumes, an e-library, newspapers, and magazines.</p>
                                    </div>
                                    <div id="Gymnasium" class="container tab-pane fade"><br>
                                        <div class="department-details-img mb-30">
                                            <img src="assets/img/infrastructure/gym.jpg" alt=""
                                                style="height: 472px; width: 723px;">
                                        </div>
                                        <h3 class="mb-20">Gymnasium</h3>
                                        <p class="mb-20">Fully equipped gym with trained instructors available for
                                            students and staff.</p>
                                    </div>
                                    <div id="Bus" class="container tab-pane fade"><br>
                                        <div class="department-details-img mb-30">
                                            <img src="assets/img/infrastructure/bus.jpg" alt=""
                                                style="height: 472px; width: 723px;">
                                        </div>
                                        <h3 class="mb-20">Bus</h3>
                                        <p class="mb-20">Bus facility covers all parts of the city and nearby villages.
                                        </p>
                                    </div>
                                    <div id="Hospital" class="container tab-pane fade"><br>
                                        <div class="department-details-img mb-30">
                                            <img src="assets/img/infrastructure/hospital.jpg" alt=""
                                                style="height: 472px; width: 723px;">
                                        </div>
                                        <h3 class="mb-20">In House Hospital Facility</h3>
                                        <p class="mb-20">Campus hospital with medical store available 24/7.</p>
                                    </div>
                                    <div id="Basketball" class="container tab-pane fade"><br>
                                        <div class="department-details-img mb-30">
                                            <img src="assets/img/infrastructure/court.jpg" alt=""
                                                style="height: 472px; width: 723px;">
                                        </div>
                                        <h3 class="mb-20">Basketball Court</h3>
                                        <p class="mb-20">Well-maintained basketball court on campus.</p>
                                    </div>
                                </div> <!-- .tab-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- department-single end -->
    </main>
    <div class=" container d-block d-sm-none ">
        <h1 class="text-center widget category ">Infrastructure</h1>
        <div class="card shadow my-4">
            <h3 class="p-2 mt-3">Campus</h3>
            <div id="campus" class="container tab-pane active show"><br>
                <div class="department-details-img mb-30">
                    <img src="assets/img/infrastructure/campuspoly.png" alt="" style="height: 270px; width: 723px;">
                </div>
                <p class="mb-20">CSMSS College Campus includes libraries, lecture halls, residence halls,
                    student centers, dining halls, playground, canteen and hostel facilities.
                </p>
            </div>
        </div>
        <!-- card 2 -->
        <div class="card shadow my-4">
            <h3 class="p-2 mt-3"> Canteen</h3>
            <div id="campus" class="container tab-pane active show"><br>
                <div class="department-details-img mb-30">
                    <img src="assets/img/infrastructure/canteen.jpg" alt="" style="height: 270px; width: 723px;">
                </div>
                <p class="mb-4">A spacious and well-designed canteen with a modern kitchen that
                    provides
                    a variety of food options.
                </p>
            </div>
        </div>
        <div class="card shadow my-4">
            <h3 class="p-2 mt-3">Girls hostel</h3>
            <div id="campus" class="container tab-pane active show"><br>
                <div class="department-details-img mb-30">
                    <img src="assets/img/infrastructure/girls.jpg" alt="" style="height:270px; width: 723px;">
                </div>
                <p class="mb-4">Separate hostel for girls with 24/7 security and mess facility.
                </p>
            </div>
        </div>
        <div class="card shadow my-4">
            <h3 class="p-2 mt-3">Boys hostel</h3>
            <div id="campus" class="container tab-pane active show"><br>
                <div class="department-details-img mb-30">
                    <img src="assets/img/infrastructure/boys.jpg" alt="" style="height: 270px; width: 723px;">
                </div>
                <p class="mb-4">Separate hostel for boys with necessary amenities.
                </p>
            </div>
        </div>
        <div class="card shadow my-4">
            <h3 class="p-2 mt-3">Auditorium</h3>
            <div id="campus" class="container tab-pane active show"><br>
                <div class="department-details-img mb-30">
                    <img src="assets/img/infrastructure/auditorium.jpg" alt="" style="height: 270px; width: 723px;">
                </div>
                <p class="mb-4">A well-established auditorium with 500 seating capacity for
                    various college functions.
                </p>
            </div>
        </div>
        <div class="card shadow my-4">
            <h3 class="p-2 mt-3">Library</h3>
            <div id="campus" class="container tab-pane active show"><br>
                <div class="department-details-img mb-30">
                    <img src="assets/img/infrastructure/library.jpg" alt="" style="height: 270px; width: 723px;">
                </div>
                <p class="mb-4">Includes 25 national journals, 1609 book titles, 155521
                    volumes, an e-library, newspapers, and magazines.
                </p>
            </div>
        </div>
        <div class="card shadow my-4">
            <h3 class="p-2 mt-3">Gymnasium</h3>
            <div id="campus" class="container tab-pane active show"><br>
                <div class="department-details-img mb-30">
                    <img src="assets/img/infrastructure/gym.jpg" alt="" style="height: 270px; width: 723px;">
                </div>
                <p class="mb-4">Fully equipped gym with trained instructors available for
                    students and staff.
                </p>
            </div>
        </div>
        <div class="card shadow my-4">
            <h3 class="p-2 mt-3">Bus</h3>
            <div id="campus" class="container tab-pane active show"><br>
                <div class="department-details-img mb-30">
                    <img src="assets/img/infrastructure/bus.jpg" alt="" style="height: 270px; width: 723px;">
                </div>
                <p class="mb-4">Bus facility covers all parts of the city and nearby villages.
                </p>
            </div>
        </div>
        <div class="card shadow my-4">
            <h3 class="p-2 mt-3">In house hospital facility</h3>
            <div id="campus" class="container tab-pane active show"><br>
                <div class="department-details-img mb-30">
                    <img src="assets/img/infrastructure/hospital.jpg" alt="" style="height:270px; width: 723px;">
                </div>
                <p class="mb-4">Campus hospital with medical store available 24/7.
                </p>
            </div>
        </div>
        <div class="card shadow my-4">
            <h3 class="p-2 mt-3">basketball court</h3>
            <div id="campus" class="container tab-pane active show"><br>
                <div class="department-details-img mb-30">
                    <img src="assets/img/infrastructure/court.jpg" alt="" style="height: 270px; width: 723px;">
                </div>
                <p class="mb-4">Well-maintained basketball court on campus.
                </p>
            </div>
        </div>
    </div>
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