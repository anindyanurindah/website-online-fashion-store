<?php
$host = "localhost";

$username = "root";
$password = "";
$db_name = "phpbookstore";
$con = mysqli_connect("$host", "root", "") or die("cannot connect" . mysqli_connect_errno());
mysqli_select_db($con,"$db_name") or die(mysqli_connect_errno());
?>