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
                                        <a href="#E & TE"><i class="far fa-long-arrow-right"></i>Introduction</a>
                                        <a href="#AIC"><i class="far fa-long-arrow-right"></i>Admission Intake Capacity</a>
                                        <a href="#hod_message"><i class="far fa-long-arrow-right"></i>HOD Message</a>

                                        <a href="#headingOne"><i class="far fa-long-arrow-right"></i>Toppers</a>
                                        <a href="#headingTwo"><i class="far fa-long-arrow-right"></i>Student's Achievement</a>
                                        <a href="#headingThree"><i class="far fa-long-arrow-right"></i>Department Advisory Board (DAB)</a>
                                        <a href="#headingFourth"><i class="far fa-long-arrow-right"></i>Programmee Assessment Committee (PAC)</a>
                                        <a href="#headingFifth"><i class="far fa-long-arrow-right"></i>List Of Laboratories</a>
                                        <a href="#headingSixth"><i class="far fa-long-arrow-right"></i>student's Association (EESA)-2022-23</a>
                                        <a href="#headingseven"><i class="far fa-long-arrow-right"></i>Department Mou's</a>
                                        <a href="#headingEight"><i class="far fa-long-arrow-right"></i>Department Project</a>
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

                                            $sql = "SELECT * FROM department_slider WHERE department='Electronic and Tele-communication Engineering' ORDER BY id DESC";
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

                                <div id="E & TE">
                                    <div class="department-details">
                                        <div class="mb-4">
                                            <h3 class="mb-20">Electronics & Tele-communication Engineering</h3>
                                            <p class="mb-20" style="text-align: justify;">
                                                Electronics & Tele-communication Engineering department was established in 2009. It is the branch of study that has revolutionized the life style of humanity. It is a pace setter and a prime mover behind the transition to a technological society. The field of Electronics and Tele-communication Engineering encompasses all areas of human life. Radio, television, telephones, computers, automobiles, office machinery and house-hold appliances, lifesaving medical equipment’s and space vehicles represent a mere sample in the wide spectrum of application of Electronics. </p>
                                            <p class="mb-20" style="text-align: justify;"> Electronics & Tele-communication students have unlimited opportunities in the field of terrestrial and extra terrestrial communication systems like telephones, cellular phones, television, optical fiber communication, consumer and entertainment devices. Highly rewarding and greatly satisfying opportunities await the Electronics and Communication Engineers in the field of satellite space programs, embedded technologies etc.</p>
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
                                        <p>“To become a role model department for diploma in Electronics and Tele-communication engineering by imparting value based technical education.”</p>
                                    </div>
                                    <!-- Department Vision end -->
                                    <!-- Department Mission start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Department Mission</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i> Implement advanced teaching, learning and evaluation methods to achieve academic excellence.</li>
                                            <li><i class="far fa-check"></i> Develop industry-institute interaction to impart professional and entrepreneurship skills in students.</li>
                                            <li><i class="far fa-check"></i> Inculcate social integrity and ethics among students through extra-curricular activities for overall development and life-long learning.</li>
                                        </ul>
                                    </div>
                                    <!-- Department Mission end -->
                                    <!-- Future Plan Start -->
                                    <div class="mb-4">
                                        <h3 class="mb-3">Future Plan</h3>
                                        <ul class="department-single-list">
                                            <li><i class="far fa-check"></i>To Become a NBA accredited department</li>
                                            <li><i class="far fa-check"></i>To Increase the RAPO with maximum industry</li>
                                            <li><i class="far fa-check"></i>To motivate students towards entrepreneurship form the department</li>
                                            <li><i class="far fa-check"></i>To develop the engineers skills of the students</li>
                                            <li><i class="far fa-check"></i>To develop industry sponsored lab</li>
                                            <li><i class="far fa-check"></i>Increase the placement of students</li>
                                        </ul>
                                    </div>
                                    <!-- Future Plan Start -->
                                    <!-- PEO's start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Educational Objectives(PEO's)</h3>
                                        <p><b class="text-dark">PEO 1:</b> Provide socially responsible, environment friendly solutions to Electronics and Telecommunication engineering related broad-based problems adapting professional ethics.</p>
                                        <p> <b class="text-dark">PEO 2:</b> Adapt state-of-the-art Electronics and Telecommunication engineering broad-based technologies to work in multi-disciplinary work environments.</p>
                                        <p><b class="text-dark">PEO 3:</b> Solve broad-based problems individually and as a team member communicating effectively in the world of work.</p>
                                    </div>
                                    <!--PEO's end  -->
                                    <!-- PSO start -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Specific Outcomes(PSO's)</h3>
                                        <p><b class="text-dark">PSO1: Electronics and Telecommunication Systems:</b> Maintain various types of Electronics and Telecommunication systems.</p>
                                        <p><b class="text-dark">PSO2: EDA Tools Usage: </b>Use EDA tools to develop simple Electronics and Tele- Communication engineering related circuits</p>
                                    </div>
                                    <!-- PSO's end -->
                                    <!-- PO's start  -->
                                    <div class="my-4">
                                        <h3 class="mb-3">Program Outcome(PO's)</h3>
                                        <p><b class="text-dark">PO1: Basic and Discipline specific knowledge:</b> Apply knowledge of basic mathematics, science and engineering fundamentals and engineering specialization to solve the engineering problems.
                                        <p>
                                        <p><b class="text-dark">PO2:Problem analysis: </b>Identify & analyze well-defined Engg. problems using codified standard methods.</p>
                                        <p><b class="text-dark">PO3:Design/development of solutions :</b> Design solutions for well-defined technical problems and assist with the design of systems components or processes to meet specified needs.
                                        <p>
                                        <p><b class="text-dark">PO4:Engineering Tools, Experimentation and Testing:</b> Apply modern engineering tools and appropriate technique to conduct standard tests and measurements.</p>
                                        <p><b class="text-dark">PO5:Engineering practices for society, sustainability and environment:</b> Apply appropriate technology in context of society, sustainability, environment and ethical practices.</p>
                                        <p><b class="text-dark">PO6:Project Management:</b> Use engineering management principles individually, as a team member or a leader to manage projects and effectively communicate about well-defined engineering activities.</p>
                                        <p><b class="text-dark">PO7: Life-long learning:</b> Ability to analyze individual needs and engage in updating in the context of technological changes.</p>
                                    </div>
                                </div>
                                <!-- PO's end -->
                                <div id="AIC">
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
                                                                <center><img class="sticky" src="assets\img\department\HODETC.jpeg" alt="HOD Image" width="150" height="200" style="border-radius:0px;"></center>
                                                                <center><b>Mr. M. D. Narangale</b><br><i>HOD</i></center>
                                                            </div>
                                                            <div class="col-lg-8 col-md-12">
                                                                <p style="text-align: justify">Welcome to the Department of Electronics & Telecommunication Engineering at CSMSS college of Polytechnic, Aurangabad Maharashtra. The Department has been established in the year 2009 with the intake capacity of 60 students.</p>
                                                                <p style="text-align: justify">The M.S.B.T.E. Mumbai has conferred the ‘Excellent’ grade to the department for its academic activities, and has been certified by ISO. The Department has sufficient and good infrastructural design, and well equipped laboratories</p>
                                                                <p style="text-align: justify">The department has a SATCOM lab which has been developed in collaboration with the I.S.T.C. Pvt. Ltd. Pune in which satellite</p>
                                                            </div>
                                                            <p style="text-align: justify">related practicals are conducted. It is a dynamic and exciting area that provides excellent career opportunities in various fields of technology. The departmental staff has their own You Tube Channel of the practicals which is to be conducted according to the curriculum.</p>
                                                            <p style="text-align: justify">We motivate our students to participate in quiz, paper presentation, poster and project competition etc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Form Section Start -->

                                        <!--faculty-details-->
                                        <!--first-table-->

                                        <h3 class="mb-4 ps-1 text-black mt-4">Faculty Details</h3>
                                        
                                        <div class=" table-responsive" style="font-size: 14px;">
                                            <table class=" table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th width="10%">

                                                            Sr.No.

                                                        </th>
                                                        <th width="45%">

                                                            Particuler

                                                        </th>
                                                        <th width="45%">
                                                            A.Y.
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody style="background-color:#eeeeee">

                                                    <tr>
                                                        <td rowspan="3">
                                                            01
                                                        </td>
                                                        <td rowspan="3">
                                                            FACULTY DETAILS
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="assets\pdf\department-pdf\electronic\EJFDAY21_22.pdf">A.Y.
                                                                2021-22</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a
                                                                href="assets\pdf\department-pdf\electronic\EJFDAY22_23.pdf">A.Y.
                                                                2022-23</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a
                                                                href="assets\pdf\department-pdf\electronic\EJFDAY23_24.pdf">A.Y.
                                                                2023-24</a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--first-table-end-->

                                        <!-- Second table -->
                                         <?php
                                        error_reporting(E_ALL);
                                        ini_set('display_errors', 1);
                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                        $sql = "SELECT * FROM faculty_details WHERE department LIKE 'Electronic%' ORDER BY id DESC";
                                        $result = mysqli_query($conn, $sql);
                                        ?>
                                        <div class=" table-responsive" style="font-size: 14px;">
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
                                                                <td> <a href="#"><?= htmlspecialchars($row['name']); ?></a>E
                                                                </td>
                                                                <td>
                                                                    <a
                                                                        href="#"><?= htmlspecialchars($row['qualification']); ?></a>
                                                                </td>
                                                                <td>

                                                                    <b> <a
                                                                            href="#"><?= htmlspecialchars($row['designation']); ?></a></b>

                                                                </td>
                                                                <td class="text-center">
                                                                    <a href="assets\pdf\department-pdf\electronic\DR. DIKLE SIR.pdf"
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
                                    </div>
                                    <!-- second-table-end-->
                                    <!-- Form Section Ends  -->

                                    <!-- Accordin Main Start -->

                                    <!--Accordin section started here-->
                                    <section id="Accordion-section">


                                        <div class="faq-area">
                                            <div class="row">
                                                <div class="col-lg-6 w-100">
                                                    <div class="accordion" id="accordionExample">
                                                        <!--first Accordion started-->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header " id="headingOne">
                                                                    <button
                                                                        class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        TOPPERS
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">

                                                                        <ul>
                                                                            <li style="list-style-type: disc;">
                                                                                Following are the overall toppers of
                                                                                Electronics & Telecomm.engineering department for the
                                                                                academic year 2022-23.</li>
                                                                        </ul>
                                                                        <h5 style="margin-bottom: 10px;"><u>Toppers
                                                                                of FY EJ</u></h5>
                                                                        <!--first table started-->
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM toppers WHERE department='Electronic and Tele-communication Engineering' AND year = 'First-Year' ORDER BY id DESC";
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
                                                                        <!-- first table end -->

                                                                        <!-- second table start -->
                                                                        <h5 style="margin-bottom: 10px;"><u>Toppers
                                                                                of SY EJ</u></h5>
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM toppers WHERE department='Electronic and Tele-communication Engineering' AND year = 'Second-Year' ORDER BY id DESC";
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
                                                                        <h5 style="margin-bottom: 10px;"><u>Toppers
                                                                                of TY EJ</u></h5>
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM toppers WHERE department='Electronic and Tele-communication Engineering' AND year = 'Third-Year' ORDER BY id DESC";
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
                                                                        $sql = "SELECT * FROM student_achievement WHERE department='Electronics & Telecommunication' ORDER BY id DESC";
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

                                                            <!--third Accordion start-->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header "
                                                                    id="headingThree">
                                                                    <button
                                                                        class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseThree">
                                                                        DEPARTMENT ADVISORY BOARD (DAB)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM department_advisory WHERE department='Electronics Engineering' ORDER BY id DESC";
                                                                        $result = mysqli_query($conn, $sql);
                                                                        ?>
                                                                        <div class="container mt-3 table-responsive">
                                                                            <!-- third-table-start -->
                                                                            <table class=" table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Sr.No.</th>
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
                                                            <!-- third-accordion-end -->

                                                            <!-- Fourth-accordion-start -->
                                                            <!-- electronics & telecomunication start -->
                                                                <div class="accordion-item p-2">
                                                                    <h2 class="accordion-header" id="headingFourth">
                                                                        <button
                                                                            class="accordion-button collapsed"
                                                                            type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapsefourth"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne">
                                                                            PROGRAMME ASSESSMENT COMMITTEE(PAC)
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapsefourth"
                                                                        class="accordion-collapse collapse"
                                                                        aria-labelledby="headingfourth"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <?php
                                                                            error_reporting(E_ALL);
                                                                            ini_set('display_errors', 1);
                                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                            $sql = "SELECT * FROM program WHERE choose_department LIKE 'Electronics%' ORDER BY id DESC";
                                                                            $result = mysqli_query($conn, $sql);
                                                                            ?>
                                                                            <div class="container mt-3 table-responsive">
                                                                                <!-- forth-table-start -->
                                                                                <table class=" table table-bordered table-hover">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Sr.No.</th>
                                                                                            <th>Name of Faculty</th>
                                                                                            <th>Representation</th>
                                                                                            <th>Designation</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php if (mysqli_num_rows($result) > 0) {
                                                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                                        ?>
                                                                                                <tr>
                                                                                                    <td>01</td>
                                                                                                    <td>Mr. M. D. Narangale</td>
                                                                                                    <td>Chairman</td>
                                                                                                    <td>HOD</td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td><a href="#"><?= htmlspecialchars($row['id']); ?></a></td>
                                                                                                    <td><a href="#"><?= htmlspecialchars($row['name_of_faculty']); ?></a></td>
                                                                                                    <td><a href="#"><?= htmlspecialchars($row['representation']); ?></a></td>
                                                                                                    <td><a href="#"><?= htmlspecialchars($row['designation']); ?></a></td>
                                                                                                </tr>


                                                                                            <?php }
                                                                                        } else { ?>
                                                                                            <p class="text-center">No events available</p>
                                                                                        <?php } ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <!-- forth-table-end -->

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!-- electronics & telecomunication end -->

                                                            <!--forth-accordion-end -->

                                                            <!--Fifth-accordion-Start -->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingFifth">
                                                                    <button
                                                                        class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsefifth"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseTwo">
                                                                        LIST OF LABOROTORIES
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsefifth"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingfifth"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM list_data WHERE department LIKE 'electronics%' ORDER BY id DESC";
                                                                        $result = mysqli_query($conn, $sql);
                                                                        ?>
                                                                        <div class="container mt-3 table-responsive">
                                                                            <!--fifth-table started-->
                                                                            <table class=" table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Sr.No.</th>
                                                                                        <th>Name of Laboratories</th>
                                                                                        <th>Cost of Equipments (Rs.)</th>

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
                                                            <!-- fifth-accordion-end -->

                                                            <!-- sixth-ACCORDIN STARTS-->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingSixth">
                                                                    <button
                                                                        class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsesixth"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseTwo">
                                                                        STUDENT'S ASSOCIATION (EESA)-2022-23
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsesixth"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingsixth"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM student_association WHERE department='Electronics & Tele-communication Engineering' ORDER BY id DESC";
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

                                                                                            Name of the Candidate


                                                                                        </th>
                                                                                        <th>

                                                                                            Post <br>

                                                                                        </th>

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
                                                            <!-- 6TH ACCORDIN ENDS-->


                                                            <!-- 7TH ACCORDIN STARTS-->
                                                            <div class="accordion-item p-2">
                                                                <h2 class="accordion-header" id="headingseven">
                                                                    <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse" data-bs-target="#collapseseven"
                                                                        aria-expanded="true" aria-controls="collapseseven">
                                                                        DEPARTMENT MOU's
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseseven" class="accordion-collapse collapse"
                                                                    aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <?php
                                                                        error_reporting(E_ALL);
                                                                        ini_set('display_errors', 1);
                                                                        include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                        $sql = "SELECT * FROM mous_data WHERE department='Electronic and Telecommunication Engineering' ORDER BY id DESC";
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
                                                                    <!--seventh-table end-->
                                                                </div>
                                                            </div>
                                                        <!--SEVENTH-Accordion end-->


                                                        <!-- 8TH ACCORDIN STARTS-->
                                                        <div class="accordion-item p-2">
                                                            <h2 class="accordion-header" id="headingEight">
                                                                <button
                                                                    class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseEight"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseEight">
                                                                    DEPARTMENT PROJECT
                                                                </button>
                                                            </h2>
                                                            <div id="collapseEight"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingEight"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="col-md-12">
                                                                        <div class="hedaing-content">
                                                                        </div>
                                                                        <p><strong><u class="p-2">A.Y.
                                                                                    2023-24</u></strong></p>
                                                                        <ul
                                                                            class="justify-content-center p-2 ">
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Biometric Attendance system</li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                water level controller using Python</li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Home Automation</li>

                                                                        </ul>

                                                                        <p><strong><u class="p-2">A.Y.
                                                                                    2022-23</u></strong></p>
                                                                        <ul class="p-2 ">
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                GUI for error correction in data communication using SCILAB
                                                                            </li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                8051 Development Board

                                                                            </li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                RFID based Attendance system
                                                                            </li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Finger print based attendance system

                                                                            </li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Solar based mobile charger
                                                                            </li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Automatic Plant Watering System using Ardunio

                                                                            </li>

                                                                        </ul>

                                                                        <p><strong><u class="p-2">A.Y.
                                                                                    2021-22</u></strong></p>
                                                                        <ul class="p-2 ">
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                8051 Development Board</li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                RFID & GSM Based Security system using Microcontroller</li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                IoT Based Air & Sound Pollution Monitoring System</li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Remote based Digital Notice Board using GSM Module & Microcontroller
                                                                            </li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Solar based Mobile Charger
                                                                            </li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Alcohol Sensing Alert with Engine Locking System
                                                                            </li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Women Safety Device with GPS Trackinf & Alerts
                                                                            </li>

                                                                        </ul>

                                                                        <p><strong><u class="p-2">A.Y.
                                                                                    2020-21</u></strong></p>
                                                                        <ul class="p-2 ">
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Universal Develoment Board for Practical</li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Hand Gesture For Dumb People
                                                                            </li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Android Streaming Micro Quadcopter with Obstacle detection
                                                                            </li>
                                                                            <li
                                                                                style="list-style-type: disc">
                                                                                Automatic temperture detector in classroom
                                                                            </li>

                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 8TH ACCORDIN ENDS-->
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