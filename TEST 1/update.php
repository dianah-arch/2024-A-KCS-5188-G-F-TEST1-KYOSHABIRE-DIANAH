<?php
require_once "Staff.php";
$staff = new Staff();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $staff->update($_POST['id'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], 
                   $_POST['phone'], $_POST['position'], $_POST['salary'], $_POST['date_hired']);
    header("Location: index.php");
}

if (isset($_GET['id'])) {
    $record = $staff->getById($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Management System</title>
</head>
<body>
    <h2>Edit Staff</h2>
<form method="POST">
    <input type="hidden" name="id" value="<?= $record['id'] ?>">
    <input type="text" name="first_name" value="<?= $record['first_name'] ?>" required><br>
    <input type="text" name="last_name" value="<?= $record['last_name'] ?>" required><br>
    <input type="email" name="email" value="<?= $record['email'] ?>"><br>
    <input type="text" name="phone" value="<?= $record['phone'] ?>"><br>
    <input type="text" name="position" value="<?= $record['position'] ?>"><br>
    <input type="number" step="0.01" name="salary" value="<?= $record['salary'] ?>"><br>
    <input type="date" name="date_hired" value="<?= $record['date_hired'] ?>"><br>
    <button type="submit">Update</button>
</form>

    
</body>
</html>
