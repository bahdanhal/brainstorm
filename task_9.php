<?php 

function digit_to_array($number, &$digitsCount)
{
    $digits = array();
    while($number >= 1){
        $digit = $number % 10;
        $number /= 10;
        $digits[$digitsCount++] = $digit;
    }
    return $digits;
}

function array_to_digit($numbers, $digitsCount)
{
    $number = $numbers[$digitsCount - 1];
    for($count = $digitsCount - 2; $count >= 0; $count--){
        $number *= 10;
        $number += $numbers[$count];
    }
    return $number;
}

$number = $argv[1];
$numberSqrt = sqrt($number);

$digitsCount = 0;
$digitsSqrtCount = 0;
$digits = digit_to_array($number, $digitsCount);
$digitsSqrt = digit_to_array($numberSqrt, $digitsSqrtCount);

if($numberSqrt != array_to_digit($digitsSqrt, $digitsSqrtCount)){
    echo 'root is not integer';
    exit();
}

for ($count = 0; $count < $digitsSqrtCount; $count++){
    if($digits[$count] != $digitsSqrt[$count]){
        echo 'no';
        exit();
    }
}
echo 'yes';
