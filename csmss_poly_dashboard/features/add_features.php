<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $description = trim($_POST['description'] ?? '');

    if ($description === '') {
        $error = 'Description cannot be empty.';
    } else {
        $stmt = $conn->prepare("INSERT INTO features (description) VALUES (?)");
        $stmt->bind_param("s", $description);
        if ($stmt->execute()) {
            header("Location: features.php?msg=Feature added successfully");
            
            exit;
        } else {
            $error = "Database error: " . $conn->error;
        }
    }
}
?>
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
            <h4 class="text-muted fw-bold py-3 mb-4">Add Feature</h4>

            <?php if ($error): ?>
              <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <div class="card p-4">
              <form method="post" action="">
                <div class="mb-3">
                  <label for="description" class="form-label">Feature Description</label>
                  <textarea name="description" id="description" class="form-control" rows="4" required><?= htmlspecialchars($_POST['description'] ?? '') ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Feature</button>
                <a href="features.php" class="btn btn-primary">Back</a>
              </form>
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
