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
            background-image: url(2.jpg) ;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(0,0,0,0.6);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 0;
            color: white;
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
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form id="signupForm" action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="enter your name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="enter your email" required>
            
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="enter your name" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="set password" required>
            
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="confirm password" required>
            <div id="passwordError" class="error" style="display: none;">Passwords do not match</div>
            
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
</body>
</html>
