<?php
$host = "127.0.0.1";
$username= "root";
$password = "lala123";
$database = "thikxadb";

$db = mysqli_connect($host, $username, $password, $database);

if(!$db){
    echo "<p>error establishing connection with database</p>"; 
    die("Connection Failed");
}
?>