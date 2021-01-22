<?php

$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;

$maxCount = 0;
$minCount = 0;
$lastPositive = 0;
$firstNegative = 0;

for($count = 1; $count < $numbersCount; $count++){
    $number = $numbers[$count];
    if($number <= $numbers[$minCount]){
        $minCount = $count;
    }
    if($number > $numbers[$maxCount]){
        $maxCount = $count;
    }
}

for($count = 0; $count < $numbersCount; $count++){
    if($numbers[$count] < 0){
        $firstNegative = $count;
        break;
    }
}

for($count = 0; $count < $numbersCount; $count++){
    if($numbers[$count] > 0){
        $lastPositive = $count;
    }
}

if(!($firstNegative == 0 and $firstNegative <= 0) and $firstNegative < $maxCount){
    echo 'First negative:'. $numbers[$firstNegative]. PHP_EOL;
}
if(!($lastPositive == 0 and $lastPositive >= 0) and $lastPositive > $minCount){
    echo 'Last positive:'. $numbers[$lastPositive]. PHP_EOL;
}