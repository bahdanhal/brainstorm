<?php
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
if(delete_numbers_ability($argv[1], $argv[2])){
    echo 'yes';
} else {
    echo 'no';
}