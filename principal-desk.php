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
            margin-left: 163px;
            height: 0;
            padding-top: 21px;
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
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Principal Desk</li>
            </ol>
        </nav>
        <!-- breadcrumb end -->


        <?php
 include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
        $sql = "SELECT * FROM principle ORDER BY principle_id DESC";
        $result = mysqli_query($conn, $sql);
        $principle = mysqli_fetch_assoc($result);
        ?>

        <!-- department-single -->
        <div class="department-single-area py-120">
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 ">
                            <div class="department-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">Our Principal</h4>

                                    <div class="department-details-img">
                                        <img src="csmss_poly_dashboard/assets/img/college/principal-desk/<?php echo $principle['image']; ?>"
                                            class="w-100 h-100" alt="thumb">
                                        <h4 class="text-center mt-3">
                                            <?php echo $principle['name']; ?>
                                        </h4>
                                        <h4 class="text-center mt-2">
                                            <small class="text-success"> Principal</small>
                                        </h4>
                                        <p class="text-center mt-2">
                                            Email:- <a href="mailto:principle@csmss.com">principal@csmss.com
                                            </a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="department-details">
                                <h3 class="mb-20">Principal Desk</h3>
                                <p class="mb-20"><?php echo $principle['description']; ?></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- department-single end -->


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