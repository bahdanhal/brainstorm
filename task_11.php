<?php 
$N = $argv[1];  //multiplicator
$M = $argv[2];  //max

for($number = 1; $number <= $M; $number++){
    $element = $dividend = $number * $N;
    $sum = 0;

    while($dividend >= 1){
        $digit = $dividend % 10;
        $dividend /= 10;
        $sum += $digit;
    }

    //echo '/'.$number.'/';
    if($element % $sum == 0){
        echo $element. '   ';;
    }
}