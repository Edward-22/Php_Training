<?php
require("Person.class.php");
    switch ($_POST['command']) {
        case "Search";
            echo json_encode(Person::loadPerson($_POST['data']));
            break;
        case "Create";
            echo json_encode(Person::createPerson((object)$_POST['data']));
            break;
        /* case "Update";
             echo json_encode(Person::savePerson($_POST['data']));
             break;
         case "Delete";
             echo json_encode(Person::deletePerson($_POST['data']));*/
    }