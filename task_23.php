<?php


$number = $argv[1];
$increase = 0;
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
    //echo $number. PHP_EOL;
    //add
    //echo $count. PHP_EOL;
    $leftDivider = 10 ** ($count - 2);
    $rightDivider = 10 ** ($count - 2);
    //echo $number. ' '. $leftDivider. '  '. $rightDivider. PHP_EOL;
    $leftSide = (int) ($number / $leftDivider);
    
    $rightSide = $number % $rightDivider;
    $number = $leftSide * $rightDivider * 10 + $min * (10 ** ($count - 2)) + $rightSide;
    
    //echo $leftSide. '  '. $min . ' '.$rightSide. PHP_EOL;
    //echo $number. ' '. $min.'   '. (10 ** ($count - 2)). PHP_EOL;
    

    
    $count--;
}
echo $number;


