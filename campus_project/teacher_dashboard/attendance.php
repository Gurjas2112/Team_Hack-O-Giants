<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Attendance</title>
    <link rel="stylesheet" href="styles.css">
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    width: 50%;
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

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="date"],
select {
    margin-bottom: 20px;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

input[type="submit"] {
    padding: 10px;
    font-size: 16px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #555;
}</style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Record Attendance</h1>
        </header>
        <main>
            <form action="insert_attendance.php" method="post">
                <label for="attendance_date">Attendance Date:</label>
                <input type="date" id="attendance_date" name="attendance_date" required><br><br>

                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="Present">Present</option>
                    <option value="Absent">Absent</option>
                </select><br><br>

                <label for="student_id">Student ID:</label>
                <select id="student_id" name="student_id" required>
                    <?php
                    // Fetch student IDs from the database
                    $servername = "localhost";
                    $username = "localhost";
                    $password = "Amol123@";
                    $dbname = "campus";
                    
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);// Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    $sql = "SELECT student_id, first_name, last_name FROM student";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['student_id'] . "'>" . $row['first_name'] . " " . $row['last_name'] . "</option>";
                        }
                    }
                    $conn->close();
                    ?>
                </select><br><br>

                <label for="teacher_id">Teacher ID:</label>
                <select id="teacher_id" name="teacher_id" required>
                    <?php
                    // Fetch teacher IDs from the database
                    $servername = "localhost";
                    $username = "localhost";
                    $password = "Amol123@";
                    $dbname = "campus";
                    
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);// Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    $sql = "SELECT teacher_id, first_name, last_name FROM teacher";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['teacher_id'] . "'>" . $row['first_name'] . " " . $row['last_name'] . "</option>";
                        }
                    }
                    $conn->close();
                    ?>
                </select><br><br>

                <input type="submit" value="Record Attendance">
            </form>
        </main>
    </div>
</body>
</html>