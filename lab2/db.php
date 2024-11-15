<?php

$servername = "localhost";
$username = "root";
$password = "admin123";
$database = "student_db";

//create connection

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>