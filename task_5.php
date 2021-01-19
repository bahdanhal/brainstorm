
<?php 

$digitsCount = 0;
$N = $argv[1];
$digits = array();

while($N >= 1){
    $digit = $N % 10;
    $N /= 10;
    $digits[$digitsCount++] = $digit;
}
for ($count = 0; $count < $digitsCount; $count++){
    echo $digits[$count];    
}