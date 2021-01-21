
<?php 
function is_palindrome($number)
{
    $reversed = 0;
    $count = 0;
    $divisor = $number;
    while ($divisor > 1){
        $reversed = $reversed * 10 + ($divisor % 10);
        $divisor /= 10;
        $count++;
    }
    
    if($number == $reversed){
        return true;
    }
    return false;
}

$max = $argv[1];
for($number = 4; $number < $max; $number++){
    $square = $number ** 2;
    if(is_palindrome($square)){
        echo $number. ' ';
    }
}