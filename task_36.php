<?php
$numbers = array();
for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;

$max = 0;
for($count = 0; $count < $numbersCount; $count++){
    if($numbers[$count] > $max){
        $max = $numbers[$count];
    }
}

if ($max % 2 == 0){
    for($count = 0; $count < $numbersCount; $count++){
        if($numbers[$count] == $max){
            $numbers[$count] = $count;
        }
    }
}

for($count = 0; $count < $numbersCount; $count++){
    echo $numbers[$count]. ' ';
}