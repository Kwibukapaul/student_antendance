<?php
// Include the connection script
include 'connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $institution_id = $_POST['institution_id'];
    $course_code = $_POST['names'];
    $course_name = $_POST['username'];

    // Prepare INSERT statement
    $stmt = $pdo->prepare("INSERT INTO modules (institution_id, course_code, course_name) VALUES (:institution_id, :course_code, :course_name)");

    // Bind parameters
    $stmt->bindParam(':institution_id', $institution_id);
    $stmt->bindParam(':course_code', $course_code);
    $stmt->bindParam(':course_name', $course_name);

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
