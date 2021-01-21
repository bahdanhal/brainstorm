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


$count = 2; 
for($count; $count <= sqrt($number); $count++){
    if(is_prime($count)){
        if($number % $count == 0){
            echo $count. ' ';
            $number /= $count;
            $count--;
        }
    }
}
echo $number;
