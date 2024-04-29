<?php
// Include the database connection file
include 'db/conn.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and validate form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : null;

    // Check for empty fields
    if (empty($name) || empty($password) || empty($email) || empty($phone)) {
        // Inform user that all fields are required
        echo "<script>alert('Error: All fields are required.'); window.location.href = 'register.html';</script>";
        exit();
    }
  /*  // Validate email to ensure it is a Gmail address

    if (!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $email)) {
        echo "<script>alert('Error: Email must be a Gmail address'); window.location.href = 'register.html';</script>";
        exit();
    }*/

    if (!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $email)) {
        error_log("Email validation failed for: $email");
        echo "<script>window.alert('Error: Email must be a Gmail address'); window.location.href = 'register.html';</script>";
        exit();
    }
    

    // Check if the email is already registered
    $emailCheckStmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $emailCheckStmt->bind_param("s", $email);
    $emailCheckStmt->execute();
    $emailCheckStmt->store_result();

    if ($emailCheckStmt->num_rows > 0) {
        // Email already registered, notify the user
        echo "<script>alert('Error: Email already registered. Please use another email.'); window.location.href = 'register.html';</script>";
        $emailCheckStmt->close();
        $conn->close();
        exit();
    }

    $emailCheckStmt->close();

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (name, password, email, phone) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $hashed_password, $email, $phone);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('Registration successful. Welcome!'); window.location.href = 'login.html';</script>";
    } else {
        echo "<script>alert('Error: Unable to register. Please check your information and try again.'); window.location.href = 'register.html';</script>";
    }
    
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect to the registration form if the script is accessed without submitting the form
    header("Location: register.html");
    exit();
}
?>
