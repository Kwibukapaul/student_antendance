<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        table {
            width: 90%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    
<?php
session_start(); // Start the session to access session variables

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role_id'])) {
    // Redirect to login page
    header("Location: login.php");
    exit(); // Prevent further execution
}

// You can also perform additional role-based checks if necessary

include 'connection.php'; // Include your database connection script

// Check if lecturer is logged in
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Query to fetch the course ID assigned to the logged-in lecturer from lecturer_course table
    $course_query = "SELECT lc.course_id FROM lecturer_course lc
                    INNER JOIN lecturers l ON lc.lecturer_id = l.id
                    WHERE l.name = :username";

    try {
        // Prepare and execute the query to fetch course ID
        $stmt_course = $pdo->prepare($course_query);
        $stmt_course->execute([':username' => $username]);

        // Check if a course ID is found for the lecturer
        if ($stmt_course->rowCount() > 0) {
            // Fetch the course ID
            $row_course = $stmt_course->fetch(PDO::FETCH_ASSOC);
            $course_id = $row_course['course_id'];

            // Query to fetch students enrolled in the course along with their respective lecturers
            $sql = "SELECT s.id AS student_id, s.name AS student_name, l.name AS lecturer_name
                    FROM student_course sc
                    INNER JOIN student s ON sc.student_id = s.id
                    INNER JOIN lecturer_course lc ON sc.course_id = lc.course_id
                    INNER JOIN lecturers l ON lc.lecturer_id = l.id
                    WHERE lc.course_id = :course_id";

            // Prepare and execute the query
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':course_id' => $course_id]);

            // Check if there are any results
            if ($stmt->rowCount() > 0) {
                // Start form markup
                echo '<form action="process_attendance.php" method="POST">';
                // Start table markup
                echo '<table border="1">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Lecturer Name</th>
                                <th>Date</th>
                                <th>Attendance</th>
                            </tr>
                        </thead>
                        <tbody>';

                // Fetch and display data
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['student_name'] . '</td>';
                    echo '<td>' . $row['lecturer_name'] . '</td>';
                    echo '<td><input type="date" name="date" min="' . date("Y-m-d") . '"></td>'; // Set the minimum date to the current date
                    echo '<td>';
                    echo '<label><input type="radio" name="attendance[' . $row['student_id'] . ']" value="present"> Present</label>';
                    echo '<label><input type="radio" name="attendance[' . $row['student_id'] . ']" value="absent"> Absent</label>';
                    echo '</td>';
                    echo '</tr>';
                }

                // End table markup
                echo '</tbody></table>';

                // Hidden input for course_id
                echo '<input type="hidden" name="course_id" value="' . $course_id . '">';
                // Hidden input for lecturer_id
                echo '<input type="hidden" name="username" value="' . $username . '">';

                // Submit button
                echo '<button type="submit">Submit Attendance</button>';
                // End form markup
                echo '</form>';
            } else {
                // If no students found for the course
                echo 'No students enrolled in this course.';
            }
        } else {
            // If no course assigned to the lecturer
            echo 'No course assigned to this lecturer.';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    // If lecturer is not logged in
    echo 'You are not logged in.';
}
?>
 <form method="post" action="logout.php">
                                  <button type="submit" class="dropdown-item">Logout</button>
                            </form>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>