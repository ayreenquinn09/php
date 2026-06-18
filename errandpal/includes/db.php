<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "errandpal"
);

if ($conn->connect_error) {
    die("Database connection failed");
}

?>