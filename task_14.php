<?php 
function simple($current)
{
    for($count = 2; $count <= sqrt($current); $count++){
        if($current % $count == 0){
            return false;
        }
    }
    return true;
}

$maxPrime = 2;
for($number = 0; $number < 10; $number++){
    for($current = $maxPrime + 1; ;$current++){
        if(simple($current) and simple($current + 2)){
            echo $current . ' and ' . ($current + 2). PHP_EOL;
            $maxPrime = $current + 2;
            break;
        }
    }
}
