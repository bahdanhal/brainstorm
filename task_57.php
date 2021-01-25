<?php
function argv_read(&$array, $first, $last, $argv)
{
    $arrayCount = 0;
    for($count = $first; $count < $last; $count++){
        $array[$arrayCount++] = $argv[$count];
    }        
    return $arrayCount;
}

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
//$argv[1] - k, $argv[2]...$argv[k] - elements, $argv[k + 1]... - array
if($argc < 2){
    exit;
}
$k = $argv[1];
$elements = array();
$numbers = array();
$elementsCount = argv_read($elements, 2, $k + 2, $argv);
$numbersCount = argv_read($numbers, $k + 2, $argc, $argv);
qSort($elements, 0, $elementsCount - 1);

$currentElement = $elementsCount - 1;
for($currentNumber = $numbersCount - 1; $currentNumber >= 0; $currentNumber--){
    while($elements[$currentElement] >= $numbers[$currentNumber] and $currentElement > 0){
        $numbers[$currentNumber + $currentElement] = $numbers[$currentElement];
        $currentElement--;
    }
    while($elements[$currentElement] < $numbers[$currentNumber] and $currentNumber > 0){
        $numbers[$currentNumber + $currentElement] = $numbers[$currentNumber];
        $currentNumber--;
    }
}

for($count = 0; $count < $numbersCount + $elementsCount - 1; $count++){
    echo $numbers[$count]. ' ';
}
