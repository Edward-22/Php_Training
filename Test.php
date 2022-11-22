<?php
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