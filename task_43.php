<?php
if ($argc < 2){
    exit;
}
$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;

//$max = $prevMax = $min = $prevMax = $numbers[0];
if($numbers[0] > $numbers[1]){
    $max = $prevMin = $numbers[0];
    $min = $prevMax = $numbers[1];
}
for($count = 2; $count < $numbersCount; $count++){
    $number = $numbers[$count];
    if($number > $max){
        $prevMax = $max;
        $max = $number;
    } else if($number > $prevMax){
        $prevMax = $number;
    }
    if($number < $min){
        $prevMin = $min;
        $min = $number;
    } else if($number < $prevMin){
        $prevMin = $number;
    }
}

echo "Min: $min, $prevMin". PHP_EOL;
echo "Max: $max, $prevMax". PHP_EOL;