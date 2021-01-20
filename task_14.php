
<?php 

$number = $argv[1];
$digitsCount = 0;
$digits = array();

while($number >= 1){
    $digit = $number % 10;
    $number /= 10;
    $digits[$digitsCount++] = $digit;
}
if($digitsCount % 2){
    exit('no');
}
for ($count = 0; $count < $digitsCount/2; $count++){
    if ($digits[$count] != $digits[$digitsCount - 1 - $count]){
        exit('no');
    }
}
echo 'yes';