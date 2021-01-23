<?php 

for($count = 1; $count < $argc; $count++){ 
    $element = $dividend = $argv[$count];
    $sum = 0;
    while($dividend >= 1){
        $digit = $dividend % 10;
        $dividend /= 10;
        $sum += $digit;
    }
    if($sum){
        if($element % $sum == 0){
            echo $element. '   ';
        }
    }
}