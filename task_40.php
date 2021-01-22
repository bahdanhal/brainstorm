<?php

$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;

$max = $numbers[0];
$min = $numbers[0];

for($count = 1; $count < $numbersCount; $count++){
    $number = $numbers[$count];
    if($number < $min){
        $min = $number;
    }
    if($number > $max){
        $max = $number;
    }
}
for($count = 0; $count < $numbersCount; $count++){
    if($numbers[$count] % 2){
        $numbers[$count] = $min;
    } else {
        $numbers[$count] = $max;
    }
}

for($count = 0; $count < $numbersCount; $count++){
    echo $numbers[$count]. ' ';
}