<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "41916", "testing");

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Server-side validation
// Check if email is already registered
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);
/*if (mysqli_num_rows($result) > 0) {
    echo "Email is already registered.";
    exit();
}*/

// Insert user into database
$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
mysqli_query($conn, $query);

// Redirect to login page
header("Location: login.php");
exit();

?>
