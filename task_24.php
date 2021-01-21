<?php

$number = $argv[1];
$result = 0;
$rank = 0;
while($number >= 1){
    $result += ($number % 2) * (10 ** $rank++);
    $number /= 2;
}
echo "2: $result". PHP_EOL;

$number = $argv[1];
$result = '';
while($number >= 1){
    $digit = $number % 16;
    switch ($digit){
        case 10:
            $digit = 'A';
            break;
        case 11:
            $digit = 'B';
            break;
        case 12:
            $digit = 'C';
            break;
        case 13:
            $digit = 'D';
            break;
        case 14:
            $digit = 'E';
            break;
        case 15:
            $digit = 'F';
            break;
    }

    $result = $digit. $result; 
    $number /= 16;
}
echo "16: $result";