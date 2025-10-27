<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandatory Disclosure</title>
    <?php include 'common/header-link.php'; ?>
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
    <!-- header area -->
    <?php include 'common/header.php'; ?>
    <!-- header area end -->
    <main class="main">
        <!-- breadcrumb -->

        <!-- breadcrumb end -->
        <div class="department-single-area py-120 faq-area">
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                        <!-- Sidebar -->

                        <!-- Forms List -->
                        <div class="col-xl-12 col-lg-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Disclosure</li>
                                </ol>
                            </nav>
                            <div class="accordion" id="accordionExample">
                                <div class="widget event-single-info mt-5">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h4 class="widget-title mt-5 text-center">Disclosure</h4>
                                    </button>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                           <?php
                                            include('csmss_poly_dashboard/common/dbcon.php');

                                            $sql = "SELECT * FROM disclosure ORDER BY d_id DESC";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<div class="col-lg-12 col-md-12">
                                                 <div class="choose-item m-3">
                                                       <div class="choose-item-icon">
                                                            <img src="assets/img/icon/teacher-2.svg" alt="">
                                                     </div>
                                                     <div class="choose-item-info d-flex align-items-center justify-content-between">
                                                           <!-- Title from DB -->
                                                           <a href="../csmss-polytechnic-website/csmss_poly_dashboard/assets/pdf/disclosure/' . $row['pdf'] . '" class="flex-grow-1" target="_blank">
                                                              <p class="mt-0 mb-0">' . htmlspecialchars($row['title']) . '</p>
                                                          </a>

                                                           <!-- Download Button -->
                                                           <a href="../csmss-polytechnic-website/csmss_poly_dashboard/assets/pdf/disclosure/' . $row['pdf'] . '" download class="download-btn ms-3">
                                                               <i class="fa-solid fa-file-arrow-down"></i>
                                                           </a>
                                                       </div>
                                                  </div>
                                                  </div>';
                                                }
                                            } else {
                                                echo "<p class='text-muted text-center'>No placements found</p>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Forms List -->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer area -->
    <?php include 'common/footer.php'; ?>
    <!-- footer area end -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
    <?php include 'common/footer-link.php'; ?>
</body>

</html>
<?php $conn->close(); ?>