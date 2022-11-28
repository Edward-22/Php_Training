<?php
class Person {
    protected static $ServernameStr = "localhost";
    protected static $UsernameStr = "phpmyadmin";
    protected static $PasswordStr = "password";
    protected static $ConnObj;

    private static function connect() {
        self::$ConnObj = new mysqli(self::$ServernameStr, self::$UsernameStr, self::$PasswordStr);
        if (self::$ConnObj->connect_error) {
            die("Connection failed: ".self::$ConnObj->connect_error);
        } else {
            self::databaseCreation();
        }
    }
    private static function databaseCreation() {
        $Sql = <<<SQL
            CREATE DATABASE IF NOT EXISTS MyDatabase
        SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Database creation ailed you: ".self::$ConnObj->error);
        }
        else {
            self::tableCreation();
        }
    }
    private static function tableCreation() {
        $Sql = <<<SQL
            CREATE TABLE IF NOT EXISTS Person
        SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Table creation failed you: ".self::$ConnObj->error);
        }
    }
    private static function closeConnection() {
        self::$ConnObj->close();
    }
    public static function createPerson() {
        self::Connect();
        // SQL INSERT
        for ($I = 0; $I <10; $I++) {
            $Sql = <<<SQL
            
        SQL;
        }
        if (!self::$ConnObj->query($Sql)) {
            die("Creating person failed you: ".self::$ConnObj->error);
        }
        self::closeConnection();
    }
}
Person::createPerson();