<?php
if($argc < 2){
    exit;
}

$numbers = array();
for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;

$maxSum = $minSum = $numbers[0] + $numbers[1];
$maxIndex = 0;
$minIndex = 1;
for($count = 1; $count < $numbersCount - 1; $count++){
    $sum = $numbers[$count] + $numbers[$count + 1];
    if($sum > $maxSum){
        $maxSum = $sum;
        $maxIndex = $count;
    }
    if($sum < $minSum){
        $minSum = $sum;
        $minIndex = $count + 1;
    }
}

echo "Min: $minIndex, max: $maxIndex";