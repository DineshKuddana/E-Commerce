<?php
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "41916", "testing");

// Collect form data
$email = $_POST['email'];
$password = $_POST['password'];

// Server-side validation and authentication
$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $query);

// Check for SQL query errors
if (!$result) {
    die('Error: ' . mysqli_error($conn));
}

// Check the number of rows returned
if (mysqli_num_rows($result) > 0) {
    // Valid credentials, store session information
    $_SESSION['email'] = $email;
    // Check if the user is a seller
    $row = mysqli_fetch_assoc($result);
    if ($row['user_type'] == 'seller') {
        header("Location: seller_management.php");
        exit();
    } else {
        // Redirect to a different page for buyers or other user types
        header("Location: dashboard.php");
        exit();
    }
} else {
    // Invalid credentials, set error message and redirect back to login page
    $_SESSION['login_error'] = "Invalid email or password.";
    echo "<h1>Invalid email or password</h1>";
    //header("Location: login.php");
    //exit();
}
?>
