<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url(2.jpg);
        }

        h1,
        h3,
        footer {
            color: #fff;
            text-align: center;
        }

        h1 {
            margin-top: 0;
        }

        .buttons {
            margin-top: 20px;
        }

        .buttons a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .buttons a:hover {
            background-color: #0056b3;
        }

        footer {
            position: fixed;
            bottom: 10px;
            width: 100%;
        }

        .admin-link {
            display: inline-block;
            background-color: transparent;
            color: #fff;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="landing-container">
        <h1>Welcome to Dashboard</h1>
        <h3>You can explore all of your options</h3>
        <div class="buttons">
            <a href="#" class="login-button" onclick="askRole('login')">Login</a>
            <a href="#" class="signup-button" onclick="askRole('signup')">Signup</a>
        </div>
    </div>
    <footer>
        <button class="admin-link" onclick="redirectAdmin()">
            <!-- Use any icon here, for example, a user icon -->
            <i class="fas fa-user"></i> <!-- Font Awesome icon -->
        </button>
    </footer>

    <script>
        function askRole(action) {
            var role = prompt("Are you a student or lecturer?");
            if (role !== null) {
                if (role.toLowerCase() === 'student') {
                    if (action === 'login') {
                        window.location.href = 'student_login.php';
                    } else if (action === 'signup') {
                        window.location.href = 'student_signup.php';
                    }
                } else if (role.toLowerCase() === 'lecturer') {
                    if (action === 'login') {
                        window.location.href = 'lecturer_login.php';
                    } else if (action === 'signup') {
                        window.location.href = 'lecturer_signup.php';
                    }
                }
            }
        }

        function redirectAdmin() {
            // Redirect to admin page
            window.location.href = 'adminlog.php';
        }
    </script>
</body>
</html>
