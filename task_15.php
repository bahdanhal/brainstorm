<?php 
$N = $argv[1];
$divisors = 0;
$count = 2; 

for($count; $count < sqrt($N); $count++){
    if($N % $count == 0){
        $divisors += 2;
    }
}

if($N % sqrt($N) == 0 and $count == sqrt($N)){
    $divisors++;
}

echo ++$divisors;