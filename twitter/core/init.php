<?php
include 'database/connection.php';
include 'classes/user.php';
include 'classes/tweet.php';
include 'classes/follow.php';
global $pdo;
session_start();
$getFromU = new User($pdo);
$getFromU = new Tweet($pdo);
$getFromU = new Follow($pdo);
const BASE_URL = 'http://localhost/twitter/';