<?php
function factorial($number) {
    if ($number == 0) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    echo "The factorial of $number is " . factorial($number);
}
?>
