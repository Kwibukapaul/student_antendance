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

<!-- Sign Up Start -->
<<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="index.html" class="">
                        <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Student</h3>
                    </a>
                    <h3>Sign Up</h3>
                </div>
                <form action="" method="post" id="signupForm">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingText" placeholder="Name" name="names">
                        <label for="floatingText">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingUsername" placeholder="Username" name="username">
                        <label for="floatingUsername">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPhone" placeholder="Phone" name="phone">
                        <label for="floatingPhone">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email">
                        <label for="floatingEmail">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingInstitution" name="institution_id">
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
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password">
                        <label for="confirmPassword">Confirm password</label>
                        <div id="passwordError" class="text-danger d-none">Passwords do not match</div>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if(isset($_POST['names'], $_POST['username'], $_POST['phone'], $_POST['email'], $_POST['institution_id'], $_POST['role_id'], $_POST['password'])) {
        // Retrieve form data
        $names = $_POST['names'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $institution_id = $_POST['institution_id'];
        $role_id = $_POST['role_id'];
        $password = $_POST['password'];

        // Encrypt the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        try {
            // Insert data into users table
            $sql_user = "INSERT INTO users (role_id, user_name, password) VALUES (:role_id, :user_name, :password)";
            $stmt_user = $pdo->prepare($sql_user);
            $stmt_user->execute([':role_id' => $role_id, ':user_name' => $username, ':password' => $hashed_password]);

            // Retrieve the last inserted user ID
            $user_id = $pdo->lastInsertId();

            // Insert data into lecturers table
            $sql_lecturer = "INSERT INTO lecturers (institution_id, name, phone, email, created_by) VALUES (:institution_id, :name, :phone, :email, :created_by)";
            $stmt_lecturer = $pdo->prepare($sql_lecturer);
            $stmt_lecturer->execute([':institution_id' => $institution_id, ':name' => $names, ':phone' => $phone, ':email' => $email, ':created_by' => $username]);

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



<!-- Sign Up End -->
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

    <script>
        // JavaScript for password validation
        $(document).ready(function () {
        $('#submitButton').click(function (e) {
                var password = $('#password').val();
                var confirmPassword = $('#confirmPassword').val();
            }
