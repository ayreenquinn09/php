<?php

$host="localhost";
$user="errandpal";
$pass="";
$dbname="errandpal";

$conn = new mysqli(
    $host,
    $user,
    $pass,
    $dbname
);

if($conn->connect_error){
    die("Database Failed");
}

?>
