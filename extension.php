<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from live.themewild.com/eduka/event-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:37 GMT -->

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
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fda31b;
            background-color: transparent;
        }

        .nav-link {
            color: black;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: "\f105";
            /* Font Awesome chevron-right */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            padding: 0 0.5rem;
            color: #6c757d;
        }

        .breadcrumb {
            margin-left: 157px;
            height: 0;
            padding-top: 21px;
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
    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Extension of Approval and Audit Report FY</li>
        </ol>
    </nav>
    <!-- breadcrumb end -->
    <!-- accordion for Extension of Approval -->
    <!-- Accordion: Extension of Approval -->
    <div class="col-lg-12">
        <div class="container mt-4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Exten"
                aria-expanded="false" aria-controls="Exten">
                <span class="widget-title fs-2">Extension of Approval</span>
            </button>
            </h2>
        </div>
        <div class="container mt-3 table-responsive">
            <table class=" table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Particulars</th>
                        <th class="text-center">Year</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include __DIR__ . '/../csmss-polytechnic-website/csmss_poly_dashboard/common/dbcon.php';

                    $query = "SELECT * FROM extension_of_approval ORDER BY extension_of_approval_id DESC";
                    $result = mysqli_query($conn, $query);

                    if (!$result) {
                        echo "<tr><td colspan='3' class='text-danger'>SQL Error: " . mysqli_error($conn) . "</td></tr>";
                    } else {
                        if (mysqli_num_rows($result) > 0) {
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                                    <td class="text-center">
                                        <a href="csmss_poly_dashboard/assets/pdf/audit_report_fy/extension_approval/<?php echo htmlspecialchars($row['pdf']); ?>"
                                            target='_blank' class="btn text-white" id="view-button">
                                            <i class="fa-regular fa-eye text-white"></i> View
                                        </a>
                                    </td>
                                </tr>
                    <?php }
                        } else {
                            echo "<tr><td colspan='3' class='text-center'>No Extension of Approval records found.</td></tr>";
                        }
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Accordion: Audit Report -->
    <div class="col-lg-12">
        <div class="container">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Audi"
                aria-expanded="false" aria-controls="Audi">
                <span class="widget-title fs-2">Audit Report FY</span>
            </button>
        </div>

        <div class="container mt-3 mb-5 table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Particulars</th>
                        <th class="text-center">View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
                    $sql = "SELECT * FROM audit ORDER BY audit_id DESC";
                    $result = mysqli_query($conn, $sql);
                    $sr = 1;

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $sr++ . "</td>";
                            echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                            echo "<td class='text-center'>
                                <a href='csmss_poly_dashboard/assets/pdf/audit_report_fy/report/" . htmlspecialchars($row['pdf']) . "' target='_blank' class='btn text-white' id='view-button'>
                                    <i class='fa-regular fa-eye text-white'></i> View
                                </a>
                              </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3' class='text-center'>No Audit Reports Available</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    </div>


    </div>

    <!--  single area end -->

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


<!-- Mirrored from live.themewild.com/eduka/event-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:39 GMT -->

</html>