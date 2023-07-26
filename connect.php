<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password="";
$database="tourism";

$connection = new mysqli($servername,$username,$password,$database);
echo "Connection Successfull!!!";

$name = $_POST['myname1'];
$email = $_POST['myemail'];
$phone = $_POST['myphone'];
$age = $_POST['myage'];
$gender = $_POST['gender'];
$departuredate = $_POST['departuredate'];
$returndate = $_POST['returndate'];
$td = $_POST['td'];






if ($connection->connect_error) {
    die('Connection failed:' . $connection->connect_error);
} 
else {

    
    $sql = "INSERT INTO `customer`(`name`, `email`, `phone`, `age`, `gender`, `departuredate`, `returndate`, `td`)"."VALUES ('$name','$email','$phone','$age','$gender','$departuredate','$returndate','$td')";
    $result = $connection->query($sql);
    echo "Record inserted sucessfully!!!";
}
?>
