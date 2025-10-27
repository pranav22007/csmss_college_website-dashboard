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
                                        <a href="#Faculty"><i class="far fa-long-arrow-right"></i>Faculty Details</a>
                                        <a href="#headingOne"><i class="far fa-long-arrow-right"></i>Toppers</a>
                                        <a href="#headingTwo"><i class="far fa-long-arrow-right"></i>Student's achievements</a>
                                        <a href="#headingThird"><i class="far fa-long-arrow-right"></i>Department Advisory Board (DAB)</a>
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

                                            $sql = "SELECT * FROM department_slider WHERE department='Mechanical Engineering' ORDER BY id DESC";
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

                                <section id="introduction">
                                    <div class="department-details">
                                        <div class="mb-4">
                                            <h3 class="mb-20">Mechanical Engineering Department</h3>
                                            <p class="mb-20" style="text-align: justify;">was established in the year 2009 with diploma programme in
                                                Mechanical Engineering, Mechanical Engineering is an engineering discipline that
                                                was developed from the application of principles from physics and materials
                                                science. According to the American Heritage Dictionary, it is the branch of
                                                engineering that encompasses the generation and application of heat and
                                                mechanical power and the design, production, and use of machines and tools. It
                                                is one of the oldest and broadest engineering disciplines.</p>
                                            <p class="mb-20" style="text-align: justify;">Mechanical engineers are traditionally concerned with the
                                                conception, design, implementation and operation of mechanical systems. The
                                                field requires a solid understanding of core concepts including mechanics,
                                                kinematics, thermodynamics, fluid mechanics, heat transfer, materials science,
                                                and energy. Mechanical engineers use the core principles as well as other
                                                knowledge in the field to design and analyze manufacturing plants, industrial
                                                equipment and machinery, heating and cooling systems, motor vehicles, aircraft,
                                                watercraft, robotics, medical devices Typical fields of work are aerospace,
                                                energy, machinery, robotics, and transportation and many more.</p>
                                            <!-- img in civil page -->
                                            <!-- <div class="row">
                                        <div class="col-md-6 mb-20">
                                            <img src="assets/img/department/01.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <img src="assets/img/department/02.jpg" alt="">
                                        </div>
                                    </div> -->
                                            <p class="mb-20" style="text-align: justify;">
                                                Mechanical Engineering is a core engineering discipline. This department has
                                                been long recognized for the high quality of its academic and research programs.
                                                The central workshop has a separate building. The workshop has six major
                                                sections namely, fitting, carpentry, welding, smithy, foundry and machine shop.
                                                All the sections are fully equipped with the advanced technology equipment/
                                                machine. The department has well-furnished labs with all the amenities. In the
                                                coming year the department will be having its own research lab.As one of the
                                                finest College of Polytechnic in Maharashtra, we remain committed to excellence
                                                in years to come.
                                            </p>
                                        </div>
                                        <!-- Department Vision start -->
                                        <div class="mb-4">
                                            <h3 class="mb-3">Department Vision</h3>
                                            <p>"To Develop Mechanical Engineers who serves the society and industry through
                                                their technical knowledge"</p>
                                        </div>
                                        <!-- Department Vision end -->
                                        <!-- Department Mission start -->
                                        <div class="mb-4">
                                            <h3 class="mb-3">Department Mission</h3>
                                            <p><b class="text-dark">PEO 1:</b> To provide quality technical education by effective utilization of available resources and defined teaching learning process.</p>
                                            <p> <b class="text-dark">PEO 2:</b> To aware students about mechanical industrial needs by exposing them to industry.</p>
                                            <p><b class="text-dark">PEO 3:</b> To develop quality consciousness by imparting moral values.</p>
                                        </div>
                                        <!-- Department Mission end -->
                                        <!-- Future Plan Start -->
                                        <div class="mb-4">
                                            <h3 class="mb-3">Future Plan</h3>
                                            <ul class="department-single-list">

                                                <li><i class="far fa-check"></i>To Increase the industry institute
                                                    interaction</li>
                                                <li><i class="far fa-check"></i>To develop the industry supported lab by
                                                    Collaborations with industry</li>
                                                <li><i class="far fa-check"></i>To make the department energy conservative
                                                    and also generate energy from renewable sources to enhance green echo
                                                    system</li>
                                                <li><i class="far fa-check"></i>To aware the student to solve complex
                                                    engineering problems related to society and carryout innovative projects
                                                </li>

                                                <li><i class="far fa-check"></i>To establish the centre of excellence</li>
                                                <li><i class="far fa-check"></i>To establish more consultancy services</li>
                                                <li><i class="far fa-check"></i>Making teachers knowledgeable enough to
                                                    train the students as per latest requirement of industries
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Future Plan Start -->
                                        <!-- PEO's start -->
                                        <div class="my-4">
                                            <h3 class="mb-3">Program Educational Objectives(PEO's)</h3>
                                            <p><b class="text-dark">PEO 1:</b>Provide Socially Responsible, Environment
                                                Friendly Solutions To Mechanical Engineering Related Broad-Based Problems
                                                Adapting Professional Ethics.</p>
                                            <p> <b class="text-dark">PEO 2:</b> Adapt State-Of-The-Art Mechanical
                                                Engineering Broad-Based Technologies To Work In Multidisciplinary Work
                                                Environments.</p>
                                            <p><b class="text-dark">PEO 3:</b> Solve Broad-Based Problems Individually And
                                                As A Team Member Communicating Effectively In The World Of Work.</p>
                                        </div>
                                        <!--PEO's end  -->
                                        <!-- PSO start -->
                                        <div class="my-4">
                                            <h3 class="mb-3">Program Specific Outcomes(PSO's)</h3>
                                            <p><b class="text-dark">PSO1:</b> Modern Software Usage: Use Latest Mechanical
                                                Engineering Related Software's For Simple Design, Drafting, Manufacturing,
                                                Maintenance And Documentation Of Mechanical Engineering Components And
                                                Processes. </p>
                                            <p><b class="text-dark">PSO2:</b>Equipment And Instruments: Maintain Equipment
                                                And Instruments Related To Mechanical Engineering.</p>
                                            <p><b class="text-dark">PSO3:</b>Mechanical Engineering Processes: Manage
                                                Mechanical Engineering Processes By Selecting And Scheduling Relevant
                                                Equipment, Substrates, Quality Control Techniques, And Operational
                                                Parameters.</p>
                                        </div>
                                        <!-- PSO's end -->
                                        <!-- PO's start  -->
                                        <div class="my-4">
                                            <h3 class="mb-3">Program Outcome(PO's)</h3>
                                            <p><b class="text-dark">PO1:</b>Basic and Discipline specific knowledge: Apply
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
                                            <p><b class="text-dark">PO5:</b> Engineering Tools, Experimentation and Testing:
                                                Apply modern engineering tools and appropriate technique to conduct standard
                                                tests and measurements.</p>
                                            <p><b class="text-dark">PO6:</b> Project Management: Use engineering management
                                                principles individually, as a team member or a leader to manage projects and
                                                effectively communicate about well-defined engineering activities.</p>
                                            <p><b class="text-dark">PO7:</b> Life-long learning: Ability to analyze
                                                individual needs and engage in updating in the context of technological
                                                changes.</p>
                                        </div>
                                        <!-- PO's end -->
                                    </div>
                                </section>
                                <section id="Admission Capacity">

                                    <h3 class="mb-2 ps-1 text-black" id="intake">Admission Intake Capacity : 60</h3>

                                    <!-- Accodian start -->
                                    <div class="my-4">
                                        <section id="hod_message">
                                            <div class="accordion" id="hodAccordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingintake">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            HOD Message
                                                        </button>
                                                    </h2>
                                                    <div id="collapseone" class="accordion-collapse collapse show" aria-labelledby="headingintake"
                                                        data-bs-parent="#hodAccordion">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                    <center><img class="sticky" src="./assets/img/department/HODMech.jpeg" alt="HOD Image" width="150" height="200" style="border-radius:0px;"></center>
                                                                    <center><b>Mr. S. S. Madan</b><br><i>HOD</i></center>
                                                                </div>
                                                                <div class="col-lg-8 col-md-12">
                                                                    <p style="text-align: justify">Welcome to the Department of Mechanical Engineering of CSMSS College of Polytechnic. The Department of Mechanical Engineering established in the year 2009 with an aim to developMechanical Engineers to serve the industry and society.</p>
                                                                    <p style="text-align: justify">The department of Mechanical Engineering received ‘Excellent’ Grade by Maharashtra State Board of Technical Education (MSBTE), Mumbai for the excellent academic performance. The Department is equipped with highly qualified, experienced and young faculty members who devote towards inculcating knowledge and skills in budding Mechanical engineers.</p>
                                                                </div>
                                                                <p style="text-align: justify">Our department has well equipped laboratories and equipments as per MSBTE norms. The department motivates the students for higher studies.</p>
                                                                <p style="text-align: justify">With warm regards!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Form Section Start -->

                                        <!--faculty-details-->
                                        <section id="Faculty">
                                            <h3 class="pt-10 mb-3 mt-3">
                                                Faculty Details
                                            </h3>

                                            <!--first-table-->
                                            <div class="table-responsive">
                                                <table class=" table table-bordered table-hover">
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
                                                                <a
                                                                    href="assets\pdf\department-pdf\mechanical engg\MEFDAY21_22.pdf">A.Y.
                                                                    2021-22</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a
                                                                    href="assets\pdf\department-pdf\mechanical engg\MEFDAY22_23.pdf">A.Y.
                                                                    2022-23</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a
                                                                    href="assets\pdf\department-pdf\mechanical engg\MEFDAY23_24.pdf">A.Y.
                                                                    2023-24</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--first-table-end-->
                                                <!-- Second table -->
                                                <?php
                                                error_reporting(E_ALL);
                                                ini_set('display_errors', 1);
                                                include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                $sql = "SELECT * FROM faculty_details WHERE department LIKE 'Mechanical%' ORDER BY id DESC";
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

                                                                    Qualification
                                                                </th>
                                                                <th>

                                                                    Designation

                                                                </th>
                                                                <th>

                                                                    Profile

                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody><?php if (mysqli_num_rows($result) > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"><?= htmlspecialchars($row['id']); ?></a>
                                                                        </td>
                                                                        <td> <a
                                                                                href="#"><?= htmlspecialchars($row['name']); ?></a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#">
                                                                                <?= htmlspecialchars($row['qualification']); ?></a>
                                                                        </td>
                                                                        <td>

                                                                            <b> <a
                                                                                    href="#"><?= htmlspecialchars($row['designation']); ?></a></b>

                                                                        </td>
                                                                        <td class="text-center">
                                                                            <a href="assets\pdf\department-pdf\mechanical engg\Madan Sir.pdf"
                                                                                target="_blank" class="btn text-white"
                                                                                id="view-button">
                                                                                <i class="fa-regular fa-eye text-white"></i>
                                                                                View
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
                                        </section>
                                        <!-- second-table-end-->

                                        <!-- Form Section Ends  -->

                                        <!-- Accordin Main Start -->

                                        <!--Accordin section started here-->
                                        <section id="Accordion-section">
                                            <div class="faq-area">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-6 w-100">
                                                            <div class="accordion" id="accordionExample">
                                                                <!--first accordion started-->
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header p-lg-2" id="headingOne">
                                                                        <button class="accordion-button collapsed"
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

                                                                            <div class="hedaing-content">
                                                                            </div>
                                                                            <ul>
                                                                                <li>Following are the overall toppers of Mechanical Engineering department for the academic year 2022-23. </li>
                                                                                <p class="mt-lg-3 mb-lg-3"><strong><u>Toppers of FY ME</u></strong></p>
                                                                            </ul>
                                                                            <!--first table in started first Accordion-->
                                                                            <?php
                                                                            error_reporting(E_ALL);
                                                                            ini_set('display_errors', 1);
                                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                            $sql = "SELECT * FROM toppers WHERE department='Mechanical Engineering' AND year = 'First-Year' ORDER BY id DESC";
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
                                                                            <!--first table in end first Accordion-->

                                                                            <!--second table in started first Accordion-->
                                                                            <ul>
                                                                                <p class="mt-lg-3 mb-lg-3"><strong><u>Toppers of SY ME</u></strong></p>
                                                                            </ul>
                                                                            <?php
                                                                            error_reporting(E_ALL);
                                                                            ini_set('display_errors', 1);
                                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                            $sql = "SELECT * FROM toppers WHERE department='Mechanical Engineering' AND year = 'Second-Year' ORDER BY id DESC";
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
                                                                            <!--second table in end first Accordion-->

                                                                            <!--third table in started first Accordion-->
                                                                            <ul>
                                                                                <p class="mt-lg-3 mb-lg-3"><strong><u>Toppers of TY ME</u></strong></p>
                                                                            </ul>
                                                                            <?php
                                                                            error_reporting(E_ALL);
                                                                            ini_set('display_errors', 1);
                                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                            $sql = "SELECT * FROM toppers WHERE department='Mechanical Engineering' AND year = 'Third-Year' ORDER BY id DESC";
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
                                                                            <!--third table in end first Accordion-->
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
                                                                            $sql = "SELECT * FROM student_achievement WHERE department='Mechanical Engineering' ORDER BY id DESC";
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

                                                                <!--Third Accordion Start -->
                                                                <div class="accordion-item p-2 ">
                                                                    <h2 class="accordion-header" id="headingThird">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseThird" aria-expanded="true" aria-controls="collapseThird">
                                                                            DEPARTMENT ADVISORY BOARD (DAB)
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseThird" class="accordion-collapse collapse" aria-labelledby="headingThird"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <?php
                                                                            error_reporting(E_ALL);
                                                                            ini_set('display_errors', 1);
                                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                            $sql = "SELECT * FROM department_advisory WHERE department='Mechanical Engineering' ORDER BY id DESC";
                                                                            $result = mysqli_query($conn, $sql);
                                                                            ?>
                                                                            <div class="mt-3 table-responsive">
                                                                                <table class="table table-bordered table-hover">
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Third Accordion end -->

                                                                <!-- Fourth Accordion start -->
                                                                <!-- mechanical start -->
                                                                <div class="accordion-item p-2 ">
                                                                    <h2 class="accordion-header" id="headingFourth">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseFourth" aria-expanded="true" aria-controls="collapseFourth">
                                                                            PROGRAMME ASSESSMENT COMMITTEE (PAC)
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseFourth" class="accordion-collapse collapse"
                                                                        aria-labelledby="headingFourth" data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <?php
                                                                            error_reporting(E_ALL);
                                                                            ini_set('display_errors', 1);
                                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                            $sql = "SELECT * FROM program WHERE choose_department LIKE 'Mechanical%' ORDER BY id DESC";
                                                                            $result = mysqli_query($conn, $sql);
                                                                            ?>
                                                                            <div class="mt-3 table-responsive">
                                                                                <table class="table table-bordered table-hover">
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
                                                                <!-- mechanical end -->
                                                                <!-- Fourth Accordion end -->


                                                                <!--fifth accordion started-->
                                                                <div class="accordion" id="accordionExample">
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header p-lg-2" id="headingFifth">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapseOne">
                                                                                LIST OF LABORATORIES
                                                                            </button>
                                                                        </h2>
                                                                        <div id="collapsefive" class="accordion-collapse collapse"
                                                                            aria-labelledby="headingFifth" data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body">
                                                                                <?php
                                                                                error_reporting(E_ALL);
                                                                                ini_set('display_errors', 1);
                                                                                include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                                $sql = "SELECT * FROM list_data WHERE department LIKE 'Mechanical%' ORDER BY id DESC";
                                                                                $result = mysqli_query($conn, $sql);
                                                                                ?>
                                                                                <div class="mt-3 table-responsive">
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

                                                                                                    Cost of Equipments (Rs.) <br>

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
                                                                                <!--fifth Accordion end-->
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <!--six Accordion start-->
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header p-lg-2" id="headingSixth">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapsesix" aria-expanded="true" aria-controls="collapseTwo">
                                                                                OUR ALUMNI
                                                                            </button>
                                                                        </h2>
                                                                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingSixth"
                                                                            data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body">
                                                                                <?php
                                                                                error_reporting(E_ALL);
                                                                                ini_set('display_errors', 1);
                                                                                include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                                $sql = "SELECT * FROM our_alumni WHERE department LIKE 'Mechanical%' ORDER BY id DESC";
                                                                                $result = mysqli_query($conn, $sql);
                                                                                ?>
                                                                                <div class="mt-3 table-responsive">
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
                                                                    <!--six Accordion end-->

                                                                    <!--seven Accordion start-->
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header p-lg-2" id="headingseventh">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseseven" aria-expanded="true" aria-controls="collapseTwo">
                                                                                STUDENTS' ASSOCIATION (MESA) 2023-24:
                                                                            </button>
                                                                        </h2>
                                                                        <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseventh"
                                                                            data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body">
                                                                                <?php
                                                                                error_reporting(E_ALL);
                                                                                ini_set('display_errors', 1);
                                                                                include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                                $sql = "SELECT * FROM student_association WHERE department='Mechanical Engineering' ORDER BY id DESC";
                                                                                $result = mysqli_query($conn, $sql);
                                                                                ?>
                                                                                <div class="mt-3 table-responsive">
                                                                                    <table class="table table-bordered table-hover">
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
                                                                    <!--seventh Accordion end-->

                                                                    <!--eight Accordion start-->
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header p-lg-2" id="headingeight">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseeight" aria-expanded="true" aria-controls="collapseTwo">
                                                                                DEPARTMENT MOU's
                                                                            </button>
                                                                        </h2>
                                                                        <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                                                                            data-bs-parent="#accordionExample">
                                                                            <div class="mt-3 table-responsive">
                                                                                <?php
                                                                                error_reporting(E_ALL);
                                                                                ini_set('display_errors', 1);
                                                                                include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                                $sql = "SELECT * FROM mous_data WHERE department='Mechanical Engineering' ORDER BY id DESC";
                                                                                $result = mysqli_query($conn, $sql);
                                                                                ?>
                                                                                <table class="table table-bordered table-hover">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>

                                                                                                Sr. No.


                                                                                            </th>
                                                                                            <th>

                                                                                                Name of Company


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
                                                                    <!--eight Accordion end-->

                                                                    <!--nine Accordion start-->
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header p-lg-2" id="headingnine">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapsenine" aria-expanded="true" aria-controls="collapseTwo">
                                                                                DEPARTMENT PROJECTS
                                                                            </button>
                                                                        </h2>
                                                                        <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine"
                                                                            data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body">
                                                                                <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y. 2023-24</u></strong></p>
                                                                                <ul>
                                                                                    <li style="list-style-type: disc;">Eye Blink Sensor Smart Irrigation System</li>

                                                                                    <li style="list-style-type: disc;">Automatic bike stand</li>
                                                                                    <li style="list-style-type: disc;">Electriciy Generation by using foot step</li>
                                                                                    <li style="list-style-type: disc;">To find a mechanism which keeps the workpiece clamped unless the entire machining is done</li>
                                                                                    <li style="list-style-type: disc;">Shaft Driven Bicycle</li>
                                                                                    <li style="list-style-type: disc;">Regenerative Braking System</li>
                                                                                    <li style="list-style-type: disc;">Solution on Blow Holes in Casting</li>
                                                                                    <li style="list-style-type: disc;">Cut-Section of Vehicle</li>
                                                                                    <li style="list-style-type: disc;">Air Water Heater</li>
                                                                                    <li style="list-style-type: disc;">Steering Control Head Light </li>
                                                                                </ul>

                                                                                <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y. 2022-23</u></strong></p>
                                                                                <ul>
                                                                                    <li style="list-style-type: disc;">Solar radiation tracking system</li>
                                                                                    <li style="list-style-type: disc;">Solar energy operated grass cutter</li>
                                                                                    <li style="list-style-type: disc;">Automatic spray pump</li>
                                                                                    <li style="list-style-type: disc;">Alchohol detector</li>
                                                                                    <li style="list-style-type: disc;">Mobile hydro-electric generator</li>
                                                                                    <li style="list-style-type: disc;">Solar panel cleaning machine</li>
                                                                                    <li style="list-style-type: disc;">Belt drive grinding machine</li>
                                                                                    <li style="list-style-type: disc;">Air pollution control electrostatic precipetator</li>
                                                                                    <li style="list-style-type: disc;">Ecofriendly road footpath cleaning machine</li>
                                                                                    <li style="list-style-type: disc;">Smart dust bin</li>
                                                                                    <li style="list-style-type: disc;">Solar electric vehicle</li>
                                                                                    <li style="list-style-type: disc;">Collision mitigation adas system.</li>
                                                                                    <li style="list-style-type: disc;">Electromagnetic breaking system</li>
                                                                                    <li style="list-style-type: disc;">Ecofriendly pyrolysis product</li>

                                                                                </ul>

                                                                                <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y. 2021-22</u></strong></p>
                                                                                <ul>
                                                                                    <li style="list-style-type: disc;">Semi Automated Floor cleaning Machine</li>
                                                                                    <li style="list-style-type: disc;">Automatic Dog Feeder</li>
                                                                                    <li style="list-style-type: disc;">Electrically Height adjustable Table</li>
                                                                                    <li style="list-style-type: disc;">Pedal Power</li>
                                                                                    <li style="list-style-type: disc;">U turn accident prevention</li>
                                                                                    <li style="list-style-type: disc;">Obstacle Avoider Robot</li>
                                                                                    <li style="list-style-type: disc;">LPG and CNG Gas Detector</li>
                                                                                    <li style="list-style-type: disc;">Box Shifting Machine</li>
                                                                                    <li style="list-style-type: disc;">Regenerative Bracking System</li>
                                                                                    <li style="list-style-type: disc;">Singlr Axis Solar Tracker</li>
                                                                                    <li style="list-style-type: disc;">Design And Fabrication of Agriculture sprayer</li>
                                                                                    <li style="list-style-type: disc;">Electromagnetic Braking System</li>
                                                                                    <li style="list-style-type: disc;">Green Energy City</li>

                                                                                </ul>

                                                                                <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y. 2020-21</u></strong></p>
                                                                                <ul>
                                                                                    <li style="list-style-type: disc;">Power Hammering Machine</li>
                                                                                    <li style="list-style-type: disc;"> Find out Defect and maintenance with Bagga Boring Works</li>
                                                                                    <li style="list-style-type: disc;"> Design and development of fixture with Galexy Engineering works</li>
                                                                                    <li style="list-style-type: disc;"> Vehicle Black Box System (VBBS)</li>
                                                                                    <li style="list-style-type: disc;"> Surface Condensor</li>
                                                                                    <li style="list-style-type: disc;"> Impacts of jet (Experimental set up)</li>
                                                                                    <li style="list-style-type: disc;"> Pedal Operated Hacksaw</li>
                                                                                    <li style="list-style-type: disc;"> Development of material handling system with Abhijeet Agro Center</li>
                                                                                    <li style="list-style-type: disc;"> Design of Burr cleaning system with Prabhakar Engineering</li>
                                                                                    <li style="list-style-type: disc;"> Solar Tree</li>
                                                                                    <li style="list-style-type: disc;"> Automatic Black Borad Cleaner</li>
                                                                                </ul>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--nine Accordion end-->
                                                                    <!--Accordin section End here-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </section>
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