<?php
// Replace 'root' and '' with your actual database username and password
$host = 'localhost';
$db = 'college';
$user = 'root'; 
$pass = ''; 
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['rollno'])) {
    $rollno = $_POST['rollno'];

    $stmt = $pdo->prepare("SELECT * FROM students WHERE rollno = ?");
    $stmt->execute([$rollno]);
    $row = $stmt->fetch();

    if ($row) {
        echo "Name: " . $row['name'] . "<br>";
        echo "Roll Number: " . $row['rollno'] . "<br>";
        echo "Department: " . $row['department'] . "<br>";
        echo "University Reg No: " . $row['university_regno'] . "<br>";
    } else {
        echo "No student found with roll number $rollno.";
    }
}
?>
