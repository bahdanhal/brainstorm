
<?php 
$N = $argv[1];

for($count = 2; $count <= sqrt($N); $count++){
    if($N % $count == 0){
        echo 'No';
        exit();
    }
}
echo 'yes';