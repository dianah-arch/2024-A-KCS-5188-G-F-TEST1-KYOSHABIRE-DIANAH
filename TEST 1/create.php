<php
require_once "Staff.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $staff = new Staff();
    $staff->create($_POST['first_name'], $_POST['last_name'], $_POST['email'], 
                   $_POST['phone'], $_POST['position'], $_POST['salary'], $_POST['date_hired']);
    header("Location: index.php");
}
$conn = <mysqli-connect>("localhost","first_name","last_name","email","phone","position","salary","date_hired","database")
?>
