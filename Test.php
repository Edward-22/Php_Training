<?php
class ItemOwners {
    public static function groupByOwners($ItemsArr) {

        return null;
    }
}
$ItemsArr = array(
    "Baseball Bat" => "John",
    "Golf Ball" => "Willem",
    "Tennis Racket" => "John"
);
echo json_encode(ItemOwners::groupByOwners($ItemsArr));