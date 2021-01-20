
<?php 

$max = $argv[1];
for($number = 0; $number < $max; $number++){
    $square = $number ** 2;
    $digitsCount = 0;
    $digits = array();

    while($square >= 1){
        $digit = $square % 10;
        $square /= 10;
        $digits[$digitsCount++] = $digit;
    }

    $palindrome = true;
    for ($count = 0; $count < $digitsCount/2; $count++){
        if ($digits[$count] != $digits[$digitsCount - 1 - $count]){
            $palindrome = false;
            break;
        }
    }
    if($palindrome){
        echo $number. ' ';
    }
}