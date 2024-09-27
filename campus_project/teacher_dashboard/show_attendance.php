<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Records</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    width: 80%;
    margin: 0 auto;
    overflow: hidden;
}

header {
    background: #333;
    color: #fff;
    padding-top: 30px;
    min-height: 70px;
    border-bottom: #77aaff 3px solid;
}

header h1 {
    text-align: center;
    text-transform: uppercase;
    margin: 0;
    font-size: 24px;
}

main {
    padding: 20px;
    background: #fff;
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f4f4f4;
}
        </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Attendance Records</h1>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Attendance Date</th>
                        <th>Status</th>
                        <th>Student ID</th>
                        <th>Teacher ID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch attendance records from the database
                    $servername = "localhost";
                    $username = "localhost";
                    $password = "Amol123@";
                    $dbname = "campus";
                    
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);// Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    $sql = "SELECT * FROM Attendance";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['attendance_date']}</td>
                                    <td>{$row['status']}</td>
                                    <td>{$row['student_id']}</td>
                                    <td>{$row['teacher_id']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No records found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>