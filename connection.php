<?php
// Database connection parameters
$host = 'localhost'; // Change this if your MySQL server is on a different host
$dbname = 'student_attendance';
$username = 'root';
$password = ''; // No password

try {
    // Establishing a connection to the database using PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Setting PDO in exception mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Connection failed, handle the exception
    echo "Connection failed: " . $e->getMessage();
}
?>
