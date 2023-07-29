<?php
// Include your database connection code here
$conn = mysqli_connect("localhost", "root", "41916", "testing");

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate form fields
  $store_name = $_POST['store_name'];
  $description = $_POST['description'];
  $contact_details = $_POST['contact_details'];

  // Store store information in the database
  $user_id = $_SESSION['user_id'];

  // Include your database connection code here
  $conn = mysqli_connect("localhost", "root", "41916", "testing");
  // Assuming you have already established a database connection

  // Create a query to insert store information into the database
  $query = "INSERT INTO `stores` (`store_name`, `description`, `contact_details`) VALUES ('$store_name', '$description', '$contact_details')";

  // Execute the query
  if (mysqli_query($conn, $query)) {
    // Redirect to a success page or seller dashboard
    //header('Location: seller_dashboard.php');
    //exit;
    echo "<h2>Data submitted</h2>";
  } else {
    // Handle the error if the query execution fails
    echo "Error: " . mysqli_error($conn);
  }
}
?>
