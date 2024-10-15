<?php
$students = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $score = $_POST['score'];
    $students[$name] = $score;
}

echo "<table border='1'>";
echo "<tr><th>Student Name</th><th>Score</th></tr>";
foreach ($students as $studentName => $studentScore) {
    echo "<tr><td>$studentName</td><td>$studentScore</td></tr>";
}
echo "</table>";
?>
