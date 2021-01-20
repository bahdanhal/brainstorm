<?php 
function sum($current)
{
    $sum = 1;
    $count = 2; 
    for($count; $count < sqrt($current); $count++){
        if($current % $count == 0){
            $sum += $count;
            $sum += $current / $count;
        }

    }
    if($current % sqrt($current) == 0 and $count == sqrt($current)){
        $sum += sqrt($current);
    }
    return $sum;
}

$N = $argv[1]; //min
$M = $argv[2]; //max
$friends = array();
$friendsCount = 0;
for($firstNumber = $N; $firstNumber <= $M; $firstNumber++){
    $firstSum = sum($firstNumber);
    for($secondNumber = $firstNumber + 1; $secondNumber <= $M; $secondNumber++){

        if(sum($secondNumber) == $firstNumber and $firstSum == $secondNumber){
            echo $firstNumber. ' and '. $secondNumber. PHP_EOL;
        }
    }
}