<?php
$MaxNumberInt = 34;
$IterationCountInt = 0;
$SequenceArr = [0,1];
do {
    $SequenceArr[$IterationCountInt + 2] = $SequenceArr[$IterationCountInt] + $SequenceArr[$IterationCountInt + 1];
    $IterationCountInt++;
}
while ($MaxNumberInt != end($SequenceArr));
echo json_encode($SequenceArr);
