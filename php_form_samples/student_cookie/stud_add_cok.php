<?php
if (!isset($_COOKIE['students'])) {
    $students = [];
} else {
    $students = json_decode($_COOKIE['students'], true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $score = $_POST['score'];
    $students[$name] = $score;
    setcookie('students', json_encode($students), time() + (86400 * 30)); // Cookie expires in 30 days
}
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
    echo "<table border='1'>";
    echo "<tr><th>Student Name</th><th>Score</th></tr>";
    foreach ($students as $studentName => $studentScore) {
        echo "<tr><td>$studentName</td><td>$studentScore</td></tr>";
    }
    echo "</table>";
    ?>

    
</body>
</html>