<?php 

$digits = array();
for ($number = 1000; $number < 9999; $number++){
    $digitsCount = 0;
    $rightDigits = true;
    $current = $number;
    while($current >= 1){
        $digit = $current % 10;
        if(!(($digit == 0) or ($digit == 2) or ($digit == 3) or ($digit == 7))){
            $rightDigits = false;
            break;
        }
        $current /= 10;
        $digits[$digitsCount++] = $digit;
    }
    if($rightDigits){
        for ($count = 0; $count < $digitsCount; $count++){
            echo $digits[$count];    
        }
        echo ' ';
    }
}