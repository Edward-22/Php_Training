<?php
//Solution as loop
$IntArr = [0,1];
$FibonacciArr = [0,1];
for ($Int=0; $Int<=7; $Int++) {
    $NextInt = array_sum($IntArr);
    array_shift($IntArr);
    array_push($IntArr, $NextInt);
    array_push($FibonacciArr,$NextInt);
}
echo json_encode($FibonacciArr)."<br>";

//Solution with recursive function
class Fibonacci{
    public static function getSequence($TotalIterationsInt){
        $SequenceArr = [0,1];
        for ($Int = 0; $Int <$TotalIterationsInt; $Int++) {
            $SequenceArr[$Int+2] = $SequenceArr[$Int] + $SequenceArr[$Int+1];
        }
        return $SequenceArr;
    }
}
echo json_encode(Fibonacci::getSequence(8));