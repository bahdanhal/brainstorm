<?php 
$digitCount = 0;
$N = $argv[1];
while($N >= 1){
    $digit = $N % 10;
    //echo $digit;
    if($digit < 5){
        $digitCount++;
    }
    $N /= 10;
    echo $N.' ';
}
echo $digitCount;