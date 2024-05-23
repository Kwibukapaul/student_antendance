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
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form  method="POST">
                        <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                                </a>
                                <h3>Sign In</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="username">
                                <label for="floatingInput">username</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="login">Sign In</button>
                            <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>


    <form action="" method="POST">
            <input type="text" name="username">
            <input type="text" name="password">
            <input type="submit" name="loginn">
    </form>
    <?php
// Establish a database connection
// include 'connection.php';

// // Check if form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve username, password, and role ID from form submission
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $role_id = $_POST['role_id'];

//     // Prepare SQL statement to retrieve user data based on username
//     $sql = "SELECT * FROM users WHERE user_name = ?";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("s", $username);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows == 1) {
//         // User exists, verify password
//         $row = $result->fetch_assoc();
//         if (password_verify($password, $row['password'])) {
//             // Password is correct, determine redirect based on role
//             switch ($role_id) {
//                 case 1: // Admin role
//                     header("Location: admindashboard.php");
//                     break;
//                 case 2: // Lecturer role
//                     header("Location: lecturer_dashboard.php");
//                     break;
//                 case 3: // Student role
//                     header("Location: student_dashboard.php");
//                     break;
//                 default:
//                     echo "Invalid role.";
//                     break;
//             }
//             exit();
//         } else {
//             // Password is incorrect
//             echo "Invalid username or password.";
//         }
//     } else {
//         // User does not exist
//         echo "Invalid username or password.";
//     }

//     $stmt->close();
// }

// $conn->close();
?>


<?php
include 'connection.php';

if (isset($_POST['loginn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user record from the database
    $statement = $pdo->prepare("SELECT users.*, roles.role_name, users.password AS hashed_password FROM users INNER JOIN roles ON users.role_id = roles.role_id WHERE username=:username");
    $statement->bindParam(':username', $username);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists and if the entered password matches the hashed password
    if ($user && password_verify($password, $user['hashed_password'])) {
        session_start();
        $_SESSION['username'] = $username;
        
        // Redirect based on role
        $role_name = $user['role_name'];
        switch ($role_name) {
            case 'admin':
                header("Location: dashboard/admin.php");
                break;
            case 'student':
                header("Location: student_dashboard/index.php");
                break;
            case 'lecturer':
                header("Location: lecturer_dashboard/index.php");
                break;
            default:
                // Default redirect if role is not recognized
                header("Location: default_dashboard.php");
                break;
        }
        exit(); // Stop further execution
    } else {
        echo "<script>alert('Incorrect username and password');</script>";
    }
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


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
