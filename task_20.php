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
$number = $argv[1];
$max = $number;
$maxSum = sum($number);
for(++$number; $number <= $argv[2]; $number++){
    $currentSum = sum($number);
    if($currentSum > $maxSum){
        $max = $number;
        $maxSum = $currentSum;
    }
}
echo $max;