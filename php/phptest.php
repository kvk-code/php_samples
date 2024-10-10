<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test Script</title>
</head>
<body>
    <h1>PHP Test Script</h1>

    <?php
    // Basic PHP information
    echo "<h2>PHP Version</h2>";
    echo "PHP Version: " . phpversion();

    // Server information
    echo "<h2>Server Information</h2>";
    echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
    echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "Server Address: " . $_SERVER['SERVER_ADDR'] . "<br>";

    // Date and time
    echo "<h2>Current Date and Time</h2>";
    date_default_timezone_set('UTC');
    echo "Current Date and Time (UTC): " . date('Y-m-d H:i:s');

    // Simple calculation
    echo "<h2>Simple Calculation</h2>";
    $num1 = 10;
    $num2 = 5;
    echo "$num1 + $num2 = " . ($num1 + $num2);

    // Array manipulation
    echo "<h2>Array Manipulation</h2>";
    $fruits = array("Apple", "Banana", "Orange", "Mango");
    echo "Fruits array: ";
    print_r($fruits);
    echo "<br>Number of fruits: " . count($fruits);

    // File system check
    echo "<h2>File System Check</h2>";
    $directory = "./";
    echo "Files in current directory:<br>";
    $files = scandir($directory);
    foreach($files as $file) {
        if($file != "." && $file != "..") {
            echo $file . "<br>";
        }
    }
    ?>

</body>
</html>