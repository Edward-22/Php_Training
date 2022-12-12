<?php
require("Person.class.php");
    switch ($_POST['command']) {
        case "Search";
            echo json_encode(Person::loadPerson($_POST['data']));
            break;
        case "Create";
            echo json_encode(Person::createPerson($_POST['data']));
    }