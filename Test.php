<?php
$InitialNumbersArr = [0,1];
$FibonacciArr = [0,1];
$MaximumNumberInt = $_POST["data"];
if ($MaximumNumberInt>1) {
    echo "Fibonacci is cool!<br>";
    for ($Int = 0; $Int <= $MaximumNumberInt; $Int = array_sum($InitialNumbersArr)) {
        $NextInt = array_sum($InitialNumbersArr);
        array_shift($InitialNumbersArr);
        array_push($InitialNumbersArr, $NextInt);
        array_push($FibonacciArr, $NextInt);
    }
    echo json_encode($FibonacciArr);
}   else if ($MaximumNumberInt<0) {
    echo "<script>alert('That was a SUS number!')</script>";
    header("Location: http://localhost/Php_Training/Front.php");
} else if ($MaximumNumberInt==0) {
    echo "[0]";
} else {
    echo json_encode($FibonacciArr);
}