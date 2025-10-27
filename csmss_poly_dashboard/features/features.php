<?php include '../common/auth.php'; ?>

<?php include('../common/dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed">
<?php include('../common/header_link.php'); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('../common/sidebar.php'); ?>
      <div class="layout-page">
        <?php include('../common/header.php'); ?>
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="text-muted fw-bold py-3 mb-4">FEATURES</h4>


            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="h5 card-header">FEATURES</div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                  <a href="add_features.php" class="btn btn-primary m-4">ADD+</a>
                </div>
              </div>

              <div class="table-responsive text-nowrap">
                <table class="table table-hover d-table-cell" style="width: 1300px">
                  <thead>
                    <tr>
                      <th>SR</th>
                      <th>DESCRIPTION</th>
                      <th>ACTIONS</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0 w-100">
                    <?php
                    $sql = "SELECT * FROM features ORDER BY features_id ASC";
                    $result = mysqli_query($conn, $sql);
                    $sr = 1;
                    while ($row = mysqli_fetch_assoc($result)):
                      ?>
                      <tr>
                        <td><?= $sr++; ?></td>
                        <td class="table-data w-50"><?= htmlspecialchars($row['description']) ?></td>

                        <td>
                          <a href="edit_features.php?features_id=<?= $row['features_id'] ?>" class="btn btn-primary rounded-pill">
                            <i class="bx bx-edit-alt"></i> Edit
                          </a>
                          <a href="delete_features.php?features_id=<?= $row['features_id'] ?>"
                            onclick="return confirm('Are you sure you want to delete this feature?')"
                            class="btn btn-danger rounded-pill">
                            <i class="bx bx-trash"></i> Delete
                          </a>
                          <?php if (isset($row['status']) && $row['status'] == 1): ?>
                            <a href="toggle_features.php?features_id=<?= $row['features_id']; ?>&status=0"
                              class="btn rounded-pill btn-warning">Disable</a>
                          <?php else: ?>
                            <a href="toggle_features.php?features_id=<?= $row['features_id']; ?>&status=1"
                              class="btn rounded-pill btn-success">Enable</a>
                          <?php endif; ?>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
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