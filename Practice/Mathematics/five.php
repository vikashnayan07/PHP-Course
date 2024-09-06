<?php
$a = (int)readline("Enter the number: ");
$ans = 0;
$temp = $a;
while($temp > 0){
    $rem = $temp%10;
    $ans = ($ans*10) + $rem;
    $temp = (int)($temp/10);
}
echo "Result: $ans";
?>