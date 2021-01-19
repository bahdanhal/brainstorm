<?php 

function no(){
    echo 'no';
    exit();
}

$N = $argv[1];
$digits = array();
while($N >= 1){
    $digit = $N % 10;
    $N /= 10;
    array_push($digits, $digit);
}
$digitsCount = count($digits);
if ($digitsCount > 10 or $digitsCount < 2){
    no();
}

$difference = $digits[$digitsCount - 1] - $digits[$digitsCount - 2];
if ($difference > 0){
    no();
}

for ($count = $digitsCount - 2; $count > 0; $count--){
    $currentDifference = $digits[$count] - $digits[$count - 1];
    if($currentDifference != $difference){
        no();
    }
    
}
echo 'yes';
