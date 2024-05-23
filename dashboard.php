<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 40px;
            background-image: url(2.jpg);
            margin: 0;
            padding: 0;
        }

        .navbar {
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.6);
            font-family: Arial, sans-serif;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: #ddd;
            color: black;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.6);
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .signout-btn {
            float: right;
            display: block;
            background-color: black;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 16px;
            margin-top: 0;
            border: none;
            cursor: pointer;
        }

        .signout-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleDropdown('student')">institution</button>
        <div class="dropdown-content" id="studentDropdown">
            <a href="institution_view.php">View</a>
            <a href="institution_registration.php">Register</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleDropdown('lecturers')">Lecturers</button>
        <div class="dropdown-content" id="lecturersDropdown">
            <a href="lecturer_view.php">View</a>
            <a href="#">Register</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleDropdown('attendance')">Attendance</button>
        <div class="dropdown-content" id="attendanceDropdown">
            <a href="#">View</a>
            <a href="#">Register</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleDropdown('student-course')">Students</button>
        <div class="dropdown-content" id="studentCourseDropdown">
            <a href="student_view.php">View</a>
            <a href="#">Register</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn" onclick="toggleDropdown('lecturer-course')">Courses</button>
        <div class="dropdown-content" id="lecturerCourseDropdown">
            <a href="course_view.php">View</a>
            <a href="#">Register</a>
        </div>
    </div>
    <button class="signout-btn">Sign Out</button>
</nav>

<script>
    function toggleDropdown(dropdownId) {
        var dropdownContent = document.getElementById(dropdownId + 'Dropdown');
        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
        } else {
            dropdownContent.style.display = 'block';
        }
    }
</script>
</body>
</html>
