<?php
function addAll($Array) {
    $TotalInt = 0;
    foreach ($Array as $Int) {
        $TotalInt += array_sum($Array);
        array_shift($Array);
    }
    return $TotalInt;
}
echo addAll([1,1,1,1,1]);