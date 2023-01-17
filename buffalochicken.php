<!--
    Name: Rita Khadka
    Date: 11-28-2022
-->
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Arrivederci Pizza Place | Buffalo Chicken</title>
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
                    <a href="index.php"><img src="Images/pizzalogo.png" width="130px" ></a>
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

        <!------------ single buffalo chicken pizza details --------->

        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">   
                       <img src="Images/buffalochicken1.PNG" width="680px" 
                       height="550px" id="ProductImg">
                </div>
                <div class="col-2">
                    <form>
                        <h1>Buffalo Chicken Pizza</h1>
                        <p>Serve yourself with latest <br> editioned pizza !!</p>
                        <select>
                            <form>
                            <option>Select Pizza Size</option>
                            <option>12"</option>
                            <option>14"</option>
                            <option>16"</option>
                        </select>
                        <input type="number" value="1">
                        <a href="cart.php" class="btn">Add To Cart</a>
                    </form>
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
                        <img src="Images/pizzalogo.png" width="200px" height="200px">
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

        <!------------------Js for product  gallery----------->
        <script>
            var ProductImg = document.getElementById("ProductImg");
            var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function()
            {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function()
            {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function()
            {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function()
            {
                ProductImg.src = SmallImg[3].src;
            }
        </script>
    </body>
</html>