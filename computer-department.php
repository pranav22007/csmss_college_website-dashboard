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




        <!-- department-single -->
        <div class="department-single-area py-5">
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-3">
                            <div class="department-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">Department</h4>
                                    <div class="category-list">
                                        <a href="#Computer Engineering"><i class="far fa-long-arrow-right"></i>Introduction</a>
                                        <a href="#Admission Intake Capacity : 60"><i class="far fa-long-arrow-right"></i>Admission Intake Capacity</a>
                                        <a href="#hod_message"><i class="far fa-long-arrow-right"></i>HOD Message</a>
                                        <a href="#headingOne"><i class="far fa-long-arrow-right"></i>Toppers</a>
                                        <a href="#headingTwo"><i class="far fa-long-arrow-right"></i>Student's Achievement</a>
                                        <a href="#headingThird"><i class="far fa-long-arrow-right"></i>List Of Laboratories</a>
                                        <a href="#headingFourth"><i class="far fa-long-arrow-right"></i> Our Alumni</a>
                                        <a href="#headingFifth"><i class="far fa-long-arrow-right"></i>Department Mou's</a>
                                        <a href="#headingSixth"><i class="far fa-long-arrow-right"></i>Department Project</a>
                                        <a href="#headingSeventh"><i class="far fa-long-arrow-right"></i>Department Advisory Board (DAB)</a>
                                        <a href="#headingEight"><i class="far fa-long-arrow-right"></i>Programmee Assessment Committee (PAC)</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-9 overflow-y:scroll" style="overflow-y: scroll; height: 800px; scrollbar-width: none; -ms-overflow-style: none;">
                            <div class="department-details">
                                <div class="department-details-img mb-30">
                                    <!-- Carousel Start -->
                                    <div id="departmentCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php
                                            error_reporting(E_ALL);
                                            ini_set('display_errors', 1);
                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';

                                            $sql = "SELECT * FROM department_slider WHERE department='Computer Engineering' ORDER BY id DESC";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                $isActive = true;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    if (!empty($row['image'])) {
                                                        $imagePath = "csmss_poly_dashboard/assets/img/" . $row['image'];
                                                    } else {
                                                        $imagePath = "https://via.placeholder.com/1200x500?text=No+Image";
                                                    }
                                            ?>
                                                    <div class="carousel-item <?= $isActive ? 'active' : '' ?>">
                                                        <!-- Image -->
                                                        <img src="<?= $imagePath ?>"
                                                            class="d-block w-100"
                                                            style="height:500px; object-fit:cover;"
                                                            alt="<?= htmlspecialchars($row['image']); ?>">
                                                    </div>
                                                <?php
                                                    $isActive = false;
                                                }
                                            } else { ?>
                                                <div class="carousel-item active">
                                                    <img src="https://via.placeholder.com/1200x500?text=No+Departments+Available"
                                                        class="d-block w-100"
                                                        style="height:500px; object-fit:cover;"
                                                        alt="No Data">
                                                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                                                        <h5>No Department Sliders Available</h5>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <!-- Controls -->
                                        <button class="carousel-control-prev" type="button" data-bs-target="#departmentCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#departmentCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </button>
                                    </div>
                                    <!-- Carousel End -->
                                </div>

                                <div id="Computer Engineering">
                                    <div class="department-details">
                                        <div class="mb-4">
                                            <h3 class="mb-20">Computer Engineering</h3>
                                            <p class="mb-20" style="text-align: justify;">
                                                Computer Engineering department was established in 2009. It has great scope for people as it provides employment and has the capability to generate huge foreign exchange in flow for India. India exports softwares and services to approximately 95 countries in the world. By outsourcing to India, many countries get benefits in terms of labour costs and business processes. Also, the Indian companies are broadening the range of services being provided to the customers, which is resulting in more off shoring. Talent acquisition, development and retention initiatives taken by the companies have brought down the employee attrition rates, thereby providing more stability to the employees and increasing their job commitment. </p>
                                            <p class="mb-20" style="text-align: justify;"> Computer software engineers apply the principles of computer science and mathematical analysis to the design, development, testing, and evaluation of the software and systems that make computers work.Software engineers can be involved in the design and development of many types of software, including computer games, word processing and business applications, operating systems and network distribution, and compilers, which convert programs to machine language for execution on a computer.</p>
                                        </div>
                                    </div>
                                    <!-- img in civil page -->
                                    <!-- <div class="row">
                                        <div class="col-md-6 mb-20">
                                            <img src="assets/img/department/01.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <img src="assets/img/department/02.jpg" alt="">
                                        </div>
                                    </div> -->
                                    <!-- Department Vision start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Department Vision</h3>
                                        <p>“To provide skilled technical professionals in Computer Engineering for fulfilling needs of industry and society.”.</p>
                                    </div>
                                    <!-- Department Vision end -->
                                    <!-- Department Mission start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Department Mission</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i> Inculcate the fundamental and practical skills in the students through effective teaching-learning process</li>
                                            <li><i class="far fa-check"></i>Create skilled Technical professionals to enhance innovations, problem solving, team-spirit and ethical responsibilities</li>
                                            <li><i class="far fa-check"></i> Training faculty and students in order to meet the challenges of socio-technical environment through industry and institute</li>
                                        </ul>
                                    </div>
                                    <!-- Department Mission end -->
                                    <!-- Future Plan Start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Future Plan</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i>Enhance Industry Institution Interaction</li>
                                            <li><i class="far fa-check"></i>To develop useful software’s through Software Consultancy Cell for funding </li>
                                            <li><i class="far fa-check"></i>To start various activities under Research & Development Cell </li>
                                            <li><i class="far fa-check"></i>To improve placement ratio with the help of Alumni </li>
                                            <li><i class="far fa-check"></i>Faculty Development Programmee </li>
                                            <li><i class="far fa-check"></i>To Organize State/National level paper presentation & project competition </li>
                                        </ul>
                                    </div>
                                    <!-- Future Plan end -->
                                    <!-- PEO's start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Educational Objectives(PEO's)</h3>
                                        <p><b class="text-dark">PEO 1:</b> Provide socially responsible, environment friendly solutions to Computer engineeringrelated broad-based problems adapting professional ethics.</p>
                                        <p> <b class="text-dark">PEO 2:</b> Adapt state-of-the-art Computer engineering broad-based technologies to work in multidisciplinarywork environments.</p>
                                        <p><b class="text-dark">PEO 3:</b> Solve broad-based problems individually and as a team member communicating effectivelyin the world of work.</p>
                                    </div>
                                    <!--PEO's end  -->
                                    <!-- PSO start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Specific Outcomes(PSO's)</h3>
                                        <p><b class="text-dark">PSO1: </b> Computer Software and Hardware Usage: Use state-of-the-art technologies for operation and application of Civil Engineering software and Equipment.</p>
                                        <p><b class="text-dark">PSO2:</b> Computer Engineering Maintenance: Maintain civil engineering related infrastructure and instruments.</p>
                                    </div>
                                    <!-- PSO's end -->
                                    <!-- PO's start  -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Outcome(PO's)</h3>
                                        <p><b class="text-dark">PO1:</b> Basic and Discipline specific knowledge: Apply knowledge of basic mathematics, science and engineering fundamentals and engineering specialization to solve the engineering problems.
                                        <p>
                                        <p><b class="text-dark">PO2:</b> Problem analysis: Identify and analyze well-defined engineering problems using codified standard methods.</p>
                                        <p><b class="text-dark">PO3:</b> Design/ development of solutions: Design solutions for well-defined technical problems and assist with the design of systems components or processes to meet specified needs.
                                        <p>
                                        <p><b class="text-dark">PO4:</b> Engineering Tools, Experimentation and Testing: Apply modern engineering tools and appropriate technique to conduct standard tests and measurements.</p>
                                        <p><b class="text-dark">PO5:</b> Engineering practices for society, sustainability and environment:</b> Apply appropriate technology in context of society, sustainability, environment and ethical practices.</p>
                                        <p><b class="text-dark">PO6:</b> Project Management:</b> Use engineering management principles individually, as a team member or a leader to manage projects and effectively communicate about well-defined engineering activities.</p>
                                        <p><b class="text-dark">PO7:</b> Life-long learning: Ability to analyze individual needs and engage in updating in the context of technological changes.</p>
                                    </div>
                                    <!-- PO's end -->
                                </div>
                                <div id="Admission Intake Capacity : 60">
                                    <h2 class="mb-3 ms-4 ps-1 text-black">Admission Intake Capacity : 60</h2>

                                    <!-- Accodian start -->
                                    <div class="container my-5" id="hod_message">
                                        <div class="accordion" id="hodAccordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingintake">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        HOD Message
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingintake"
                                                    data-bs-parent="#hodAccordion">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                <center><img class="sticky" src="assets\img\department\HODCO.jpeg" alt="HOD Image" width="150" height="200" style="border-radius:0px;"></center>
                                                                <center><b>Mrs. R. S. Pophale</b><br><i>HOD</i></center>
                                                            </div>
                                                            <div class="col-lg-8 col-md-12">
                                                                <p style="text-align: justify">I take the privilege to welcome you all in the Department of Computer Engineering of CSMSS College of Polytechnic, Chh.Sambhajinagar. The department has been conferred ‘Excellent’ grade by MSBTE, Mumbai, is full-fledged and actively engaged in teaching and learning activities in order to cater the needs of today’s changing Engineering world. The department has all modern equipments, facilities, infrastructure, and spacious laboratories, staff room, and Virtual Learning Centre that is required for teaching and learning activities. The department seeks to achieveexcellence in education and serve the society and industry.</p>
                                                            </div>
                                                            <p style="text-align: justify">The Departmental faculty members implement innovative teaching and conduct the best practices to achieve academic excellence. It is our objective to prepare the students to be successful in Computer Engineering practice and to be able to pursue advanced studies in Information Technology and Computer Engineering, on a competitive universal basis.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Section Start -->

                                    <!--faculty-details-->

                                    <!--first-table-->
                                    <h3 class="mb-4 ps-1 text-black mt-4">Faculty Details</h3>
                                    <?php
                                    error_reporting(E_ALL);
                                    ini_set('display_errors', 1);
                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';

                                    $sql = "SELECT * FROM faculty_details WHERE department LIKE 'Computer%' ORDER BY id DESC";
                                    $result = mysqli_query($conn, $sql);
                                    ?>
                                    <div class="table-responsive" style="font-size: 14px;">
                                        <table class=" table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>

                                                        Sr.No.

                                                    </th>
                                                    <th>

                                                        Name

                                                    </th>
                                                    <th>

                                                        Qualification <br>

                                                    </th>
                                                    <th>

                                                        Designation <br>

                                                    </th>
                                                    <th>

                                                        Profile <br>

                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                        <tr>
                                                            <td>
                                                                <a href="#"><?= htmlspecialchars($row['id']); ?></a>
                                                            </td>
                                                            <td><a href="#"><?= htmlspecialchars($row['name']); ?></a></td>
                                                            <td>
                                                                <a href="#"><?= htmlspecialchars($row['qualification']); ?></a>
                                                            </td>
                                                            <td>

                                                                <b><a
                                                                        href="#"><?= htmlspecialchars($row['designation']); ?></a></b>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="assets\pdf\department-pdf\CO-PDF\Pophale Madam.pdf"
                                                                    target="_blank" class="btn text-white" id="view-button">
                                                                    <i class="fa-regular fa-eye text-white"></i> View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                } else { ?>
                                                    <p class="text-center">No events available</p>
                                                <?php }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- first-table-end-->

                                    <!-- Form Section Ends  -->

                                    <!-- Accordin Main Start -->

                                    <!--Accordin section started here-->

                                    <section id="Accordion-section">
                                        <div class="faq-area">

                                            <div class="row">
                                                <div class="col-lg-6 w-100">
                                                    <div class="accordion" id="accordionExample">
                                                        <!--First Accordion Start -->
                                                        <div class="accordion-item p-2 ">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFirst" aria-expanded="true" aria-controls="collapseFirst">
                                                                    TOPPERS
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFirst" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <!--first table started-->
                                                                    <h5 style="margin-bottom: 10px; margin-top:20px"><u>Toppers of FY CO</u></h5>
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM toppers WHERE department='Computer Engineering' AND year = 'First-Year' ORDER BY id DESC";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    ?>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Sr. No.
                                                                                    </th>
                                                                                    <th>
                                                                                        Name of Student
                                                                                    </th>

                                                                                    <th>
                                                                                        Percentage <br />
                                                                                    </th>
                                                                                    <th>
                                                                                        Class Awarded <br />
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php if (mysqli_num_rows($result) > 0) {
                                                                                    while ($row = mysqli_fetch_assoc($result)) {

                                                                                ?>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['id']); ?></a>
                                                                                            </td>
                                                                                            <td><a href="#"><?= htmlspecialchars($row['student_name']); ?></a></td>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['percentage']); ?></a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['class_awarded']); ?></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                <?php
                                                                                    }
                                                                                } else {
                                                                                    echo '<tr><td colspan="4">No toppers found.</td></tr>';
                                                                                }
                                                                                ?>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>

                                                                    <!--first table end-->
                                                                    <!--second table stared-->
                                                                    <h5 style="margin-bottom: 10px; margin-top:20px"><u>Toppers of SY CO</u></h5>
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM toppers WHERE department='Computer Engineering' AND year = 'Second-Year' ORDER BY id DESC";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    ?>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Sr. No.
                                                                                    </th>
                                                                                    <th>
                                                                                        Name of Student
                                                                                    </th>

                                                                                    <th>
                                                                                        Percentage <br />
                                                                                    </th>
                                                                                    <th>
                                                                                        Class Awarded <br />
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php if (mysqli_num_rows($result) > 0) {
                                                                                    while ($row = mysqli_fetch_assoc($result)) {

                                                                                ?>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['id']); ?></a>
                                                                                            </td>
                                                                                            <td><a href="#"><?= htmlspecialchars($row['student_name']); ?></a></td>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['percentage']); ?></a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['class_awarded']); ?></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                <?php
                                                                                    }
                                                                                } else {
                                                                                    echo '<tr><td colspan="4">No toppers found.</td></tr>';
                                                                                }
                                                                                ?>
                                                                            </tbody>
                                                                        </table>


                                                                    </div>
                                                                    <!--second table end-->
                                                                    <!--third table started-->
                                                                    <h5 style="margin-bottom: 10px; margin-top:20px"><u>Toppers of TY CO</u></h5>
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM toppers WHERE department='Computer Engineering' AND year = 'Third-Year' ORDER BY id DESC";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    ?>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Sr. No.
                                                                                    </th>
                                                                                    <th>
                                                                                        Name of Student
                                                                                    </th>

                                                                                    <th>
                                                                                        Percentage <br />
                                                                                    </th>
                                                                                    <th>
                                                                                        Class Awarded <br />
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php if (mysqli_num_rows($result) > 0) {
                                                                                    while ($row = mysqli_fetch_assoc($result)) {

                                                                                ?>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['id']); ?></a>
                                                                                            </td>
                                                                                            <td><a href="#"><?= htmlspecialchars($row['student_name']); ?></a></td>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['percentage']); ?></a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['class_awarded']); ?></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                <?php
                                                                                    }
                                                                                } else {
                                                                                    echo '<tr><td colspan="4">No toppers found.</td></tr>';
                                                                                }
                                                                                ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!--third table end-->
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--first Accordion end-->

                                                        <!--second Accordion start-->
                                                        <div class="accordion-item p-2">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                    aria-expanded="true" aria-controls="collapseTwo">
                                                                    STUDENTS' ACHIEVEMENT
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                                aria-labelledby="headingTwo"
                                                                data-bs-parent="#accordionExample">


                                                                <div class="accordion-body">
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM student_achievement WHERE department='Computer Engineering' ORDER BY id DESC";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    ?>
                                                                    <!--second table started-->

                                                                    <div class="mt-3 table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Sr. No.
                                                                                    </th>
                                                                                    <th>
                                                                                        Name of Event
                                                                                    </th>
                                                                                    <th>
                                                                                        Year <br />
                                                                                    </th>
                                                                                    <th>
                                                                                        Organized <br />
                                                                                    </th>
                                                                                    <th>
                                                                                        Name of Student <br />
                                                                                    </th>
                                                                                    <th>
                                                                                        Remark
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php

                                                                                if (mysqli_num_rows($result) > 0) {
                                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                                ?>

                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['id']); ?></a>
                                                                                            </td>

                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['name_of_event']); ?></a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['year']); ?></a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['organized']); ?></a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['name_of_student']); ?></a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['remark']); ?></a>
                                                                                            </td>

                                                                                        </tr>
                                                                                <?php }
                                                                                } else {
                                                                                    echo '<tr><td colspan="4">NO data found.</td></tr>';
                                                                                }
                                                                                ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!--third table end-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--second Accordion end-->


                                                        <!--Third Accordion started-->

                                                        <div class="accordion-item p-2 ">
                                                            <h2 class="accordion-header" id="headingThird">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThird" aria-expanded="true" aria-controls="collapseThird">
                                                                    LIST OF LABORATORIES
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThird" class="accordion-collapse collapse" aria-labelledby="headingThird"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM list_data WHERE department LIKE 'Computer%' ORDER BY id DESC";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    ?>
                                                                    <div class="table-responsive">
                                                                        <table class=" table table-bordered table-hover">

                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Sr. No.
                                                                                    </th>
                                                                                    <th>
                                                                                        Name of Laboratories
                                                                                    </th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php if (mysqli_num_rows($result) > 0) {
                                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                                ?>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['id']); ?></a>
                                                                                            </td>
                                                                                            <td> <a href="#"><?= htmlspecialchars($row['name_of_laboratries']); ?></a></td>
                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['cost']); ?></a>
                                                                                            </td>

                                                                                        </tr>

                                                                                    <?php }
                                                                                } else { ?>
                                                                                    <p class="text-center">No events available</p>
                                                                                <?php } ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Third Accordion end-->

                                                        <!--fourth Accordion Start-->
                                                        <div class=" accordion-item p-2">
                                                            <h2 class="accordion-header" id="headingFourth">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFourth" aria-expanded="true"
                                                                    aria-controls="collapseFourth">
                                                                    OUR ALUMNI
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFourth" class="accordion-collapse collapse"
                                                                aria-labelledby="headingFourth"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <!--Fourth table started-->
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM our_alumni WHERE department LIKE 'Computer%' ORDER BY id DESC";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    ?>
                                                                    <div class="table-responsive">
                                                                        <table class=" table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr style="padding-bottom: 10px;">
                                                                                    <th>
                                                                                        Sr. No.
                                                                                    </th>
                                                                                    <th>
                                                                                        Name of Student
                                                                                    </th>
                                                                                    <th>
                                                                                        Year of Passing
                                                                                    </th>
                                                                                    <th>
                                                                                        Achievement Details
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php if (mysqli_num_rows($result) > 0) {
                                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                                ?>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <a href="#">
                                                                                                    <?= htmlspecialchars($row['id']); ?>
                                                                                                </a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#">
                                                                                                    <?= htmlspecialchars($row['sname']); ?>
                                                                                                </a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#">
                                                                                                    <?= htmlspecialchars($row['ypassing']); ?>
                                                                                                </a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#">
                                                                                                    <?= htmlspecialchars($row['achievement_d']); ?>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    <?php }
                                                                                } else { ?>
                                                                                    <p class="text-center">No events available</p>
                                                                                <?php }
                                                                                ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Fourth Accordion end-->

                                                        <!-- Fifth Accordion Start -->
                                                        <div class="accordion-item p-2 ">
                                                            <h2 class="accordion-header" id="headingFifth">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth">
                                                                    DEPARTMENT MOU's
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM mous_data WHERE department='Computer Engineering' ORDER BY id DESC";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    ?>
                                                                    <div class="table-responsive">
                                                                        <table class=" table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Sr. No.</th>
                                                                                    <th>Name of Company</th>
                                                                                    <th>From</th>
                                                                                    <th>Upto</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php if (mysqli_num_rows($result) > 0) {
                                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                                ?>
                                                                                        <tr>
                                                                                            <td><a href="#"><?= htmlspecialchars($row['id']); ?></a></td>
                                                                                            <td><a href="#"><?= htmlspecialchars($row['name_of_company']); ?></a></td>
                                                                                            <td><a href="#"><?= htmlspecialchars($row['from_datem']); ?></a></td>
                                                                                            <td><a href="#"><?= htmlspecialchars($row['upto']); ?></a></td>
                                                                                        </tr>
                                                                                <?php
                                                                                    }
                                                                                } else {
                                                                                    echo '<tr><td colspan="4">No toppers found.</td></tr>';
                                                                                }
                                                                                ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--Fifth Accordion end -->

                                                        <!-- Sixth Accordion start -->


                                                        <div class="accordion-item p-2 ">
                                                            <h2 class="accordion-header" id="headingSixth">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseSixth" aria-expanded="true" aria-controls="collapseSixth">
                                                                    DEPARTMENT PROJECTS
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSixth" class="accordion-collapse collapse" aria-labelledby="headingSixth"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-md-12">
                                                                        <div class="heading-content">
                                                                        </div>


                                                                        <p class="mt-2"><strong><u>A.Y. 2023-24</u></strong></p>
                                                                        <ul>
                                                                            <li style="list-style-type: disc;">Child Health Development Application</li>
                                                                            <li style="list-style-type: disc;">Face Attendance System</li>
                                                                            <li style="list-style-type: disc;">Movement Capture and Learning</li>
                                                                            <li style="list-style-type: disc;">Novels sites</li>
                                                                            <li style="list-style-type: disc;">Farmer Web Based Application</li>
                                                                            <li style="list-style-type: disc;">Develop The Application for Beauty Parlour</li>
                                                                            <li style="list-style-type: disc;">College Predictor</li>
                                                                            <li style="list-style-type: disc;">Sponsered Project</li>
                                                                            <li style="list-style-type: disc;">Medical Website</li>
                                                                            <li style="list-style-type: disc;">Nearby PG Website</li>
                                                                            <li style="list-style-type: disc;">Home Services Application</li>
                                                                            <li style="list-style-type: disc;">Puppies Home</li>
                                                                            <li style="list-style-type: disc;">Academia Hub</li>
                                                                            <li style="list-style-type: disc;">She Safe App</li>
                                                                            <li style="list-style-type: disc;">Sponsored Online Mobile and Repair Shop(Mauli Mobile Shop)</li>
                                                                            <li style="list-style-type: disc;">E-Grampanchayat</li>
                                                                            <li style="list-style-type: disc;">Stationary Store</li>
                                                                            <li style="list-style-type: disc;">Three Tier Verification of Scholarship for Home State Student</li>
                                                                            <li style="list-style-type: disc;">Heart Disease Detection App</li>
                                                                            <li style="list-style-type: disc;">Construction Estimator</li>
                                                                            <li style="list-style-type: disc;">Paretech Website</li>
                                                                            <li style="list-style-type: disc;">Daily Expence Tracker System</li>
                                                                            <li style="list-style-type: disc;">Jwellery Shop</li>
                                                                            <li style="list-style-type: disc;">Perfume Shop</li>
                                                                            <li style="list-style-type: disc;">Buy Book Website</li>

                                                                        </ul>

                                                                        <p><strong><u>A.Y. 2022-23</u></strong></p>
                                                                        <ul>
                                                                            <li style="list-style-type: disc;">"Go Green" Plants Shopping Website</li>
                                                                            <li style="list-style-type: disc;">Go for Pure Oil</li>
                                                                            <li style="list-style-type: disc;">Hospital Management System</li>
                                                                            <li style="list-style-type: disc;">School Management System</li>
                                                                            <li style="list-style-type: disc;">Wedding Management System</li>
                                                                            <li style="list-style-type: disc;">Tourism Management System</li>
                                                                            <li style="list-style-type: disc;">E farming System</li>
                                                                            <li style="list-style-type: disc;">vehicle plate Detection System</li>
                                                                            <li style="list-style-type: disc;">Online Optical shop</li>
                                                                            <li style="list-style-type: disc;">Restaurant Management System</li>
                                                                            <li style="list-style-type: disc;">Ayuevedic and general product Website</li>
                                                                            <li style="list-style-type: disc;">Coffee Shop Management System</li>
                                                                            <li style="list-style-type: disc;">BUS Pass Management system</li>
                                                                            <li style="list-style-type: disc;">Car Selling App</li>
                                                                            <li style="list-style-type: disc;">E-commerce shoes store</li>
                                                                            <li style="list-style-type: disc;">Café's Management Using QR</li>
                                                                            <li style="list-style-type: disc;">E Health Care Online Consultation</li>
                                                                            <li style="list-style-type: disc;">Online Jwellery Shop</li>
                                                                            <li style="list-style-type: disc;">Fingerprint Based ATM</li>
                                                                            <li style="list-style-type: disc;">Audio Book Generator</li>
                                                                            <li style="list-style-type: disc;">Accounting software</li>
                                                                            <li style="list-style-type: disc;">Student result Management System</li>
                                                                            <li style="list-style-type: disc;">obstacle Avoiding Robot car</li>
                                                                            <li style="list-style-type: disc;">Online Banquet Booking system</li>
                                                                            <li style="list-style-type: disc;">Valley Game</li>
                                                                            <li style="list-style-type: disc;">Weather Forcasting</li>
                                                                            <li style="list-style-type: disc;">GYM management system</li>
                                                                            <li style="list-style-type: disc;">Polychamp MSBTE resource locator</li>



                                                                        </ul>

                                                                        <p><strong><u>A.Y. 2021-22</u></strong></p>
                                                                        <ul>
                                                                            <li style="list-style-type: disc;">Online Student Exam Portal</li>
                                                                            <li style="list-style-type: disc;">Stock Price Prediction</li>
                                                                            <li style="list-style-type: disc;"> Online Ayurvedic Medicine Website</li>
                                                                            <li style="list-style-type: disc;">Online Chatting App</li>
                                                                            <li style="list-style-type: disc;"> E-Submission System</li>
                                                                            <li style="list-style-type: disc;">Voice Recognition System</li>
                                                                            <li style="list-style-type: disc;">Farming Assistance Web Service</li>
                                                                            <li style="list-style-type: disc;"> Weather Forecasting For Farming</li>
                                                                            <li style="list-style-type: disc;">Application for Historical Places in Aurangabad</li>
                                                                            <li style="list-style-type: disc;">Pedometer</li>
                                                                            <li style="list-style-type: disc;">Daily Expense Tracker System</li>
                                                                            <li style="list-style-type: disc;">Blood Donation System</li>
                                                                            <li style="list-style-type: disc;"> Quiz Application</li>
                                                                            <li style="list-style-type: disc;">Shopping Web Application</li>
                                                                            <li style="list-style-type: disc;">Battery Operator Car using Android Phone</li>
                                                                            <li style="list-style-type: disc;">Criminal Face Detection System</li>
                                                                            <li style="list-style-type: disc;">Online food ordering Website</li>
                                                                            <li style="list-style-type: disc;">Alumni College Website</li>
                                                                            <li style="list-style-type: disc;">Crime Rate Prediction</li>

                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <!-- Sixth Accordian end -->

                                                        <!-- Seventh Accordion Start -->
                                                        <div class="accordion-item p-2 ">
                                                            <h2 class="accordion-header" id="headingSeventh">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseSeventh" aria-expanded="true" aria-controls="collapseSeventh">
                                                                    DEPARTMENT ADVISORY BOARD (DAB)
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSeventh" class="accordion-collapse collapse" aria-labelledby="headingSeventh"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM department_advisory WHERE department='Computer Engineering' ORDER BY id DESC";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    ?>
                                                                    <div class="table-responsive">
                                                                        <table class=" table table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Sr. No.
                                                                                    </th>
                                                                                    <th>
                                                                                        Name of the Committee Member
                                                                                    </th>
                                                                                    <th>
                                                                                        Details
                                                                                    </th>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                if (mysqli_num_rows($result) > 0) {
                                                                                    $sr = 1;
                                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                                ?>
                                                                                        <tr>
                                                                                            <td><?= htmlspecialchars($row['id']); ?></td>
                                                                                            <td><?= htmlspecialchars($row['name_of_the_committee_member']); ?></td>
                                                                                            <td><?= htmlspecialchars($row['details']); ?></td>
                                                                                        </tr>
                                                                                    <?php
                                                                                    }
                                                                                } else {
                                                                                    ?>
                                                                                    <tr>
                                                                                        <td colspan="3" class="text-center">No events available</td>
                                                                                    </tr>
                                                                                <?php } ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Seventh Accordion end -->


                                                        <!-- Eight Accordion Start -->
                                                        <!-- computer start -->
                                                        <div class="accordion-item p-2 ">
                                                            <h2 class="accordion-header" id="headingEight">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                                                    PROGRAMME ASSESSMENT COMMITTEE (PAC)
                                                                </button>
                                                            </h2>
                                                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM program WHERE choose_department LIKE 'Computer%' ORDER BY id DESC";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    ?>
                                                                    <div class="table-responsive">
                                                                        <table class=" table table-bordered table-hover">

                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Sr. No.
                                                                                    </th>
                                                                                    <th>
                                                                                        Name of Faculty
                                                                                    </th>
                                                                                    <th>
                                                                                        Representation <br>
                                                                                    </th>
                                                                                    <th>
                                                                                        Designation <br>
                                                                                    </th>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php if (mysqli_num_rows($result) > 0) {
                                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                                ?>
                                                                                        <tr>
                                                                                            <td> <a href="#"><?= htmlspecialchars($row['id']); ?></a> </td>

                                                                                            <td> <a href="#"><?= htmlspecialchars($row['name_of_faculty']); ?></a></td>
                                                                                            <td> <a href="#"><?= htmlspecialchars($row['representation']); ?></a></td>

                                                                                            <td>
                                                                                                <a href="#"><?= htmlspecialchars($row['designation']); ?></a>
                                                                                            </td>
                                                                                        </tr>

                                                                                    <?php }
                                                                                } else { ?>
                                                                                    <p class="text-center">No events available</p>
                                                                                <?php } ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- computer end -->
                                                        <!--Eight Accordion end -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </section>
                                <!--Accordin section End here-->

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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get all links starting with #heading (accordion header IDs)
            const accordionLinks = document.querySelectorAll('a[href^="#heading"]');
            accordionLinks.forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const headerId = this.getAttribute("href").substring(1); // remove '#'
                    const header = document.getElementById(headerId);
                    if (!header) return;
                    // Scroll to the header
                    header.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                    // Find the button inside the header (accordion toggle)
                    const toggleButton = header.querySelector("button[data-bs-toggle='collapse']");
                    if (!toggleButton) return;
                    const targetSelector = toggleButton.getAttribute("data-bs-target");
                    if (!targetSelector) return;
                    const collapseEl = document.querySelector(targetSelector);
                    if (!collapseEl) return;
                    // Use Bootstrap Collapse API to show the section
                    const bsCollapse = bootstrap.Collapse.getOrCreateInstance(collapseEl);
                    bsCollapse.show();
                });
            });
        });
    </script>
</body>


<!-- Mirrored from live.themewild.com/eduka/academic-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:32 GMT -->

</html>