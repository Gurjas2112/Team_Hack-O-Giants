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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $attendance_date = $_POST['attendance_date'];
    $status = $_POST['status'];
    $student_id = $_POST['student_id'];
    $teacher_id = $_POST['teacher_id'];

    $sql = "INSERT INTO Attendance (attendance_date, status, student_id, teacher_id)
            VALUES ('$attendance_date', '$status', '$student_id', '$teacher_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Attendance recorded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>