<?php
// Include the connection script
include 'connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['names'];
    $physical_code = $_POST['physicalcode'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Prepare INSERT statement
    $stmt = $pdo->prepare("INSERT INTO institution (name, physical_code, email, phone) VALUES (:name, :physical_code, :email, :phone)");

    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':physical_code', $physical_code);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);

    // Execute the statement
    try {
        $stmt->execute();
        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        // Handle errors
        echo "Error: " . $e->getMessage();
    }
}
?>
