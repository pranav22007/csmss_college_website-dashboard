<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from live.themewild.com/eduka/academic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:32 GMT -->

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

        <!-- department area -->
        <div class="department-area py-120">
            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            include __DIR__ . '../csmss_poly_dashboard/common/dbcon.php';
            $sql = "SELECT * FROM department ORDER BY id DESC";
            $result = mysqli_query($conn, $sql);
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title">Browse Our <span>Department</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 ">
                                <?php if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $imagePath = "csmss_poly_dashboard/assets/img/department/" . $row['image'];
                                        if (
                                            empty($row['image']) ||
                                            !file_exists(__DIR__ . "/csmss_poly_dashboard/assets/img/department/" . $row['image'])
                                        ) {
                                            // $imagePath = "https://via.placeholder.com/400x250?text=No+Image"; 
                                        }
                                ?>

                                        <div class="department-item">
                                            <div class="department-image">
                                                <img src="<?= $imagePath ?>" class="card-img-top" alt="department image" style="width: 25rem; height:247px;">
                                            </div>
                                            <div class="department-info">
                                                <h4 class="department-title pt-30"><a href="#"><?= htmlspecialchars($row['department']); ?></a></h4>
                                                <div class="department-btn">
                                                    <a href="civil-department.php">Read More<i class="fas fa-arrow-right-long"></i></a>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 ">
                            <?php }
                                } else { ?>
                            <p class="text-center">No events available</p>
                        <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- department area end -->
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


<!-- Mirrored from live.themewild.com/eduka/academic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 10:30:32 GMT -->

</html>