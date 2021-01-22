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
    $min = $count;
    for($next = $count + 1; $next < $numbersCount; $next++){
        if($numbers[$next] < $numbers[$min]){
            $min = $next;
        }
    }
    $tmp = $numbers[$count];
    $numbers[$count] = $numbers[$min];
    $numbers[$min] = $tmp;
}

while($numbers[$numbersCount - 1] > 0){
    $positive[$positiveCount++] = $numbers[$numbersCount - 1];
    unset($numbers[$numbersCount - 1]);
    $numbersCount--;
}
while($numbers[$numbersCount - 1] == 0){
    unset($numbers[$numbersCount - 1]);
    $numbersCount--;
}

echo 'negative: ';
printArray($numbers, $numbersCount);
echo 'positive: ';
printArray($positive, $positiveCount);