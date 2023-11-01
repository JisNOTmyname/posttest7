<?php
session_start();
require "koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            header('Location: htmljacktrue.php');
            exit;
        }
    }
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type-number] {
        -moz-appearance: textfield;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styleforform.css">
</head>
<body>


<section class="container">
    <header>Login</header>
    <form action="" method="post" class="form" enctype="multipart/form-data" >
        <div class="input-box">
        <i class="fas fa-user"></i>
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Your username" required>
        </div>

        <div class="column">
        <div class="input-box">
        <i class="fas fa-lock"></i>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Your Password" required>
        </div>
            </div>
        <input class = "subbtn" type="submit" name="login">
        <h5>Don't have an account? </h5><br>
         <a class="subbtn" href="Register.php">Register</a>
    </form>
</section>
    
</body>
</html>