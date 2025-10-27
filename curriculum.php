<!DOCTYPE html>
<html lang="en">




<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->


    <!-- favicon -->

    <?php
    include 'common/header-link.php';
    ?>
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            content: "\f105";
            /* Font Awesome chevron-right */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            padding: 0 0.5rem;
            color: #6c757d;
        }

        .breadcrumb {

            height: 0;
            padding-bottom: 8px;
            padding-top: 16px;
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
      
        <!-- breadcrumb end -->


        <!-- Student-Corner -->
        <div class="department-single-area py-120 faq-area">
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">

                        <div class="col-xl-12 col-lg-12"
                            style="overflow-y: scroll; height: 900px; scrollbar-width: none; -ms-overflow-style: none;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Curriculum</li>
                                </ol>
                            </nav>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item mt-5">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="container mt-3 table-responsive">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Sr.No.</th>
                                                            <th>Subject Code</th>
                                                            <th class="text-center">Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include('csmss_poly_dashboard/common/dbcon.php');
                                                        $sql = "SELECT * FROM al_ml ORDER BY ai_id DESC";
                                                        $result = mysqli_query($conn, $sql);
                                                        $sr = 1;

                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $pdfFile = isset($row['pdf']) ? $row['pdf'] : '';
                                                            $subjectCode = isset($row['subject_code']) ? $row['subject_code'] : 'N/A';
                                                            $fileUrl = '../csmss-polytechnic-website/csmss_poly_dashboard/assets/pdf/ai_ml/' . rawurlencode($pdfFile);

                                                            echo "
                                                               <tr>
                                                                  <td class='text-center'>" . $sr . "</td>
                                                                  <td>" . htmlspecialchars($subjectCode) . "</td>
                                                                  <td class='text-center'>
                                                                  <a href='" . $fileUrl . "' class='border-0' download>
                                                                    <i class='far fa-file-pdf'></i>
                                                                  </a>
                                                                  </td>
                                                               </tr>";
                                                            $sr++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            CIVIL ENGINEERING
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <div class="container mt-3 table-responsive">
                                                <table class=" table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Sr.No.</th>
                                                            <th>Subject Code</th>
                                                            <th class="text-center">Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php
                                                        include('csmss_poly_dashboard/common/dbcon.php');
                                                        $sql = "SELECT * FROM civil_engineering ORDER BY ce_id DESC";
                                                        $result = mysqli_query($conn, $sql);
                                                        $sr = 1;

                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $pdfFile = isset($row['pdf']) ? $row['pdf'] : '';
                                                            $subjectCode = isset($row['subject_code']) ? $row['subject_code'] : 'N/A';
                                                            $fileUrl = '../csmss-polytechnic-website/csmss_poly_dashboard/assets/pdf/civil_engineering/' . rawurlencode($pdfFile);

                                                            echo "
                                                               <tr>
                                                                  <td class='text-center'>" . $sr . "</td>
                                                                  <td>" . htmlspecialchars($subjectCode) . "</td>
                                                                  <td class='text-center'>
                                                                  <a href='" . $fileUrl . "' class='border-0' download>
                                                                    <i class='far fa-file-pdf'></i>
                                                                  </a>
                                                                  </td>
                                                               </tr>";
                                                            $sr++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            COMPUTER ENGINEERING
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <div class="container mt-3 table-responsive">
                                                <table class=" table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Sr.No.</th>
                                                            <th>Subject Code</th>
                                                            <th class="text-center">Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php
                                                        include('csmss_poly_dashboard/common/dbcon.php');
                                                        $sql = "SELECT * FROM computer_engineering ORDER BY co_id DESC";
                                                        $result = mysqli_query($conn, $sql);
                                                        $sr = 1;

                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $pdfFile = isset($row['pdf']) ? $row['pdf'] : '';
                                                            $subjectCode = isset($row['subject_code']) ? $row['subject_code'] : 'N/A';
                                                            $fileUrl = '../csmss-polytechnic-website/csmss_poly_dashboard/assets/pdf/computer_engineering/' . rawurlencode($pdfFile);

                                                            echo "
                                                               <tr>
                                                                  <td class='text-center'>" . $sr . "</td>
                                                                  <td>" . htmlspecialchars($subjectCode) . "</td>
                                                                  <td class='text-center'>
                                                                  <a href='" . $fileUrl . "' class='border-0' download>
                                                                    <i class='far fa-file-pdf'></i>
                                                                  </a>
                                                                  </td>
                                                               </tr>";
                                                            $sr++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            ELECTRICAL ENGINEERING
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">



                                            <div class="container mt-3 table-responsive">
                                                <table class=" table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Sr.No.</th>
                                                            <th>Subject Code</th>
                                                            <th class="text-center">Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include('csmss_poly_dashboard/common/dbcon.php');
                                                        $sql = "SELECT * FROM electrical_engineering ORDER BY ee_id DESC";
                                                        $result = mysqli_query($conn, $sql);
                                                        $sr = 1;

                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $pdfFile = isset($row['pdf']) ? $row['pdf'] : '';
                                                            $subjectCode = isset($row['subject_code']) ? $row['subject_code'] : 'N/A';
                                                            $fileUrl = '../csmss-polytechnic-website/csmss_poly_dashboard/assets/pdf/electrical_engineering/' . rawurlencode($pdfFile);

                                                            echo "
                                                               <tr>
                                                                  <td class='text-center'>" . $sr . "</td>
                                                                  <td>" . htmlspecialchars($subjectCode) . "</td>
                                                                  <td class='text-center'>
                                                                  <a href='" . $fileUrl . "' class='border-0' download>
                                                                    <i class='far fa-file-pdf'></i>
                                                                  </a>
                                                                  </td>
                                                               </tr>";
                                                            $sr++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            ELECTRONICS AND TELECOMMUNICATION ENGINEERING
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <div class="container mt-3 table-responsive">
                                                <table class=" table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Sr.No.</th>
                                                            <th>Subject Code</th>
                                                            <th class="text-center">Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT * FROM electronics_and_telecommunication_engineering";
                                                        $result = mysqli_query($conn, $sql);
                                                        $sr = 1;

                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $pdfFile = isset($row['pdf']) ? $row['pdf'] : '';
                                                            $subjectCode = isset($row['subject_code']) ? $row['subject_code'] : 'N/A';
                                                            $fileUrl = '../csmss-polytechnic-website/csmss_poly_dashboard/assets/pdf/en_tc/' . rawurlencode($pdfFile);


                                                            echo "
                                                              <tr>
                                                                  <td class='text-center'>" . $sr . "</td>
                                                                  <td>" . htmlspecialchars($subjectCode) . "</td>
                                                                  <td class='text-center'>
                                                                   <a href='" . $fileUrl . "' class='border-0' download>
                                                                   <i class='far fa-file-pdf'></i>
                                                                   </a>
                                                                  </td>
                                                              </tr>";
                                                            $sr++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            MECHANICAL ENGINEERING
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">


                                            <div class="container mt-3 table-responsive">
                                                <table class=" table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Sr.No.</th>
                                                            <th>Subject Code</th>
                                                            <th class="text-center">Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT * FROM mechanical_engineering";
                                                        $result = mysqli_query($conn, $sql);
                                                        $sr = 1;

                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $pdfFile = isset($row['pdf']) ? $row['pdf'] : '';
                                                            $subjectCode = isset($row['subject_code']) ? $row['subject_code'] : 'N/A';
                                                            $fileUrl = '../csmss-polytechnic-website/csmss_poly_dashboard/assets/pdf/mechanical_engineering/' . rawurlencode($pdfFile);

                                                            echo "
                                                              <tr>
                                                                  <td class='text-center'>" . $sr . "</td>
                                                                  <td>" . htmlspecialchars($subjectCode) . "</td>
                                                                  <td class='text-center'>
                                                                   <a href='" . $fileUrl . "' class='border-0' download>
                                                                   <i class='far fa-file-pdf'></i>
                                                                   </a>
                                                                  </td>
                                                              </tr>";
                                                            $sr++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

</body>


<!-- Mirrored from live.themewild.com/eduka/academic-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:32 GMT -->

</html>