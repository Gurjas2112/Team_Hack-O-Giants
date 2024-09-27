<?php
// Database connection parameters
session_start();

// Database connection parameters
$servername = "localhost";
$username = "localhost";
$password = "Amol123@";
$dbname = "campus";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}// Fetch events from the database
$query = "SELECT * FROM Event";
$result = mysqli_query($conn, $query);

// Start HTML output
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Event List</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Event Name</th>
        <th>Event Date</th>
        <th>Description</th>
    </tr>
    <?php
    // Check if there are any events
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['id']) . "</td>
                    <td>" . htmlspecialchars($row['event_name']) . "</td>
                    <td>" . htmlspecialchars($row['event_date']) . "</td>
                    <td>" . htmlspecialchars($row['description']) . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No events found.</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
// Close the connection
mysqli_close($conn);
?>
