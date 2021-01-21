
<?php 

$number = $argv[1];
$reversed = 0;
$count = 0;
while ($number > 1){
    $reversed = $reversed * 10 + ($number % 10);
    $number /= 10;
    $count++;
}

if(!($count % 2) and $argv[1] == $reversed){
    exit('yes');
}
echo 'no';
