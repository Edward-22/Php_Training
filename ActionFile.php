<?php
require("Person.class.php");
    switch ($_POST['command']) {
        case "Search";
            echo json_encode(Person::loadPerson($_POST['data']));
            break;
        case "Create";
            echo json_encode(Person::createPerson((object)$_POST['data']));
            break;
        case "Update";
            echo json_encode(Person::savePerson((object)$_POST['data']));
            break;
        case "Delete";
            echo json_encode(Person::deletePerson((object)$_POST['data']));
            break;
        case "StartDatabase";
            echo json_encode(Person::connect());
            break;
    }