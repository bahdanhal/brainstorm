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
$even = array();
$evenCount = 0;

for($count = 0; $count < $numbersCount; $count++){
    if(!($numbers[$count] % 2)){
        continue;
    }
    $current = $count;
    for($next = $count + 1; $next < $numbersCount; $next++){
        if(!($numbers[$next] % 2)){
            
            $tmp = $numbers[$next];
            $numbers[$next] = $numbers[$current];
            $numbers[$current] = $tmp;
            break;
        }
    }

}

while($numbers[$numbersCount - 1] % 2){
    $even[$evenCount++] = $numbers[$numbersCount - 1];
    unset($numbers[$numbersCount - 1]);
    $numbersCount--;
}

echo 'Even: ';
printArray($numbers, $numbersCount);
echo 'Odd: ';
printArray($even, $evenCount);