<?php
$a = (int)readline("Enter the first number: ");
$b = (int)readline("Enter the second number: ");
echo "Number before Swapping: " .$a , " "  .$b ."\n";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "1st number: " .$a , " second number: " .$b;
?>