<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(6.webp);
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 0;
            color: #fff;
            align-items: center;
            text-align: center;
        }
        input[type="text"], input[type="email"], input[type="tel"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 0.8em;
            margin-top: -10px;
            margin-bottom: 10px;
        }
        label {
            color: #fff;
        }
    </style>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $host = 'localhost';
        $dbname = 'student_attendance';
        $username = 'root';
        $password = '';

        // Establishing a connection to the database using PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        // Setting PDO in exception mode
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Fetch role ID based on role name
        $role_name = $_POST['role_name'];
        $stmt_role = $pdo->prepare("SELECT id FROM roles WHERE role_name = :role_name");
        $stmt_role->bindParam(':role_name', $role_name);
        $stmt_role->execute();
        $role_row = $stmt_role->fetch(PDO::FETCH_ASSOC);
        $role_id = $role_row['id'];

        // Prepare SQL statement to insert data into the 'users' table
        $stmt_users = $pdo->prepare("INSERT INTO users (user_name, password, role_id) VALUES (:username, :password, :role_id)");
        $stmt_users->bindParam(':username', $_POST['username']);
        $stmt_users->bindParam(':password', password_hash($_POST['password'], PASSWORD_DEFAULT)); // Hash the password before storing
        $stmt_users->bindParam(':role_id', $role_id);
        $stmt_users->execute();

        echo "Sign up successful!";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<div class="container">
    <h2>Sign Up</h2>
    <form id="signupForm" action="" method="post">
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        
        <input type="text" id="username" name="username" placeholder="Set your username" required>
        
        <input type="text" id="reg_no" name="reg_no" placeholder="Enter your reg number" required>
        
        <input type="password" id="password" name="password" placeholder="Set password" required>
        
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" required>
        <div id="passwordError" class="error" style="display: none;">Passwords do not match</div>
        
                    <label for="institution">Select Institution:</label>
                    <select id="institution" name="institution_id">
                            <option value=" ">Select an institution</option>
                            <?php
                            // Fetching institutions from the database
                            $stmt_institutions = $pdo->query("SELECT id, name FROM institution");
                            while ($row = $stmt_institutions->fetch(PDO::FETCH_ASSOC)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                echo "<option value='$id'>$name</option>";
                            }
                ?>
                    </select>

                <label for="role">Select Role:</label>
                <select id="role" name="role_name">
                    <option value=" ">Select a role</option>
                    <?php
                    // Fetching roles from the database
                    $stmt_roles = $pdo->query("SELECT id, role_name FROM roles");
                    while ($row = $stmt_roles->fetch(PDO::FETCH_ASSOC)) {
                        $role_name = $row['role_name'];
                        echo "<option value='$role_name'>$role_name</option>";
            }
            ?>
        </select>
        
        <input type="submit" value="Sign Up">
    </form>
</div>

<script>
    document.getElementById("signupForm").addEventListener("submit", function(event) {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        var passwordError = document.getElementById("passwordError");

        if (password !== confirmPassword) {
            passwordError.style.display = "block";
            event.preventDefault(); // Prevent form submission
        } else {
            passwordError.style.display = "none";
        }
    });
</script>
