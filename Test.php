<?php
$InitialNumbersArr = [0,1];
$FibonacciArr = [0,1];
$MaximumNumberInt = 34;
echo "Fibonacci is cool!<br>";
    for ($Int = 0; $Int <= $MaximumNumberInt; $Int = array_sum($InitialNumbersArr)) {
        $NextInt = array_sum($InitialNumbersArr);
        array_shift($InitialNumbersArr);
        array_push($InitialNumbersArr, $NextInt);
        array_push($FibonacciArr, $NextInt);
    }
echo json_encode($FibonacciArr);


/*class Fibonacci{
    public static function getSequence($TotalIterationsInt){
        $SequenceArr = [0,1];
        for ($Int = 0; $Int <$TotalIterationsInt; $Int++) {
            $SequenceArr[$Int+2] = $SequenceArr[$Int] + $SequenceArr[$Int+1];
        }
        return $SequenceArr;
    }
}
echo json_encode(Fibonacci::getSequence(8));*/