<?php
// include "manage books/dbcon.php";

// if($_SERVER["REQUEST_METHOD"]=="POST")
// {
//     $email=$_POST["email"];
//     $password=$_POST["password"];

//     $sql="select * from registration where email='".$email."' AND password='".$password."'
//                   ";

//     $result=mysqli_query($conn,$sql);         
    
//     $row=mysqli_fetch_array($result);

//     if(isset($row["role"])) {
//         if($row["role"] == "user") {
//             // header("location:userhome.php");
//             exit();
//         } elseif($row["role"] == "admin") {
//             // header("location:adminhome.php");
//             exit(); 
//         } else {
//             echo "Username or password incorrect";
//         }
//     } else {
//         echo "Role not found"; 
//     }


// }
?>






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
    <!-- main section -->
   <div class="wrapper">
       <form action="connect.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                 <input type="text" name="email" placeholder="email" required>
                 <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="check">
                <label><input type="checkbox">
                   Remember Me
                </label>
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" name="login" class="btn">Login</button>
            <div class="register-link">
                <p>Dont hava an account? <a href="Sign Up.php">Register</a></p>
            </div>
       </form> 
   </div>
</body>
</html>