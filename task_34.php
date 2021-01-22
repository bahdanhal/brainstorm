<?php
$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;

$pairs = 0;
for($count = 1; $count < $numbersCount; $count++){
    if($numbers[$count] == $numbers[$count - 1]){
        $pairs++;
    }
}
echo $pairs;
