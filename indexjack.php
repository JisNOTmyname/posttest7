<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sign in Sign Up Form</title>
    <link rel="stylesheet" href="stylejack.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="proseslogin.php" class="sign-in-form" method="POST">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="password">
                    </div>
                   
                    <input type="submit" class="btn solid" value="Login">
                    <p class="social-text"> Or Sign In with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                   

                    </div>
                    </div>
                </form>
            </div>

            <div class="signup-signup">
                <form action="#" class="sign-up-form" method="POST">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="password">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="number" placeholder="Phone number">
                    </div>
                    <input type="submit" class="btn solid" value="Login">
                    <p class="social-text"> Or Sign Up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                   

                    </div>
                    </div>
                </form>

        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Welcome to Jack Automobile. Your Road to  Finding Your Personal Ride and Exceptional Drives! 

Discover a world of top-notch vehicles and dedicated service, all in one place. Your journey begins here!</p>

<button class="btn transparent" id='Sign-up-button'> Sign Up</button>


                </div>
               
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>One of Us!</h3>
                    <p>Welcome to Jack Automobile. Your Road to  Finding Your Personal Ride and Exceptional Drives! 

Discover a world of top-notch vehicles and dedicated service, all in one place. Your journey begins here!</p>

<button class="btn transparent" id='Sign-In-button'> Sign In</button>


                </div>
                
            </div>

        </div>
    </div>
    


<script src ='app.js'></script>
</body>
</html>