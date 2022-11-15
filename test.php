<?php
// as loop
function addAll($Array) {                           // function implementation
    $TotalInt = 0;                                  // variable stated
    foreach ($Array as $Int) {                      // loops same amount of times as elements in $Array
        $TotalInt += array_sum($Array);             // Numbers in arrays are added up and set to variable $TotalInt
        array_shift($Array);                        // Removes first element of array
    }
    return $TotalInt;                               // Function returns a value
}
echo addAll([1,1,1,1,1]);                           // used to display and call the function addAll()

// as recursion function
function addAll2($Array, &$SumInt) {                // Function with array and reference int
    if (count($Array) > 0) {                        // Elements counted and checked if greater than 0
        $SumInt += array_sum($Array);               // Numbers in arrays are added up and set to $SumInt
        array_shift($Array);                        // Removes first element of array
        addAll2($Array, $SumInt);                   // Recurs the function
    }
}
$SumInt = 0;
addAll2([1,1,1,1,1],$SumInt);                       // Assigns values to $Array
echo $SumInt."<br>";                                // Displays sum total after execution of other code
