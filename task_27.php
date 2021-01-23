<?php

function is_prime($number)
{
    for($count = 2; $count <= sqrt($number); $count++){
        if($number % $count == 0){
            return false;
        }
    }
    return true;
}

function sum($number)
{
    $count = 2; 
    $sum = 0;
    for($count; $count <= sqrt($number); $count++){
        if(is_prime($count)){
            if($number % $count == 0){
                $number /= $count;
                $sum += $count;
                $count--;
                
            }
        }
    }
    $sum += $number;
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


