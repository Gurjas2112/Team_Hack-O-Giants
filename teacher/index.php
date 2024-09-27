<?php
// Simulated teacher data (replace with database queries in a real application)
$teachers = [
    ['name' => 'John Doe', 'department' => 'Computer Science', 'experience' => '5 years', 'subjects' => 'Mathematics', 'email' => 'john.doe@example.com']
];

$showAddForm = isset($_GET['add']);

// Handle form submission (in a real app, you'd save this to a database)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form data here (saving to a database or similar)
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
    <title>Teacher Management System</title>
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
            <h1><?php echo $showAddForm ? 'Add Teacher' : 'Teachers'; ?></h1>
            <div class="user-info">
                <div>Admin</div>
                <div>Teacher Management</div>
            </div>
        </div>

        <?php if (!$showAddForm): ?>
            <a href="?add=1" class="add-button">Add Teacher</a>
            <h2>Teacher Details</h2>
            <table>
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Experience</th>
                        <th>Subjects</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($teachers as $index => $teacher): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo htmlspecialchars($teacher['name']); ?></td>
                            <td><?php echo htmlspecialchars($teacher['department']); ?></td>
                            <td><?php echo htmlspecialchars($teacher['experience']); ?></td>
                            <td><?php echo htmlspecialchars($teacher['subjects']); ?></td>
                            <td><?php echo htmlspecialchars($teacher['email']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <h2>Enter Teacher Details</h2>
            <form action="" method="POST">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience (in years)</label>
                        <input type="text" id="experience" name="experience" required>
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <select id="department" name="department" required>
                            <option value="">Select Department</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Physics">Physics</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subjects">Subjects</label>
                        <input type="text" id="subjects" name="subjects" required>
                    </div>
                </div>
                <button type="submit" class="submit-button">Add Teacher</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
