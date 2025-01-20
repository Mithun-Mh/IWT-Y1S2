<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $upassword = $_POST["password"];
  $userType = $_POST["user_type"];
  $registrationType = $_POST["registration-type"];

  // TODO: Perform any necessary validation or sanitization of the form data

  // Connect to the database (assuming you have a config.php file with database connection settings)
  require_once "config.php";
  $conn = new mysqli("localhost", "root", "","iwtp");

  // Check if the connection was successful
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare the SQL statement to insert the user data into the database
  $sql = "INSERT INTO user (email, name, password, user_type) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);

  // Check if the statement preparation was successful
  if (!$stmt) {
    die("Error: " . $conn->error);
  }

  // Bind the parameters to the prepared statement
  $stmt->bind_param("ssss", $email, $name, $upassword, $userType);

  // Execute the prepared statement
  if ($stmt->execute()) {
    // Registration successful
    echo "Registration successful!";
    // Redirect to the appropriate dashboard page based on user type
    if ($userType == "organizer") {
      header("Location: organizerdashboard.php");
    } else {
      header("Location: customerProfile.php");
    }
    exit();
  } else {
    // Registration failed
    echo "Error: " . $stmt->error;
  }
  

  // Close the prepared statement and database connection
  $stmt->close();
  $conn->close();
}
?>
