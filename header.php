<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/AgrWay-Export-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   
    <title>AgricWay Export</title>
</head>
<body>
    <div class="container">
        <div id="dev-banner">
            This site is currently under development. Some features may not be fully functional.
            <button onclick="closeBanner()">Dismiss</button>
        </div>
        <script>
            function closeBanner() {
              document.getElementById("dev-banner").style.display = "none";
            }
          </script>
        
          <!-- Your main content -->
        <div class="headContainer">
            <img src="assets/bg.jpeg" alt="Background" class="background-image">
            <div class="overlay">

            </div>
            <div class="content">
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
                        <a href="#products">Products</a>
                    </nav>

                    <div class="onboardArea">
                        <div class="login">
                            <a href="login.php">Login</a>
                        </div>
                        <div class="signUp">
                            <a href="registration.php">Sign Up</a>
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

                    <div class="menu-icon">
                        <h1>&#9776;</h1>
                    </div>
                    <div class="close-icon">
                        <h1>X</h1>
                    </div>
                </div>
                