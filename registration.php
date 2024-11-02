<?php
include "inc/process.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="registration.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>AgricWay Export Registration</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            background: url(assets/bg.jpeg);
            background-size: cover;
        }
        #example2 {
            text-align: center;
            padding: 5px;
            margin: 5px;
            background-color: lightblue;
            height: 50px;
            width: 200px;
        }
    </style>
</head>
<body>
        <div id="dev-banner">
            This site is currently under development. Some features may not be fully functional.
            <button onclick="closeBanner()">Dismiss</button>
        </div>
        <script>
            function closeBanner() {
              document.getElementById("dev-banner").style.display = "none";
            }
          </script>
    <div class="headContainer">
        <div class="header" id="header">
            <div class="logoArea">
                <div class="logo">
                    <img src="assets/Logo.svg" alt="Agriway-logo">
                </div>
                <div class="brandName">
                    <img src="assets/brandName.svg" alt="Brand-Name">
                </div>
            </div>
            <nav>
                <a href="index.php">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#">Products</a>
            </nav>
            <div class="onboardArea">
                <div class="login">
                    <a href="login.php">Login</a>
                </div>
                <div class="signUp">
                    <a href="choose.php">Sign Up</a>
                </div>
            </div>
            <div class="SearchCartArea">
                <div class="SearchIcon">
                    <img src="assets/Search.svg" alt="Search-Icon">
                </div>
                <div class="cart">
                    <img src="assets/cartWithZero.svg" alt="cartWithZero">
                </div>
            </div>

            <section class="styled-section">
             <?php
             if(isset($error)){
                ?>
             <div id="example2">
                <strong><?php echo $error; ?></strong>
             </div>    
             <?php
             }elseif(isset($success)){
                ?>
             <div id="example2">
                <strong><?php echo $success; ?></strong>
             </div>
             <?php
             }
             ?>
             <h2>Create An Agriway Account.</h2>
             <form action="" method="POST">
             <div class="input-icons">
             <i class="fa fa-user"></i><input type="text" name="firstname" class="form-control" placeholder= "First Name" id="" required></div>
             <div class="input-icons">
             <i class="fa fa-user-plus"></i><input type="text" name="lastname" class="form-control" placeholder="Last Name" id="" required></div>
                <div class="input-icons">
                    <i class="fa fa-envelope icon"></i><input type="text" name="email" class="form-control" placeholder="Email" id="" required></div>
                    <div class="input-icons">
                    <i class="fa fa-key icon"></i><input type="password" name="password" class="form-control" placeholder="Password" id="" required></div>
                    <button type="submit" name="registration.php">Sign up</button>
                </form>
                <span class="psw">Have an account already?<a href="login.php"> Login</a></span>
            </section>
        </div>
    </div>
<script src="scripts.js"></script>
</body>
</html>