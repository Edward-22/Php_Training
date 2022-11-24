<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "password";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
/*$sql = "CREATE DATABASE Person";
if($conn->query($sql)===TRUE) {
    echo "Database created successfully";
}
else {
    echo "Error creating database: ".$conn->error;
}*/
$sql = "CREATE TABLE Person (
Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
FirstName VARCHAR(30) NOT NULL,
Surname VARCHAR(30) NOT NULL,
EmailAddress VARCHAR(50),
DateOfBirth DATE NOT NULL
)";
$sql = "USE Person";
if ($conn->query($sql)===TRUE) {
    echo "Table Person created successfully";
}
else {
    echo "Error creating table: ".$conn->error;
}
$conn->close();
