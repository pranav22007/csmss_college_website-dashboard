<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Gallery</title>
    <?php include 'common/header-link.php'; ?>
    <style>
        #gallery-year .gallery-img {
            object-fit: cover;
            border-radius: 10px;
            cursor: pointer;
        }

        #gallery-year .gallery-item {
            display: none;
        }

        #gallery-year .gallery-item.active {
            display: block;
        }

        #gallery-year .nav-pills .nav-link.active {
            background-color: #FDA31B;
            color: white;
        }

        #gallery-year .nav-pills .nav-link {
            color: black;
        }

        #gallery-year .nav-pills .nav-link:hover {
            color: gray;
        }

        /* IMAGE HOVER CSS */
        .image-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
        }

        .image-modal img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .image-modal.active {
            display: flex;
        }

        .btn {
            background-color: #FDA31B;
        }

        .btn:hover {
            background-color: #FDA31B;
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
            padding-bottom: 20px;
        }
        .back-btn:hover{
            background-color: var(--theme-color);
            color: white !important;
        }
    </style>
</head>

<body>
    <div class="image-modal" id="imageModal_placementgallery">
        <img id="modalImage" src="" alt="Enlarged Image">
    </div>
    <!-- header -->
    <?php include 'common/header.php'; ?>
    <!-- header end -->
    <main class="main">
        <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Placement Gallery</li>
            </ol>
        </nav>
        <!-- breadcrumb end -->

        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title">Placement <span>Gallery</span></h2>
                        </div>
                    </div>
                </div>

                <div id="gallery-year">
                    <!-- Year Tabs -->
                    <ul class="nav nav-pills justify-content-center mb-4" id="yearTabs"></ul>
                    <div class="row" id="gallery">


                        <?php
                        include 'csmss_poly_dashboard/common/dbcon.php'; // :white_tick: database connection file
                        ?>
                        <?php
                        // :one: Connect to the database
                        // :two: Fetch placement gallery data
                        $sql = "SELECT * FROM placement_gallery ORDER BY year ASC,placement_gallery_id ASC";
                        $result = mysqli_query($conn, $sql);
                        // :three: Check if any rows exist
                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Extract the image file name
                                $img = htmlspecialchars(basename($row['img']));
                                $year = htmlspecialchars($row['year']);
                                ?>
                                <div class="col-lg-4 col-md-4 col-6 p-3">
                                    <div class="gallery-item" data-year="<?php echo $year; ?>">
                                        <img src="csmss_poly_dashboard/assets/img/placement_gallery/<?php echo $img; ?>"
                                            alt="Placement Image" class="gallery-img w-100 h-100">
                                    </div>
                                </div>

                                <?php
                            }
                        } else {
                            echo "<p class='text-center text-muted'>No images found in the gallery.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back Button -->
        <!-- <div class="container text-center mt-5">
            <a href="placement-details.php" class="btn text-white rounded-pill">Back</a>
        </div> -->
    </main>
    <!-- footer -->
    <?php include 'common/footer.php'; ?>
    <?php include 'common/footer-link.php'; ?>
    <!-- JS for Year Tabs + Filtering -->

    <!-- JS for Image Modal -->
    <script>
        const modal = document.getElementById('imageModal_placementgallery');
        const modalImage = document.getElementById('modalImage');
        const galleryImages = document.querySelectorAll('.gallery-img');
        galleryImages.forEach(image => {
            image.addEventListener('click', () => {
                modalImage.src = image.src;
                modal.classList.add('active');
            });
        });
        modal.addEventListener('click', () => {
            modal.classList.remove('active');
            modalImage.src = '';
        });
    </script>
  <script>
  const tabContainer = document.getElementById('yearTabs');
  const items = document.querySelectorAll('.gallery-item');

  // Get unique years from data-year attributes
  let years = [...new Set(Array.from(items).map(item => item.getAttribute('data-year')))];
  years = years.sort((a, b) => a - b);

  // Add "All" tab first and make it active
  const allTab = document.createElement('li');
  allTab.classList.add('nav-item');
  allTab.innerHTML = `<button class="nav-link active" data-year="all">All</button>`;
  tabContainer.appendChild(allTab);

  // Add year tabs dynamically
  years.forEach(year => {
    const li = document.createElement('li');
    li.classList.add('nav-item');
    li.innerHTML = `<button class="nav-link" data-year="${year}">${year}</button>`;
    tabContainer.appendChild(li);
  });

  // 👉 Add Back button at the end
  const backTab = document.createElement('li');
  backTab.classList.add('nav-item');
  backTab.innerHTML = `<a href="placement-details.php" class="back-btn nav-link">Back</a>`;
  tabContainer.appendChild(backTab);

  // Function to show/hide gallery items based on selected year
  function filterGallery(year) {
    items.forEach(item => {
      const itemYear = item.getAttribute('data-year');
      if (year === 'all' || itemYear === year) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  }

  // Initially show all gallery items
  filterGallery('all');

  // Event delegation for filtering on tab click
  tabContainer.addEventListener('click', (e) => {
    if (e.target.tagName === 'BUTTON') {
      const selectedYear = e.target.getAttribute('data-year');

      // Update active tab styling
      document.querySelectorAll('#yearTabs .nav-link').forEach(btn => btn.classList.remove('active'));
      e.target.classList.add('active');

      // Filter gallery items
      filterGallery(selectedYear);
    }
  });
</script>

    <script>
        function filterGallery(year) {
            items.forEach(item => {
                const itemYear = item.getAttribute('data-year');
                const col = item.closest('.col-lg-4'); // Target the column
                if (year === 'all' || itemYear === year) {
                    col.classList.remove('d-none');
                } else {
                    col.classList.add('d-none');
                }
            });
        }
    </script>

</body>

</html>