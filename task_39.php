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
    if($number % 2){
        if($number < $min){
            $min = $number;
        }
    } else {
        if($number > $max){
            $max = $number;
        }
    }
}
if(!($max == $numbers[0] and $max % 2)){
    echo "max: $max ";
}
if(!($min == $numbers[0] and !($max % 2))){
    echo "min: $min ";
}