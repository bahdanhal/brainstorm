<?php
//argv 1 - number, argv 2 - N, argv 3... - array
if($argc < 4){
    exit;
}
$numbers = array();

for($count = 3; $count < $argc; $count++){
    $numbers[$count - 3] = $argv[$count];
}
$numbersCount = $argc - 3;

for($count = 0; $count < $numbersCount; $count++){
    $N = 0;
    while ($numbers[$count] == $argv[1]){
        $N++;
        if($N == $argv[2]){
            exit('yes');
        }
        $count++;
    }
}
echo 'no';