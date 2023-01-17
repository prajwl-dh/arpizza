<!--
    Name: Rita Khadka
    Date: 11-28-2022
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Arrivederci Pizza Place | Category</title>
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

        <div class = "container">
            <div class = "navbar">
                <div class = "logo">
                    <a href="index.php"><img src="Images/pizzalogo.png" width="130px" ><a href="index.php"></a>
                </div>
                <nav>
                <ul id="MenuItems">
                        <?php
                        if(isset($_SESSION['username'])){
                            $curUser = $_SESSION['username'];
                            echo '<li><a href="index.php">Home </a></li> <!--- Link to the home page-->
                                <li><a href="category.php" id = "currentPage">Category </a></li> <!--- Link to the home page-->
                                <li><a href="about.php">About </a></li> <!--- Link to the about page-->
                                <li><a href="contact.php">Contact </a></li> <!--- Link to the contact page-->
                                <li><a href="logout.php" onclick="if(!confirm(\'Do you really want to log out?\')){return false;}"><span title = "Click to Logout">' .$curUser. '</span>  </a>
                                </li>';
                        }
                        else {
                            echo '<li><a href="index.php">Home </a></li> <!--- Link to the home page-->
                                <li><a href="category.php" id = "currentPage">Category </a></li> <!--- Link to the home page-->
                                <li><a href="about.php">About </a></li> <!--- Link to the about page-->
                                <li><a href="contact.php">Contact </a></li> <!--- Link to the contact page-->
                                <li><a href="account.php"> Account </a></li>';
                        }?>                  
                    </ul>
                </nav>
                <a href="cart.php"><img src="Images/cart.png" width = "30px" height="30px"></a>
                <img src="Images/menu.png"class = "menu-icon" 
                onclick ="menutoggle()">
            </div>
        </div>

    <div class="small-container"> 
        
        <div class="row">
            <div class="col-4">
                <a href="thincrust.php"><img src="Images/thincrust.png" width = "300px" height="300px"></a>
                <a href="thincrust.php"><h4>Thin Crust Pizza 14"</h4></a>
                <p>$8.99</p>
            </div>
            <div class="col-4">
                <a href="roundcrust.php"><img src="Images/roundcrust.png" width = "300px" height="300px"></a>
                <a href="roundcrust.php"><h4>Original Crust Pizza 12"</h4></a>
                <p>$7.99</p>
            </div>
            <div class="col-4">
                <a href="buffalochicken.php"><img src="Images/buffalochickenpizza.PNG" width = "300px" height="300px"></a>
                <a href="buffalochicken.php"><h4>Buffalo Chicken Pizza 12"</h4></a>
                <p>$9.99</p>
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
                        <img src="Images/pizzalogo.png" width="250px" height="200px">
                        <p>Our goal to provide comfort and flexibility while 
                        <br>playing any kind of sports through our apparel.</p>
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