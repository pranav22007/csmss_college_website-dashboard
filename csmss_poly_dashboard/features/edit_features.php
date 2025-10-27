<?php include '../common/auth.php'; ?>

<?php
include('../common/dbcon.php');

$id = intval($_GET['features_id'] ?? 0);
if ($id <= 0) {
    header('Location: features.php');
    exit;
}

$error = '';

// Fetch existing data
$stmt = $conn->prepare("SELECT description FROM features WHERE features_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($description);
if (!$stmt->fetch()) {
    // No such feature
    $stmt->close();
    header('Location: features.php?msg=Feature not found');
    exit;
}
$stmt->close();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_description = trim($_POST['description'] ?? '');

    if ($new_description === '') {
        $error = 'Description cannot be empty.';
    } else {
        $stmt = $conn->prepare("UPDATE features SET description = ? WHERE features_id = ?");
        $stmt->bind_param("si", $new_description, $id);
        if ($stmt->execute()) {
            header("Location: features.php?msg=Feature updated successfully");
            exit;
        } else {
            $error = "Database error: " . $conn->error;
        }
        $stmt->close();
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
            <h4 class="text-muted fw-bold py-3 mb-4">Edit Feature</h4>

            <?php if ($error): ?>
              <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <div class="card p-4">
              <form method="post" action="">
                <div class="mb-3">
                  <label for="description" class="form-label">Feature Description</label>
                  <textarea name="description" id="description" class="form-control" rows="10" required><?= htmlspecialchars($_POST['description'] ?? $description) ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update </button>
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