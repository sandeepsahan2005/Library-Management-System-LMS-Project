<?php
// User sign up PHP
if(isset($_POST['register'])){
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['Confermpassword'];

    if($password != $confirmPassword) {
        echo "Passwords do not match.";
        exit();
    }

    $Epassword = password_hash($password, PASSWORD_DEFAULT);

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'library management system');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $Epassword);
        $stmt->execute();
        echo "Registration successful...";
        $stmt->close();
        $conn->close();
        header("Location: login.php");
        exit();
    }
}

// User login PHP
if(isset($_POST['login'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    require_once('manage books/dbcon.php');

    $stmt = $conn->prepare("SELECT * FROM registration WHERE email=? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])) {
            // Start session and store user data
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            // Redirect based on user role
            if($row['role'] == "0") {
                header("Location: userhome.php");
                exit();
            } elseif ($row['role'] == "1") {
                header("Location: adminhome.php");
                exit();
            }
        } else {
            $error = "Invalid email or password.";
        }
    } else {
        $error = "Invalid email or password.";
    }

    // Display error message if authentication fails
    echo $error;

    $stmt->close();
    $conn->close();
}
?>


?>

