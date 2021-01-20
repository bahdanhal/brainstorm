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
    for($secondNumber = $N; $secondNumber <= $M; $secondNumber++){
        if($secondNumber == $firstNumber){
            break;
        }

        if(sum($secondNumber) == $firstNumber and $firstSum == $secondNumber){
            $repeat = false;
            for($currentFriendsCount = 0; $currentFriendsCount < $friendsCount; $currentFriendsCount++){
                if(($secondNumber == $friends[$currentFriendsCount][0] and $firstNumber == $friends[$currentFriendsCount][1]) or 
                ($secondNumber == $friends[$currentFriendsCount][1] and $firstNumber == $friends[$currentFriendsCount][0])){
                    $repeat = true;
                    break;
                }
            }
            if($repeat){
                break;
            }
            $friends[$friendsCount++] = [$firstNumber, $secondNumber];
            echo $firstNumber. ' and '. $secondNumber. PHP_EOL;
        }
    }
}