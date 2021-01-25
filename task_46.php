<?php
if($argc < 2){
    exit;
}
$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;

$max = 1;
for($count = 0; $count < $numbersCount - 1; $count++){
    $N = 1;
    while ($count < $numbersCount - 1 and $numbers[$count] == $numbers[$count + 1] ){
        $N++;
        $count++;
    }
    if($N > $max){
        $max = $N;
    }
}
echo $max;