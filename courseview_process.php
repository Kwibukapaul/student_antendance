<?php
// Database connection
try {
    $host = 'localhost';
    $dbname = 'student_attendance';
    $username = 'root';
    $password = '';

    // Establishing a connection to the database using PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Setting PDO in exception mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to retrieve data from the student_course table
    $sql_modules = "SELECT * FROM modules";
    $stmt_modules = $pdo->query($sql_modules);

    if ($stmt_modules->rowCount() > 0) {
        // Output data from student_course in table format
        echo "<h3>Student Course Data</h3>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Student ID</th><th>Course ID</th><th>Created By</th><th>Created At</th><th>Updated At</th></tr>";
        while ($row = $stmt_modules->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["institution_id"] . "</td>";
            echo "<td>" . $row["course_name"] . "</td>";
            echo "<td>" . $row["course_code"] . "</td>";
            echo "<td>" . $row["created_by"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "<td>" . $row["updated_at"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results for Student Course";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>