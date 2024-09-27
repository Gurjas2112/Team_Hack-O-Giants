<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
</head>
<body>
    <h1>Add Event</h1>
    <form action="view_events.php" method="post">
        <label for="event_name">Event Name:</label>
        <input type="text" id="event_name" name="event_name" required>
        <br>
        <label for="event_date">Event Date:</label>
        <input type="date" id="event_date" name="event_date" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <br>
        <button type="submit">Add Event</button>
    </form>

    <h2>Event List</h2>
    <a href="show_events.php">show evetns</a>
    <a href="add_student.html">add student</a>
    <a href="add_teacher.html">add teacher</a>
    <a href="show_teacher.php">show</a>




</body>
</html>
