<?php
function findGCD($num1, $num2){
    while($num2 != 0){
        $rem = $num1 % $num2;
        $num1 = $num2;
        $num2 = $rem;

    }
    return $num1;
}
$num1 = (int)readline("Enter the First number : ");
$num2 = (int)readline("Enter the First number : ");

$ans = findGCD($num1, $num2);
echo "Result $ans";
?>
