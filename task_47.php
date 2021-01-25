<?php
function qSort(&$array, $left, $right)
{
    $currentLeft = $left;
    $currentRight = $right;
    $center = $array[($left + $right) / 2];

    do{
        while($array[$currentRight] > $center){
            $currentRight--;
        }    
        while($array[$currentLeft] < $center){
            $currentLeft++;
        }    
        if($currentLeft <= $currentRight){
            $tmp = $array[$currentLeft];
            $array[$currentLeft] = $array[$currentRight];
            $array[$currentRight] = $tmp;
            
            $currentLeft++;
            $currentRight--;
        }
    } while($currentLeft < $currentRight);

    if($currentRight > $left){
        qSort($array, $left, $currentRight);
    }
    if($right > $currentLeft){
        qSort($array, $currentLeft, $right);
    }

}

if($argc < 2){
    exit;
}

$numbers = array();

for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;
qSort($numbers, 0, $numbersCount - 1);
$repeats = 0; 
for($count = 0; $count < $numbersCount; $count++){
    if($count < $numbersCount - 1 and $numbers[$count] == $numbers[$count + 1]){
        $repeats++;
    }
    while ($count < $numbersCount - 1 and $numbers[$count] == $numbers[$count + 1]){
        $count++;
    }
}
echo $repeats;