<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Student Attendance Form</title>
    
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
                    <a href="attendance_registation.php" class="dropdown-item">register</a>
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
    <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Student</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <form action="student_login.php" method="post" id="signupForm">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="names">
                            <label for="floatingText">names</label>
                        </div>     
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingUsername" placeholder="username">
                            <label for="floatingUsername">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingRegNo" placeholder="reg_no">
                            <label for="floatingRegNo">reg_no</label>
                        </div>
                        <div class="form-floating mb-3">
                        <select class="form-select" id="floatingInstitution" name="institution_id" name="institution_id">
                            <option value="" selected disabled>Select Institution</option>
                            <?php
                            // Include the connection script
                            include 'connection.php';

                            try {
                                // Query to fetch institutions
                                $stmt_institutions = $pdo->query("SELECT id, name FROM institution");

                                // Fetching and displaying options
                                while ($institution = $stmt_institutions->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<option value='{$institution['id']}'>{$institution['name']}</option>";
                                }
                            } catch (PDOException $e) {
                                // Displaying error message if query fails
                                echo "<option>Error fetching institutions: {$e->getMessage()}</option>";
                            }
                            ?>
                        </select>
                        <label for="floatingInstitution">Institution</label>
                    </div>
                    <div class="form-floating mb-3">
    <select class="form-select" id="floatingRole" name="role_id">
        <option value="" selected disabled>Select Role</option>
        <?php
        // Include the connection script
        include 'connection.php';

        try {
            // Query to fetch roles
            $stmt_roles = $pdo->query("SELECT id, role_name FROM roles");

            // Fetching and displaying options
            while ($role = $stmt_roles->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='{$role['id']}'>{$role['role_name']}</option>";
            }
        } catch (PDOException $e) {
            // Displaying error message if query fails
            echo "<option>Error fetching roles: {$e->getMessage()}</option>";
        }
        ?>
    </select>
    <label for="floatingRole">Role</label>
</div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password">
                            <label for="confirmPassword">Confirm password</label>
                            <div id="passwordError" class="text-danger d-none">Passwords do not match</div>
                        </div>    
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="submit" id="submitButton" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        </form>
                        <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>

        <?php
include 'connection.php'; // Include your database connection script

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Check if all required fields are provided
    if(isset($_POST['names'], $_POST['username'], $_POST['reg_no'], $_POST['institution_id'], $_POST['role_id'], $_POST['password'])) {
        // Retrieve form data
        $names = $_POST['names'];
        $username = $_POST['username'];
        $reg_no = $_POST['reg_no'];
        $institution_id = $_POST['institution_id'];
        $role_id = $_POST['role_id'];
        $password = $_POST['password'];

        try {
            // Insert data into users table
            $sql_user = "INSERT INTO users (user_name, password, role_id) VALUES (:user_name, :password, :role_id)";
            $stmt_user = $pdo->prepare($sql_user);
            $stmt_user->execute([':user_name' => $username, ':password' => $password, ':role_id' => $role_id]);

            // Retrieve the last inserted user ID
            $user_id = $pdo->lastInsertId();

            // Insert data into student table
            $sql_student = "INSERT INTO student (`name`, reg_no, institution_id, created_by) VALUES (:name, :reg_no, :institution_id, :created_by)";
            $stmt_student = $pdo->prepare($sql_student);
            $stmt_student->execute([':name' => $names, ':reg_no' => $reg_no, ':institution_id' => $institution_id, ':created_by' => $username]);

            echo "Sign up successful!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        // Handle invalid form submission
        echo "Please fill all required fields.";
    }
}
?>

    


    <!-- Footer Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                </div>
                
            </div>
        </div>
    </div>
    <!-- Footer End -->
</div>
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

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = ""; // No password specified
    $database = "student_attendance"; // Replace with your MySQL database name

    try {
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Prepare SQL statement to insert data into student_attendance table
            $stmt = $conn->prepare("INSERT INTO student_attendance (course_id, student_id, date, attendance, lecturer_id, created_by) 
                                    VALUES (:course_id, :student_id, :date, :attendance, :lecturer_id, :created_by)");

            // Bind parameters
            $stmt->bindParam(':course_id', $course_id);
            $stmt->bindParam(':student_id', $student_id);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':attendance', $attendance);
            $stmt->bindParam(':lecturer_id', $lecturer_id);
            $stmt->bindParam(':created_by', $created_by);

            // Set parameters and execute the statement
            $course_id = $_POST['course_id'];
            $student_id = $_POST['student_id'];
            $date = $_POST['date'];
            $attendance = $_POST['attendance'];
            $lecturer_id = $_POST['lecturer_id'];
            $created_by = $_POST['created_by'];
            $stmt->execute();

            echo "New record created successfully";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    ?>

    
</body>
</html>
