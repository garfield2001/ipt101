<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "ipt101repo";

$conn = new mysqli($sname, $uname, $password, $db_name,);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>  