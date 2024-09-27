<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campus";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $_SESSION['user_id']);
   
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        
        
        while($row = $result->fetch_assoc()) {
            $n=$row["name"];
           $role=$row["role"];
           $email=$row["email"];
           $phone=$row["phone"];
        }
        
    } else {
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap');

        * {
            font-family: "Fredoka", sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <nav class="flex flex-col bg-gray-200 w-64 p-4 h-screen">
            <div class="flex items-center mb-8">
                <h1 class="text-black text-2xl font-semibold">Campus Connect</h1>
            </div>
            <div class="flex flex-col gap-4">
                <a href="#" class="flex items-center gap-2 p-2 rounded-lg hover:bg-gray-300">
                    <img src="icon/home.svg" alt="Home" class="w-6 h-6">
                    <span class="hidden lg:block text-black">Home</span>
                </a>
                <a href="student.php" class="flex items-center gap-2 p-2 rounded-lg hover:bg-gray-300">
                    <img src="icon/student.svg" alt="Student" class="w-6 h-6">
                    <span class="hidden lg:block text-black">Student</span>
                </a>
                <a href="#" class="flex items-center gap-2 p-2 rounded-lg hover:bg-gray-300">
                    <img src="icon/teacher.svg" alt="Teacher" class="w-6 h-6">
                    <span class="hidden lg:block text-black">Teacher</span>
                </a>
                <a href="#" class="flex items-center gap-2 p-2 rounded-lg hover:bg-gray-300">
                    <img src="icon/receipt.svg" alt="Event" class="w-6 h-6">
                    <span class="hidden lg:block text-black">Event</span>
                </a>
                <a href="#" class="flex items-center gap-2 p-2 rounded-lg hover:bg-gray-300">
                    <img src="icon/not.svg" alt="Notification" class="w-6 h-6">
                    <span class="hidden lg:block text-black">Notification</span>
                </a>
                <a href="#" class="flex items-center gap-2 p-2 rounded-lg hover:bg-gray-300">
                    <img src="icon/report.svg" alt="Report" class="w-6 h-6">
                    <span class="hidden lg:block text-black">Report</span>
                </a>
            </div>
            <div class="mt-auto">
                <a href="#" class="flex items-center gap-2 p-2 rounded-lg hover:bg-gray-300">
                    <img src="icon/logout.svg" alt="Log Out" class="w-6 h-6">
                    <span class="hidden lg:block text-black">Log Out</span>
                </a>
            </div>
        </nav>

        <main class="flex-grow p-8">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg">
                <div class="profile-header bg-[#119966] text-white p-6 text-center rounded-t-lg">
                    <img src="image/admin.jpg" alt="" class="w-32 h-32 rounded-full border-4 border-white mx-auto mb-4">
                    <h1 class="text-3xl font-bold"><?php echo($n)?></h1>
                    <p class="text-xl"><?php echo($phone)?></p>
                </div>
                
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-4">Personal Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-600">Email</p>
                            <p class="font-medium"><?php echo($email)?></p>
                        </div>
                        <div>
                            <p class="text-gray-600"> Role</p>
                            <p class="font-medium"><?php echo($role)?></p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </main>
    </div>
</body>

</html>
