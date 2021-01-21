<?php 

function no(){
    echo 'no';
    exit();
}
$digitsCount = 0;
$N = $argv[1];
$digit = $N % 10;
$N /= 10;
while($N >= 1){
    $currentDigit = $N % 10;
    $N /= 10;
    if($digit < $currentDigit){
        exit('no');
    }
    $digit = $currentDigit;
}

echo 'yes';
