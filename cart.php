<!--
    Name: Upendra Adhikari
    Date: 11-28-2022
-->
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Arrivederci Pizza Place | Cart</title>
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
                    <a href="index.php"><img src="Images/pizzalogo.png" width="130px"></a>
                </div>
                <nav>
                <ul id="MenuItems">
                        <?php
                        if(isset($_SESSION['username'])){
                            $curUser = $_SESSION['username'];
                            echo '<li><a href="index.php">Home </a></li> <!--- Link to the home page-->
                                <li><a href="category.php">Category </a></li> <!--- Link to the home page-->
                                <li><a href="about.php">About </a></li> <!--- Link to the about page-->
                                <li><a href="contact.php">Contact </a></li> <!--- Link to the contact page-->
                                <li><a href="logout.php" onclick="if(!confirm(\'Do you really want to log out?\')){return false;}"><span title = "Click to Logout">' .$curUser. '</span>  </a>
                                </li>';
                        }
                        else {
                            echo '<li><a href="index.php">Home </a></li> <!--- Link to the home page-->
                                <li><a href="category.php">Category </a></li> <!--- Link to the home page-->
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
        <!-------------  cart items details  -------------->
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Products</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="Images/pepperoni.png">
                            <div class="cart-info-detail">
                                <p>Round Crust Pepperoni Pizza</p>                      
                                <small>Price: $12.99</small>
                                <br>                           
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>$12.99</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="Images/meatlover.PNG">
                            <div class="cart-info-detail">
                                <p>Round Crust All Meat Pizza</p>                      
                                <small>Price: $12.99</small>
                                <br>                           
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>$12.99</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="Images/cheese.PNG">
                            <div class="cart-info-detail">
                                <p>Round Crust Cheese Pizza</p>                      
                                <small>Price: $12.99</small>
                                <br>                           
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>$11.99</td>
                </tr>
            </table>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>$35.97</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$4.00</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$39.97</td>
                    </tr>
                </table>
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

    </body>
</html>