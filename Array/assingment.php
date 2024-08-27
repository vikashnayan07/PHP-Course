<?php

function calculateAverage($array) {
    $sum = array_sum($array);
    echo"sum of an array is :" .$sum . "\n";
    $count = count($array);
    echo"number of element in array is : " .$count . "\n";
    return $sum / $count;

}


function checkEvenOdd($number) {
    return $number % 2 === 0 ? "even" : "odd";
}


$array = [];
$size = (int)readline("Enter the number of elements in the array: ");
for ($i = 0; $i < $size; $i++) {
    $array[$i] = (int)readline("Enter element " . ($i + 1) . ": ");
}


$average = calculateAverage($array);

$evenOdd = checkEvenOdd($average);

echo "The average value of the array is: " . $average . "\n";
echo "The average is " . $evenOdd . ".\n";
?>
