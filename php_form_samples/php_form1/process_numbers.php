<?php
// Simple calculation script assuming GET request with num1 and num2.
// Example: process_numbers.php?num1=10&num2=5

$num1 = isset($_GET['num1']) ? (float) $_GET['num1'] : 0;
$num2 = isset($_GET['num2']) ? (float) $_GET['num2'] : 0;

$sum        = $num1 + $num2;
$difference = $num1 - $num2;
$product    = $num1 * $num2;

header('Content-Type: text/plain'); // Optional: plain text output
echo "Sum: $sum\n";
echo "Difference: $difference\n";
echo "Product: $product\n";
