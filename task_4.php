<?php 
for($number = 1000; $number <10000; $number++){
    $digits = array();
    $current = $number;
    $digitsCount = 0;

    while($current >= 1){
        $digit = $current % 10;
        $current /= 10;
        $digits[$digitsCount++] = $digit;
    }

    $decrease = true;
    for ($count = $digitsCount - 1; $count > 0; $count--){
        if($digits[$count] < $digits[$count - 1]){
            $decrease = false;
            break;
        }
    }
    if($decrease){
        echo $number.' ';
    }
    
}
