<?php
$a = (int)readline("Enter the number: ");
$ans =1;
while($a >1){
$ans = $a*$ans;
$a--;
}
echo "Result : $ans";
?>
<?php

$ans =1;
 function findFactorial($a){
if($a <= 1){
    return 1;
}
 return $a * findFactorial($a-1);
}
$a = (int)readline("Enter the number: ");
$ans = findFactorial($a);
echo $ans;
echo "Results: $ans";
?>