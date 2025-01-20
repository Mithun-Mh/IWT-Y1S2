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
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $etitle = $_POST['etitle'];
    $uploadiov = $_POST['Uploadiov'];
    $year = $_POST['year'];
    $month = $_POST['month'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    $minutes = $_POST['minutes'];
    $AM_PM = $_POST['AM_PM'];
    $ecap = $_POST['ecap'];
    $location = $_POST['location'];
    $name = $_POST['name'];
    $pnumber = $_POST['pnumber'];
    $eaddress = $_POST['eaddress'];
    $tprice = $_POST['tprice'];

    try {
        // Prepare an INSERT statement
        $stmt = $pdo->prepare("INSERT INTO events (etitle, uploadiov, year, month, date, hour, minutes, AM_PM, tprice, ecap, location, name, pnumber, eaddress) 
                          VALUES (:etitle, :uploadiov, :year, :month, :date, :hour, :minutes, :AM_PM, :tprice, :ecap, :location, :name, :pnumber, :eaddress)");

        // Bind the parameters
        $stmt->bindParam(':etitle', $etitle);
        $stmt->bindParam(':uploadiov', $uploadiov);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':month', $month);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':hour', $hour);
        $stmt->bindParam(':minutes', $minutes);
        $stmt->bindParam(':AM_PM', $AM_PM);
        $stmt->bindParam(':ecap', $ecap);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':pnumber', $pnumber);
        $stmt->bindParam(':eaddress', $eaddress);
        $stmt->bindParam(':tprice', $tprice);

        // Execute the statement
        if ($stmt->execute()) {
            echo " Event uploaded successfully.";
            // Get the ID of the uploaded event
    $eventId = $pdo->lastInsertId();

    // Display a link/button to edit the event
    /*echo '<input type="button"><a href="edit_event.php?event_id=' . $eventId . '">Edit Event</a></button>';*/
    echo '<td><form method="GET" action="edit_event.php"><input type="hidden" name="event_id" value="' . $eventId . '"><button type="submit">Edit</button></form></td>';
   
        } else {
            // Check if the error is due to duplicate entry
            if ($stmt->errorCode() == '23000') {
                $errorInfo = $stmt->errorInfo();
                if ($errorInfo[1] == 1062) {
                    echo "Error: The name already exists. Please choose a different name.";
                }
            } else {
                echo "Error uploading event.";
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

