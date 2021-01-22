<?php
$beforeNegative = 0;
$sum = 0;
$count = 1;
for($count; $count < $argc; $count++){
    $number = $argv[$count];
    if($number < 0){
        $beforeNegative = $count - 1;
        break;
    }
}
for($count; $count < $argc; $count++){
    $number = $argv[$count];
    if($number < 0){
        $sum = 0;
    }
    if($number >= 0){
        $sum += $number;
    }
}
echo $beforeNegative. ' '. $sum;