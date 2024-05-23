<?php
include 'connection.php'; // Include your database connection script

// Assuming you have some identifier for the lecturer
$lecturer_id = 3; // Replace 3 with the actual lecturer ID or username
$course_id = 6; // Replace 5 with the actual course ID

try {
    // SQL query to retrieve attendance data for each student for a specific course
    $sql = "SELECT student_id, COUNT(*) AS total_days, SUM(CASE WHEN attendance = 'present' THEN 1 ELSE 0 END) AS present_days
            FROM student_attendance
            WHERE lecturer_id = :lecturer_id AND course_id = :course_id
            GROUP BY student_id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([':lecturer_id' => $lecturer_id, ':course_id' => $course_id]);

    if ($stmt->rowCount() > 0) {
        // Output data in table format
        echo "<table>";
        echo "<tr><th>Student ID</th><th>Total Days</th><th>Present Days</th><th>Attendance Percentage</th><th>Eligible for Exam</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $total_days = $row['total_days'];
            $present_days = $row['present_days'];
            $attendance_percentage = ($present_days / $total_days) * 100;
            $eligible_for_exam = ($attendance_percentage > 70) ? "Yes" : "No";
            
            echo "<tr>";
            echo "<td>" . $row["student_id"] . "</td>";
            echo "<td>" . $total_days . "</td>";
            echo "<td>" . $present_days . "</td>";
            echo "<td>" . number_format($attendance_percentage, 2) . "%</td>"; // Format percentage with two decimal places
            echo "<td>" . $eligible_for_exam . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
