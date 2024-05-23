<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
   
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .dropdown {
            margin-bottom: 20px;
        }

        .dropdown label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .dropdown select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .logout-btn {
            margin-top: 20px;
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Dashboard</h1>
        <div class="dropdown">
            <label for="attendance">Attendance:</label>
            <select id="attendance">
                <option value="present">Present</option>
                <option value="absent">Absent</option>
            </select>
        </div>
        <div class="dropdown">
            <label for="courses">Student Courses:</label>
            <select id="courses">
                <option value="math">Math</option>
                <option value="science">Science</option>
                <option value="history">History</option>
            </select>
        </div>
        <div class="dropdown">
            <label for="lecturers">Lecturers:</label>
            <select id="lecturers">
                <option value="john_doe">John Doe</option>
                <option value="jane_smith">Jane Smith</option>
                <option value="mark_johnson">Mark Johnson</option>
            </select>
        </div>
        <button type="button" class="logout-btn" onclick="logout()">Logout</button>
    </div>

    <script>
        function logout() {
            // Perform logout actions here
            alert("You have been logged out.");
            // Redirect to logout page or perform other logout actions as needed
        }
    </script>
</body>
</html>
