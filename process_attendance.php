<?php
session_start();
include 'connection.php'; // Include your database connection script

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the course ID and lecturer's username
    $course_id = $_POST['course_id'];
    $lecturer_username = $_SESSION['username']; // Assuming lecturer's username is stored in a session variable

    // Get the lecturer's ID based on their username
    $sql_lecturer = "SELECT id FROM lecturers WHERE name = :lecturer_username";
    $stmt_lecturer = $pdo->prepare($sql_lecturer);
    $stmt_lecturer->execute([':lecturer_username' => $lecturer_username]);
    $lecturer_id = $stmt_lecturer->fetchColumn(); // Fetch the lecturer's ID

    // Loop through the attendance data for each student
    foreach ($_POST['attendance'] as $student_id => $attendance) {
        // Get the date and sanitize it
        $date = $_POST['date'];
        // Insert the attendance data into the student_attendance table
        $sql = "INSERT INTO student_attendance (course_id, student_id, date, attendance, lecturer_id, created_by) VALUES (:course_id, :student_id, :date, :attendance, :lecturer_id, :created_by)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':course_id' => $course_id,
            ':student_id' => $student_id,
            ':date' => $date,
            ':attendance' => $attendance,
            ':lecturer_id' => $lecturer_id,
            ':created_by' => $lecturer_username // Use the lecturer's username here
        ]);
    }

    // Display success message and redirect using JavaScript
    echo '<script>alert("Attendance submitted successfully."); window.location.href = "lecturer_dashboard.php";</script>';
    exit; // Stop further execution
} else {
    // If form is not submitted
    echo "Form not submitted.";
}
?>
