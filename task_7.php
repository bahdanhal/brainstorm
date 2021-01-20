<?php 

$digitsCount = 0;
$N = $argv[1];
$uniqueDigits = array();

while($N >= 1){
    $digit = $N % 10;
    $N /= 10;
    for($number = 0; $number < $digitsCount; $number++){
        if($uniqueDigits[$number] == $digit){
            echo 'yes';
            exit();
        }
    }
    $uniqueDigits[$digitsCount++] = $digit;
}
echo 'no';
