<?php include '../common/auth.php'; ?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default">
<?php include('../common/header_link.php'); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Sidebar -->
      <?php include('../common/sidebar.php'); ?>
      <!-- /Sidebar -->

      <div class="layout-page">
        <!-- Navbar -->
        <?php include('../common/header.php'); ?>
        <!-- /Navbar -->

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="text-muted fw-bold py-3 mb-4">EDIT HOME MARQUE</h4>

            <div class="card mb-4">
              <div class="card-body">
                <?php
                include '../common/dbcon.php';

                $id = $_GET['marquee_id'];
                $sql = "SELECT * FROM marquee WHERE marquee_id = $id";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $title = $conn->real_escape_string($_POST['title']);
                    $pdfName = $row['pdf']; // old pdf by default

                    if (!empty($_FILES['pdf']['name'])) {
                        $pdfName = time() . "_" . basename($_FILES['pdf']['name']);
                        $targetPath = "../assets/pdf/marquee-home/marquee/" . $pdfName;

                        if (!move_uploaded_file($_FILES['pdf']['tmp_name'], $targetPath)) {
                            echo "<div class='alert alert-danger'>Error uploading file.</div>";
                            $pdfName = $row['pdf']; 
                        }
                    }

                    $updateSql = "UPDATE marquee SET title='$title', pdf='$pdfName' WHERE marquee_id=$id";
                    if ($conn->query($updateSql)) {
                        echo "<script>alert('✅ Record updated successfully'); window.location='home_marque.php';</script>";
                    } else {
                        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
                    }
                }
                ?>

                <form method="POST" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">Title</label>
                      <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($row['title']); ?>" required>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Choose File (PDF)</label>
                      <input type="file" name="pdf" class="form-control" accept="application/pdf">
                      <?php if (!empty($row['pdf'])): ?>
                        <small class="text-muted">Current: 
                          <a href="../assets/pdf/marquee/marquee-home/<?= htmlspecialchars($row['pdf']); ?>" target="_blank">
                            <?= htmlspecialchars($row['pdf']); ?>
                          </a>
                        </small>
                      <?php endif; ?>
                    </div>
                  </div>
                   <div class="col-md-12 text-center">     
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="home_marque.php" class="btn btn-secondary">Cancel</a>
                      </div>
                </form>
              </div>
            </div>
          </div>

          <?php include('../common/footer.php'); ?>
        </div>
      </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include('../common/footer-link.php'); ?>
</body>
</html>
