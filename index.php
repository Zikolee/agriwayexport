<?php
require "inc/connection.php";
?>
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
                        <a href="#">Home</a>
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

                <div class="heroIntro">
                    <h1>
                        Simplifying agricultural exports by connnecting sellers <span class="dashLine"><hr></span> <span class="design">Farmers</span> with International buyers.
                    </h1>
                    <img src="assets/RectangleWithLight.svg" alt="RectangleWithLight">
                </div>
                <div class="heroSliderWords">
                    <div class="leftHero">
                        <div><img src="assets/OrganicFood.svg" alt="LogoLight"></div>
                        <div>
                            <ul>
                                <li>Simplified Export</li>
                                <li>Informed Decision Making</li>
                                <li>Secure Transactions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="rightHero">
                        <p>
                            This integrated solution enhances transaction efficiency, transparency, and accessibility for agricultural producers in global markets.
                        </p>
                    </div>
                </div>
                <div class="callToAction">
                    <div class="checkSol">
                        <a href="#products">
                            <p>Our Solutions </p>
                            <img src="assets/arrowRight.svg" alt="arrowRight">
                        </a>
                    </div>
                    <div class="exploreMore">
                        <a href="#contactUs">
                            <p>Explore More</p> 
                            <img src="assets/arrowDown.svg" alt="arrowDown">
                        </a>
                    </div>
                </div>        
            </div>            
                
        </div>
        <!-- Section two begins -->
        <div class="sectionTwoContent" id="about">
            <p>
                <span>Explore Agriway’s  Export Solution,</span> <br>Which is This integrated solution enhances transaction efficiency, transparency, and accessibility for agricultural producers in global markets.
            </p>
            <img src="assets/WedgedSquares.svg" alt="WedgedSquares">
        </div>

        <!-- Section three begins -->
            <div class="sectionThreeContent">
            <div class="sectionThreeHead" id="products">
                <p>Our Sustainable Solutions</p>
                <img src="assets/Rectangle 6.svg" alt="Rectangle">
            </div>    
            <div class="imageCards">
                <div class="image">
                    <img src="assets/Rectangle-3.svg" alt="Images1">
                    <p>Order Management and Logistics</p>
                </div>
                <div class="image">
                    <img src="assets/Rectangle-5.svg" alt="images2">
                    <p>AI-Driven Market Insights</p>
                </div>
                <div class="image">
                        <img src="assets/Rectangle 4.svg" alt="images3">
                        <p>Transparent Pricing</p>
                </div> 
            </div>
        </div>

        <!-- sectionFourContent Begins -->
        <div class="sectionFourContent" id="services">
            <div class="sectionFourHeader">
                <p>What we want to do</p>
                <img src="assets/Rectangle 6.svg" alt="Rectangle">
            </div>
            <div class="fancyNumContent1">
                <div>
                    <img src="assets/WedgedSquares.svg" alt="WedgedSquares">
                    <p class="num">01</p>
                </div>
                <div class="numContent">
                    <h1>Market Expansion</h1>
                    <p>Increase the reach of agricultural producers by connecting them with international buyer</p>
                </div>
            </div>  
            
            <div class="fancyNumContent2">
                <div>
                    <img src="assets/WedgedSquares.svg" alt="WedgedSquares">
                    <p class="num">02</p>
                </div>
                <div class="numContent">
                    <h1>Operational Efficiency</h1>
                    <p>Streamline export processes through automation, reducing time and costs.</p>
                </div>
            </div>

            <div class="fancyNumContent3">
                <div>
                    <img src="assets/WedgedSquares.svg" alt="WedgedSquares">
                    <p class="num"> 03 </p>
                </div>
                <div class="numContent">
                    <h1>User Growth</h1>
                    <p>Attract and retain users by providing valuable tools and support for successful exporting.</p>
                </div>
            </div>
        </div>

        <!-- sectionFive Begins -->
        <div class="sectionFiveContent">
            <h1>Get the Latest Agriway Updates By Subscribing To Our Newsletter</h1>
            <div class="sub-Mail">
                <input type="text" placeholder="Enter email address" class="email-input">
                <button class="join-btn">
                    Join Now <img src="assets/arrowRight.svg" alt="arrowRight">
                </button>
            </div>
        </div>
        
        
        <!-- Section Six begins -->
        <div class="sectionSixContent">
            <div class="sectionSix">
                <div class="sectionSixHeader">
                    <h1>Testimonial</h1>
                    <img src="assets/Rectangle 6.svg" alt="Rectangle">
                </div>
                <div class="imgContent3">
                    <img src="assets/OrganicFood.svg" alt="OrganicFood">
                </div>
            </div> 
            <div class="sectionSixSubHead">
                <h1>What They Say</h1>
            </div>
            <div class="imgAvatatCont">
                <div class="imgContent1">
                    <div class="imgCluster">
                        <div class="clusterMain1"><img src="assets/avatar-04.webp.svg" alt="avatar-04"></div>
                        <div class="clusterMain2"><img src="assets/span.icon.svg" alt="avatar-04"></div>
                    </div>
                    <div class="sectionSixTextContent">
                        <p>Lörem ipsum lakrossa ussa plagon kav. Metatologi krona. Tudade åpoligen bevis. Plastbanta vapäbelt. Lanade oviktig. Mingen</p>
                        <div class="avatarId">
                            <h2>Bonnie Tolbet</h2>
                            <p>Buyer</p>
                        </div>
                    </div>
                </div>
                <div class="imgContent2">
                    <div class="imgCluster">
                        <div class="clusterMain1"><img src="assets/avatar-05.webp.svg" alt="avatar-05"></div>
                        <div class="clusterMain2"><img src="assets/span.icon.svg" alt="avatar-04"></div>
                    </div>
                    <div class="sectionSixTextContent">
                        <p>Lörem ipsum lakrossa ussa plagon kav. Metatologi krona. Tudade åpoligen bevis. Plastbanta vapäbelt. Lanade oviktig. Mingen</p>
                        <div class="avatarId">
                            <h2>Sarah Albert</h2>
                            <p>Seller</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Secton Seven Content -->
        <div class="sectionSevenContent" id="contactUs">
            <div class="partOne">
                <img src="assets/Frame-6 transparent.svg" alt="frame 6">
                <p class="mainContentSectseven">To empower African farmers by simplifying 
                    access to global markets and providing data-driven solutions that 
                    enhance transparency, fair pricing, and export efficiency.
                </p>
                <div class="iconsSocial">
                    <div class="icon"><img src="assets/Vector (2).svg" alt="twitter"></div>
                    <div class="icon"><img src="assets/Vector (3).svg" alt="twitter"></div>
                    <div class="icon"><img src="assets/Vector (4).svg" alt="twitter"></div>
                    <div class="icon"><img src="assets/Vector-5.svg" alt="twitter"></div>
                </div>
            </div>
            <div class="partTwo">
                <h2>Explore</h2>
                <img src="assets/span.elementor-divider-separator1.svg" alt="separator">
                <div class="fancyList">
                    <div class="list"><img src="assets/leaf.svg" alt=""><h2>About</h2></div>
                    <div class="list"><img src="assets/leaf.svg" alt=""><h2>Services</h2></div>
                    <div class="list"><img src="assets/leaf.svg" alt=""><h2>Products</h2></div>
                </div>
            </div>
            <div class="partThree">
                <h2>Contact</h2>
                <img src="assets/span.elementor-divider-separator1.svg" alt="separator">
                <div class="fancyList">
                    <div class="list"><img src="assets/phone-icon.svg" alt=""><h2></h2></div>
                    <div class="list"><img src="assets/messageEnvelope.svg" alt=""><h2></h2></div>
                    <div class="list"><img src="assets/location.svg" alt=""><h2>Lagos, Nigeria</h2></div>
                </div>
                <div class="partThreeMail">
                    <input type="text" placeholder="Enter email address">
                    <div class="join-btn">
                        <a href="#"><img src="assets/arrowRight.svg" alt="arrowRight"></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- sectionSevenContentExtra begins -->
        <div class="sectionSevenContentExtra">
            <div class="leftExtra">
                <p>&copy; All Copyright 2024 by <span>wegrowtogether</span></p>
            </div>
            <div class="rightExtra">
                <p>Terms of Use <span>|</span> Privacy Policy</p>
            </div>
        </div>

        <!-- Section Eight Begins -->
        <div class="footer">
            <div class= "fontiFooter">
                <h1 class="mogulaFont">
                    Agriway
                </h1>
            </div>
            <div class="topers">
                <a href="#header">
                    <p>Back to top</p> <img src="assets/arrowUp.svg" alt="arrowUp">
                </a>
            </div>
        </div>    
    </div>
<script src="scripts.js"></script>
</body>
</html>
