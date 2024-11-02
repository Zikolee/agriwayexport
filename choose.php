<?php
require "inc/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles2.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>AgricWay Export</title>
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
            background-color: lightblue;
            height: 50px;
            width: 200px;
            border-end-end-radius: 50px 20px;
        }
    </style>
</head>
<body>
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
                <a href="index.html">Home</a>
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
        </div> 
        <section class="styled-section"> 
        <h2>Are you a</h2>
             <button class="button button1">
                <a href="registration.php"><b>Farmer</b></a></button>
             <button class="button button2"><a href="registration.php"><b>Seller</b></a></button>
        </section>  
</body>
</html>