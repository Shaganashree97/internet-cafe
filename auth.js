// auth.js

// Check if the user is logged in
if (!localStorage.getItem("loggedIn")) {
    // If not logged in, redirect to the login page
    window.location.href = "index.html?logout=forced";
}
