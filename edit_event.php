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
    echo "Connected successfully! ";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $eventId = $_POST['event_id'];
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
        // Prepare an UPDATE statement
        $stmt = $pdo->prepare("UPDATE events SET etitle = :etitle, uploadiov = :uploadiov, year = :year, month = :month, date = :date, hour = :hour, minutes = :minutes, AM_PM = :AM_PM, tprice = :tprice, ecap = :ecap, location = :location, name = :name, pnumber = :pnumber, eaddress = :eaddress WHERE id = :id");

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
        $stmt->bindParam(':id', $eventId);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Event updated successfully.";
        } else {
            echo "Error updating event.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    // Check if the event ID is provided
    if (isset($_GET['event_id'])) {
        $eventId = $_GET['event_id'];

        try {
            // Prepare a SELECT statement to retrieve the event
            $stmt = $pdo->prepare("SELECT * FROM events WHERE id = :id");
            $stmt->bindParam(':id', $eventId);
            $stmt->execute();

            // Check if the event exists
            if ($stmt->rowCount() > 0) {
                $event = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <h2>Edit Event</h2>
                <h2>Edit Event</h2>
<form method="POST" action="edit_event.php">
    <input type="hidden" name="event_id" value="<?php echo $eventId; ?>">
    <label for="etitle">Event Title:</label>
    <input type="text" name="etitle" value="<?php echo $event['etitle']; ?>"><br>
    
    <label for="Uploadiov">Upload IOV:</label>
    <input type="text" name="Uploadiov" value="<?php echo $event['uploadiov']; ?>"><br>
    
    <label for="year">Year:</label>
    <input type="text" name="year" value="<?php echo $event['year']; ?>"><br>
    
    <label for="month">Month:</label>
    <input type="text" name="month" value="<?php echo $event['month']; ?>"><br>
    
    <label for="date">Date:</label>
    <input type="date" name="date" value="<?php echo $event['date']; ?>"><br>
    
    <label for="hour">Hour:</label>
    <input type="text" name="hour" value="<?php echo $event['hour']; ?>"><br>
    
    <label for="minutes">Minutes:</label>
    <input type="text" name="minutes" value="<?php echo $event['minutes']; ?>"><br>
    
    <label for="AM_PM">AM/PM:</label>
    <input type="text" name="AM_PM" value="<?php echo $event['AM_PM']; ?>"><br>
    
    <label for="ecap">Capacity:</label>
    <input type="text" name="ecap" value="<?php echo $event['ecap']; ?>"><br>
    
    <label for="location">Location:</label>
    <input type="text" name="location" value="<?php echo $event['location']; ?>"><br>
    
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $event['name']; ?>"><br>
    
    <label for="pnumber">Phone Number:</label>
    <input type="text" name="pnumber" value="<?php echo $event['pnumber']; ?>"><br>
    
    <label for="eaddress">Email Address:</label>
    <input type="text" name="eaddress" value="<?php echo $event['eaddress']; ?>"><br>
    
    <label for="tprice">Ticket Price:</label>
    <input type="text" name="tprice" value="<?php echo $event['tprice']; ?>"><br>

    <input type="submit" value="Update Event">
</form>


<form method="POST" action="delete_event.php">
    <input type="hidden" name="event_id" value="<?php echo $eventId; ?>">
    <button type="submit">Delete Event</button>
</form>

                 
                <?php
            } else {
                echo "Event not found.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Event ID not provided.";
    }
}

?>


