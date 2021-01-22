<?php
$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;
$maxIndex = 0;
$minIndex = 0;
for($count = 1; $count < $numbersCount; $count++){
    if($numbers[$count] > $numbers[$maxIndex]){
        $maxIndex = $count;
    }
    if($numbers[$count] < $numbers[$minIndex]){
        $minIndex = $count;
    }
}
$tmp = $numbers[$maxIndex];
$numbers[$maxIndex] = $numbers[$minIndex];
$numbers[$minIndex] = $tmp;

for($count = 0; $count < $numbersCount; $count++){
    echo $numbers[$count]. ' ';
}