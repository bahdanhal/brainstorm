<?php

function factorial($number)
{
    return ($number == 1 or $number == 0) ? 1 : $number * factorial($number - 1);
}

$sum = 0;
$amount = 0;
for($count = 1; $count < $argc; $count++){ 
    $current = $number = $argv[$count];
    $factSum = 0;
    while($current >= 1){
        $digit = $current % 10;
        $factSum += factorial($digit);
        $current /= 10;
    }
    if($factSum == $number){
        $amount++;
        $sum += $factSum;
    }
}
echo 'sum '. $sum. ' ';
echo 'amount '. $amount. ' ';