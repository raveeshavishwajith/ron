<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ToDoList</title>
</head>
<body>
<div class="form-container">
        <h2>Manage your Events</h2>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="event-title">Event Title:</label>
                <input type="text" id="event-title" name="event_title" required>
            </div>
            <div class="form-group">
                <label for="event-date">Event Date:</label>
                <input type="date" id="event-date" name="event_date" required>
            </div>
            <button type="submit">ADD TO DO List</button>
        </form>
    </div>
</body>
</html>