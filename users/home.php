<?php
session_start();
include '../db/conn.php';


   header("location: home.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Cafe Management System</title>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>

        </nav>

        <nav>
            <ul>
                <li><a href="logout.php" onclick="logout()">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <h1>Welcome to<br><span>Internet Cafe</span></h1>

    <footer>
        <p>&copy; 2024 Internet Cafe Management System</p>
    </footer>
</body>
<script>
    // This script will check for URL parameters to display messages
    document.addEventListener("DOMContentLoaded", function() {
        const params = new URLSearchParams(window.location.search);
        if (params.has('error')) {
            const error = params.get('error');
            alert(error);
        } else if (params.has('success')) {
            alert('Registration successful. Welcome!');
            // Redirect if needed or clear the search parameters
            window.location.href = 'login.html';
        }
    });
function logout() {
    // Remove the loggedIn flag from localStorage
    localStorage.removeItem("loggedIn");

    // Redirect to the logout PHP script
  //  window.location.href = 'index.php';
}
</script>
</html>