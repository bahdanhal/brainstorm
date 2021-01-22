<?php
$firstPostitve = 0;
$lastNegative = 0;
$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;

for($count = 0; $count < $numbersCount; $count++){
    if($numbers[$count] > 0){
        $firstPostitve = $count;
        break;
    }
}

for($count = 0; $count < $numbersCount; $count++){
    if($numbers[$count] < 0){
        $lastNegative = $count;
    }
}

if(!(($lastNegative == 0 and $numbers[0] > 0) or ($firstPostitve == 0 and $numbers[0] < 0))){
    $tmp = $numbers[$lastNegative];
    $numbers[$lastNegative] = $numbers[$firstPostitve];
    $numbers[$firstPostitve] = $tmp;
    
}

for($count = 0; $count < $numbersCount; $count++){
    echo $numbers[$count]. ' ';
}
