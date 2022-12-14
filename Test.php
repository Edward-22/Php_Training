<?php
function addAll($Array) {
    $CountInt = 0;
    foreach($Array as $Int) {
        $TotalInt = array_sum($Array);
        $CountInt += $TotalInt;
        array_pop($Array);
    }
    return "5+4+3+2+1=".$CountInt;
}
echo addAll([1,1,1,1,1]);