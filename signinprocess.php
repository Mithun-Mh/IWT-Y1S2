<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'iwtp';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from the form
$username = $_POST['name1'];
$password = $_POST['password1'];

// Prepare and execute the SQL query
$stmt = $conn->prepare("SELECT * FROM user WHERE name = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

// Get the result of the query
$result = $stmt->get_result();

// Check if the query returned any rows
if ($result->num_rows > 0) {
    // Fetch the user data
    $row = $result->fetch_assoc();

    // Check the user type
    if ($row['user_type'] === 'organizer') {
        // Redirect to the organizer dashboard
        header("Location: organizerdashboard.php");
        exit;
    } elseif ($row['user_type'] === 'buyer') {
        // Redirect to the customer dashboard
        header("Location: customerProfile.php");
        exit;
    }
} else {
    // Invalid username or password
    echo "Invalid username or password";
    header("Location: login.php");
    exit;
}

// Close the statement and the connection
$stmt->close();
$conn->close();
?>