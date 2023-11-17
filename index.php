<?php

include 'mime_type.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

function myCalculator($num01, $oper, $num02) {
    $sum;
    switch ($oper) {   //Starts switch statement based on value of $oper
        case "add":   //If the value of code is add, the code inside the block is executed
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

$num01 = isset($_GET["$num01"]) ? $_GET["num01"] : 0;     //checks to see if it is in get arr, if it exists its assigned value of itself, if not, it is assigned 0
$oper = isset($_GET["$oper"]) ? $_GET["oper"] : '';
$num02 = isset($_GET["$num02"]) ? $_GET["num02"] : 0; 

var_dump($num01, $oper, $num02);
echo "Value: " . myCalculator($num01, $oper, $num02); 

?>