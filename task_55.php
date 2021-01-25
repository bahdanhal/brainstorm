<?php


if($argc < 3){
    exit;
}

$numbers = array();
for($count = 2; $count < $argc; $count++){
    $numbers[$count - 2] = $argv[$count];
}
$numbersCount = $argc - 2;
$k = $argv[1];

$min = $numbers[0];
$max = $numbers[0];
for($count = 1; $count < $numbersCount; $count++){
    $number = $numbers[$count];
    if($number > $max){
        $max = $number;
    }
    if($number < $min){
        $min = $number;
    }
}

for($count = 0; $count < $numbersCount; $count++){
    if($numbers[$count] == $max){
        for($offset = $numbersCount - 1; $offset > $count; $offset--){
            $numbers[$offset + $k] = $numbers[$offset];
        }
        $numbersCount += $k;
        for($k; $k > 0; $k--){
            $numbers[$count + $k] = $min;
        }
    }
}

for($count = 0; $count < $numbersCount; $count++){
    echo $numbers[$count]. ' ';
}