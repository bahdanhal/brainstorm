
<?php 
$N = $argv[1];
$number = 0;
while($N >= 1){
    $digit = $N % 10;
    $N /= 10;
    $number *= 10;
    $number += $digit;
}
echo $number;