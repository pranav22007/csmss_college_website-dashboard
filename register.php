<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from live.themewild.com/eduka/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:31:09 GMT -->

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Eduka - School, College, University And Courses HTML5 Template</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">


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
                <h2 class="breadcrumb-title">Register</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- register area -->
        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-5 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <img src="assets/img/logo/logo.png" alt="">
                            <p>Create your eduka account</p>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Your Password">
                            </div>
                            <div class="form-check form-group">
                                <input class="form-check-input" type="checkbox" value="" id="agree">
                                <label class="form-check-label" for="agree">
                                    I agree with the <a href="#">Terms Of Service.</a>
                                </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn"><i class="far fa-paper-plane"></i> Register</button>
                            </div>
                        </form>
                        <div class="login-footer">
                            <p>Already have an account? <a href="login.html">Login.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- register area end -->

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


<!-- Mirrored from live.themewild.com/eduka/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:31:09 GMT -->

</html>