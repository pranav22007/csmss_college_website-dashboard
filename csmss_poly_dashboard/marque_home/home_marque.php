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
            <h4 class="text-muted fw-bold py-3 mb-4">HOME MARQUE</h4>

            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">MARQUE LIST</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_home_marque.php">
                    <button type="button" class="btn btn-primary m-4">ADD</button>
                  </a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>SR</th>
                      <th>Title</th>
                      <th>PDF</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php
                    include '../common/dbcon.php';
                    $sql = "SELECT * FROM marquee ORDER BY marquee_id DESC";
                    $result = $conn->query($sql);
                    $sr = 1;
                    ?>
                  <tbody class="table-border-bottom-0">
                    <?php if ($result->num_rows > 0): ?>
                      <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                          <td><?= $sr++; ?></td>
                          <td class=""><strong><?= htmlspecialchars($row['title']); ?></strong></td>
                          <td>
                            <a href="../assets/pdf/marquee-home/marquee/<?= htmlspecialchars($row['pdf']); ?>"
                              target="_blank">
                              <?= htmlspecialchars($row['pdf']); ?>
                            </a>
                          </td>
                          <td>
                            <a href="edit_home_marque.php?marquee_id=<?= $row['marquee_id']; ?>" class="btn rounded-pill btn-primary">
                              <i class="bx bx-edit-alt me-1"></i> Edit
                            </a>
                            <a href="delete_home_marque.php?marquee_id=<?= $row['marquee_id']; ?>" class="btn rounded-pill btn-danger"
                              onclick="return confirm('Delete this record?')">
                              <i class="bx bx-trash me-1"></i> Delete
                            </a>
                          </td>
                        </tr>
                      <?php endwhile; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan='4' class='text-center'>No records found</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>

            <hr class="my-5" />
            <?php include('../common/footer.php'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <?php include('../common/footer-link.php'); ?>
</body>

</html>