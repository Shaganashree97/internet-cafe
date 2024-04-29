<?php
session_start();  // Initialize the session

// Set headers to control the cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); // HTTP 1.0.

session_destroy();  // Destroy the session

header("Location: index.html?logout=success");  // Redirect to login page
exit();  // Terminate the script
?>
