<?php
$a = (int)readline("Enther the number: ");
function checkPalindrome($a){
$str = (string)$a;
$revese = strrev($str);
return $revese === $str;

}
if(checkPalindrome(($a))){
    echo "Palindrome";
}
else{
    echo "Not Palindrome";
}