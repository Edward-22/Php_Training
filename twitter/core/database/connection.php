<?php
$dsn = 'mysql:host=localhost; dbname=tweety';
$user = 'root';
$pass = 'password';
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'Connection error! '.$e->getMessage();
}