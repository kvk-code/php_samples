<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <?php
    if (!isset($_SESSION['students'])) {
        $_SESSION['students'] = [];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $score = $_POST['score'];
        $_SESSION['students'][$name] = $score;
    }

    $students = $_SESSION['students'];
    
    echo "<table border='1'>";
    echo "<tr><th>Student Name</th><th>Score</th></tr>";
    foreach ($students as $studentName => $studentScore) {
        echo "<tr><td>$studentName</td><td>$studentScore</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
