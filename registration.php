<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO OUR Registration PAGE</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <h1>WELCOME TO OUR REGISTRATION PAGE</h1>
    <nav>
        <ul>
            <li><a href="index.html">MAIN PAGE</a></li>
            <li><a href="faculty.html">FACULTY PAGE</a></li>
            <li><a href="department.html">DEPARTMENT PAGE</a></li>
            <li><a href="timetables.html">TIMETABLES PAGE</a></li>
            <li><a href="registration.php">REGISTRATION</a></li>
            <li><a href="payment.php">PAYMENT PAGE</a></li>
            <li><a href="Content.html">CONTENT PAGE</a></li>
        </ul>
    </nav>
    <main>
<section>
    <h1>REGISTRATION FORM</h1>
    
    <form action="" method="POST">
        <label for="student_number">Student Number:</label><br>
        <input type="text" id="student_number" name="student_number" required><br>

        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob" required><br>

        <label for="faculty">Faculty:</label><br>
        <input type="text" id="faculty" name="faculty" required><br>

        <label for="department">Department:</label><br>
        <input type="text" id="department" name="department" required><br>

        <label for="telephone">Telephone Number:</label><br>
        <input type="tel" id="telephone" name="telephone" required><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" required></textarea><br>

        <label for="picture">Upload Picture:</label><br>
        <input type="file" id="picture" name="picture" accept="image/*" required><br><br>

        <input type="submit" value="Submit" name="Submit">
    </form>
    <br><br><br><br>
    
        </section>
    </main>
</body>
</html>
<FOoter>
    <p>&copy; 2024 Faculty Of Applied Sscience And Technology Website</p>
</FOoter>
