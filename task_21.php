  
<?php 
$N = $argv[1];  //first number
$M = $argv[2];  //second number

while($N and $M){
    if($N > $M){
        $N %= $M;
    } else {
        $M %= $N;
    }
}

$divisor = $N + $M;
if($divisor == 1){
    exit('yes');
}
echo 'no';