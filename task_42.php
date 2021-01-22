<?php
$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;

$maxIndex = 0;
$minIndex = 0;
$maxFlg = false;
$minFlg = false;
if($numbers[0] > 0){
    $minFlg = true;
}
if($numbers[0] < 0){
    $maxFlg = true;
}

for($count = 1; $count < $numbersCount; $count++){
    $number = $numbers[$count];
    if($number < 0){
        if($maxFlg){
            if($number > $numbers[$maxIndex]){
                $maxIndex = $count;
            }
        } else {
            $maxFlg = true;
            $maxIndex = $count;
        }
    }
    if($number > 0){
        if($minFlg){
            if($number < $numbers[$minIndex]){
                $minIndex = $count;
            }
        } else {
            $minFlg = true;
            $minIndex = $count;
        }
    }
}


if($minFlg){
    echo 'Min positive: '. $numbers[$minIndex]. PHP_EOL;
}
if($maxFlg){
    echo 'Max negative: '. $numbers[$maxIndex]. PHP_EOL;
}