<?php
session_start();  // Initialize the session

// Set headers to control the cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); // HTTP 1.0.

// Unset all of the session variables
$_SESSION = array();


// If it's desired to kill the session, also delete the session cookie.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();  // Destroy the session

header("Location: ../index.html?logout=success");  // Redirect to login page
exit();  // Terminate the script
?>
