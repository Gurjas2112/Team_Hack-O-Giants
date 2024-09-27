<?php
$servername = "localhost";
$username = "localhost";
$password = "Amol123@";
$dbname = "campus";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch students
$students_sql = "SELECT * FROM student";
$students_result = $conn->query($students_sql);

// Fetch teachers
$teachers_sql = "SELECT t.teacher_id, t.first_name, t.last_name, t.email, t.phone_number, t.address, t.department, GROUP_CONCAT(ts.subject SEPARATOR ', ') AS subjects
                 FROM teacher t
                 LEFT JOIN teacher_subject ts ON t.teacher_id = ts.teacher_id
                 GROUP BY t.teacher_id";
$teachers_result = $conn->query($teachers_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Students and Teachers</title>
</head>
<body>
    <h1>Students</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Enrollment Date</th>
            <th>Major</th>
            <th>Course Name</th>
            <th>Year</th>
        </tr>
        <?php
        if ($students_result->num_rows > 0) {
            while($row = $students_result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['student_id']}</td>
                        <td>{$row['first_name']}</td>
                        <td>{$row['last_name']}</td>
                        <td>{$row['date_of_birth']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone_number']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['enrollment_date']}</td>
                        <td>{$row['major']}</td>
                        <td>{$row['course_name']}</td>
                        <td>{$row['year']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='11'>No students found</td></tr>";
        }
        ?>
    </table>

    <h1>Teachers</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Department</th>
            <th>Subjects</th>
        </tr>
        <?php
        if ($teachers_result->num_rows > 0) {
            while($row = $teachers_result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['teacher_id']}</td>
                        <td>{$row['first_name']}</td>
                        <td>{$row['last_name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone_number']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['department']}</td>
                        <td>{$row['subjects']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No teachers found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>