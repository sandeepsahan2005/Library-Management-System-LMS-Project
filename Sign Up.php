<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
</head>
<body>
    <!-- main section  -->
    <div class="wrapper">
        <form action="connect.php" method="post">
            <h1>SignUp</h1>
            <div class="input-box">
                <input type="text" placeholder="First name" required id="first-name" name="first-name">
                <i class="bx bxs-user"></i>
            </div>     
            <div class="input-box">
                <input type="text" placeholder="Last name" required id="last-name" name="last-name">
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="E-mail" required id="email" name="email">
                <i class="fa fa-user-circle-o"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" required id="password" name="password">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm password" required id="confrem password" name="Confermpassword">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="check">
                <label><input type="checkbox">
                   Remember Me
                </label>
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" name="register" class="btn">SignUp</button>
            <div class="register-link">
                <p>Dont hava an account? <a href="login.php">Login</a></p>
            </div>
       </form> 
   </div>
</body>
</html>