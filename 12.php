<?php
// 1. strlen() - Get the length of a string
$string = "Hello, Bayb...!";
echo "Length of the string: " . strlen($string) . "<br>";

// 2. strrev() - Reverse a string
echo "Reversed string: " . strrev($string) . "<br>";

// 3. array_sum() - Calculate the sum of array elements
$numbers = array(10, 20, 30, 40);
echo "Sum of array elements: " . array_sum($numbers) . "<br>";

// 4. count() - Count the number of elements in an array
echo "Number of elements in array: " . count($numbers) . "<br>";

// 5. date() - Get the current date and time
echo "Current date and time: " . date("Y-m-d H:i:s") . "<br>";
?>