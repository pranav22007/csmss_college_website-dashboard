<?php
session_start();

// Default language = English
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "en";
}

// Change language if user clicks
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if (in_array($lang, ["en", "hi", "mr"])) {
        $_SESSION['lang'] = $lang;
    }
}

// Language translations
$translations = [
    "en" => [
        "approved_by" => "[ Approved by AICTE & DTE (Govt of Maharashtra). Affiliated to MSBTE Mumbai. ]",
        "title" => "Welcome to My Website",
        "description" => "This is a demo site with multi-language support.",
        "contact" => "Contact Us",
        "about" => "About Us"
    ],
    "hi" => [
        "approved_by" => "[ एआईसीटीई और डीटीई (महाराष्ट्र सरकार) द्वारा अनुमोदित। एमएसबीटीई मुंबई से संबद्ध। ]",
        "title" => "मेरी वेबसाइट पर आपका स्वागत है",
        "description" => "यह बहुभाषी समर्थन वाली एक डेमो साइट है।",
        "contact" => "संपर्क करें",
        "about" => "हमारे बारे में"
    ],
    "mr" => [
        "approved_by" => "[ एआयसीटीई आणि डीटीई (महाराष्ट्र सरकार) मान्यताप्राप्त. एमएसबीटीई मुंबईशी संलग्न. ]",
        "title" => "माझ्या वेबसाइटवर आपले स्वागत आहे",
        "description" => "ही बहुभाषिक समर्थनासह डेमो साइट आहे.",
        "contact" => "संपर्क करा",
        "about" => "आमच्याबद्दल"
    ]
];

