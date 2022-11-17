<?php

$FirstInt=1;
$SecondInt=0;
for($f=0;$f<=9;$f++) {
    echo " $SecondInt,";
    $temp = $FirstInt+$SecondInt;
    $FirstInt = $SecondInt;
    $SecondInt = $temp;
}
echo "<br>";
$xInt = 0;
$yInt = 1;
$zInt = 0;
$CounterInt = 0;
echo $xInt." ",$yInt." ",$xInt+$yInt." ";
while($CounterInt <= 6) {
    $zInt = $xInt + $yInt;
    $xInt = $yInt;
    $yInt = $zInt;
    $zInt = $xInt + $yInt;
    $CounterInt++;
    echo $zInt." ";
}
echo "<br>";

function fibonacci($fib) {
    if($fib <=1) {
        return $fib;
    }
    else {
        return(fibonacci($fib -1)+fibonacci($fib -2));
    }
}
for($i=0;$i<=9;$i++) {
    echo fibonacci($i)." ";
}