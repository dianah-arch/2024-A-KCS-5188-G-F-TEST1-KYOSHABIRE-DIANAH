<?php
require_once "Staff.php";

if (isset($_GET['id'])) {
    $staff = new Staff();
    $staff->delete($_GET['id']);
}
header("Location: index.php");
?>
