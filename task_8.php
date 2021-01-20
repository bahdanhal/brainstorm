<?php 
for($N = 1000; $N < 9999; $N++){
    $uniqueDigits = array();
    $digitsCount = 0;
    $number = $N;
    $unique = true;
    while($number >= 1){
        $digit = $number % 10;
        $number /= 10;
        for($current = 0; $current < $digitsCount; $current++){
            if($uniqueDigits[$current] == $digit){
                $unique = false;
                break;
            }
        }
        if(!$unique){
            break;
        }
        $uniqueDigits[$digitsCount++] = $digit;
    }
    if($unique){
        echo $N.' ';
    }
}

