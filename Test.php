<?php

/*$IterationCountInt = 0;
$SequenceArr = [0,1];
do {
    $SequenceArr[$IterationCountInt + 2] = $SequenceArr[$IterationCountInt] + $SequenceArr[$IterationCountInt + 1];
    $IterationCountInt++;
}
while ($MaxNumberInt != end($SequenceArr));
echo json_encode($SequenceArr);*/

$InitialNumbersArr = [0,1];
$FibonacciArr = [0,1];
$MaximumNumberInt = $_POST["Maximum_Number"];
if ($MaximumNumberInt<=0) {
    alert("Only give numers from 1 and up!");
}
echo "Fibonacci is cool!<br>";
for ($Int = 0; $Int <= $MaximumNumberInt; $Int = array_sum($InitialNumbersArr)) {
    $NextInt = array_sum($InitialNumbersArr);
    array_shift($InitialNumbersArr);
    array_push($InitialNumbersArr, $NextInt);
    array_push($FibonacciArr, $NextInt);
}
echo json_encode($FibonacciArr);
