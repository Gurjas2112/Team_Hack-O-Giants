
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

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the SQL statement
    $email = mysqli_real_escape_string($conn, $email);
    $query = "SELECT * FROM Users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    // Check if the user exists
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if ($password === $user['password']) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];
            echo "Login successful! Welcome, " . htmlspecialchars($user['name']) . ".";
            // Redirect or display a message
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Invalid email or password.";
    }
}

// Close the connection
mysqli_close($conn);
?>
