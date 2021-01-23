<?php 

$digitsCount = 0;
$N = $argv[1];

while($N >= 1){
    $digit = $N % 10;
    $N /= 10;
    $nextDigits = $N;
    while($nextDigits >= 1){
        $currentDigit = $nextDigits % 10;
        if($digit == $currentDigit){
            exit('yes');
        }
        $nextDigits /= 10;
    }
}
echo 'no';
