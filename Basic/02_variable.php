<?php
//  $str="hello string";  
//  $x=200;  
//  $y=44.6;  
//  echo "string is: $str <br/>";  
//  echo "integer is: $x <br/>";  
//  echo "float is: $y <br/>";  

//sum of two variable 
// $x=5;  
// $y=6;  
// $z=$x+$y;  
// echo $z;  

// Static variable -> it is exist only in local function but it is not free from memory after execution of program;
function static_var()  
{  
    static $num1 = 3;       //static variable  
    $num2 = 6;          //Non-static variable  
    //increment in non-static variable  
    $num2++;  
    //increment in static variable  
    $num1++;  
    echo "Static variable num1: " .$num1 ."</br>";  
    echo "Non-stati variable num2 : " .$num2 ."</br>";  
}  
  
//first function call  
static_var();  

//second function call  
static_var();  
?>