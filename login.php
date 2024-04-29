<?php
// Include the database connection file
include 'db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to find the user by email
    $sql = "SELECT password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Get hashed password from database
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, redirect to success page
            $_SESSION["loggedin"] = true;
            echo "<script>alert('Login Successful!'); window.location.href = 'home.html';</script>";
        } else {
            // Password is not correct, redirect to login page
            echo "<script>alert('Error: Incorrect Password.'); window.location.href = 'login.html';</script>";
        }
    } else {
        // Email not found, also redirect to login page
        echo "<script>alert('Error: User not found'); window.location.href = 'login.html';</script>";
    }

    // Close database connection
    $conn->close();
}
?>
