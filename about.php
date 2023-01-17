<!--
    Name: Prajwal Dhungana
    Date: 11-28-2022
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Arrivederci Pizza Place | About</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php 
            session_start();
            
            if(isset($_SESSION['username'])){
                $loggedUsername = $_SESSION['username'];
            }
            else {
                $loggedUsername = "Account";
            }
        ?>
        <div class="header">       
        <div class = "container">
            <div class = "navbar">
                <div class = "logo">
                    <a href="index.php"><img src="Images/pizzalogo.png" width="130px" ></a>
                </div>
                <nav>
                <ul id="MenuItems">
                        <?php
                        if(isset($_SESSION['username'])){
                            $curUser = $_SESSION['username'];
                            echo '<li><a href="index.php">Home </a></li> <!--- Link to the home page-->
                                <li><a href="category.php">Category </a></li> <!--- Link to the home page-->
                                <li><a href="about.php" id = "currentPage">About </a></li> <!--- Link to the about page-->
                                <li><a href="contact.php">Contact </a></li> <!--- Link to the contact page-->
                                <li><a href="logout.php" onclick="if(!confirm(\'Do you really want to log out?\')){return false;}"><span title = "Click to Logout">' .$curUser. '</span>  </a>
                                </li>';
                        }
                        else {
                            echo '<li><a href="index.php">Home </a></li> <!--- Link to the home page-->
                                <li><a href="category.php">Category </a></li> <!--- Link to the home page-->
                                <li><a href="about.php" id = "currentPage">About </a></li> <!--- Link to the about page-->
                                <li><a href="contact.php">Contact </a></li> <!--- Link to the contact page-->
                                <li><a href="account.php"> Account </a></li>';
                        }?>                  
                    </ul>
                </nav>
                <a href="cart.php"><img src="Images/cart.png" width = "30px" height="30px"></a>
                <img src="Images/menu.png"class = "menu-icon" onclick ="menutoggle()">
            </div>
        </div>
    </div>
    <div class="aboutinfo">
        <div class="row">
            <br />
                <p>Arrivederci pizza place is a pizza restaurant that serves people with fresh cooked and delicious pizza. </p>
            </div>
    </div>
    <!------------- Testimonial Section---------->
    <style>
        h3{
            color: grey;
        }
        .col-3:hover{
            transform: translateY(-12px);
            transition: transform 0.5s;
        }
        
    </style>
    <h2 class = "title">Testimonials</h2>
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="Images/quote.svg" height="15px" width="15px">
                    <p>Arrivederci is the <br>
                       new face in fast food <br>
                       industry that serves <br>
                       one of the delicious<br> 
                       pizza.I believe it <br>
                       has potential to become <br>
                       one of the best pizza<br>
                       restaurant.</p>
                        <div class="rating">
                            <img src="Images/star.svg" height="15px" width="15px">
                            <img src="Images/star.svg" height="15px" width="15px">
                            <img src="Images/star.svg" height="15px" width="15px">
                            <img src="Images/star.svg" height="15px" width="15px"> 
                            <img src="Images/star.svg" height="15px" width="15px">
                        </div>
                        <img src="Images/testimonial1.PNG" width="250px" height="250px">
                        <h3>Abhi Yadav</h3>
                </div>
                <div class="col-3">
                    <img src="Images/quote.svg" height="14px" width="14px">
                    <p>Arrivederci is the <br>
                       new face in fast food <br>
                       industry that serves <br>
                       one of the delicious<br> 
                       pizza.I believe it <br>
                       has potential to become <br>
                       one of the best pizza<br>
                       restaurant.</p>
                        <div class="rating">
                            <img src="Images/star.svg" height="15px" width="15px">
                            <img src="Images/star.svg" height="15px" width="15px">
                            <img src="Images/star.svg"height="15px" width="15px">
                            <img src="Images/star.svg"height="15px" width="15px"> 
                            <img src="Images/halfstar.svg"height="15px" width="15px">
                        </div>
                        <img src="Images/testimonial2.PNG" width="250px" height="250px">
                        <h3>Fiolla Acasi</h3>
                </div>
                <div class="col-3">
                    <img src="Images/quote.svg" height="14px" width="14px">
                    <p>Arrivederci is the <br>
                       new face in fast food <br>
                       industry that serves <br>
                       one of the delicious<br> 
                       pizza.I believe it <br>
                       has potential to become <br>
                       one of the best pizza<br>
                       restaurant.</p>
                        <div class="rating">
                            <img src="Images/star.svg" height="15px" width="15px">
                            <img src="Images/star.svg" height="15px" width="15px">
                            <img src="Images/star.svg" height="15px" width="15px">
                            <img src="Images/star.svg"height="15px" width="15px"> 
                            <img src="Images/ostar.svg"height="15px" width="15px">
                        </div>
                        <img src="Images/testimonial3.PNG" width="250px" height="250px">
                        <h3>Darshan Poudel</h3>
                </div>
            </div>
        </div>

    </div>

    <!--------------footer----------------->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download our App</h3>
                        <p>Download App for Android and ios mobile phone.</p>
                        <div class="app-logo">
                            <img src="Images/play-store.png">
                            <img src="Images/app-store.png">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="Images/pizzalogo.png" width="150px" height="150px">
                        <p>Our goal to serve people with <br>the best fast food in town.
                        <br> <b>Have it your way.</b> </p> 
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li> 
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright"> Copyright 2022 - Mcneese Blue</p>
            </div>
        </div>
        <!----------js for toggle menu ---------->
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
                else
                {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
    </body>
</html>