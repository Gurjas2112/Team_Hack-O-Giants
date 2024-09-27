<?php
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
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $enrollment_date = $_POST['enrollment_date'];
    $major = $_POST['major'];
    $course_name = $_POST['course_name'];
    $year = $_POST['year'];

    $sql = "INSERT INTO student (first_name, last_name, date_of_birth, email, phone_number, address, enrollment_date, major, course_name, year)
            VALUES ('$first_name', '$last_name', '$date_of_birth', '$email', '$phone_number', '$address', '$enrollment_date', '$major', '$course_name', '$year')";

    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>