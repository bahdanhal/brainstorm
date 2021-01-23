<?php 


$number = $argv[1];
$numberSqrt = sqrt($number);
if((int)$numberSqrt ** 2 != $number){
    exit('No root integer');
}
while($numberSqrt >= 1){
    $digit = $number % 10;
    $digitSqrt = $numberSqrt % 10;
    if($digit != $digitSqrt){
        exit('no');
    }
    $number /= 10;
    $numberSqrt /= 10;
}

echo 'yes';
