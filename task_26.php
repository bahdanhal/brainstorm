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

$N = $argv[1];  //multipler
$M = $argv[2];  //maximum
$max = $N;
$maxSum = sum($N);
for($count = 2; $count < $M; $count++){
    $number = $count * $N;
    $currentSum = sum($number);
    if($currentSum > $maxSum){
        $max = $number;
        $maxSum = $currentSum;
    }

}
echo $max;