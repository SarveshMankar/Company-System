<?php

include 'imports/config.php';

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "autoclick";
$conn = mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

echo "Connected successfully";
session_start();

echo $_SESSION['uname'];
echo $_SESSION['euid'];
echo $_SESSION['erole'];



?>
