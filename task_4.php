<?php 
for($number = 1000; $number <10000; $number += 2){
    $current = $number;
    $prevDigit = $current % 10;
    $current /= 10;
    $digit = $current % 10;
    $current /= 10;
    $direction = $digit <=> $prevDigit;
    if($direction == 0){
        continue;
    }
    
    $movement = false;
    while($current >= 1){
        $prevDigit = $digit;
        $digit = $current % 10;
        
        switch($direction){
            case -1:

                $movement = true;
                if ($digit >= $prevDigit){
                    $movement = false;
                    break 2;
                }
                break;
            case 1:
                $movement = true;
                if ($digit <= $prevDigit){
                    $movement = false;
                    break 2;
                }
                break;
        }  
        
        $current /= 10;

    }
    if($movement){
        echo $number.' ';
    }
}
