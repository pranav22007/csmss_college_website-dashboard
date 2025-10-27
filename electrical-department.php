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
                                    <!-- Carousel -->
                                    <!-- Carousel Start -->
                                    <div id="departmentCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php
                                            error_reporting(E_ALL);
                                            ini_set('display_errors', 1);
                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';

                                            $sql = "SELECT * FROM department_slider WHERE department='Electrical Engineering' ORDER BY id DESC";
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
                                            <h3 class="mb-20"> Electrical engineering </h3>
                                            <p class="mb-20" style="text-align: justify;">
                                                department was established in 2010. It is a field of engineering that generally
                                                deals with the study and application of electricity, electronics, and
                                                electromagnetism. This field first became an identifiable occupation in the
                                                latter half of the 19th century after commercialization of the electric
                                                telegraph, the telephone, and electric power distribution and use. Subsequently,
                                                broadcasting and recording media made electronics part of daily life. The
                                                invention of the transistor and, subsequently, the integrated circuit brought
                                                down the cost of electronics to the point where they can be used in almost any
                                                household object. </p>
                                            <p class="mb-20" style="text-align: justify;"> Electrical engineering has now subdivided into a wide range of
                                                subfields including electronics, digital computers, power
                                                engineering,telecommunications, control systems, RF engineering, signal
                                                processing, instrumentation, and microelectronics. The subject of electronic
                                                engineering is often treated as its own subfield but it intersects with all the
                                                other subfields, including the power electronics of power engineering.</p>
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
                                                Electrical engineers typically hold a degree in electrical engineering or
                                                electronic engineering. Practicing engineers may have professional certification
                                                and be members of a professional body. Such bodies include the Institute of
                                                Electrical and Electronic Engineers (IEEE) and theInstitution of Engineering and
                                                Technology (IET).
                                            </p>
                                            <p class="mb-20" style="text-align: justify;"> Electrical graduate are employed in Electricity Boards/Utility
                                                companies and large industries as engineers and managers, responsible for
                                                installation, maintenance, operation of power handling equipments and systems.
                                                Industries manufacturing large electrical machines and equipments employ
                                                engineers in design, production and testing. Educational Institutions and
                                                Research establishments recruit electrical engineers as faculty and scientists.
                                            </p>
                                        </div>
                                        <!-- Department Vision start -->
                                        <div class="mb-3">
                                            <h3 class="mb-3">Department Vision</h3>
                                            <p>"To develop the competent Electrical Engineers with hands-on skills and moral
                                                values to face the challenges of Society and Industry"</p>
                                        </div>
                                        <!-- Department Vision end -->
                                        <!-- Department Mission start -->
                                        <div class="mb-4">
                                            <h3 class="mb-3">Department Mission</h3>
                                            <ul class="department-single-list">
                                                <li><i class="far fa-check"></i>To impart the technical knowledge of the
                                                    discipline among the students with reference to multidisciplinary
                                                    approach
                                                </li>
                                                <li><i class="far fa-check"></i>To provide platform to the students through
                                                    strong linkage with industry for their professional skills</li>
                                                <li><i class="far fa-check"></i>To create effective awareness among the
                                                    students regarding social and environment responsibilities
                                                </li>
                                                <li><i class="far fa-check"></i>To prepare students having ethical standards
                                                    and leadership qualities for life-long learning
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Department Mission end -->
                                        <!-- Future Plan Start -->
                                        <div class="mb-4">
                                            <h3 class="mb-3">Future Plan</h3>
                                            <ul class="department-single-list">
                                                <b>Short Term Goals</b>
                                                <li><i class="far fa-check"></i>Entrepreneurship development: Promote
                                                    entrepreneurial skills and encourage students to develop their own
                                                    projects</li>
                                                <li><i class="far fa-check"></i>Placement assistance: Improve placement
                                                    records through career counseling and training</li>
                                                <li><i class="far fa-check"></i>Industry collaborations: Establish
                                                    collaborations with local industries for projects and placements </li>
                                                <li><i class="far fa-check"></i>Improve pass percentage: Aim for a
                                                    significant increase in the overall pass percentage of the department
                                                </li>
                                                <br>
                                                <b>Long Term Goals</b>
                                                <li><i class="far fa-check"></i>Become a Center of Excellence: Position the
                                                    department as a leading institution for electrical engineering diploma
                                                    programs in the region</li>
                                                <li><i class="far fa-check"></i>Research and Development: Foster a culture
                                                    of research and innovation among faculty and students</li>
                                                <li><i class="far fa-check"></i>Industry-Aligned Programs: Develop
                                                    specialized programs to meet the specific needs of the local industry
                                                </li>
                                                <li><i class="far fa-check"></i>Social Responsibility: Engage in community
                                                    service projects related to electrical engineering, such as energy
                                                    efficiency initiatives.
                                                </li>
                                                <li><i class="far fa-check"></i>Alumni Network: Build a strong alumni
                                                    network to support the department's growth</li>
                                                <li><i class="far fa-check"></i>Accreditation: Achieve and maintain national
                                                    and international accreditation for the department</li>
                                            </ul>
                                        </div>
                                        <!-- Future Plan Start -->
                                        <!-- PEO's start -->
                                        <div class="my-4">
                                            <h3 class="mb-3">Program Educational Objectives(PEO's)</h3>
                                            <p><b class="text-dark">PEO 1:</b>Provide socially responsible, environment friendly solutions to electrical engineering relate broad based problems adopting professional ethics.</p>
                                            <p> <b class="text-dark">PEO 2:</b> Adapt state of the art electrical engineering broad based technologies to work in multi-disciplinary work.</p>
                                            <p><b class="text-dark">PEO 3:</b> Solve Broad-based problems individually and as a team member communicating effectively in the world of work.</p>

                                        </div>
                                        <!--PEO's end  -->
                                        <!-- PSO start -->
                                        <div class="my-4">
                                            <h3 class="mb-3">Program Specific Outcomes(PSO's)</h3>
                                            <p><b class="text-dark">PSO1:</b> Electrical Equipment: Maintain various types of rotating and static electrical equipments.</p>
                                            <p><b class="text-dark">PSO2:</b> Electric Power Systems: Maintain different types of electrical power systems.</p>
                                        </div>
                                        <!-- PSO's end -->
                                        <!-- PO's start  -->
                                        <div class="my-4">
                                            <h3 class="mb-3">Program Outcome(PO's)</h3>
                                            <p><b class="text-dark">PO1:</b> Basic and Discipline specific knowledge: Apply knowledge of basic mathematics, science and engineering fundamentals and engineering specialization to solve the engineering problems.
                                            <p><b class="text-dark">PO2:</b> Problem analysis: Identify and analyze well-defined engineering problems using codified standard methods.</p>
                                            <p><b class="text-dark">PO3:</b> Design/ development of solutions: Design solutions for well-defined technical problems and assist with the design of systems components or processes to meet specified needs.
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
                                    </div>
                                </section>
                            </div>

                            <h3 class="mb-2 ps-1 text-black " id="intake">Admission Intake Capacity : 60</h3>
                            <!-- Accodian start -->
                            <section id="hod_message">
                                <div class="container my-5">
                                    <div class="accordion" id="hodAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingintake">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseHOD" aria-expanded="true" aria-controls="collapseOne">
                                                    HOD Message
                                                </button>
                                            </h2>
                                            <div id="collapseHOD" class="accordion-collapse collapse show" aria-labelledby="headingintake"
                                                data-bs-parent="#hodAccordion">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                            <center><img class="sticky" src="assets\img\department\HOD-Electrical.jpg" alt="HOD Image" width="150" height="200" style="border-radius:0px;"></center>
                                                            <center><b>Mr. C. V. Rahane</b><br><i>HOD</i></center>
                                                        </div>
                                                        <div class="col-lg-8 col-md-12">
                                                            <p>Dear Electrical Students,</p>
                                                            <p style="text-align: justify;">A warm welcome in the electrical department! We are thrilled to have you
                                                                on board and to be a part of academic journey. As you begin your
                                                                studies, I want to assure you that our department is committed to
                                                                provide a comprehensive and engaging learning experience. Our faculties
                                                                are eager us to help, inculcate the skills and knowledge needed to be
                                                                successful in the field of electrical engineering.</p>
                                                            <p style="text-align: justify;">In the coming years, you will have the opportunity to explore a wide
                                                                range of topics, from circuit analysis and electronics to power</p>
                                                        </div>
                                                        <p style="text-align: justify;">systems and control engineering. You will also have access to
                                                            state-of-the-art laboratories and facilities, where you can
                                                            appltheoretical concepts to real-world problems.
                                                            I encourage you to be curious, ask questions, and seek help when needed.
                                                            Our faculty and staff are here to support you every step of the way.
                                                            Once again, welcome in the electrical department! We look forward to see
                                                            your growth and achievements.
                                                        </p>
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
                                <?php
                                error_reporting(E_ALL);
                                ini_set('display_errors', 1);
                                include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                $sql = "SELECT * FROM faculty_details WHERE department LIKE 'Electrical%' ORDER BY id DESC";
                                $result = mysqli_query($conn, $sql);
                                ?>

                                <!--table-started-->
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
                                                            <a href="#"><?= htmlspecialchars($row['designation']); ?></a>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="assets\pdf\department-pdf\Electrical\Rahane Sir.pdf"
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
                            </section>
                            <!--table-end-->
                            <!-- Accordin Main Start -->

                            <!--Accordin section started here-->
                            <section id="Accordion-section">
                                <div class="faq-area">

                                    <div class="row">
                                        <div class="col-lg-6 w-100">
                                            <div class="accordion" id="accordionExample">
                                                <!--first accordion started-->
                                                <div class="accordion-item p-2">
                                                    <h2 class="accordion-header" id="headingOne">
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
                                                                    Following are the overall toppers of civil engineering department
                                                                    for the academic year 2022-23.
                                                                </li>
                                                            </ul>
                                                            <h5 style="margin-bottom: 10px"><u>Toppers of FY EE</u></h5>
                                                            <!--first table started-->

                                                            <?php
                                                            error_reporting(E_ALL);
                                                            ini_set('display_errors', 1);
                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                            $sql = "SELECT * FROM toppers WHERE department='Electrical Engineering' AND year = 'First-Year' ORDER BY id DESC";
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
                                                            <h5 style="margin-bottom: 10px; margin-top: 20px">
                                                                <u>Toppers of SY EE</u>
                                                            </h5>

                                                            <?php
                                                            error_reporting(E_ALL);
                                                            ini_set('display_errors', 1);
                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                            $sql = "SELECT * FROM toppers WHERE department='Electrical Engineering' AND year = 'Second-Year' ORDER BY id DESC";
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
                                                                <u>Toppers of TY EE</u>
                                                            </h5>
                                                            <?php
                                                            error_reporting(E_ALL);
                                                            ini_set('display_errors', 1);
                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                            $sql = "SELECT * FROM toppers WHERE department='Electrical Engineering' AND year = 'Third-Year' ORDER BY id DESC";
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
                                                            $sql = "SELECT * FROM student_achievement WHERE department='Electrical Engineering' ORDER BY id DESC";
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
                                                <div class="accordion-item p-2">
                                                    <h2 class="accordion-header" id="headingThird">
                                                        <button
                                                            class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThird"
                                                            aria-expanded="true"
                                                            aria-controls="collapseThird">
                                                            DEPARTMENT ADVISORY BOARD (DAB)
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapseThird"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="headingThird"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <?php
                                                            error_reporting(E_ALL);
                                                            ini_set('display_errors', 1);
                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                            $sql = "SELECT * FROM department_advisory WHERE department='Electrical Engineering' ORDER BY id DESC";
                                                            $result = mysqli_query($conn, $sql);
                                                            ?>
                                                            <!--first table started-->
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Sr. No.</th>
                                                                            <th>Name of the Committee Member</th>
                                                                            <th>Details <br /></th>
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
                                                <!-- electrical start -->
                                                <div class="accordion-item p-2">
                                                    <h2 class="accordion-header" id="headingFourth">
                                                        <button
                                                            class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFourth"
                                                            aria-expanded="true"
                                                            aria-controls="collapseFourth">
                                                            PROGRAMME ASSESSMENT COMMITTEE (PAC)
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapseFourth"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="headingFourth"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <?php
                                                            error_reporting(E_ALL);
                                                            ini_set('display_errors', 1);
                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                            $sql = "SELECT * FROM program WHERE choose_department LIKE 'Electrical%' ORDER BY id DESC";
                                                            $result = mysqli_query($conn, $sql);
                                                            ?>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Sr. No.</th>
                                                                            <th>Name of Faculty</th>
                                                                            <th>Representation <br /></th>
                                                                            <th>Designation <br /></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php if (mysqli_num_rows($result) > 0) {
                                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                        ?>
                                                                                <tr>
                                                                                    <td rowspan="1"><a href="#"><?= htmlspecialchars($row['id']); ?></a></td>
                                                                                    <td rowspan="1"><a href="#"><?= htmlspecialchars($row['name_of_faculty']); ?></a></td>
                                                                                    <td><a href="#"><?= htmlspecialchars($row['representation']); ?></a></td>
                                                                                    <td><a href="#"><?= htmlspecialchars($row['designation']); ?></a></td>
                                                                                </tr>

                                                                    </tbody>
                                                                <?php }
                                                                        } else { ?>
                                                                <p class="text-center">No events available</p>
                                                            <?php } ?>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- electrical end -->
                                                <!-- Fourth Accordion end -->

                                                <!--fifth accordion started-->
                                                <div class="accordion-item p-2">
                                                    <h2 class="accordion-header" id="headingFifth">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapseOne">
                                                            LIST OF LABORATORIES
                                                        </button>
                                                    </h2>
                                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingFifth"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <?php
                                                            error_reporting(E_ALL);
                                                            ini_set('display_errors', 1);
                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                            $sql = "SELECT * FROM list_data WHERE department LIKE 'Electrical%' ORDER BY id DESC";
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
                                                                        <!-- and so on... -->
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--fifth Accordion end-->
                                                        </div>
                                                    </div>
                                                </div>





                                                <!--six Accordion start-->
                                                <div class="accordion-item p-2">
                                                    <h2 class="accordion-header" id="headingSixth">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                                            aria-expanded="true" aria-controls="collapseTwo">
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
                                                            $sql = "SELECT * FROM our_alumni WHERE department LIKE 'Electrical%' ORDER BY id DESC";
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
                                                                                Year of Passing <br>
                                                                            </th>
                                                                            <th>
                                                                                Achievement Details <br>
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
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--six Accordion end-->



                                                <!--Seven Accordion Start-->
                                                <div class=" accordion-item p-2">
                                                    <h2 class="accordion-header" id="headingseventh">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseseven" aria-expanded="true" aria-controls="collapseseven">
                                                            STUDENTS' ASSOCIATION (EESA)-2024-25
                                                        </button>
                                                    </h2>
                                                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseventh"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <!--seven table started-->
                                                            <?php
                                                            error_reporting(E_ALL);
                                                            ini_set('display_errors', 1);
                                                            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                            $sql = "SELECT * FROM student_association WHERE department='Electrical engineering' ORDER BY id DESC";
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
                                                <!--Seven Accordion end-->




                                                <!--eight Accordion start-->
                                                <div class="accordion-item p-2">
                                                    <h2 class="accordion-header" id="headingeight">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                                            DEPARTMENT MOU's
                                                        </button>
                                                    </h2>
                                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="table-responsive">
                                                                <?php
                                                                error_reporting(E_ALL);
                                                                ini_set('display_errors', 1);
                                                                include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                                                                $sql = "SELECT * FROM mous_data WHERE department='Electrical Engineering' ORDER BY id DESC";
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
                                                            <!--eight table end-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--eight Accordion end-->

                                                <!--nine Accordion start-->
                                                <div class="accordion-item p-2">
                                                    <h2 class="accordion-header" id="headingnine">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapsenine" aria-expanded="true" aria-controls="collapseTwo">
                                                            DEPARTMENT PROJECTS
                                                        </button>
                                                    </h2>
                                                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="col-md-12">
                                                                <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y. 2023-24</u></strong></p>
                                                                <ul>
                                                                    <li style="list-style-type: disc;">PA system for College Announcement</li>
                                                                    <li style="list-style-type: disc;">Energy Audit of CSMSS College of Polytechnic</li>
                                                                    <li style="list-style-type: disc;">Wind solar street lighting system</li>
                                                                    <li style="list-style-type: disc;">home automation using Arduino</li>
                                                                    <li style="list-style-type: disc;">Biometric Attendance System Using Fingerprint Sensor with Google Sheet</li>
                                                                    <li style="list-style-type: disc;">Prepaid Energy Meter using Arduino</li>
                                                                    <li style="list-style-type: disc;">Maintenance of Water Cooler</li>
                                                                    <li style="list-style-type: disc;">Automatic Phase Changer</li>
                                                                    <li style="list-style-type: disc;">Control panel modification &amp; reinstallation at CSMSS College of Polytechnic</li>

                                                                </ul>

                                                                <p class="mt-lg-3 mb-lg-3"><strong><u>A.Y.2022-23</u></strong></p>
                                                                <ul>
                                                                    <li style="list-style-type: disc;"> Solar Inverter</li>
                                                                    <li style="list-style-type: disc;"> Overhead Projector</li>
                                                                    <li style="list-style-type: disc;"> Multipurpose automatic electric bell for educational institutes</li>
                                                                    <li style="list-style-type: disc;"> An Electric grain Filtration Machine</li>
                                                                    <li style="list-style-type: disc;"> Solar Powered LED street lightning with auto Intensity Control</li>
                                                                    <li style="list-style-type: disc;"> Innovative techniques to reduce temperature and sound effect</li>
                                                                    <li style="list-style-type: disc;"> E-bicycle</li>
                                                                    <li style="list-style-type: disc;"> Vaccum Cleaner</li>
                                                                    <li style="list-style-type: disc;"> Automatic Punching Machine</li>
                                                                    <li style="list-style-type: disc;"> Home Lightning using Solar Energy</li>
                                                                    <li style="list-style-type: disc;"> The Design and construction of Inverter</li>
                                                                    <li style="list-style-type: disc;"> Maintenance of OHP Projector</li>

                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- accordian DEPARTMENT PROJECT end -->
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