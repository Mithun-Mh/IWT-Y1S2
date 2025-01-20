<?php
// Database connection settings
$host = 'localhost';
$dbname = 'iwtp';
$username = 'root';
$password = '';

// Establish the database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the event ID is provided
    if (isset($_POST['event_id'])) {
        $eventId = $_POST['event_id'];

        try {
            // Prepare a DELETE statement to delete the event
            $stmt = $pdo->prepare("DELETE FROM events WHERE id = :id");
            $stmt->bindParam(':id', $eventId);

            // Execute the statement
            if ($stmt->execute()) {
                echo " Event deleted successfully.";
            } else {
                echo " Error deleting event.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo " Event ID not provided.";
    }
} else {
    echo " Invalid request.";
}
?>
