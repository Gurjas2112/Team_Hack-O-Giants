<?php
// Database connection parameters
$servername = "localhost";
$username = "localhost";
$password = "Amol123@";
$dbname = "campus";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $description = $_POST['description'];

    // Prepare and execute the SQL statement
    $event_name = mysqli_real_escape_string($conn, $event_name);
    $event_date = mysqli_real_escape_string($conn, $event_date);
    $description = mysqli_real_escape_string($conn, $description);

    $query = "INSERT INTO Event (event_name, event_date, description) VALUES ('$event_name', '$event_date', '$description')";
    
    if (mysqli_query($conn, $query)) {
        echo "New event added successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the connection
mysqli_close($conn);

// Redirect back to the form
header("Location: event.php");
exit();
?>
