<?php
class Tweet extends User {
    function __construct($pdo) {
        $this->pdo = $pdo;
    }
}