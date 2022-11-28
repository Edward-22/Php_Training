<?php
class DatabaseDesign {
protected static $ServernameStr = "localhost";
protected static $UsernameStr = "phpmyadmin";
protected static $PasswordStr = "password";
//protected static $Conn
    public static function Connect() {
        $conn = new mysqli(self::$ServernameStr, self::$UsernameStr, self::$PasswordStr);
        if ($conn->connect_error) {
            die("Connection failed: ".$conn->connect_error);
        }
        else {
            return "Successfully connected!";
        }
    }
    public static function DatabaseCreation() {
        self::Connect();
        $Sql = "CREATE DATABASE IF NOT EXISTS Person";
        if ($conn -> query($Sql) === TRUE) {
            return "Database Exists";
        }
        else {
            die("Database failed you: ".$conn->error);
        }
        $conn->close();
    }
}
echo DatabaseDesign::Connect();