<?php

function sum($current)
{
    $sum = 1;
    $count = 2; 
    for($count; $count < sqrt($current); $count++){
        if($current % $count == 0){
            $sum += $count;
            $sum += $current / $count;
        }

    }
    if($current % sqrt($current) == 0 and $count == sqrt($current)){
        $sum += sqrt($current);
    }
    return $sum;
}

$max = $argv[1];
$maxSum = sum($max);
for($count = 2; $count < $argc; $count++){
    $number = $argv[$count];
    $currentSum = sum($number);
    if($currentSum > $maxSum){
        $max = $number;
        $maxSum = $currentSum;
    }

}
echo $max;
