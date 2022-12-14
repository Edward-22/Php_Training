<?php
class Person {
    protected static $ServernameStr = "localhost";
    protected static $UsernameStr = "phpmyadmin";
    protected static $PasswordStr = "password";
    protected static $ConnObj;

    public static function connect() {
        self::$ConnObj = new mysqli(self::$ServernameStr, self::$UsernameStr, self::$PasswordStr);
        if (self::$ConnObj->connect_error) {
            die("Connection failed: ".self::$ConnObj->connect_error);
        } else {
            self::databaseCreation();
        }
        return "Connected";
    }
    public static function closeConnection() {
        self::$ConnObj->close();
    }
    public static function databaseCreation() {
        $DatabaseNameStr = "MyDatabase";
        $Sql = <<<SQL
            CREATE DATABASE IF NOT EXISTS $DatabaseNameStr
        SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Database creation failed you: ".self::$ConnObj->error);
        } else {
            self::$ConnObj->select_db($DatabaseNameStr);
            self::tableCreation();
        }
        return "Created database";
    }
    public static function tableCreation() {
        $Sql = <<<SQL
                CREATE TABLE IF NOT EXISTS Person (
                Id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
                FirstName VARCHAR(30) NOT NULL,
                Surname VARCHAR(30) NOT NULL,
                DateOfBirth DATE NOT NULL,
                EmailAddress VARCHAR(250) UNIQUE,
                Age INT
            )
        SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Table creation failed you: ".self::$ConnObj->error);
        }
        return "Created table";
    }
    public static function createPerson($personObj) { //INSERT
        self::Connect();
        $Sql = <<<SQL
                INSERT INTO Person(FirstName, Surname, DateOfBirth, EmailAddress, Age)
                VALUES ("{$personObj->FirstNameStr}",
                        "{$personObj->SurnameStr}",
                        "{$personObj->DateOfBirthStr}",
                        "{$personObj->EmailAddressStr}",
                        "{$personObj->AgeStr}");
        SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Create person has failed you: ".self::$ConnObj->error);
        }
        self::closeConnection();
        return "Created person successfully";
    }
    public static function loadPerson($FirstNameStr) { // SELECT :: Search
        self::Connect();
        $Sql = <<<SQL
                SELECT * FROM Person 
                WHERE FirstName = '{$FirstNameStr}'
        SQL;
        $ResultObj = self::$ConnObj->query($Sql);
        $NewArr = [];
        if ($ResultObj->num_rows > 0) {
            while($AttributeArr = $ResultObj->fetch_assoc()) {
                $NewArr[] = $AttributeArr;
            }
        } else {
            die("Loading person failed:");
        }
        self::closeConnection();
        return $NewArr;
    }
    public static function savePerson($savePersonObj) { //UPDATE
        self::Connect();
        $Sql = <<<SQL
            UPDATE Person SET FirstName = "{$savePersonObj->FirstName}",
                              Surname = "{$savePersonObj->Surname}",
                              DateOfBirth = "{$savePersonObj->DateOfBirth}",
                              EmailAddress = "{$savePersonObj->EmailAddress}",
                              Age = "{$savePersonObj->Age}" 
            WHERE EmailAddress = "{$savePersonObj->FindEmailAddress}"
        SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Saving person failed: ".self::$ConnObj->error);
        }
        self::closeConnection();
        return "Updated";
    }
    public static function deletePerson($personDeleteObj) {
        self::connect();
        $Sql = <<<SQL
            DELETE FROM Person 
            WHERE FirstName = "{$personDeleteObj->FirstName}" AND EmailAddress = "{$personDeleteObj->EmailAddress}"
        SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Deleting person failed: ".self::$ConnObj->error);
        }
        self::closeConnection();
        return "Deleted";
    }
}