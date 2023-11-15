<?php

function myCalculator($num01, $oper, $num02) {
    $sum;
    switch ($oper) {
        case "add":
            $sum = $num01 + $num02;
            break;
        case "sub":
            $sum = $num01 - $num02;
            break;
        default:
        $sum = "There was an error!";
        break; 
    }
    return $sum;
}

$num01 = isset($_GET["num01"]) ? $_GET["num01"] : 0;  //checks to see if it is in get arr, if it exists its assigned value of itself, if not, it is assigned 0
$oper = isset($_GET["oper"]) ? $_GET["oper"] : '';
$num02 = isset($_GET["num02"]) ? $_GET["num02"] : 0;

echo "Value: " . myCalculator($num01, $oper, $num02);

?>