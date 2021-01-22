<?php
function is_prime($number)
{
    for($count = 2; $count <= sqrt($number); $count++){
        if($number % $count == 0){
            return false;
        }
    }
    return true;
}

$number = $argv[1];
if($number % 2 == 0){
    $number++;
}
$max = 2 * $number + 1;
$prevPrime = false;
for($number; $number <= $max; $number += 2){
    if(is_prime($number)){
        if($prevPrime){
            echo ($number - 2). ' '. $number. PHP_EOL;
        }
        $prevPrime = true;
    } else {
        $prevPrime = false;
    }
}