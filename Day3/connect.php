<?php

$hostname = "localhost";
$dbusenname = "root";
$dbpassword = "password";
$dbname = "result";

$conn = new mysqli($hostname,$dbusenname,$dbpassword,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  
}

//echo "Connected Successfully";


/*$sqlCreateTable = "CREATE TABLE class1 (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name CHAR(20) NOT NULL,
    sub1 INT NOT NULL,
    sub2 INT NOT NULL,
    sub3 INT NOT NULL,
    sub4 INT NOT NULL,
    sub5 INT NOT NULL,
    total_obtained INT NOT NULL,
    total_marks INT NOT NULL,
    percent FLOAT NOT NULL);";

if ($conn->query($sqlCreateTable) == FALSE) {
    echo "Error creating table: " . $conn->error;
}*/


?>