// Load selected language
$lang = $translations[$_SESSION['lang']];
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from live.themewild.com/eduka/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:27:44 GMT -->

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
        .card-track {
            display: flex;
            animation: scroll 10s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .card-track2 {
            display: flex;
            animation: scroll 5s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        @media (max-width: 425px) {
            .update-img {
                height: 150px;
            }
        }

        .loc {
            font-size: 13px;
        }

        @media only screen and (min-width: 1440) {}

        @media only screen and (min-width: 1441px) {
            .latest-font-size {
                font-size: 50px;
            }

        }

        .event-container {
            height: auto !important;
        }
    </style>


</head>

<body>
    <!-- Popup Form with Overlay -->
    <div id="popupOverlay" class="popup-overlay">
        <div class="enquiry-form">
            <button class="close-btn" onclick="closeForm()">&times;</button>
            <h3>Enquire Now</h3>
            <p class="text-muted">Fields marked with * are mandatory.</p>
            <form action="#" method="POST">
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Full Name *" required>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email Address *" required>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    <input type="tel" class="form-control" placeholder="Phone Number *" required>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-city"></i></span>
                    <input type="text" class="form-control" placeholder="City">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-user-graduate"></i></span>
                    <input type="text" class="form-control" placeholder="Qualification *" required>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-book-open"></i></span>
                    <input type="text" class="form-control" placeholder="Course Interested *" required>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-text"><i class="fa fa-comment-dots"></i></span>
                    <textarea class="form-control" placeholder="Additional Info (Optional)" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-submit">
                    <i class="fa fa-paper-plane"></i> Submit Enquiry
                </button>
            </form>
        </div>
    </div>
    <!-- popup form code end  -->






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
    <!-- main start  -->
    <main class="main">

        <!-- hero slider -->
        <div class="hero-section">
            <div class="hero-slider owl-carousel owl-theme">
                <?php
                include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';

                if (!isset($conn) || !$conn) {
                    echo '<p style="color:red;">Database connection failed.</p>';
                } else {
                    $sql = "SELECT * FROM slider ORDER BY slider_id DESC";
                    $sql = "SELECT * FROM slider WHERE status = 1 ORDER BY slider_id DESC";

                    $result = mysqli_query($conn, $sql);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $imagePath = 'csmss_poly_dashboard/assets/img/home/slider/' . htmlspecialchars($row['image']);
                            ?>
                            <div class="hero-single slider-img" style="background: url('<?= $imagePath ?>'); height: 700px">

                            </div>
                            <?php
                        }
                    } else {
                        echo '<p class="text-center fw-bold">No sliders found.</p>';
                    }
                }
                ?>
            </div>
        </div>

        <!-- Counter Section Start -->
        <section id="counter">
            <div class="feature-area fa-negative pt-60 pb-60">
                <div class="container">
                    <div class="col-xl-9 ms-auto">
                        <div class="feature-wrapper">
                            <div class="row g-4 justify-content-center">
                                <?php
                                //  Include DB connection
                                include('csmss_poly_dashboard/common/dbcon.php');
                                //  Fetch up to 4 active counters
                                $sql = "SELECT * FROM counters WHERE status = 1 ORDER BY counters_id ASC LIMIT 4";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <!-- Dynamic Card -->
                                        <div class="col-md-6 col-lg col-12">
                                            <div class="feature-item">
                                                <div class="feature-box text-center">
                                                    <div class="feature-icon mx-auto mb-2">
                                                        <?php
                                                        //  Show icon if available, else fallback
                                                        if (!empty($row['icon'])) {
                                                            echo "<img src='assets/img/icon/" . htmlspecialchars($row['icon']) . "' alt='icon' class='img-fluid'>";
                                                        } else {
                                                            echo "<i class='fa-thin fa-graduation-cap'></i>";
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="feature-content">
                                                        <span class="counter d-block font-size-counter count mt-0"
                                                            data-count="+" data-to="<?= htmlspecialchars($row['count']); ?>"
                                                            data-speed="3000">
                                                            <?= htmlspecialchars($row['count']); ?>
                                                        </span>
                                                        <h4 class="feature-title mt-3">+ <?= htmlspecialchars($row['Title']); ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Dynamic Card -->
                                        <?php
                                    }
                                } else {
                                    echo "<p class='text-center'>No counters found.</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter Section End -->
        <!-- about area -->
        <section id="about">
            <div class="about-area py-120">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                                <div class="about-img">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <!-- first image  -->
                                            <img class="img-1" src="assets/img/about/img_1.png" alt="">
                                            <div class="about-experience mt-4">
                                                <!-- second image -->
                                                <div class="about-experience-icon">
                                                    <img src="assets/img/icon/exchange-idea.svg" alt="">
                                                </div>
                                                <b class="text-start">15+ Years Of <br> Quality Service</b>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <!-- third image -->
                                            <img class="img-2 d-none d-md-block" src="assets/img/about/img_2.png"
                                                alt="">
                                            <!-- fourth image -->
                                            <img class="img-3 mt-4 d-none d-md-block"
                                                src="assets/img/about/stu_img_2.png" alt="">
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                                <div class="site-heading mb-3">
                                    <!-- header -->
                                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> About
                                        Us</span>
                                    <h2 class="site-title">
                                        CSMSS college of <span>Polytechnic</span>
                                    </h2>
                                </div>
                                <p class="about-text">
                                    Established in 2009, CSMSS Polytechnic is a top technical institute in Maharashtra.
                                    It excels in academics, infrastructure, and technical growth.
                                    The college is known for quality education and innovation.</p>
                                <div class="about-content">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="about-item">
                                                <div class="about-item-icon">
                                                    <img src="assets/img/icon/open-book.svg" alt="">
                                                </div>
                                                <!-- featueres  -->
                                                <div class="about-item-content">
                                                    <h5>Education Services</h5>
                                                    <p>15+ years of academic excellence with top MSBTE grades and
                                                        qualified faculty.</p>
                                                </div>
                                            </div>
                                            <div class="about-item">
                                                <div class="about-item-icon">
                                                    <img src="assets/img/icon/global-education.svg" alt="">
                                                </div>
                                                <div class="about-item-content">
                                                    <h5>Tech-driven </h5>
                                                    <p>Strong industry tie-ups, modern labs, and global exposure through
                                                        hub institute model</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <!-- quote -->
                                            <div class="about-quote">
                                                <p>"Empowering minds through excellence in education, innovation,
                                                    and industry-ready infrastructure — shaping futures with every
                                                    step."</p>
                                                <i class="far fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-bottom">
                                    <!-- button  -->
                                    <a href="college.php" class="theme-btn">Discover More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                    <div class="about-phone">
                                        <div class="icon"><i class="fal fa-headset"></i></div>
                                        <div class="number">
                                            <span>Call Now</span>
                                            <h6><a href="tel:+21236547898">+0240-2646405</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- event and news section starts here  -->
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
        ?>

        <div class="row">

            <!-- EVENTS -->
            <div class="col-lg-6 col-md-12 col-12">
                <?php
                $sql = "SELECT * FROM events ORDER BY events_id DESC";
                $result = mysqli_query($conn, $sql);
                ?>
                <div class="blog-area py-120 bg-light">
                    <div class="container">
                        <div class="row overflow-auto course-scroll">
                            <div class="col-lg-6 mx-auto">
                                <div class="site-heading text-center">
                                    <h2 class="site-title">Our <span>Events</span></h2>
                                </div>
                            </div>

                            <div class="row flex-nowrap overflow-auto course-scroll">
                                <?php if (mysqli_num_rows($result) > 0):
                                    while ($row = mysqli_fetch_assoc($result)):
                                        $imagePath = "csmss_poly_dashboard/assets/img/home/events/" . $row['image'];
                                        if (empty($row['image']) || !file_exists(__DIR__ . "../csmss_poly_dashboard/assets/img/home/events" . $row['image'])) {
                                            // $imagePath = "https://via.placeholder.com/400x250?text=No+Image";
                                        }
                                        ?>
                                        <div class="col-md-6 card-track">
                                            <div class="blog-item wow fadeInUp event-container" data-wow-delay=".25s"
                                                style="    height: 512px;">
                                                <div class="blog-item-img">
                                                    <img src="<?= $imagePath ?>" alt="" class="w-100"
                                                        style="height:250px;width:320px">
                                                </div>
                                                <div class="blog-item-info">
                                                    <hr>
                                                    <span class="loc"><i class="far fa-map-marker-alt"></i>
                                                        <?= htmlspecialchars($row['location']); ?></span>
                                                    <h4 class="blog-title fs-4">
                                                        <a href="event.php?events_id=<?= $row['events_id']; ?>">
                                                            <?= htmlspecialchars($row['title']); ?>
                                                        </a>
                                                    </h4>
                                                    <a href="event.php?events_id=<?= $row['events_id']; ?>" class="theme-btn">
                                                        Join Event <i class="fas fa-arrow-right-long"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; else: ?>
                                    <p class="text-center">No events available</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NEWS -->
            <div class="col-lg-6 col-md-12 col-12">
                <?php
                $sql = "SELECT * FROM news WHERE status = 1 ORDER BY home_news_id DESC";
                $result = mysqli_query($conn, $sql);
                ?>
                <div class="blog-area py-120 bg-light h-100">
                    <div class="container">
                        <div class="row flex-nowrap  ">
                            <div class="col-lg-6 mx-auto">
                                <div class="site-heading text-center">
                                    <h2 class="site-title font latest-font-size">Latest <span>News</span></h2>
                                </div>
                            </div>
                        </div>

                        <div class="row flex-nowrap overflow-auto course-scroll">
                            <?php if (mysqli_num_rows($result) > 0):
                                while ($row = mysqli_fetch_assoc($result)):
                                    $imagePath = "csmss_poly_dashboard/assets/img/home/latest_news/" . $row['image'];
                                    if (empty($row['image']) || !file_exists(__DIR__ . "../csmss_poly_dashboard/uploads/news/" . $row['image'])) {
                                        // $imagePath = "https://via.placeholder.com/400x250?text=No+Image";
                                    }
                                    ?>
                                    <div class="col-md-6 card-track2">
                                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                                            <div class="blog-date"><i class="fal fa-calendar-alt"></i>
                                                <?= date("F d, Y", strtotime($row['date'])); ?>
                                            </div>
                                            <div class="blog-item-img">
                                                <img src="<?= $imagePath ?>" class="w-100" alt="Thumb"
                                                    style="height:280px;width:320px">
                                            </div>
                                            <div class="blog-item-info">
                                                <hr>
                                                <h4 class="blog-title">
                                                    <a href="news.php?home_news_id=<?= $row['home_news_id']; ?>">
                                                        <?= htmlspecialchars($row['title']); ?>
                                                    </a>
                                                </h4>
                                                <a href="news.php?home_news_id=<?= $row['home_news_id']; ?>" class="theme-btn">
                                                    Read More <i class="fas fa-arrow-right-long"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; else: ?>
                                <p class="text-center">No news available</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- news end  -->
        <!-- choose-area -->
        <div class="choose-area pt-80 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                            <div class="choose-content-info">
                                <div class="site-heading mb-0">
                                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Why Choose
                                        Us</span>
                                    <h2 class="site-title text-white mb-10">Shaping Futures with Quality
                                        <span>Education</span>
                                    </h2>
                                    <p class="text-white">
                                        At our college, we are committed to delivering quality education through
                                        experienced faculty, a career-oriented curriculum, and modern infrastructure.
                                    </p>
                                </div>
                                <div class="choose-content-wrap">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/teacher-2.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Academic Excellence</h4>
                                                    <p>Expert teachers, top results.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/course-material.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Placement Support</h4>
                                                    <p>Industry links & campus drives.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/online-course.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Student-Centric Environment</h4>
                                                    <p>Safe,inclusive and supportive campus</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="choose-item">
                                                <div class="choose-item-icon">
                                                    <img src="assets/img/icon/money.svg" alt="">
                                                </div>
                                                <div class="choose-item-info">
                                                    <h4>Scholarships & Aid</h4>
                                                    <p>Support for merit and need.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-img wow fadeInRight" data-wow-delay=".25s">
                            <img src="assets/img/choose/csmss1.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- choose-area end -->
        <!-- gallery area starts  -->
        <div class="gallery-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title">Latest update of <span>Gallery</span></h2>

                        </div>
                    </div>
                </div>

                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);

                include __DIR__ . "../csmss_poly_dashboard/common/dbcon.php";

                // Fetch images from DB
                $result = $conn->query("SELECT * FROM latest_update WHERE status = 1 ORDER BY latest_update_id DESC");
                ?>

                <div class="row popup-gallery gallery-row">
                    <?php if ($result && $result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <?php
                            $image = $row['image'];

                            // Server path to check file existence
                            $serverPath = __DIR__ . "/csmss_poly_dashboard/assets/img/home/latest_update/" . $image;

                            // Skip if file does not exist or image field is empty
                            if (empty($image) || !file_exists($serverPath))
                                continue;

                            // URL path for the browser
                            $imageURL = "csmss_poly_dashboard/assets/img/home/latest_update/" . $image;
                            ?>
                            <div class="col-md-4 col-6 wow fadeInUp p-2" data-wow-delay=".25s">
                                <div class="gallery-item">
                                    <div class="gallery-img">
                                        <img src="<?= $imageURL ?>" class="object-fit-cover update-img" alt=""
                                            style="width:100%; height:300px;">
                                    </div>
                                    <div class="gallery-content">
                                        <a class="popup-img gallery-link" href="<?= $imageURL ?>">
                                            <i class="fal fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p class="text-center text-muted">No images found in gallery.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- gallery-area end -->

        <!-- cta-area -->
        <div class="cta-area">
            <div class="container">
                <div class="cta-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-5 ms-lg-auto">
                            <div class="cta-content">
                                <h1>College of Polytechnic</h1>
                                <p>CSMSS College of Polytechnic, established in 2009, is a leading technical education
                                    institute located in Chhatrapati Sambhajinagar, Maharashtra. It is affiliated with
                                    the Maharashtra State Board of Technical Education (MSBTE) and is managed by the
                                    Chhatrapati Shahu Maharaj Shikshan Sanstha (CSMSS).</p>
                                <div class="cta-btn">
                                    <a href="inquiry-form.php" class="theme-btn">Apply Now<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta-area end -->
        <!-- testimonial area -->
        <section id="test-area">
            <div class="testimonial-area ts-bg pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center">

                                <h2 class="site-title text-white">What Our Students <span>Say's</span></h2>

                            </div>
                        </div>
                    </div>

                    <div class="testimonial-slider owl-carousel owl-theme">
                        <?php
                        include '../csmss-polytechnic-website/csmss_poly_dashboard/common/dbcon.php';

                        $sql = "SELECT * FROM testimonials ORDER BY testimonials_id DESC";
                        $result = $conn->query($sql);

                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $imagePath = !empty($row['image']) ? "assets/img/testimonial/" . $row['image'] : "assets/img/testimonial/default.png";
                                ?>
                                <div class="testimonial-item">

                                    <div class="testimonial-quote">
                                        <p class="course-text-one w-100">
                                            <?php echo nl2br(htmlspecialchars($row['description'])); ?>
                                        </p>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-author-img">
                                            <img src="csmss_poly_dashboard/uploads/<?php echo $row['image']; ?>"
                                                alt="testimonial image"
                                                style="width:50px; height:50px; object-fit:cover; border-radius:50%;">


                                        </div>
                                        <div class="testimonial-author-info">
                                            <h4><?php echo htmlspecialchars($row['title']); ?></h4>
                                            <p><?php echo htmlspecialchars($row['designation']); ?></p>
                                        </div>
                                    </div>
                                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p class='text-white text-center'>No testimonials available.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end -->

        <!-- course-area -->
        <section id="course">
            <div class="course-area py-120">
                <div class="container">
                    <div class="row flex-nowrap overflow-auto course-scroll">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center">
                                <!-- headers -->
                                <h2 class="site-title">Our <span>Courses</span></h2>
                            </div>
                        </div>
                    </div>

                    <div class="row flex-nowrap overflow-auto course-scroll ">
                        <?php
                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';

                        $sql = "SELECT * FROM course ORDER BY course_id DESC";
                        $sql = "SELECT * FROM course WHERE status = 1 ORDER BY course_id DESC";

                        $result = mysqli_query($conn, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($course = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="col-auto">
                                    <div class="course-item wow fadeInUp" data-wow-delay=".25s">
                                        <div class="course-img">
                                            <span class="course-tag"><i class="far fa-bookmark"></i>
                                                <?= htmlspecialchars($course['label']) ?></span>
                                            <img src="csmss_poly_dashboard/assets/img/home/courses/<?= htmlspecialchars($course['image']) ?>"
                                                alt="" style="height:250px;" class="w-100">
                                        </div>
                                        <div class="course-content">
                                            <h4 class="course-title mt-4 mb-5">
                                                <h3 id=<?= $course['course_id'] ?>>
                                                    <?= htmlspecialchars($course['title']) ?>
                                                </h3>
                                            </h4>
                                            <p class="course-text-one">
                                                <?= htmlspecialchars($course['description']) ?>
                                            </p>
                                            <div class="course-bottom">
                                                <div class="course-bottom-left">
                                                    <span><i class="far fa-users"></i><?= htmlspecialchars($course['seats']) ?>
                                                        Seats</span>
                                                    <span><i
                                                            class="far fa-clock"></i><?= htmlspecialchars($course['duration']) ?>
                                                        Duration</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p class='text-center'>No courses available right now.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-area end -->
        <!-- latest video section start -->
        <section id="latest-videos">
            <!-- video-area -->
            <div class="video-area">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Latest
                                    Video</span>
                                <h2 class="site-title">
                                    Let's Check Our <span>Latest</span> Video
                                </h2>
                            </div>
                            <p class="about-text">
                                <!-- There are many variations of passages available but the majority have suffered
                            alteration in some form by injected humour look even slightly believable. -->
                                Explore the latest insights and updates through our featured videos.
                                Watch now to stay informed and inspired by our vibrant campus life.
                            </p>
                            <a href="college.php" class="theme-btn mt-30">Learn More<i
                                    class="fas fa-arrow-right-long"></i></a>
                        </div>
                        <div class="col-lg-8 wow fadeInRight" data-wow-delay=".25s">
                            <div class="video-content" style="background-image: url(assets/img/video/clg-img-1.png);">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="video-wrapper">
                                            <a class="play-btn popup-youtube"
                                                href="https://www.youtube.com/watch?v=INoRVe3tspM">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--member section start-->
        <section id="member" class="mt-lg-5 mt-0">
            <div class="team-area py-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center">

                                <h2 class="site-title">Meet With Our <span>Members</span></h2>
                            </div>
                        </div>
                    </div>
                    <!--scrolling-->

                    <!--scrolling-->
                    <!-- Single Row with Mobile Horizontal Scroll -->
                    <div class="row flex-nowrap overflow-auto d-flex d-lg-flex d-block">
                        <?php
                        // connect to DB
                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                        // fetch all members
                        $sql = "SELECT * FROM members ORDER BY members_id ASC";
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            die("Query Failed: " . mysqli_error($conn));
                        }
                        ?>
                        <?php
                        // Map designations to their correct pages
                        $linkMap = [
                            "president" => "president_home.php",
                            "secretary" => "secretary_home.php",
                            "administrative officer" => "administrative_officer_home.php",
                            "principal" => "principal_home.php"
                        ];
                        ?>
                        <div class="testimonial-slider d-lg-block owl-carousel owl-theme">
                            <?php if (mysqli_num_rows($result) > 0) { ?>
                                <?php while ($row = mysqli_fetch_assoc($result)) {
                                    // normalize designation (lowercase + trim spaces)
                                    $designationKey = strtolower(trim($row['designation']));
                                    ?>
                                    <div class="team-item">
                                        <a href="<?php echo isset($linkMap[$designationKey]) ? $linkMap[$designationKey] : '#'; ?>"
                                            class="w-100">
                                            <div class="team-img">
                                                <?php if (!empty($row['img'])) { ?>
                                                    <img src="csmss_poly_dashboard/assets/img/home/members/<?php echo htmlspecialchars($row['img']); ?>"
                                                        alt="<?php echo htmlspecialchars($row['title']); ?>" class="w-100"
                                                        style="object-fit:cover; height:290px;">
                                                <?php } else { ?>
                                                    <img src="csmss_poly_dashboard/assets/img/home/members/no-image.jpg"
                                                        alt="No Image" class="w-100" style="object-fit:cover; height:290px;">
                                                <?php } ?>
                                            </div>
                                        </a>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5>
                                                    <a
                                                        href="<?php echo isset($linkMap[$designationKey]) ? $linkMap[$designationKey] : '#'; ?>">
                                                        <?php echo htmlspecialchars($row['title']); ?>
                                                    </a>
                                                </h5>
                                                <span><?php echo htmlspecialchars($row['designation']); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } else { ?>
                                <p class="text-center text-muted">No Members Found</p>
                            <?php } ?>
                        </div>
                    </div>
        </section>
        <!-- member section end  -->
        <!-- partner area -->
        <section class="partner">
            <div class="partner-area bg pt-50 pb-50">
                <div class="container">
                    <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                        <!-- <a href="https://msbte.ac.in/"> <img src="assets/img/partner/msbte.png" alt="thumb"></a> -->


                        <?php
                        include '../csmss-polytechnic-website/csmss_poly_dashboard/common/dbcon.php';

                        $query = "SELECT * FROM partner";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($partner = mysqli_fetch_assoc($result)) {
                                ?>
                                <a href="<?= htmlspecialchars($partner['link']) ?>" target="_blank">
                                    <img src="csmss_poly_dashboard/assets/img/home/partner/<?= htmlspecialchars($partner['image']) ?>"
                                        alt="<?= htmlspecialchars($partner['title']) ?>" height="120" width="150">
                                </a>
                                <?php
                            }
                        } else {
                            echo "<p>No Partners Found</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- partner area end -->

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

    <script>
        window.onload = function () {
            const navEntries = performance.getEntriesByType("navigation");
            // Method 1: Chrome/modern browsers
            const isReload = navEntries.length && navEntries[0].type === "reload";
            // Method 2: fallback for older browsers
            const isReloadFallback = window.performance && performance.navigation.type === 1;
            if (isReload || isReloadFallback) {
                document.getElementById("popupOverlay").style.display = "block";
            }
        };
        // Close popup
        function closeForm() {
            document.getElementById("popupOverlay").style.display = "none";
        }
        // Optional: Close when clicking outside the form
        window.onclick = function (event) {
            const overlay = document.getElementById("popupOverlay");
            if (event.target === overlay) {
                closeForm();
            }
        };
    </script>
</body>


<!-- Mirrored from live.themewild.com/eduka/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:29:42 GMT -->

</html>