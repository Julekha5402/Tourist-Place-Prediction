<?php
echo "hello";

$server = "127.0.0.1:3307";
$username = "root";
$password="";
$database = "tourism";

$con = mysqli_connect($server, $username, $password, $database);
echo "Connection ws successful";
?>