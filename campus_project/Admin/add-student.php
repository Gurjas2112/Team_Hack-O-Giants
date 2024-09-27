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
       
        <div class="flex justify-center flex-1 l">
            <div class="flex w-[120ch] bg-white rounded-2xl shadow border border-[#f85d0a]/10 h-fit p-[16px] flex-col gap-[24px]"> <h1>Add Student</h1>
    <form action="insert_student.php" method="post" class="grid grid-cols-2 gap-[16px]">
        
        <div  class="flex flex-col gap-[8px]" >
        
 
        <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
        <input type="text" id="first_name" name="first_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full outline-none p-2.5">
  
    </div>
                            

<div  class="flex flex-col gap-[8px]" >
        
 
        <label for="major" class="block text-sm font-medium text-gray-700">Major:</label>
        <input type="text" id="major" name="major" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full outline-none p-2.5">
  
    </div>
    <div  class="flex flex-col gap-[8px]" >
        
 
    <label for="course_name" class="block text-sm font-medium text-gray-700">Course Name:</label>
    <input type="text" id="course_name" name="course_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full outline-none p-2.5" required>
  
    </div>


    <div  class="flex flex-col gap-[8px]" >
        
 
    <label for="year" class="block text-sm font-medium text-gray-700">Year:</label>
    <input type="text" id="year" name="year" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full outline-none p-2.5" required>
  
    </div>
    <a href="add-student.php" class=" bg-[#4caf50] py-[8px] px-[16px] w-fit rounded-[4px] hover:bg-green-400"><p class="text-white text-[15px] font-bold font-['Lato']">Add student</p></a>
    </form></div>
        </div>

    </div>
</body>

</html>