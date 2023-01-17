<!--
    Name: Suraj Khanal
    Date: 11-28-2022
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Arrivederci Pizza Place</title>
        <!--------Link to the external styling sheet-------> 
        <link rel="stylesheet" href="style.css">
        <!------Link to the font family--------->
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
                    <a href="index.php"><img src="Images/pizzalogo.png" width="130px" ></a> <!--- Return index/home page on clicking logo--->
                </div>
                <nav> <!--- Navigation bar creation -->
                <ul id="MenuItems">
                        <?php
                        if(isset($_SESSION['username'])){
                            $curUser = $_SESSION['username'];
                            echo '<li><a href="index.php" id = "currentPage">Home </a></li> <!--- Link to the home page-->
                                <li><a href="category.php">Category </a></li> <!--- Link to the home page-->
                                <li><a href="about.php">About </a></li> <!--- Link to the about page-->
                                <li><a href="contact.php">Contact </a></li> <!--- Link to the contact page-->
                                <li><a href="logout.php" onclick="if(!confirm(\'Do you really want to log out?\')){return false;}"><span title = "Click to Logout">' .$curUser. '</span>  </a>
                                </li>';
                        }
                        else {
                            echo '<li><a href="index.php" id = "currentPage">Home </a></li> <!--- Link to the home page-->
                                <li><a href="category.php">Category </a></li> <!--- Link to the home page-->
                                <li><a href="about.php">About </a></li> <!--- Link to the about page-->
                                <li><a href="contact.php">Contact </a></li> <!--- Link to the contact page-->
                                <li><a href="account.php"> Account </a></li>';
                        }?>                  
                    </ul>
                </nav>
                <a href="cart.php"><img src="Images/cart.png" width = "30px" height="30px"></a>
                <img src="Images/menu.png"class = "menu-icon" onclick = "menutoggle()">
            </div>
            <div class = "row">
                <div class = "col-2">
                    <h1> <br>Givin' You A Pizza Mind </h1>
                    <p> Roll The Dice, Pick A Slice !</p>
                    <a href="category.php" class = "btn">Make Your Pizza&#10143;</a>
                </div>
                <div class = "col-2">
                    <!--- Adding background pizza image----------->
                    <img src = "Images/background111.png" height="100%" width="100%">
                </div>
            </div>
        </div>
    </div>

    <!---------------------------------Pizza categories--------------------------------->
    <div class="small-container"> 
        <h2 class = "title">Pizza Categories</h2>
        <div class="row">
            <div class="col-4">
                <!--- Adding Thin crust pizza as in pizza category section------->
                <a href="thincrust.php"><img src="Images/thincrust.png" width = "300px" height="300px"></a>
                <a href="thincrust.php"><h4>Thin Crust Pizza </h4></a>
            </div>
            <div class="col-4">
                <!--- Adding Round crust pizza as in pizza category section------->
                <a href="roundcrust.php"><img src="Images/roundcrust.png" width = "300px" height="300px"></a>
                <a href="roundcrust.php"><h4>Original Crust Pizza </h4></a>
            </div>
        </div>
    </div>
    <!---------------------------Most Bought Pizzas---------->
    <div class="small-container"> 
        <form>
        <h2 class = "title">Most Popular Pizza</h2>
        <div class="row">
            <div class="col-4">
                <!--- Adding Pepperoni pizza as most bought pizza------>
                <img src="Images/pepperoni.png" width = "350px" height="350px">
                <h4>Original Crust Pepperoni Pizza</h4>
                <p>$12.99</p>
                <div class="col-2">
                    <!--- Selection for pizza size for pepperoni pizza ------->
                    <select>
                        <option>Select Pizza Size</option>
                        <option>12"</option>
                        <option>14"</option>
                        <option>16"</option>
                    </select>
                    <!--- Quantity of pizza ------->
                    <input type="number" value="1">
                    <!--- On clicking add to cart button, the pizza and qunatity are added to cart with price------>
                    <a href="cart.php" class="btn">Add To Cart</a>
                </div>
            </div>
            <div class="col-4">
                <!--- Adding Meatlover pizza as most bought pizza------>
                <img src="Images/meatlover.PNG" width = "350px" height="350px">
                <h4>Original Crust Meat Pizza</h4>
                <p>$12.99</p>
                <div class="col-2">
                    <select>
                        <option>Select Pizza Size</option>
                        <option>12"</option>
                        <option>14"</option>
                        <option>16"</option>
                    </select>
                    <input type="number" value="1">
                    <a href="cart.php" class="btn">Add To Cart</a>
                </div>
            </div>
            <div class="col-4">
                <img src="Images/cheese.PNG" width = "350px" height="350px">
                <h4>Original Crust Cheese Pizza</h4>
                <p>$11.99</p>
                <div class="col-2">
                    <select>
                        <option>Select Pizza Size</option>
                        <option>12"</option>
                        <option>14"</option>
                        <option>16"</option>
                    </select>
                    <input type="number" value="1">
                    <a href="cart.php" class="btn">Add To Cart</a>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!------------------ New Pizza  --------------------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <!--- Adding buffalo chicken pizza on limited edition pizza in new section of the page------>
                    <a href="buffalochicken.php"><img src="Images/buffalochickenpizza.PNG" class="offer-img" width="400px" height = "400px"></a>
                </div>
                <div class="col-2">
                    <p>Limited Edition Pizza </p>
                    <h1>Buffalo Chicken Pizza</h1>
                    <small>Give a taste bud a new flavor with our limited editioned buffalo chicken pizza.<br>
                    </small>
                    <a  href= "buffalochicken.php" class="btn">Order Now &#8594;</a>
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
                            <!--- Adding playstore and appstore logo for the appication with the link------>
                            <img src="Images/play-store.png">
                            <img src="Images/app-store.png">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <!-------- App store logo with slogan for the pizza palace-->
                        <img src="Images/pizzalogo.png" width="200px" height="200px">
                        <p>Our goal to serve people with <br>the best fast food in town.
                        <br> <b>Have it your way.</b> </p> 
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Join Affiliate</li> 
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <!----------Link to the social media site of the pizza palace ----->
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <!-------------Copy right divion------>
                <p class="copyright"> Copyright 2022 - Mcneese Blue</p>
            </div>
        </div>
        <!-------Embedded Js for the menu item -------->
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