<?php
// Simulated student data (replace with database queries in a real application)
$students = [
    ['name' => 'Joym kujur', 'department' => 'MCA', 'year' => 'Fy', 'attdent' => 100, 'absent' => 12, 'roll_no' => 1]
];

$showAddForm = isset($_GET['add']);

// Handle form submission (in a real app, you'd save this to a database)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form data here
    // For now, we'll just redirect back to the main page
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .user-info {
            text-align: right;
        }
        h1 {
            margin: 0;
        }
        .add-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .submit-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><?php echo $showAddForm ? 'Add Student' : 'Student'; ?></h1>
            <div class="user-info">
                <div>Joy kujur</div>
                <div>Student</div>
            </div>
        </div>

        <?php if (!$showAddForm): ?>
            <a href="?add=1" class="add-button">Add student</a>
            <h2>Student Details</h2>
            <table>
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Student name</th>
                        <th>Department</th>
                        <th>Year</th>
                        <th>Attdent</th>
                        <th>absent</th>
                        <th>Roll no</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $index => $student): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo htmlspecialchars($student['name']); ?></td>
                            <td><?php echo htmlspecialchars($student['department']); ?></td>
                            <td><?php echo htmlspecialchars($student['year']); ?></td>
                            <td><?php echo htmlspecialchars($student['attdent']); ?></td>
                            <td><?php echo htmlspecialchars($student['absent']); ?></td>
                            <td><?php echo htmlspecialchars($student['roll_no']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <h2>Enter Student Details</h2>
            <form action="" method="POST">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Enter name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone no</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <select id="department" name="department" required>
                            <option value="">Select department</option>
                            <option value="MCA">MCA</option>
                            <option value="BCA">BCA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <select id="year" name="year" required>
                            <option value="">Select year</option>
                            <option value="Fy">First Year</option>
                            <option value="Sy">Second Year</option>
                            <option value="Ty">Third Year</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="roll_no">roll no</label>
                        <input type="text" id="roll_no" name="roll_no" required>
                    </div>
                </div>
                <button type="submit" class="submit-button">Add student</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>