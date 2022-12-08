<?php
echo "Hello World";
error_log("Helo again");
$time_start = microtime(true);
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
    }
    private static function tableCreation() {

        $Sql = <<<SQL
                CREATE TABLE IF NOT EXISTS Person (
                FirstName VARCHAR(20) NOT NULL,
                Surname VARCHAR(20) NOT NULL,
                DateOfBirth DATE NOT NULL,
                EmailAddress VARCHAR(30),
                Age INT(3)
            )
        SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Table creation failed you: ".self::$ConnObj->error);
        }
    }
    private static function closeConnection() {
        self::$ConnObj->close();
    }
    public static function createPerson($Int) { //INSERT
        self::Connect();
        $Sql = <<<SQL
                INSERT INTO Person(FirstName, Surname, DateOfBirth, EmailAddress, Age)
                VALUES ("Piet","Pompies","1988-01-01","pompie@pomp.com",$Int)
            SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Creating person failed you: ".self::$ConnObj->error);
        }
        self::closeConnection();
    }
    public static function loadPerson() { // SELECT
        self::Connect();
        $Sql = <<<SQL
                SELECT * FROM Person WHERE FirstName = "Piet"
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
    public static function savePerson() { //UPDATE
        self::Connect();
        $Sql = <<<SQL
            UPDATE Person SET FirstName = 'Peter' WHERE FirstName = "Piet"
        SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Saving person failed: ".self::$ConnObj->error);
        }
        self::closeConnection();
    }
    public static function deletePerson() {
        self::connect();
        $Sql = <<<SQL
            DELETE FROM Person WHERE Age = 2
        SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Deleting person failed: ".self::$ConnObj->error);
        }
        self::closeConnection();
    }
    public static function loadAllPeople() {
        self::connect();
        $Sql = <<<SQL
            SELECT * FROM Person
        SQL;
        $ResultObj = self::$ConnObj->query($Sql);
        $AllPeopleArr = [];
        if ($ResultObj->num_rows > 0) {
            while($AttributeArr = $ResultObj->fetch_assoc()) {
                $AllPeopleArr[] = $AttributeArr;
            }
        } else {
            die("Loading all people failed:");
        }
        self::closeConnection();
        return $AllPeopleArr;
    }
    public static function deleteAllPeople() {
        self::connect();
        $Sql = <<<SQL
            TRUNCATE TABLE Person
        SQL;
        if (!self::$ConnObj->query($Sql)) {
            die("Deleting person failed: ".self::$ConnObj->error);
        } else {
            self::closeConnection();
        }
    }
}
//Person::createPerson(1);
//When you want loop to create 10 Persons
/*for ($Int = 0; $Int <= 9; $Int++) {
    Person::createPerson($Int);
}*/
//-------------------------------------------
//Calling functions
//echo json_encode(Person::loadPerson());
//Person::savePerson();
//Person::deletePerson();
//echo json_encode(Person::loadAllPeople());
//Person::deleteAllPeople();
$ExecutionTimeInt = microtime(true) - $time_start;
//echo json_encode($_POST[]);
