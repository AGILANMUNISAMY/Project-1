

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup form</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="signup">
        <h1>Sign up</h1>
        <form method="POST" action="process_signup.php">
            <label>First name</label>
            <input type="text" name="fname" required>
            <label>Last name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Email address</label>
            <input type="text" name="email" required>
            <label>Address</label>
            <input type="text" name="address" required>
            <label>Phone number</label>
            <input type="text" name="phone" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <input type="submit" value="Submit">
        </form>
        <p>By clicking the sign up button, you agree to our<br>
        <a href="#">Terms and conditions</a> and <a href="#">Privacy Policy</a>
        </p>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
