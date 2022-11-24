<?php
$time_start = microtime(true);
$servername = "localhost";
$username = "phpmyadmin";
$password = "password";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
class Person {
    function createPerson() {
    }
    function loadPerson() {
    }
    function savePerson() {
    }
    function deletePerson() {
    }
    function loadAllPeople() {
    }
    function deleteAllPeople() {
    }
}
echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);
