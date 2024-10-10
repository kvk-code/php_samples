<?php
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO students (name, age) VALUES (:name, :age)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters and execute
    $name = "Alice";
    $age = 22;
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':age', $age);
    $stmt->execute();

    echo "New student record created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$pdo = null;
?>
