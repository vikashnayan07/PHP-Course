<?php
// function wlcmMsg(){

//     echo "Hello This is a welcome msg";

// }
// wlcmMsg();

// function StudentsName($firstname) {
//     echo"".$firstname."\n";
// }
// StudentsName("vikash nayan");
// StudentsName("mahendra sing dhoni");

function SumOfTwoNumber($num1, $num2) {
    return $num1 + $num2;
}

$sum = SumOfTwoNumber(4,5);

echo "Sum of two num is "  . $sum,"\n";


?>
<?php
$a = (int)readline("Enter the value: ");
function fact($a){
    $ans = 1;
    while($a>0){
        $ans = $a*$ans;
        $a--;
    }

    echo "$ans";
}
fact($a);
?>

<?php
$a = (int)readline("Enter the value: ");
function fab($a){
    if($a ==1 || $a ==0) return $a;
    return fab($a -1) + fab($a -2);

}
echo fab($a);
?>

<?php
$a = (int)readline("input 1:");
$b = (int)readline("input 2:");

function swap(& $a, & $b){
    $rev = $a;
    $a = $b;
    $b = $rev;
}

swap($a,$b);
echo "a:  . $a ,  b: " .$b;


?>
<?php  
function sayHello($name="Ram"){  
echo "Hello $name<br/>";  
}  
sayHello("Sonoo");  
sayHello(); 
sayHello("Vimal");  
?>  