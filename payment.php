<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>WELCOME TO OUR PAYMENT PAGE</h1>
        <nav>
            <ul>
                <li><a href="index.html">MAIN PAGE</a></li>
               <li><a href="faculty.html"> FACULTY PAGE</a></li>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                <li><a href="department.html">DEPARTMENT PAGE</a></li>
                <li><a href="timetables.html">TIMETABLES PAGE</a></li>
                <li><a href="registration.php">REGISTRATION</a></li>
                <li><a href="payment.php">PAYMENT PAGE</a></li>
                <li><a href="Content.html">CONTENT PAGE</a></li>
            </ul>
        </nav>
        </nav>
    </header>
<h1>PAYMENT FORM</h1>
    <main>
        <section>
            <div class="container">
                <form id="paymentForm" method="post">
                    <h1>Student Payment Form</h1>
                    <div class="form-group">
                        <label for="studentName">Student Name:</label>
                        <input type="text" id="studentName" name="StudentName" placeholder="Student Name" required>
                    </div>
                    <div class="form-group">
                        <label for="studentID">Student ID:</label>
                        <input type="text" id="studentID" name="StudentID" placeholder="Student ID" required>
                    </div>
                    <div class="form-group">
                        <label for="studentID">Student Contact:</label>
                        <input type="text" id="studentID" name="StudentNumber" placeholder="Student Contact" required>
                    </div>
                    <div class="form-group">
                        <label for="studentID">Student Email:</label>
                        <input type="email" class="email" name="StudentEmail" placeholder="Student Email" required>
                    </div>
                    <div class="form-group">
                        <label for="studentID">Programme:</label>
                        <input type="text" id="studentID" name="StudentProgram" placeholder="Programme" required>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" id="amount" name="Amount" placeholder="Amount" required>
                    </div>
                    <div class="form-group">
                        <label for="paymentMethod">Payment Method:</label>
                        <select id="paymentMethod" name="PaymentMethod" required>
                            <option value="">Select Payment Method</option>
                            <option value="MTN">MTN</option>
                            <option value="Vodaphone">Vodaphone</option>
                            <option value="PayPal">PayPal</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit Payment" name="submit">
                        <input type="reset" class="reset" value="Reset Payment">
                    </div>

                </form>
            </div>
            
        </section>
        
    </main>
    <br><br><br><br><br><br><br><br><br>
    <footer>
        <p>&copy; 2024 Faculty Of Applied Sscience And Technology Website</p>
    </footer>
</body>

</html>