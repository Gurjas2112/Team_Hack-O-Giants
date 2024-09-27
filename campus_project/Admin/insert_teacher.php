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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $subjects = $_POST['subjects'];

    // Insert teacher details
    $sql = "INSERT INTO teacher (first_name, last_name, email, phone_number, address, department)
            VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$address', '$department')";

    if ($conn->query($sql) === TRUE) {
        $teacher_id = $conn->insert_id;

        // Insert subjects
        foreach ($subjects as $subject) {
            $sql_subject = "INSERT INTO teacher_subject (teacher_id, subject)
                            VALUES ('$teacher_id', '$subject')";
            $conn->query($sql_subject);
        }

        echo "New teacher added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>