<?php
class User {
    protected $pdo;
    function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function checkInput($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripcslashes($data);
        return $data;
    }
}