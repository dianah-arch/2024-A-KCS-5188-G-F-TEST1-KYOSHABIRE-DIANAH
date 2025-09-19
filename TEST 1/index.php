<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Staff</h2>
<form action="create.php" method="POST">
    <input type="text" name="first_name" placeholder="First Name" required><br>
    <input type="text" name="last_name" placeholder="Last Name" required><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="phone" placeholder="Phone"><br>
    <input type="text" name="position" placeholder="Position"><br>
    <input type="number" step="0.01" name="salary" placeholder="Salary"><br>
    <input type="date" name="date_hired"><br>
    <button type="submit">Save</button>
</form>

    
</body>
</html>