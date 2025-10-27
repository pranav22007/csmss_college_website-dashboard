<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from live.themewild.com/eduka/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:32 GMT -->
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
        <div class="site-breadcrumb" style="background: url(assets/img/contact_2/csmss.png)">
            <div class="container">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->
        <!-- contact area -->
        <div class="contact-area py-120">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-map-location-dot"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Office Address</h5>
                                    <p>Kanchanwadi, Chhatrapati Sambhajinagar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-phone-volume"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Call Us</h5>
                                    <p>0240-2646402</p>
                                    <p> 0240-2646405</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-envelopes"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Email Us</h5>
                                    <p>tpo@csmsspoly.com</p>
                                    <p>principal@csmsspoly.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-alarm-clock"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Open Time</h5>
                                    <p>Mon - Sat (09.30AM - 06.00PM)</p>
                                    <p>Sunday   Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="contact-img">
                                <img src="assets/img/contact_2/chhatrapati.png" alt=""  >
                            </div>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                    <h2>Get In Touch</h2>
                                    <p>To contact CSMSS Polytechnic College, you can fill the following information. </p>
                                </div>


                                <!-- action="https://live.themewild.com/eduka/assets/php/contact.php"  -->
                                <form method="post" id="contact-form" name="csmss_sheet">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Your Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="5" class="form-control"
                                            placeholder="Write Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="theme-btn" name="submit">Send
                                        Message <i class="far fa-paper-plane"></i></button>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-messege text-success"></div>
                                    </div>
                                </form>
                                <!-- script to add Data in sheet  -->
    <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbw3Rv3aH5_nQXG_co-cbf5po7zuJ5UoviSwqqYhKllMvcExOegvfycmYnzzVp0DWvWE/exec'
            const form = document.forms['csmss_sheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
         </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact area -->
        <!-- map -->
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.225503515255!2d75.28576517522454!3d19.830409181535803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb98e33436a7d3%3A0xff6fb4310e86be35!2sCSMSS%20College%20of%20Polytechnic!5e0!3m2!1sen!2sin!4v1753940750143!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>

    <!-- script to add Data in sheet  -->
    <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbw3Gdbpn3NbeHvx81KsDeZXIgw0Fim4V2hpfuPDc8CCZldtjX4IDeUqOfLvcMtHpMQs/exec'
            const form = document.forms['csmss_sheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
         </script>


   

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
<!-- Mirrored from live.themewild.com/eduka/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:34 GMT -->
</html>