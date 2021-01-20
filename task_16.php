<?php 
$N = $argv[1];  //min
$M = $argv[2];  //max
for($current = $N; $current <= $M; $current++){
    $sum = 1;
    $count = 2; 
    for($count; $count < sqrt($current); $count++){
        if($current % $count == 0){
            $sum += $count;
            $sum += $current / $count;
        }

    }

    if($current % sqrt($current) == 0 and $count == sqrt($current)){
        $sum += sqrt($current);
    }
    echo $sum.'_';
    if($current == $sum){
        echo $current. ' ';
    }
}