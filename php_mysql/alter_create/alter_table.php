<?php
// Database connection parameters
$host = 'localhost';    // Replace with your host name
$db = 'college';        // Replace with your database name
$user = 'root';         // Replace with your database username
$pass = '';             // Replace with your database password
$charset = 'utf8mb4';

// Data Source Name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL to add unique constraint
    $sql = "ALTER TABLE department ADD UNIQUE (shortform)";

    // Executing the SQL query
    $pdo->exec($sql);

    echo "Unique constraint added to 'shortform' successfully";
} catch (PDOException $e) {
    echo "Error modifying table: " . $e->getMessage();
}

?>
