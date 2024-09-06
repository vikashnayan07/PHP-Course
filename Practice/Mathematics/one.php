<?php
$a = (int)readline("Enter the number: ");
$isPrime = true;

if($a <= 1){
    $isPrime = false;  
} else {
    
    for($i = 2; $i * $i <= $a; $i++){
        if($a % $i == 0){
            $isPrime = false; 
            break;  
        }
    }
}


if ($isPrime) {
    echo "$a is a prime number.\n";
} else {
    echo "$a is not a prime number.\n";
}
?>
