<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include 'common/header-link.php'; ?>
    <style>
        .gallery-img {
            object-fit: cover;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            height: 200px;
        }

        @media (max-width: 576px) {
            .gallery-img {
                height: 150px;
            }

            .nav-pills .nav-link {
                font-size: 14px;
                padding: 6px 12px;
            }
        }

        .image-modal {
            display: none;
            position: fixed;
            z-index: 1050;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }

        .image-modal.active {
            display: flex;
        }

        .image-modal img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .close-btn {
            background: transparent;
            border: none;
            font-size: 2.5rem;
            color: white;
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 30px;
            font-weight: bold;
        }

        .polyfest-heading {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .polyfest-heading span.fest {
            color: #fda31b;
            /* Yellow for FEST */
        }

        .nav-pills-wrapper {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 10px;
            background-color: #f8f9fa;
            /* light gray or white background */
        }

        .nav-pills .nav-link {
            background-color: #fda31b;
            /* Yellow background */
            color: black;
            margin: 0 5px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .nav-pills .nav-link.active {
            background-color: #fda31b;
            /* Keep same yellow */
            color: white;
            /* White text when active */
            font-weight: bold;
        }

        @media (max-width: 576px) {
            .nav-pills {
                overflow-x: auto;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }

            .nav-pills .nav-link {
                font-size: 14px;
                padding: 6px 12px;
            }
        }
    </style>
</head>

<body>
    <?php include 'common/header.php'; ?>

    <div class="image-modal" id="imageModal">
        <button class="close-btn" id="closeModalBtn">&times;</button>
        <img id="modalImage" src="" alt="Enlarged Image" />
    </div>

    <main class="py-5">
        <div class="container">

            <!-- POLYFEST Heading -->
            <!-- POLYFEST Heading -->
            <h2 class="polyfest-heading">POLY<span class="fest">FEST</span></h2>

            <!-- Nav Pills with Yellow Buttons -->
            <div class="nav-pills-wrapper text-center">
                <ul class="nav nav-pills justify-content-center flex-nowrap overflow-auto" id="yearTabs"></ul>
            </div>



            <!-- Gallery Sections -->
            <div id="gallery">
                <?php
                include 'csmss_poly_dashboard/common/dbcon.php';
                $sql = "SELECT * FROM gathering ORDER BY year ASC, gallery_id ASC";
                $result = mysqli_query($conn, $sql);
                $grouped = [];
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $year = htmlspecialchars($row['year']);
                        $title = htmlspecialchars($row['title']);
                        $img = htmlspecialchars(basename($row['img']));
                        $grouped[$year][$title][] = $img;
                    }
                }
                foreach ($grouped as $year => $titles) {
                    echo "<div class='gallery-section' data-year='{$year}' style='display:none;'>";
                    foreach ($titles as $title => $images) {
                        echo "<div class='gallery-group'>";
                        echo "<h4 class='text-center mb-3'>" . htmlspecialchars($title) . "</h4>";
                        echo "<div class='row'>";
                        foreach ($images as $img) {
                            echo "<div class='col-lg-4 col-md-6 col-sm-6 col-12 p-2'>";
                            echo "<img src=\"../csmss-polytechnic-website/csmss_poly_dashboard/assets/img/gathering/{$year}/{$img}\" alt=\"Image\" class=\"gallery-img\">";
                            echo "</div>";
                        }
                        echo "</div></div>";
                    }
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </main>

    <?php include 'common/footer.php'; ?>
    <?php include 'common/footer-link.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Modal functionality
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeBtn = document.getElementById('closeModalBtn');
        document.querySelectorAll('.gallery-img').forEach(img =>
            img.addEventListener('click', () => {
                modalImage.src = img.src;
                modal.classList.add('active');
            })
        );
        closeBtn.addEventListener('click', () => {
            modal.classList.remove('active');
            modalImage.src = '';
        });
        modal.addEventListener('click', e => { if (e.target === modal) { modal.classList.remove('active'); modalImage.src = ''; } }
        );

        // Tabs functionality
        const gallerySections = document.querySelectorAll('.gallery-section');
        const tabContainer = document.getElementById('yearTabs');
        const years = Array.from(gallerySections).map(s => s.getAttribute('data-year'));
        years.forEach((year, idx) => {
            const li = document.createElement('li');
            li.className = 'nav-item';
            li.innerHTML = `<button class="nav-link${idx === 0 ? ' active' : ''}" data-year="${year}">${year}</button>`;
            tabContainer.appendChild(li);
        });
        function showGalleryForYear(year) {
            gallerySections.forEach(section => {
                section.style.display = section.getAttribute('data-year') === year ? 'block' : 'none';
            });
        }
        if (years.length) showGalleryForYear(years[0]);
        tabContainer.addEventListener('click', e => {
            if (e.target.tagName === 'BUTTON') {
                tabContainer.querySelectorAll('.nav-link').forEach(btn => btn.classList.remove('active'));
                e.target.classList.add('active');
                showGalleryForYear(e.target.getAttribute('data-year'));
            }
        });
    </script>
</body>

</html>