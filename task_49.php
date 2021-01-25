<?php

if($argc < 2){
    exit;
}

$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;

$lastIs = false;
$last = 0;
for($count = 0; $count < $numbersCount; $count++){
    if(!($numbers[$count] % 2)){
        $last = $count;
        $lastIs = true;
    }
}
if($lastIs){
    $tmp = $numbers[$numbersCount - 1];
    $numbers[$numbersCount - 1] = $last;
    $numbers[$last] = $tmp;
}

for($count = 0; $count < $numbersCount; $count++){
    echo $numbers[$count]. ' ';
}