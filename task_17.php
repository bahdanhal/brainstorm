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
echo $N + $M;
