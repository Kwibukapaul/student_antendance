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
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Dashboard</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="2.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                        
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>institutions</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="institution_view.php" class="dropdown-item">view</a>
                            <a href="institution_registration.php" class="dropdown-item">register</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>students</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="student_view.php" class="dropdown-item">view</a>
                            <a href="student_registration.php" class="dropdown-item">register</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>lacturers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="lecturer_view.php" class="dropdown-item">view</a>
                            <a href="lecturer_registration.php" class="dropdown-item">register</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>attendance</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="attendance_view.php" class="dropdown-item">view</a>
                            <a href="attendance_registration.php" class="dropdown-item">register</a>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>courses</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="course_view.php" class="dropdown-item">view</a>
                                <a href="course_registration.php" class="dropdown-item">register</a>
                            </div>
                    </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="2.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <form method="post" action="logout.php">
                                  <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

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

    // SQL query to retrieve data from the institution table
    $sql = "SELECT * FROM student_attendance";
    $stmt = $pdo->query($sql);

    if ($stmt->rowCount() > 0) {
        // Output data in table format
        echo "<table>";
        echo "<tr><th>ID</th><th>course id</th><th>student id</th><th>date</th><th>attendance</th><th>lecturer id</th><th>created by</th><th>Created At</th><th>Updated At</th><th>Action</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["course_id"] . "</td>";
            echo "<td>" . $row["student_id"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["attendance"] . "</td>";
            echo "<td>" . $row["lecturer_id"] . "</td>";
            echo "<td>" . $row["created_by"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "<td>" . $row["updated_at"] . "</td>";
            // Add update button
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<?php
include 'connection.php'; // Include your database connection script

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['course_id'])) {
    try {
        // Get the selected course ID from the form
        $course_id = $_POST['course_id'];

        // SQL query to fetch the names of students in the selected module
        $sql = "SELECT s.id AS student_id, s.name AS student_name
                FROM student_attendance sa
                INNER JOIN student s ON sa.student_id = s.id
                WHERE sa.course_id = :course_id
                GROUP BY sa.student_id";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':course_id' => $course_id]);

        if ($stmt->rowCount() > 0) {
            // Start table markup
            echo '<table border="1">
                    <thead>
                        <tr>
                            <th>Student Name</th>';

            // Fetch and display dates as table headers
            $dates = [];
            $sql_dates = "SELECT DISTINCT `date` FROM student_attendance WHERE course_id = :course_id";
            $stmt_dates = $pdo->prepare($sql_dates);
            $stmt_dates->execute([':course_id' => $course_id]);
            while ($row_dates = $stmt_dates->fetch(PDO::FETCH_ASSOC)) {
                echo '<th>' . $row_dates['date'] . '</th>';
                $dates[] = $row_dates['date'];
            }

            // Add columns for attended, not attended, and total attendances
            echo '<th>Attended</th>
    <th>Not Attended</th>
    <th>Total Attendances</th>
    <th>Aggregated Attendance (%)</th>
    <th>Eligibility</th>
</tr>
</thead>
<tbody>';

// Fetch and display student attendance data
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $row['student_name'] . '</td>';
    $attended = 0;
    $not_attended = 0;

    // Loop through dates to fetch attendance data for each date
    foreach ($dates as $date) {
        $sql_attendance = "SELECT attendance FROM student_attendance WHERE student_id = :student_id AND course_id = :course_id AND `date` = :date";
        $stmt_attendance = $pdo->prepare($sql_attendance);
        $stmt_attendance->execute([':student_id' => $row['student_id'], ':course_id' => $course_id, ':date' => $date]);
        $attendance_row = $stmt_attendance->fetch(PDO::FETCH_ASSOC);

        // Check attendance and increment counters
        if ($attendance_row && $attendance_row['attendance'] == 'present') {
            echo '<td>Present</td>';
            $attended++;
        } else {
            echo '<td>Absent</td>';
            $not_attended++;
        }
    }

    // Calculate total attendances and aggregated attendance percentage
    $total_attendances = $attended + $not_attended;
    $aggregated_attendance = ($total_attendances > 0) ? ($attended / $total_attendances) * 100 : 0;

    echo '<td>' . $attended . '</td>';
    echo '<td>' . $not_attended . '</td>';
    echo '<td>' . $total_attendances . '</td>';
    echo '<td>' . round($aggregated_attendance, 2) . '%</td>';
    echo '<td>' . (($aggregated_attendance >= 70) ? 'Eligible' : 'Not Eligible') . '</td>'; // Check eligibility based on the aggregated attendance
    echo '</tr>';
}

// End table markup
echo '</tbody></table>';

        } else {
            echo 'No students found for the selected module.';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!-- Form to select a module -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="course_id">Select Module:</label>
    <select id="course_id" name="course_id">
        <option>Select Module</option>
        <?php
        // Fetch module names from the modules table
        $sql_modules = "SELECT id, course_name FROM modules";
        $stmt_modules = $pdo->query($sql_modules);
        
        // Display module names as options in the select dropdown
        while ($row_module = $stmt_modules->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row_module['id'] . '">' . $row_module['course_name'] . '</option>';
        }
        ?>
    </select>
    <button type="submit">Generate Report</button>
</form>



            <!-- Widgets Start -->
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
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