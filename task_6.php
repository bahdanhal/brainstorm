<?php 

for ($number = 1000; $number < 9999; $number++){
    $result = 0;
    $rightDigits = true;
    $current = $number;
    $dividend = 42;
    
    while($current >= 1){
        $digit = $current % 10;
        if($digit == 0){
            $current /= 10;
            continue;
        }
        if($dividend % $digit or $digit == 6 or $digit == 1){
            $rightDigits = false;
            break;
        }
        $dividend /= $digit;
        $current /= 10;
    }
    if($rightDigits and $dividend == 1){

        echo $number.' ';
    }
}