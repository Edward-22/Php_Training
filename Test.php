<?php
class ItemOwners {
    public static function groupByOwners($ItemsArr) {
        $NewArr = [];
        foreach ($ItemsArr as $KeyStr => $ValueStr) {
            $NewArr[$ValueStr][] = $KeyStr;
        }
        return $NewArr;
    }
}
$ItemsArr = array(
    "Baseball Bat" => "John",
    "Golf Ball" => "Willem",
    "Tennis Racket" => "John"
);
echo json_encode(ItemOwners::groupByOwners($ItemsArr));