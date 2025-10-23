<?php
/*
Simple Calculator in PHP
This script performs basic arithmetic operations: addition, subtraction, multiplication, and division.
*/  
function add($a, $b) {
    return $a + $b;
}           
function subtract($a, $b) {
    return $a - $b;
}   
function multiply($a, $b) {
    return $a * $b;
}   
function divide($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero.";
    }
    return $a / $b;
}
// Example usage
$num1 = 10;
$num2 = 5;
echo "Addition: " . add($num1, $num2) . "<br>";
echo "Subtraction: " . subtract($num1, $num2) . "<br>";
echo "Multiplication: " . multiply($num1, $num2) . "<br>";
echo "Division: " . divide($num1, $num2) . "<br>";              
?>
