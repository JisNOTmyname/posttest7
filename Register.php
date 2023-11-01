<?php
require "koneksi.php";

if(isset($_POST["register"])){
    $username = strtolower($_POST["username"]);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    
    if($password === $cpassword){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT username FROM user where username='$username' ");

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Username has already been used');
                    document.location.href = 'Register.php';
                </script>";
        }else{
            $sql = "INSERT INTO user VALUES ('', '$username', '$password','$email','$phone')";
            $result = mysqli_query($conn, $sql);

            if(mysqli_affected_rows($conn)> 0){
                echo "
                <script>
                    alert('you have registered');
                    document.location.href = 'login.php';
                </script>" ;
            }else{
                echo "
                <script>
                    alert('Registration failed');
                    document.location.href = 'Register.php';
                </script>" ;
            }
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
    <title>Sign in</title>
    <link rel="stylesheet" href="styleforform.css">
</head>
<body>


<section class="container">
    <header>Sign in</header>
    <form action="" method="post" class="form" enctype="multipart/form-data" >
        <div class="input-box">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter Your Email Address" required>
        </div>

        <div class="column">
        <div class="input-box">
            <label>Phone Number</label>
            <input type="number" name="phone" placeholder="Enter Your Phone Number" required>
        </div>
        </div>





        <div class="input-box addres">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Your username" required>
         </div>
        <div class="input-box addres">
            <label>password</label>
            <input type="password" name="password" placeholder="Enter Your password" required>
         </div>
        <div class="input-box addres">
            <label>Check password</label>
            <input type="password" name="cpassword" placeholder="Please confirm your password" required>
         </div>
        <input class = "subbtn" type="submit" name="register">
        <h5>Already have an account? </h5><br>
         <a class="subbtn" href="login.php">Login</a>
    </form>
</section>
    
</body>
</html>