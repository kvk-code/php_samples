<!DOCTYPE html>
<html>
<head>
    <title>Calculation Result</title>
</head>
<body>
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = floatval($_GET['num1']);
        $num2 = floatval($_GET['num2']);

        $sum = $num1 + $num2;
        $difference = $num1 - $num2;
        $product = $num1 * $num2;

        echo "Sum: " . $sum . "<br>";
        echo "Difference: " . $difference . "<br>";
        echo "Product: " . $product . "<br>";
    }
    ?>
</body>
</html>
