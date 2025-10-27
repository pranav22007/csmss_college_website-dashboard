<?php
session_start();
session_unset();
session_destroy();

// Also send headers to prevent cached snapshot
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

header("Location: ../../login.php");
exit();
?>
3