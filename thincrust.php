<!--
    Name: Upendra Adhikari
    Date: 11-28-2022
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device=width, initial-scale=1.0" />
    <title>Arrivederci Pizza Place| Thin Crust Orderlist</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
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
        
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.php"
            ><img src="Images/pizzalogo.png" width="130px"
          /></a>
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
        <img src="Images/menu.png" class="menu-icon" onclick="menutoggle()" />
      </div>
    </div>

    <!------------single thin pizza details --------->
    <!---pizza picture layout design------->
    <figure>
        
            <img src="Images/thincrust.png" alt="12"pizza" style="width: 100px" /><br>
            <figcaption>
            <label for="12"pizza">12"pizza</label></figcaption>
    </figure>

    <figure>
       
            <img src="Images/thincrust.png" alt="14" pizza" style="width: 200px" />
            <figcaption>
            <label for="14"pizza">14"pizza</label></figcaption>
    </figure>

    <figure>
       
            <img src="Images/thincrust.png" alt="16" piozza" style="width: 300px" />
            <figcaption>
            <label for="16"pizza">16"pizza</label></figcaption>
    </figure><br><br>
    <hr style="border-top: dotted 1px;" /> 

    <!---Customer request form for pizza requirement-->

    <div class ="container-pizza">
        <h3>Delivery Method</h3>
        <label for="Delivery method">Choose Method of Delivery: ></label>
        <select name="Delivery method" id ="deliverymethod">
        <option value="Pick up"> Pick Up</option>
        <option value="Delivery">Delivery</option>
        </select><br><br>
    </div>
        
    <div class="container-pyi">
        <form>
            <h3>Contact Information</h3>
            <label for ="Fullname">Full Name: </label>
            <input type="text" placeholder="Full Name"><br>

            <label for ="Email"> Email: </label>
            <input type="text" placeholder="Email"><br>

            <label for="Phone"> Phone No :</label>
            <input type="Number" placeholder="000-000-0000"><br>

            <label for="Address"> Address: </label>
            <input type="text" placeholder="only for delivery"><br>

            <hr style="border-top: dotted 1px;" /> 

            <div class ="pizzasize">
              
              <h3>Pizza size</h3>
              <label for="Pizza size">Choose size of pizza you want: ></label>
                <select name="pizzasize" id ="pizzasize">
                <option value="12"> 12"</option>
                <option value="14">14"</option>
                <option value="16">16"</option>
                </select><br><br>
            </div>
            

            <div class="container-toppings">
                <div id="toppings">
                    <h3>Please Choose your Toppings</h3>
                    <table>
                        <tr>
                            <th>Meats</th>
                            <th>Veggies</th>
                        </tr>
                        
                        <tr>
                            <td><label><input type="checkbox"/><img src="Images/beef.jpg">Beef</label></td>
                            <td><label><input type="checkbox"/><img src="Images/mushroom.jpg">Mushroom</label></td>

                        </tr>
                        <tr>
                            <td><label><input type="checkbox"><img src="Images/sausage.jpg">Italian Sausage</label></td>
                            <td><label><input type="checkbox"/><img src="Images/pineapple.jpg">Diced Pineapple</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox"/><img src="Images/bacon.jpeg">Bacon</label></td>
                            <td><label><input type="checkbox"/><img src="Images/olives.jpg">Black Olives</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox"/><img src="Images/peperoni.jpg">Peperoni</label></td>
                            <td><label><input type="checkbox"/><img src="Images/jalapeno.jpg">Jalapeno</label></td>
                        </tr>
                        <tr>
                            <td><label><input type ="checkbox"/><img src ="Images/chicken.jpeg">Chicken</label></td>
                            <td><label><input type="checkbox"/><img src="Images/bananapepper.jpg">Banana Peppers</label></td>
                        </tr>
                        <tr>
                          <td>    </td>
                          <td><label><input type="checkbox"/><img src="Images/cheese.jpg">Extra Cheese</label></td>
                      </tr>
          
                    </table>
                  </div>
            </div>

            
            <div class="suggestion">
              <p>You can choose as many you like. No extra charges</p>
            </div>

            <div class="submitbar">
                <a href="thincrust.php"><button class ="button1">Start Over</button></a>
                <a href="cart.php"><button class="button2">Submit Order</button></a>
            </div>
                </form>
          </div>
        

    <!--------------footer----------------->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download our App</h3>
            <p>Download App for Android and ios mobile phone.</p>
            <div class="app-logo">
              <img src="Images/play-store.png" />
              <img src="Images/app-store.png" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="Images/pizzalogo.png" width="250px" height="200px" />
            <p>
              Our goal to provide comfort and flexibility while <br />playing
              any kind of sports through our apparel.
            </p>
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
        <hr />
        <p class="copyright">Copyright 2022 - Mcneese Blue</p>
      </div>
    </div>
    <!----------js for toggle menu ---------->
    <script>
      var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
  </body>
</html>
