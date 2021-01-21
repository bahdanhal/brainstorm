<?php

$number = $argv[1];
$count = 1;

$current = $number;
while($current >= 1){
    $current /= 10;
    $count++;
}
while ($number >= 1 and $count > 1){
    
    $current = $number;
    $min = $current % 10;
    $currentRank = 1;
    $rank = 1;
    for($currentDigits = 0; $currentDigits < $count - 1; $currentDigits++){
        
        $digit = $current % 10;
        
        if($digit < $min){
            $min = $digit;
            $rank = $currentRank;
        }
        $currentRank++;
        $current /= 10;

    }
    //delete
    $leftDivider = 10 ** $rank;
    $rightDivider = 10 ** ($rank - 1);
    $leftSide = (int) ($number / $leftDivider);
    $rightSide = $number % $rightDivider;
    $number = $leftSide * $rightDivider + $rightSide;

    //add
    $leftDivider = 10 ** ($count - 2);
    $rightDivider = 10 ** ($count - 2);
    $leftSide = (int) ($number / $leftDivider);
    $rightSide = $number % $rightDivider;

    $number = $leftSide * $rightDivider * 10 + $min * (10 ** ($count - 2)) + $rightSide;

    $count--;
}
echo $number;


