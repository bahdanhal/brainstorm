<?php

if($argc < 2){
    exit;
}

$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;
$first = 0;
$last = 0;
$max = 0;
$zeros = false;
for($count = 0; $count < $numbersCount - 1; $count++){
    $length = 0;
    $currentFirst = 0;
    $currentLast = 0;
    if($numbers[$count] == 0){
        $currentFirst = $count;
        $zeros = true;
    }

    while($numbers[$count] == 0){
        $currentLast = $count;
        $count++;
    }

    if($currentLast - $currentFirst > $max){
        $max = $currentLast - $currentFirst;
        $first = $currentFirst;
        $last = $currentLast;
    }
}
if($zeros){
    echo "first: $first, last: $last";
}