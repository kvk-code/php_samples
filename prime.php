<?php

function isPrime($number) {
    // Numbers less than 2 are not prime
    if ($number < 2) {
        return false;
    }

    // Check divisibility from 2 up to the number before it
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            // If divisible by any number other than 1 and itself, it's not prime
            return false;
        }
    }

    // If not divisible by any number other than 1 and itself, it's prime
    return true;
}

// Test the function with a number
$testNumber = 7;
if (isPrime($testNumber)) {
    echo $testNumber . " is a prime number.";
} else {
    echo $testNumber . " is not a prime number.";
}

?>
