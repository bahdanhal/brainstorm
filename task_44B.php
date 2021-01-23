<?php
function printArray($array, $count)
{
    for($printCount = 0; $printCount < $count; $printCount++){
        echo $array[$printCount]. ' ';
    }
    echo PHP_EOL;
}

if ($argc < 2){
    exit;
}
$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;
$positive = array();
$positiveCount = 0;

for($count = 0; $count < $numbersCount; $count++){
    if($numbers[$count] % 2){
        break;
    }
    echo $numbers[$count]. '...';//. $numbers[$current].'/';
    $current = $count;
    for($next = $count + 1; $next < $numbersCount; $next++){
        if($numbers[$next] % 2){
            
            $tmp = $numbers[$count];
            $numbers[$count] = $numbers[$current];
            $numbers[$current] = $tmp;
        }
    }

}

/*while($numbers[$numbersCount - 1] > 0){
    $positive[$positiveCount++] = $numbers[$numbersCount - 1];
    unset($numbers[$numbersCount - 1]);
    $numbersCount--;
}
while($numbers[$numbersCount - 1] == 0){
    unset($numbers[$numbersCount - 1]);
    $numbersCount--;
}*/

//echo 'Even: ';
printArray($numbers, $numbersCount);
//echo 'Odd: ';
//printArray($positive, $positiveCount);