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

    // Fetch students
$students_sql = "SELECT * FROM student";
$students_result = $conn->query($students_sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap');

        * {
            font-family: "Fredoka", sans-serif;
        }
    </style>

</head>

<body>
<div class="flex">
        <nav class="flex flex-col bg-gray-200 p-[16px] h-screen">
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
                    <img src="icon/repoert.svg" alt="Report" class="w-6 h-6">
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
       <div class="flex justify-center flex-1 py-[64px]">
        <div class="flex w-[120ch] flex-col gap-[12px] ">
        <div class="text-[#353535] text-4xl font-bold ">Student</div>
        <a href="add-student.php" class=" bg-[#4caf50] py-[8px] px-[16px] w-fit rounded-[4px] hover:bg-green-400"><p class="text-white text-[15px] font-bold font-['Lato']">Add student</p></a>
        <table class="min-w-full border-collapse border border-green-600 rounded-[16px]">
    <thead class="bg-[#4caf50] text-white">
        <tr>
            <th class="border border-green-600 p-2">ID</th>
            <th class="border border-green-600 p-2">First Name</th>
            <th class="border border-green-600 p-2">Last Name</th>
            <th class="border border-green-600 p-2">Date of Birth</th>
            <th class="border border-green-600 p-2">Email</th>
            <th class="border border-green-600 p-2">Phone Number</th>
            <th class="border border-green-600 p-2">Address</th>
            <th class="border border-green-600 p-2">Enrollment Date</th>
            <th class="border border-green-600 p-2">Major</th>
            <th class="border border-green-600 p-2">Course Name</th>
            <th class="border border-green-600 p-2">Year</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($students_result->num_rows > 0) {
            while($row = $students_result->fetch_assoc()) {
                echo "<tr class='hover:bg-green-100'>";
                echo "<td class='border border-green-600 p-2'>" . htmlspecialchars($row['student_id']) . "</td>";
                echo "<td class='border border-green-600 p-2'>" . htmlspecialchars($row['first_name']) . "</td>";
                echo "<td class='border border-green-600 p-2'>" . htmlspecialchars($row['last_name']) . "</td>";
                echo "<td class='border border-green-600 p-2'>" . htmlspecialchars($row['date_of_birth']) . "</td>";
                echo "<td class='border border-green-600 p-2'>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td class='border border-green-600 p-2'>" . htmlspecialchars($row['phone_number']) . "</td>";
                echo "<td class='border border-green-600 p-2'>" . htmlspecialchars($row['address']) . "</td>";
                echo "<td class='border border-green-600 p-2'>" . htmlspecialchars($row['enrollment_date']) . "</td>";
                echo "<td class='border border-green-600 p-2'>" . htmlspecialchars($row['major']) . "</td>";
                echo "<td class='border border-green-600 p-2'>" . htmlspecialchars($row['course_name']) . "</td>";
                echo "<td class='border border-green-600 p-2'>" . htmlspecialchars($row['year']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='11' class='text-center border border-green-600 p-2'>No students found</td></tr>";
        }
        ?>
    </tbody>
</table>

                        
                    </div>
                </div>
        </div>
       </div>

    </div>
</body>

</html>