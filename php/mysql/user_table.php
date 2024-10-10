<?php
try {
    // Replace 'your_remote_host', 'your_port_number', 'your_username', and 'your_password'
    $dsn = "mysql:host=sql311.infinityfree.com;port=3306;dbname=if0_37462765_mydatabase";
    $username = "";
    $password = "";

    // Create a PDO connection
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to create a table
    $sql = "CREATE TABLE users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    // Execute the query
    $pdo->exec($sql);
    echo "Table 'users' created successfully";
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}

// Close the connection
$pdo = null;
?>
