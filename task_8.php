<?php 
for($N = 1000; $N < 9999; $N++){
    $uniqueDigits = array();
    $digitsCount = 0;
    $number = $N;
    $unique = true;
    while($number >= 1){
        $digit = $number % 10;
        $number /= 10;
        $nextDigits = $number;
        while($nextDigits >= 1){
            $currentDigit = $nextDigits % 10;
            if($digit == $currentDigit){
                $unique = false;
                break;
            }
            $nextDigits /= 10;
        }
    }
    if($unique){
        echo $N.' ';
    }
}

