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
                                    <h4 class="widget-title">Departments</h4>
                                    <div class="category-list">
                                        <a href="#introduction"><i class="far fa-long-arrow-right"></i>Introduction</a>
                                        <a href="#intake"><i class="far fa-long-arrow-right"></i>Admission Intake Capacity</a>
                                        <a href="#hod_message"><i class="far fa-long-arrow-right"></i>HOD Message</a>
                                        <a href="#faculty"><i class="far fa-long-arrow-right"></i>Faculty Details</a>
                                        <a href="#headingOne"><i class="far fa-long-arrow-right"></i>Toppers</a>
                                        <a href="#headingTwo"><i class="far fa-long-arrow-right"></i>Student's achievements</a>
                                        <a href="#headingThree"><i class="far fa-long-arrow-right"></i>Department Advisory Board (DAB)</a>
                                        <a href="#headingFourth"><i class="far fa-long-arrow-right"></i>Programme Assessment Committee (PAC)</a>
                                        <a href="#headingFifth"><i class="far fa-long-arrow-right"></i> List of Laborotories</a>
                                        <a href="#headingSixth"><i class="far fa-long-arrow-right"></i>Our Alumni</a>
                                        <a href="#headingseventh"><i class="far fa-long-arrow-right"></i>Student's Association (CESA)-2022-23</a>
                                        <a href="#headingeight"><i class="far fa-long-arrow-right"></i>Department Mou's</a>
                                        <a href="#headingnine"><i class="far fa-long-arrow-right"></i>Department Project</a>
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

                                            $sql = "SELECT * FROM department_slider WHERE department='Civil Engineering' ORDER BY id DESC";
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
                                                            style="height:450px; object-fit:cover;"
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


                                    <div class="department-details">
                                        <section id="introduction">
                                            <h3 class="mb-20">Civil Engineering</h3>
                                            <p class="mb-20" style="text-align: justify;">
                                                Civil Engineering is a professional engineering discipline that deals with the construction and design of public and private sector works such as bridges, roads, dams and buildings. The Department of Civil Engineering established in the year 2009.The department runs three year full time Diploma course in Civil Engineering offered by Maharashtra state Board of Technical Education, Mumbai.
                                                The department consists of full equipped labs an well maintained instruments. </p>
                                            <p class="mb-20" style="text-align: justify;">The department is fulfilled with highly qualified and experienced faculties and students are intelligent, hardworking and disciplined; results in outstanding results at state level. I am really proud of them.

                                                <!-- img in civil page -->
                                                <!-- <div class="row">
                                        <div class="col-md-6 mb-20">
                                            <img src="assets/img/department/01.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <img src="assets/img/department/02.jpg" alt="">
                                        </div>
                                    </div> -->
                                            <div class="mb-4">
                                                <p class="mb-20" style="text-align: justify;">
                                                    Civil engineers can find job in Government sector; private and public sector industries, research and teaching institutions etc. job opportunities for civil engineers are expected to increase as fast as the average for all jobs, although the construction industry is vulnerable to fluctuations in the economy. Civil engineers will always be needed to maintain and repair existing facilities and structures and to construct new ones. In civil engineering one can look for jobs in road projects, building work, consultancy firms, quality testing laboratories or housing societies. The experts say there is a high demand for experienced civil engineers in developed countries.
                                                </p>
                                            </div>
                                            <!-- Department Vision start -->
                                            <div class="mb-4">
                                                <h3 class="mb-3">Department Vision</h3>
                                                <p>"To become a leading department that provides civil engineers with technical competency to meet the requirements of industry and society"</p>
                                            </div>
                                            <!-- Department Vision end -->
                                            <!-- Department Mission start -->
                                            <div class="mb-4">
                                                <h3 class="mb-3">Department Mission</h3>
                                                <ul class="department-single-list">
                                                    <li><i class="far fa-check"></i>Develop knowledge and skills in civil engineering discipline through advanced teaching learning process</li>
                                                    <li><i class="far fa-check"></i>To provide quality education which helps to fulfill the needs of industry through academics</li>
                                                    <li><i class="far fa-check"></i>Inculcate ethical values among the students as civil engineers with social commitment
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Department Mission end -->
                                            <!-- Future Plan Start -->
                                            <div class="mb-4">
                                                <h3 class="mb-3">Future Plan</h3>
                                                <ul class="department-single-list">
                                                    <li><i class="far fa-check"></i>To motivate faculty for industry interaction with obiectives to get sponsored projects and placement of students</li>
                                                    <li><i class="far fa-check"></i>To encourage and motivate the students for competitive exams like MPSC</li>
                                                    <li><i class="far fa-check"></i>To increase the consultancy in Testing of materials, raw water as well as Waste water for construction and agricultural use </li>
                                                    <li><i class="far fa-check"></i>To sign with Industries to get industry sponsored Projects and internship, Training of students</li>
                                                    <li><i class="far fa-check"></i>To start Project Management Consultancy</li>
                                                </ul>
                                            </div>
                                            <!-- Future Plan Start -->
                                            <!-- PEO's start -->
                                            <div class="my-4">
                                                <h3 class="mb-3">Program Educational Objectives(PEO's)</h3>
                                                <p><b class="text-dark">PEO 1:</b> Excel in technician diploma programs and to
                                                    succeed in their working/ technical professional through global, rigorous
                                                    education.</p>
                                                <p> <b class="text-dark">PEO 2:</b> Fundamental knowledge of Mathematical,
                                                    scientific and engineering science required to solve engineering problems
                                                    and also to pursue higher studies.</p>
                                                <p><b class="text-dark">PEO 3:</b> Good scientific and engineering breadth so as
                                                    to comprehend, analyzes, design, and create novel products and solutions for
                                                    the real life problems.</p>
                                                <p><b class="text-dark">PEO 4:</b> Inculcate in students professional skills and
                                                    ethics for the benefit of society and profession.</p>
                                            </div>
                                            <!--PEO's end  -->
                                            <!-- PSO start -->
                                            <div class="my-4">
                                                <h3 class="mb-3">Program Specific Outcomes(PSO's)</h3>
                                                <p><b class="text-dark">PSO1:</b> Civil Engineering Software and Equipment
                                                    Usage: Use state-of-the-art technologies for operation and application of
                                                    Civil Engineering software and Equipment.</p>
                                                <p><b class="text-dark">PSO2:</b> Civil Engineering Maintenance: Maintain civil
                                                    engineering related infrastructure and instruments.</p>
                                            </div>
                                            <!-- PSO's end -->
                                            <!-- PO's start  -->
                                            <div class="my-4">
                                                <h3 class="mb-3">Program Outcome(PO's)</h3>
                                                <p><b class="text-dark">PO1:</b> Basic and Discipline specific knowledge: Apply
                                                    knowledge of basic mathematics, science and engineering fundamentals and
                                                    engineering specialization to solve the engineering problems.
                                                <p>
                                                <p><b class="text-dark">PO2:</b> Problem analysis: Identify and analyze
                                                    well-defined engineering problems using codified standard methods.</p>
                                                <p><b class="text-dark">PO3:</b> Design/ development of solutions: Design
                                                    solutions for well-defined technical problems and assist with the design of
                                                    systems components or processes to meet specified needs.
                                                <p>
                                                <p><b class="text-dark">PO4:</b> Engineering Tools, Experimentation and Testing:
                                                    Apply modern engineering tools and appropriate technique to conduct standard
                                                    tests and measurements.</p>
                                                <p><b class="text-dark">PO5:</b> Engineering practices for society,
                                                    sustainability and environment: Apply appropriate technology in context of
                                                    society, sustainability, environment and ethical practices.</p>
                                                <p><b class="text-dark">PO6:</b> Project Management: Use engineering management
                                                    principles individually, as a team member or a leader to manage projects and
                                                    effectively communicate about well-defined engineering activities.</p>
                                                <p><b class="text-dark">PO7:</b> Life-long learning: Ability to analyze
                                                    individual needs and engage in updating in the context of technological
                                                    changes.</p>
                                            </div>
                                            <!-- PO's end -->
                                        </section>
                                    </div>
                                </div>

                                <h3 class="mb-2 ps-1 text-black" id="intake">Admission Intake Capacity : 60</h3>
                                <!-- Accodian start -->
                                <div class="container my-5">
                                    <section id="hod_message">
                                        <div class="accordion" id="hodAccordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingintake">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHOD"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        HOD Message
                                                    </button>
                                                </h2>
                                                <div id="collapseHOD" class="accordion-collapse collapse show" aria-labelledby="headingintake"
                                                    data-bs-parent="#hodAccordion">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                <center><img class="sticky" src="assets/img/department/HODCE.jpeg" alt="HOD Image" width="150" height="200" style="border-radius:0px;"></center>
                                                                <center><b>Mr. M. R. More</b><br><i>HOD</i></center>
                                                            </div>
                                                            <div class="col-lg-8 col-md-12">
                                                                <p style="text-align: justify">I am delighted to extend a warm welcome in the Department of Civil Engineering, CSMSS College of Polytechnic. The department has been established in 2009 with intake capacity of 60 students, has a good tradition of academic achievements and has got ‘Excellent’ grade by MSBTE Mumbai. As the backbone of civilization, Civil Engineering shapes the physical infrastructure around us and responds to the problems of the world that are constantly changing. The job of Civil Engineers is important and broad; ranging from managing water resources, reducing environmental consequences to developing sustainable buildings and transportation systems. with</p>
                                                            </div>
                                                            <p style="text-align: justify"> an aim to developMechanical Engineers to serve the industry and society.</p>
                                                            <p style="text-align: justify">Beyond the classroom, we encourage you to engage with the broader Civil Engineering community. To attend conferences, participate in student organizations and seek out internships and opportunities to gain real-world experience and expand your professional growth.</p>
                                                            <p style="text-align: justify">As a future Civil Engineer, you have the power to shape the world. Whether you're designing resilient infrastructure, promoting sustainability, or improving public health and safety, your contributions will have a lasting impact on society.</p>
                                                            <p style="text-align: justify">I wish you all the best as you embark on this exciting journey.</p>
                                                            <p style="text-align: justify">With warm regards!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Form Section Start -->

                                    <!--faculty-details-->
                                    <section id="faculty">
                                        <h3 class="pt-10 mb-3 mt-3">
                                            Faculty Details
                                        </h3>
                                        
                                        <!--first-table-->
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Sr.No.
                                                        </th>
                                                        <th>
                                                            Particuler
                                                        </th>
                                                        <th>
                                                            A.Y.
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="3">
                                                            01
                                                        </td>
                                                        <td rowspan="3">
                                                            FACULTY DETAILS
                                                        </td>
                                                        <td>
                                                            <a href="assets\pdf\department-pdf\Civil pdf\CEFDAY21_22.pdf">A.Y.
                                                                2021-22</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="assets\pdf\department-pdf\Civil pdf\CEFDAY22_23.pdf">A.Y.
                                                                2022-23</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="assets\pdf\department-pdf\Civil pdf\CEFDAY23_24.pdf">A.Y.
                                                                2023-24</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--first-table-end-->
                                        <!--Second table-->
                                        <?php
                                        error_reporting(E_ALL);
                                        ini_set('display_errors', 1);
                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                        $sql = "SELECT * FROM faculty_details WHERE department LIKE 'Civil%' ORDER BY id DESC";
                                        $result = mysqli_query($conn, $sql);
                                        ?>

                                        <div class="table-responsive">
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
                                                                    <a href="assets\pdf\department-pdf\Civil pdf\More Sir.pdf"
                                                                        target="_blank" class="btn text-white" id="view-button">
                                                                        <i class="fa-regular fa-eye text-white"></i> View
                                                                    </a>
                                                                </td>
                                                            </tr><?php }
                                                            } else { ?>
                                                        <p class="text-center">No events available</p>
                                                    <?php }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <!-- second-table-end-->

                                    <!--Accordin section started here-->
                                    <section id="Accordion-section">
                                        <div class="faq-area">

                                            <div class="row">
                                                <div class="col-lg-6 w-100">

                                                    <div class="accordion" id="accordionExample">
                                                        <!--first Accordion started-->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header p-lg-2" id="headingOne">
                                                                <button
                                                                    class="accordion-button collapsed"
                                                                    type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                    TOPPERS
                                                                </button>
                                                            </h2>
                                                            <div
                                                                id="collapseOne"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <ul>
                                                                        <li style="list-style-type: disc">
                                                                            Following are the overall toppers of civil engineering department for
                                                                            the academic year 2022-23.
                                                                        </li>
                                                                    </ul>
                                                                    <h5 style="margin-bottom: 10px"><u>Toppers of FY CE</u></h5>

                                                                    <!-- first table started-->
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM toppers WHERE department='Civil Engineering' AND year = 'First-Year' ORDER BY id DESC";
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
                                                                                                <a href="#"><?= isset($row['id']) ? htmlspecialchars($row['id']) : 'N/A'; ?></a>
                                                                                            </td>
                                                                                            <td><a href="#"><?= isset($row['student_name']) ? htmlspecialchars($row['student_name']) : 'N/A'; ?></a></td>
                                                                                            <td>
                                                                                                <a href="#"><?= isset($row['percentage']) ? htmlspecialchars($row['percentage']) : 'N/A'; ?></a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#"><?= isset($row['class_awarded']) ? htmlspecialchars($row['class_awarded']) : 'N/A'; ?></a>
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
                                                                    <!--first table end -->

                                                                    <!--second table stared-->
                                                                    <h5 style="margin-bottom: 10px; margin-top: 20px">
                                                                        <u>Toppers of SY CE</u>
                                                                    </h5>

                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM toppers WHERE department='Civil Engineering' AND year = 'Second-Year' ORDER BY id DESC";
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
                                                                    <h5 style="margin-bottom: 10px; margin-top: 20px">
                                                                        <u>Toppers of TY CE</u>
                                                                    </h5>

                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-hover">
                                                                            <?php
                                                                            error_reporting(E_ALL);
                                                                            ini_set('display_errors', 1);
                                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                            $sql = "SELECT * FROM toppers WHERE department='Civil Engineering' AND year = 'Third-Year' ORDER BY id DESC";
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
                                                            <div class="accordion-item ">
                                                                <h2 class="accordion-header p-lg-2" id="headingTwo">
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
                                                                        $sql = "SELECT * FROM student_achievement WHERE department='Civil Engineering' ORDER BY id DESC";
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
                                                                                            Year
                                                                                        </th>
                                                                                        <th>
                                                                                            Organized
                                                                                        </th>
                                                                                        <th>
                                                                                            Name of Student
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
                                                                        <!--SECOND table end-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--second Accordion end-->


                                                            <!--third Accordion start-->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header p-lg-2" id="headingThree">
                                                                    <button
                                                                        class="accordion-button collapsed"
                                                                        type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseThree">
                                                                        DEPARTMENT ADVISORY BOARD (DAB)
                                                                    </button>
                                                                </h2>
                                                                <div
                                                                    id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM department_advisory WHERE department='Civil Engineering' ORDER BY id DESC";
                                                                        $result = mysqli_query($conn, $sql);
                                                                        ?>
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Sr. No.</th>
                                                                                        <th>Name of the Committee Member</th>
                                                                                        <th>Details</th>
                                                                                    </tr>
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
                                                                        <!--third table end-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- third Accordion start-->
                                                            <!-- Fourth PROGRAMME ASSESSMENT COMMITTEE(PAC) start -->
                                                            <!-- civil department start -->
                                                            <div class="accordion" id="accordionExample">
                                                                <div class="accordion-item p-2">

                                                                    <h2 class="accordion-header" id="headingFourth">
                                                                        <button
                                                                            class="accordion-button collapsed"
                                                                            type="button"
                                                                            data-bs-toggle="collapse"
                                                                            data-bs-target="#collapsefourth"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne">
                                                                            PROGRAMME ASSESSMENT COMMITTEE(PAC)
                                                                        </button>
                                                                    </h2>
                                                                    <div
                                                                        id="collapsefourth"
                                                                        class="accordion-collapse collapse"
                                                                        aria-labelledby="headingOne"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <?php
                                                                            error_reporting(E_ALL);
                                                                            ini_set('display_errors', 1);
                                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                            $sql = "SELECT * FROM program WHERE choose_department LIKE 'Civil%' ORDER BY id DESC";
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
                                                                                                Name of Fauculty
                                                                                            </th>
                                                                                            <th>
                                                                                                Representation <br />
                                                                                            </th>
                                                                                            <th>
                                                                                                Designation <br />
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
                                                                                                    <td>
                                                                                                        <a href="#"><?= htmlspecialchars($row['name_of_faculty']); ?></a>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <a href="#"><?= htmlspecialchars($row['representation']); ?></a>
                                                                                                    </td>
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
                                                                <!-- PROGRAMME ASSESSMENT COMMITTEE (PAC) end -->
                                                            </div>


                                                            <!--Fifth LIST OF LABOROTORIES Start -->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingFifth">
                                                                    <button
                                                                        class="accordion-button collapsed"
                                                                        type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsefifth"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseTwo">
                                                                        LIST OF LABOROTORIES
                                                                    </button>
                                                                </h2>
                                                                <div
                                                                    id="collapsefifth"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <!--first table started-->
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM list_data WHERE department LIKE 'Civil%' ORDER BY id DESC";
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
                                                                                            Name of Laboratories
                                                                                        </th>
                                                                                        <th>
                                                                                            Cost of Equipments (Rs.) <br />
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

                                                            <!-- LIST OF LABORATORIES end -->


                                                            <!-- Sixth OUR ALUMNI Start -->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingSixth">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsesixth" aria-expanded="true" aria-controls="collapseThree">
                                                                        OUR ALUMNI
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsesixth" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <!--first table started-->
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM our_alumni WHERE department LIKE 'Civil%' ORDER BY id DESC";
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
                                                                                                    <a href="#"><?= htmlspecialchars($row['id']); ?></a>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <a href="#"><?= htmlspecialchars($row['sname']); ?></a>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <a href="#"><?= htmlspecialchars($row['ypassing']); ?></a>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <a href="#"><?= htmlspecialchars($row['achievement_d']); ?></a>
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
                                                            <!-- Sixth OUR ALUMNI end -->

                                                            <!-- 7TH ACCORDIN STARTS-->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingseventh">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseseventh" aria-expanded="true" aria-controls="collapseTwo">
                                                                        STUDENTS' ASSOCIATION (CESA)-2022-23

                                                                    </button>
                                                                </h2>
                                                                <div id="collapseseventh" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM student_association WHERE department='Civil Engineering' ORDER BY id DESC";
                                                                        $result = mysqli_query($conn, $sql);
                                                                        ?>
                                                                        <div class="table-responsive">
                                                                            <table class=" table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Sr. No.</th>
                                                                                        <th>Name of the Candidate</th>
                                                                                        <th>Post</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php if (mysqli_num_rows($result) > 0) {
                                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                                    ?>
                                                                                            <tr>
                                                                                                <td><a href="#"><?= htmlspecialchars($row['id']); ?></a></td>
                                                                                                <td><a href="#"><?= htmlspecialchars($row['name_of_candidate']); ?></a></td>
                                                                                                <td><a href="#"><?= htmlspecialchars($row['post']); ?></a></td>
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
                                                            <!-- 7TH ACCORDIN ENDS-->





                                                            <!--civil mous start -->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingeight">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseeight" aria-expanded="true" aria-controls="collapseeight">
                                                                        DEPARTMENT MOU's
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM mous_data WHERE department='Civil Engineering' ORDER BY id DESC";
                                                                        $result = mysqli_query($conn, $sql);
                                                                        ?>
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered table-hover">
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
                                                                                                <td>
                                                                                                    <a href="#"><?= htmlspecialchars($row['id']); ?></a>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <a href="#"><?= htmlspecialchars($row['name_of_company']); ?></a>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <a href="#"><?= htmlspecialchars($row['from_datem']); ?></a>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <a href="#"><?= htmlspecialchars($row['upto']); ?></a>
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
                                                            <!-- 8TH ACCORDIN ENDS-->
                                                            <!-- civil mous end -->

                                                            <!-- 9TH ACCORDIN STARTS-->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingnine">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseninth" aria-expanded="true"
                                                                        aria-controls="collapseninth">
                                                                        DEPARTMENT PROJECT
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseninth" class="accordion-collapse collapse"
                                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="col-md-12">
                                                                            <div class="hedaing-content">
                                                                            </div>

                                                                            <p><strong><u class="p-2">A.Y. 2023-24</u></strong></p>
                                                                            <ul class="justify-content-center p-3 ">
                                                                                <li style="list-style-type: disc">Smart Estimator 2023-A tool for quick estimate</li>
                                                                                <li style="list-style-type: disc">Production of paver block using waste plastic</li>
                                                                                <li style="list-style-type: disc">Smart Traffic System for Smart City Chhatrapati Sambhajinagar</li>
                                                                                <li style="list-style-type: disc">Design sever line for Rural area</li>
                                                                            </ul>

                                                                            <p><strong><u class="p-2">A.Y. 2022-23</u></strong></p>
                                                                            <ul class="p-3 ">
                                                                                <li style="list-style-type: disc">Design and estimate of circular overhead water tank for remote village</li>
                                                                                <li style="list-style-type: disc">Design sewage treatment plant for the rural areas</li>
                                                                                <li style="list-style-type: disc">Analysis of (G+2) Residential building using E-tab software</li>
                                                                                <li style="list-style-type: disc">Use of waste plastic blended bitumen for road construction and maintenance</li>
                                                                                <li style="list-style-type: disc">Estimation of G+1 residential building</li>
                                                                            </ul>

                                                                            <p><strong><u class="p-2">A.Y. 2021-22</u></strong></p>
                                                                            <ul class="p-3 ">
                                                                                <li style="list-style-type: disc">Use of plastic waste in bituminuos pavement</li>
                                                                                <li style="list-style-type: disc">Deep root watering system by providing soak pits</li>
                                                                                <li style="list-style-type: disc">Domestic sewage water treatment plant</li>
                                                                                <li style="list-style-type: disc">Waste water Management</li>
                                                                                <li style="list-style-type: disc">Excel spread sheet of surveying calculation</li>
                                                                                <li style="list-style-type: disc">Low cost water treatment for rural areas</li>
                                                                                <li style="list-style-type: disc">study of traditional house in practyices</li>
                                                                                <li style="list-style-type: disc">study of traditional house in practyices</li>
                                                                                <li style="list-style-type: disc">Construiction of green lane for wirelwss charging for electrical vehicles</li>
                                                                                <li style="list-style-type: disc">Housing project using precast method</li>
                                                                                <li style="list-style-type: disc">Self curing concrete</li>
                                                                                <li style="list-style-type: disc">Traffic island</li>
                                                                                <li style="list-style-type: disc">vRular road development</li>
                                                                                <li style="list-style-type: disc">Water absorbing pavement</li>
                                                                            </ul>

                                                                            <p><strong><u class="p-2">A.Y. 2020-21</u></strong></p>
                                                                            <ul class="p-3 ">
                                                                                <li style="list-style-type: disc"> Comparative study between asphalt road and cement concrete road.</li>
                                                                                <li style="list-style-type: disc"> Prevention of evaporation operation using shade balls.</li>
                                                                                <li style="list-style-type: disc"> Demolition waste management</li>
                                                                                <li style="list-style-type: disc"> Green Stadium</li>
                                                                                <li stye="list-style-type: disc"> Housing project using precast materials</li>
                                                                                <li style="list-style-type: disc"> Self sustainable housing society</li>
                                                                                <li style="list-style-type: disc"> Type of Biogas digesters and plant</li>
                                                                                <li style="list-style-type: disc"> Visit to the water tank on construction site and prepare the report in detail.</li>
                                                                                <li style="list-style-type: disc"> Green Building</li>
                                                                                <li style="list-style-type: disc"> Swing Bridge</li>
                                                                                <li style="list-style-type: disc"> Information about replacement of reinforcement with bamboo</li>
                                                                                <li style="list-style-type: disc"> Advanced construction techniques</li>
                                                                                <li style="list-style-type: disc"> Type of Biogas digesters and plant</li>
                                                                                <li style="list-style-type: disc"> Traffic Monitoring System</li>
                                                                                <li style="list-style-type: disc"> Earthquake resistant building model</li>
                                                                                <li style="list-style-type: disc">To provide quality education which helps to fulfill the needs of industry through academics.</li>
                                                                                <li style="list-style-type: disc">Inculcate ethical values among the students as civil engineers with social commitment.</li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- 9TH ACCORDIN ENDS-->
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