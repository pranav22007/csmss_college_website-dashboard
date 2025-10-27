<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Redirect if not logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: /csmss-polytechnic-website/login.php");
    exit();
}

// Prevent browser caching (stronger headers)
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: 0");
?>
<script>
  window.onload = function() {
    if (performance.getEntriesByType("navigation")[0].type === "back_forward") {
      // Reload page if user comes via back button
      location.reload(true);
    }
  };
</script>
