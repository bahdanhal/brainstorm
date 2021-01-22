<?php
$numbers = array();
for($count = 1; $count < $argc; $count++){
    $numbers[$count - 1] = $argv[$count];
}
$numbersCount = $argc - 1;
for($count = 1; $count < $numbersCount; $count++){
    $numbers[$count] += $numbers[$count - 1];
    
}
for($count = 0; $count < $numbersCount; $count++){
    echo $numbers[$count]. ' ';
}
