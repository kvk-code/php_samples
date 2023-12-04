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
    // Creating PDO instance
    $pdo = new PDO($dsn, $user, $pass);
    // Setting error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL to create 'students' table
   CREATE TABLE IF NOT EXISTS students (
    name VARCHAR(100),
    rollno INT,
    department VARCHAR(20) NULL,  // Allowing NULL values
    university_regno VARCHAR(50) PRIMARY KEY,
    FOREIGN KEY (department) REFERENCES department(shortform)
    ON DELETE SET NULL             // Setting ON DELETE action to SET NULL
);


    // Executing the SQL query
    $pdo->exec($sql);

    // Success message
    echo "Table 'students' created successfully";
} catch (PDOException $e) {
    // Error handling
    echo "Error creating table: " . $e->getMessage();
}
?>
