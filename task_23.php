<?php


$number = $argv[1];
$increase = 0;
while ($number >= 1){
    $current = $number;
    $min = $current % 10;
    while($current >= 1){    //min finding
        $digit = $current % 10;
      
        if($digit < $min){
            $min = $digit;
        }
        $current /= 10;
    }

    if(!$increase){     //result number
        $increase = $min;
    } else {
        $increase *= 10;
        $increase += $min;
    }
    

    $current = $number;
    $rank = 1;
    while ($current){   //rank of min finding
        $digit = $current % 10;
        if($digit == $min){
            break;
        }
        $current /= 10;
        $rank++;
    }

    $leftDivider = 10 ** $rank;
    $rightDivider = 10 ** ($rank - 1);
    $leftSide = (int) ($number / $leftDivider);
    $rightSide = $number % $rightDivider;
    //echo $number. '  '. $leftSide. ' '. $rightSide. ' '. $min;
    $number = $leftSide * $rightDivider + $rightSide;
    //echo PHP_EOL;
}

echo $increase;
