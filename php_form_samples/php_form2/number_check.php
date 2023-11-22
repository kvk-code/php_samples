<!DOCTYPE html>
<html>
<head>
    <title>Number Check Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
        $method = $_SERVER["REQUEST_METHOD"];
        $number = ($method == "POST") ? floatval($_POST['number']) : floatval($_GET['number']);

        if ($number > 0) {
            echo "The number is positive.";
        } elseif ($number < 0) {
            echo "The number is negative.";
        } else {
            echo "The number is zero.";
        }
    }
    ?>
</body>
</html>
