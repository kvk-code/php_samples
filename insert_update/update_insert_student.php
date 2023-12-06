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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? null;
    $rollno = $_POST['rollno'] ?? null;
    $department = $_POST['department'] ?? null;
    $university_regno = $_POST['university_regno'] ?? null;
    $action = $_POST['action'];

    if ($action == 'Insert') {
        $stmt = $pdo->prepare("INSERT INTO students (name, rollno, department, university_regno) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $rollno, $department, $university_regno]);
        echo "Student inserted successfully.";
    } elseif ($action == 'Update' && !empty($rollno)) {
        $updates = [];
        $params = [];
        if (!empty($name)) {
            $updates[] = "name = ?";
            $params[] = $name;
        }
        if (!empty($department)) {
            $updates[] = "department = ?";
            $params[] = $department;
        }
        if (!empty($university_regno)) {
            $updates[] = "university_regno = ?";
            $params[] = $university_regno;
        }

        if (count($updates) > 0) {
            $sql = "UPDATE students SET " . implode(', ', $updates) . " WHERE rollno = ?";
            $params[] = $rollno;
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);
            echo "Student updated successfully.";
        } else {
            echo "No information provided to update.";
        }
    }
}
?>
