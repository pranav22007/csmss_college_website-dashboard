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
                        <div class="col-xl-4 col-lg-3 d-lg-block d-md-none d-none">
                            <div class="department-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">Department</h4>
                                    <div class="category-list">
                                        <a href="#Artificial Intelligence and Machine Learning"><i class="far fa-long-arrow-right"></i>Introduction</a>
                                        <a href="#Admission Intake Capacity : 60"><i class="far fa-long-arrow-right"></i>Admission Intake Capacity</a>
                                        <a href="#hod_message"><i class="far fa-long-arrow-right"></i>HOD Message</a>
                                        <a href="#headingOne"><i class="far fa-long-arrow-right"></i>Toppers</a>
                                        <a href="#headingTwo"><i class="far fa-long-arrow-right"></i>Student's Achievement</a>
                                        <a href="#headingThree"><i class="far fa-long-arrow-right"></i>List Of Laboratories</a>
                                        <a href="#headingfour"><i class="far fa-long-arrow-right"></i>Department Mou's</a>
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

                                            $sql = "SELECT * FROM department_slider WHERE department='Artificial intelligence Engineering' ORDER BY id DESC";
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
                                <div id="Artificial Intelligence and Machine Learning">
                                    <div class="department-details">
                                        <div class="mb-4">
                                            <h3 class="mb-20">Artificial Intelligence and Machine Learning</h3>
                                            <p class="mb-20" style="text-align: justify;">
                                                Year of commencement: A. Y. 2022-23
                                                The inception of the department goes in the year 2022-2023. The motto of the department is to provide quality technical education & to make the students industry-ready. Our goal is to ensure that our diploma engineers are well prepared to play the pivotal roles in problem solving project leaders, entrepreneurs, and above all ethical citizens of a global society. The excellent infrastructure, dynamic teaching staff along with training and placement cell ensures a bright future to the students.
                                                The AI & ML course emphasizes creativity and innovative thinking and is supported by passionate faculties who strive to inspire their students. We promote teamwork among students through projects and co-curricular & extracurricular activities. We are confident that our students will emerge as assets not only to the institution and to the organization they join, but to the society as well </p>
                                        </div>
                                        <!-- Short-term Future Plans start -->
                                        <div class="mb-4">
                                            <h3 class="mb-3">Short-term Future Plans</h3>
                                            <ul class="department-single-list">
                                                <li><i class="far fa-check"></i> To Increase connectivity with maximum industries.</li>
                                                <li><i class="far fa-check"></i> Develop industry-institute interaction to impart professional and entrepreneurship skills in students.</li>
                                                <li><i class="far fa-check"></i> Inculcate social integrity and ethics among students through extra-curricular activities for overall development and life-long learning.</li>
                                                <li><i class="far fa-check"></i> To Setup the well equipped laboratories with higher configuration systems </li>
                                                <li><i class="far fa-check"></i> To motivate students to participate in State & National level Paper/Project Competition </li>
                                                <li><i class="far fa-check"></i>To organized National Level Conferences & Seminar </li>
                                                <li><i class="far fa-check"></i>To be the department with zero dropout rate </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Short-term Future Plans end -->
                                    <!-- Long-term Future Plans start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Long-term Future Plans</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i> To Be an NBA accredited program after 3 year</li>
                                            <li><i class="far fa-check"></i> To develop industry sponsored lab.</li>
                                            <li><i class="far fa-check"></i> To increase the placement of students.</li>
                                            <To><i class="far fa-check"></i> To organized International Level Conferences & Seminar for faculty</li>
                                                <li><i class="far fa-check"></i> To produce meritorious Students in the MSBTE </li>
                                                <li><i class="far fa-check"></i>To motivate faculties and students to have their own patent/IPR </li>
                                                <li><i class="far fa-check"></i>To provide skilled and competent professionals in the field of Artificial Intelligence and Machine Learning </li>
                                        </ul>
                                    </div>
                                    <!-- Long-term Future Plans end -->
                                    <!-- PO's start  -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Outcomes (PO's)</h3>
                                        <p><b class="text-dark">PO1 </b> Basic and Discipline specific knowledge: Apply knowledge of basic mathematics, science and engineering fundamentals and engineering specialization to solve the engineering problems.</p>
                                        <p><b class="text-dark">PO2 </b> Problem analysis: Identify and analyses well-defined engineering problems using codified standard methods.</p>
                                        <p><b class="text-dark">PO3 </b> Design/ development of solutions: Design solutions for well-defined technical problems and assist with the design of systems components or processes to meet specified needs.</p>
                                        <p><b class="text-dark">PO4 </b> Engineering Tools, Experimentation and Testing: Apply modern engineering tools and appropriate technique to conduct standard tests and measurements..</p>
                                        <p><b class="text-dark">PO5 </b> Engineering practices for society, sustainability and environment: Apply appropriate technology in context of society, sustainability, environment and ethical practices.</p>
                                        <p><b class="text-dark">PO6 </b> Project Management: Use engineering management principles individually, as a team member or a leader to manage projects and effectively communicate about well-defined engineering activities.</p>
                                        <p><b class="text-dark">PO7 </b> Life-long learning: Ability to analyze individual needs and engage in updating in the context of technological changes.</p>
                                    </div>
                                    <!-- PO's end -->
                                </div>
                                <div id="Admission Intake Capacity : 60">
                                    <h3 class="mb-3 ps-1 text-black">Admission Intake Capacity : 60</h3>

                                    <!-- Accodian start -->
                                    <div class="container my-5" id="hod_message">
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
                                                                <center><img class="sticky" src="assets\img\department\HODAIML.jpeg" alt="HOD Image" width="150" height="200" style="border-radius:0px;"></center>
                                                                <center><b>Mrs. S. R. Borakhade</b><br><i>HOD</i></center>
                                                            </div>
                                                            <div class="col-lg-8 col-md-12">
                                                                <p style="text-align: justify">It gives me immense pleasure to give you the Greetings! From the Department of Artificial Intelligence and Machine Learning (AN) of CSMSS College of Polytechnic, Aurangabad, it is striving towards the goal of providing innovative and quality education to the students to achieve academic excellence. Since its inception in 2022-2023, the department has maintained an excellent academic record and ‘Excellent’ grade also from MSBTE.</p>
                                                                <p style="text-align: justify">The M.S.B.T.E. Mumbai has conferred the ‘Excellent’ grade to the department for its academic activities, and has been certified by ISO. The Department has sufficient and good infrastructural </p>
                                                            </div>
                                                            <p style="text-align: justify">design, and well equipped laboratories.</p>
                                                            <p style="text-align: justify">The motto of the department is to provide quality technical education & to make the students industry-ready. Our goal is to ensure that our diploma engineers are well prepared to play the pivotal role in problem solving projects, make them efficient leaders, entrepreneurs, and above all ethical citizens of the global society. The excellent infrastructure, dynamic teaching staff along with training and placement cell ensures a bright future to the students. The greatest asset of the department is its highly motivated and learned faculty.</p>
                                                            <p style="text-align: justify">Thank you...</p>
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

                                    $sql = "SELECT * FROM faculty_details WHERE department LIKE 'Artificial%' ORDER BY id DESC";
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
                                                        <!--first Accordion started-->
                                                        <div class=" accordion-item p-2">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                    aria-expanded="true" aria-controls="collapseOne">
                                                                    TOPPERS
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <ul>
                                                                        <li style="list-style-type: disc;">Following are
                                                                            the overall toppers of Artificial
                                                                            Intalligence & Machine Learning department
                                                                            for the academic year 2022-23.</li>
                                                                    </ul>
                                                                    <h5 style="margin-bottom: 10px;"><u>Toppers of FY
                                                                            AIML</u></h5>
                                                                    <!--first table started-->
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM toppers WHERE department='Artificial intelligence Engineering' AND year = 'First-Year' ORDER BY id DESC";
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
                                                                    <h5>
                                                                        <u>Toppers of SY AIML</u>
                                                                    </h5>
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM toppers WHERE department='Artificial intelligence Engineering' AND year = 'Second-Year' ORDER BY id DESC";
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
                                                                    <h5>
                                                                        <u>Toppers of TY AIML</u>
                                                                    </h5>

                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM toppers WHERE department='Artificial intelligence Engineering' AND year = 'Third-Year' ORDER BY id DESC";
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
                                                                    $sql = "SELECT * FROM student_achievement WHERE department='Artificial Intelligence' ORDER BY id DESC";
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
                                                                    <!--third table end-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--second Accordion end-->


                                                        <!--third Accordion start-->

                                                        <div class="accordion-item p-2">



                                                            <h2 class="accordion-header " id="headingThree">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree" aria-expanded="true"
                                                                    aria-controls="collapseThree">
                                                                    LIST OF LABORATORIES
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                                aria-labelledby="headingThree"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <?php
                                                                    error_reporting(E_ALL);
                                                                    ini_set('display_errors', 1);
                                                                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                    $sql = "SELECT * FROM list_data WHERE department LIKE 'Artificial%' ORDER BY id DESC";
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
                                                                                    <th>
                                                                                        Cost of Equipments
                                                                                        (Rs.)
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
                                                                                                <a href="#"><?= htmlspecialchars($row['name_of_laboratries']); ?></a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="#"><?= number_format((float)$row['cost'], 2) ?></a>
                                                                                            </td>

                                                                                        </tr>

                                                                                    <?php }
                                                                                } else { ?>
                                                                                    <p class="text-center">No events available</p>
                                                                                <?php } ?>

                                                                            </tbody>
                                                                        </table>
                                                                        <!-- third accordion end -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--fourth Accordion Start-->

                                                        <div class=" accordion-item p-2">
                                                            <h2 class="accordion-header" id="headingfour">
                                                                <button class="accordion-button collapsed show" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                                                    aria-expanded="true" aria-controls="collapsefour">
                                                                    DEPARTMENT MOU's
                                                                </button>
                                                            </h2>
                                                            <div id="collapsefour" class="accordion-collapse collapse "
                                                                aria-labelledby="headingfour"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <!--fourth table started-->
                                                                    <div class="table-responsive">
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM mous_data WHERE department='Artificial intelligence Engineering' ORDER BY id DESC";
                                                                        $result = mysqli_query($conn, $sql);
                                                                        ?>

                                                                        <table class=" table table-bordered table-hover">
                                                                            <!--eight table started-->
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>

                                                                                        Sr. No.


                                                                                    </th>
                                                                                    <th>

                                                                                        Name of Company


                                                                                    </th>
                                                                                    <th>

                                                                                        From <br>
                                                                                    </th>
                                                                                    <th>
                                                                                        Upto<br>
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
                                                        <!--fourth Accordion end-->
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