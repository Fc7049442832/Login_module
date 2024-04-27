<?php 
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "demo";

//Set the defult timezone 
date_default_timezone_set('Asia/Kolkata');
$currentDateTime = date('Y-m-d H:i:s');

$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection

if($conn->connect_error){
    die("Connection Failed : ". $conn->connect_errno);
}

?>