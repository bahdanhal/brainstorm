<?php 
$N = $argv[1];  //first number
$M = $argv[2];  //second number
if($N > $M){
    $max = $N;
    $min = $M;
} else {
    $max = $M;
    $min = $N;
}

if($max % $min == 0){
    exit($min);
}

$divisor = 1;
$count = 2;
$divCount = $min / 2;

for($count = 2; $count <= $divCount; $count++){
    if($max % $count == 0 and $min % $count == 0){
        $divisor = $count;
    }
}

echo $divisor;
