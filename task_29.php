<?php
if($argc < 3){
    exit('1st command line element - sum; 2nd, 3rd... - numbers');
}

function delete_numbers_ability($number, $sum) 
{
    if ($sum == 0) {
        return true;
    }

    if ($number == 0) {
        return false;    
    }
    
    if (delete_numbers_ability((int)$number / 10, $sum) == true){
        return true;
    }
    return delete_numbers_ability((int)$number / 10, $sum - ($number % 10));


}
$sum = $argv[1];
for($count = 2; $count < $argc; $count++){
    echo $argv[$count].': ';
    if(delete_numbers_ability($argv[$count], $argv[$sum])){
        echo 'yes';
    } else {
        echo 'no';
    }
    echo PHP_EOL;
}