<?php
class Follow extends User {
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
}