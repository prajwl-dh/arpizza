<!--
    Name: Suraj Khanal
    Date: 11-28-2022
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Pizza Palace</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <?php
            include 'config.php'; 

            session_start();

            //user login section
            if (isset($_POST['submitLogin'])) {
                $loginEmail = $_POST['loginEmail'];
                $loginPassword = md5($_POST['loginPassword']);

                $loginQuery = "SELECT * FROM users WHERE email = '$loginEmail' AND password = '$loginPassword'";
                $loginResult = mysqli_query($conn, $loginQuery);

                if($loginResult->num_rows > 0) 
                {
                    $loginRow = mysqli_fetch_assoc($loginResult);
                    $_SESSION['username'] = $loginRow['username'];
                    echo "<script>alert('Logged in Successfully.');
                            document.location.href = 'index.php';</script>";
                }
                else {
                    echo "<script>alert('Invalid Email or Password')</script>";
                }
            }

            //sign up section
            if(isset($_POST['submitRegister'])) {
                $registerUsername = $_POST['registerUsername'];
                $registerEmail = $_POST['registerEmail'];
                $registerPassword = md5($_POST['registerPassword']);
                $confirmPassword = md5($_POST['confirmPassword']);

                if(strlen($registerUsername) < 6)
                {
                    echo "<script>alert('Username must be at least 6 characters long.')</script>";
                }
                else if(strlen($registerUsername) > 15)
                {
                    echo "<script>alert('The maximum length for username is 15')</script>";
                }
                else
                {
                    if ($registerPassword == $confirmPassword) {
                        $checkEmailQuery = "SELECT * FROM users WHERE email='$registerEmail'";
                        $checkEmailResult = mysqli_query($conn, $checkEmailQuery);
                        if (!$checkEmailResult->num_rows > 0) {
                            $checkUsernameQuery = "SELECT * FROM users WHERE  username ='$registerUsername'"; 
                            $checkUsernameResult = mysqli_query($conn, $checkUsernameQuery);
                            if(!$checkUsernameResult->num_rows > 0) {
                                $insertQuery = "INSERT INTO users (username, email, password)
                                    VALUES ('$registerUsername', '$registerEmail', '$confirmPassword')";
                                $insertResult = mysqli_query($conn, $insertQuery);
                                if ($insertResult) {
                                    echo "<script>alert('User Sign Up Completed Successfully.');
                                    document.location.href = 'account.php';</script>";
                                    $registerUsername = "";
                                    $registerEmail = "";
                                    $_POST['registerPassword'] = "";
                                    $_POST['confirmPassword'] = "";
                                } 
                                else 
                                {
                                echo "<script>alert('Woops! Service not available')</script>";
                                }
                            }
                            else {
                                echo "<script>alert('Username not available. Please try a different username.')</script>";
                            }
                        } else {
                            echo "<script>alert('Woops! Email not available. Please try a different email.')</script>";
                        }
                        
                    } else {
                        echo "<script>alert('Password Not Matched.')</script>";
                    }
                }
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
                                <li><a href="logout.php" id = "currentPage" onclick="if(!confirm(\'Do you really want to log out?\')){return false;}"><span title = "Click to Logout">' .$curUser. '</span>  </a>
                                </li>';
                        }
                        else {
                            echo '<li><a href="index.php">Home </a></li> <!--- Link to the home page-->
                                <li><a href="category.php">Category </a></li> <!--- Link to the home page-->
                                <li><a href="about.php">About </a></li> <!--- Link to the about page-->
                                <li><a href="contact.php">Contact </a></li> <!--- Link to the contact page-->
                                <li><a href="account.php" id = "currentPage"> Account </a></li>';
                        }?>                  
                    </ul>
                </nav>
                <a href="cart.php"><img src="Images/cart.png" width = "30px" height="30px"></a>
                <img src="Images/menu.png"class = "menu-icon" 
                onclick ="menutoggle()">
            </div>
        </div>

        <!------------ account-page  --------------->
        <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="Images/background111.png" width="350px" height="350px">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Register</span>
                                <span onclick="register()">Login</span>
                                <hr id="Indicator"> 
                            </div>

                            <form id="LoginForm" method="POST">
                                <input type="email" placeholder="email" name="loginEmail" required>
                                <input type="password" placeholder="Password" name="loginPassword" required>
                                <br />
                                <button name = "submitLogin" type = "submit" class ="btn">Login</button>
                            </form>

                            <form id="RegForm" method="POST">
                                <input type="text" placeholder="Username" name="registerUsername" required>
                                <input type="email" placeholder="Email" name="registerEmail" required>
                                <input type="password" placeholder="Password" name="registerPassword" required>
                                <input type="password" placeholder="Confirm Password" name="confirmPassword" required>
                                <button name = "submitRegister" type="submit" class ="btn">Register</button>
                            </form>
                        </div>
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
        <!--------------js for logout confirmation------------->
        <script>
            function logOutFn() {
                var logOutValue = confirm("Are you sure you want to logout?");
                return logOutValue;
            }
        </script>

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

        <!-------------- js for toggle form --------->

        <script>
            var LoginForm = document.getElementById("LoginForm");
            var RegForm = document.getElementById("RegForm");
            var Indicator = document.getElementById("Indicator");

            function register(){
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";
            }
            function login(){
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";
            }

        </script>

    </body>
</html>