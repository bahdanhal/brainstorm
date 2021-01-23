<?php 
for($number = 1000; $number <10000; $number+=2){
    $current = $number;
    $prevDigit = $current % 10;
    $current /= 10;
    $digit = $current % 10;
    $direction = $digit <=> $prevDigit;
    $movement = false;
    while($current >= 1){
        $prevDigit = $digit;
        $digit = $current % 10;
        switch($direction){
            case 0:
                $direction = $digit <=> $prevDigit;
                $movement = true;
                break;

            case -1:
                $movement = true;
                if ($digit > $prevDigit){
                    $movement = false;
                    $current = 0;
                }
                break;
            case 1:
                $movement = true;
                if ($digit < $prevDigit){
                    $movement = false;
                    $current = 0;
                }
                break;
                
        }

        $current /= 10;

    }

    if($movement){
        echo $number.' ';
    }
    
}
