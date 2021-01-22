<?php
$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;

$maxIndex = 0;
$lastNegativeIndex = 0;

for($count = 1; $count < $numbersCount; $count++){
    if($numbers[$count] > $numbers[$maxIndex]){
        $maxIndex = $count;
    }
    if($numbers[$count] < 0){
        $lastNegativeIndex = $count;
    }
}
if(!($lastNegativeIndex == 0 and $numbers[0] >= 0)){
    $tmp = $numbers[$maxIndex];
    $numbers[$maxIndex] = $numbers[$lastNegativeIndex];
    $numbers[$lastNegativeIndex] = $tmp;
}

for($count = 0; $count < $numbersCount; $count++){
    echo $numbers[$count]. ' ';
}