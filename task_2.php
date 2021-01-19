<?php 
$sum = $argv[1];
$n = 1000;
for ($number = 0; $number < 1000; $number++){
    $divider = $number;
    $digitSum = 0;
    while($divider >= 1){
        $digit = $divider % 10;
        $digitSum += $digit;
        $divider /= 10;
    }
    if ($digitSum == $sum){
        echo $number.' ';
    }
}
