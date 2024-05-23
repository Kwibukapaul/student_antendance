<?php
// Include the database connection script
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $institution_id = $_POST['institution_id'];
    $name = $_POST['name'];
    $physical_code = $_POST['physical_code'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $created_by = $_POST['created_by'];

    // Prepare and execute SQL UPDATE query
    $sql = "UPDATE institution SET name = :name, physical_code = :physical_code, email = :email, phone = :phone, created_by = :created_by, updated_at = CURRENT_TIMESTAMP WHERE id = :institution_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':physical_code' => $physical_code,
        ':email' => $email,
        ':phone' => $phone,
        ':created_by' => $created_by,
        ':institution_id' => $institution_id
    ]);

    // Redirect back to the retrieve page after update
    header("Location: institution_view.php");
    exit();
} else {
    // Redirect back to the retrieve page if accessed directly without POST request
    header("Location: institution_view.php");
    exit();
}
?>
