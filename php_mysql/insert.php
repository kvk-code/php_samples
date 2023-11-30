<?php
$host = 'localhost'; // or your host
$db   = 'college'; // your database name
$user = 'root'; // your database username
$pass = ''; // your database password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $department_name = $_POST['department_name'];
    $shortform = $_POST['shortform'];
    $hod_name = $_POST['hod_name'];
    $number_of_students = $_POST['number_of_students'];

    $sql = "INSERT INTO department (department_name, shortform, hod_name, number_of_students) VALUES (?, ?, ?, ?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$department_name, $shortform, $hod_name, $number_of_students]);

    echo "Department added successfully";
}
?>
