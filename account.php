<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OneTech.com | Ecommerce Website</title>
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Tlogo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="search.css">

    <link rel="stylesheet" href="account.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> 
</head>
<body>
     <div class="container">

        <div class="small-container-1">
            <div class="navbar">
                <div class="logo">
                    <img src="images/newlogo1.png" width="280px" height="120px">
                </div>
                <nav>
                    <ul>
                        <li ><a href="#"><i class="fa fa-home"></i>Home</a></li>
                        <li > <a href="products.php"><i class="fa fa-laptop"></i>Products</a></li>
                        <li><a href="about.php"><i class="fa fa-university"></i>About</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
                        <li class="active"><a href="account.php"><i class="fa fa-user-circle"></i>Account</a></li> 
                    </ul>
                    
                    <div class="second-panel">
                       
                            <div class="col-md-6 col-md-offset-3 form-wrapper">
                                <form action="">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                                            <div class="input-group-addon"> 
                                                <button type="submit"><i class="fa fa-search"></i></button>             
                                            </div>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                            <div class="third-panel">
                                <div class="shopping-container">
                                    <div class="counter-container">
                                        <span id="counter">1</span>
                                        <a href="cart.php"><i data-feather="shopping-bag"></i></a>
                                    </div>
                                 <!---    <div>
                                        <button id="add-animation">Cart</button>
                                    </div>-->
                                </div>
                                <div class="wish-list">
                                    <div class="wish-container">
                                        <span id="counter1">1</span>
                                        <a href="cart.php"> <i class="fa fa-heart-o"></i></a>
                                    </div>
                                 <!---    <div>
                                        <button id="animation">Wish</button>
                                    </div>-->
                                    <div class="build">
                                        <a class="pc-builder-btn" href="buildpc.php"><i class="fa fa-desktop desktop-icon"></i>
                                            <span class="desktop-icon">Build Your Own Pc</span></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </nav>   
            </div>
        </div>
        <div class="small-container-2">
            <div class="menubar">
                <ul>
                    <li><a href="#">Desktop</a>
                        <div class="submenu-1">
                            <ul>
                                <li class="hover-me"><a href="#">GamingPC</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">RYZEN PC</a></li>
                                            <li><a href="#">Intel PC</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#">BrandPC</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">Lenovo</a></li>
                                            <li><a href="#">Hp</a></li>
                                            <li><a href="#">Dell</a></li>
                                            <li><a href="#">Asus</a></li>
                                            <li><a href="#">Acer</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Laptop</a>
                        <div class="submenu-1">
                            <ul>
                                <li><a href="#">Asus</a></li>
                                <li><a href="#">Hp</a></li>
                                <li><a href="#">Acer</a></li>
                                <li><a href="#">Lenovo</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Monitor</a>
                        <div class="submenu-1">
                            <ul>
                                <li><a href="#">Hp</a></li>
                                <li><a href="#">Asus</a></li>
                                <li><a href="#">ViewSonic</a></li>
                                <li><a href="#">Dell</a></li>
                                <li><a href="#">LG</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Components</a>
                        <div class="submenu-1">
                            <ul>
                                <li class="hover-me"><a href="#">MotherBoard</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">ASUS</a></li>
                                            <li><a href="#">Gigabyte</a></li>
                                            <li><a href="#">MSI</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#">Processor</a><i class="fa fa-angle-right"></i>
                                        <div class="submenu-2">
                                            <ul>
                                                <li><a href="#">AMD</a></li>
                                                <li><a href="#">Intel</a></li>
                                            </ul>
                                        </div>
                                </li>
                                <li class="hover-me"><a href="#">HardDisk</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">Toshiba</a></li>
                                            <li><a href="#">WesternDigital</a></li>
                                            <li><a href="#">SeaGate</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a  href="#">Casing</a><i class="fa fa-angle-right"></i>
                                        <div class="submenu-2">
                                            <ul>
                                                <li><a href="#">Corsair</a></li>
                                                <li><a href="#">GameMax</a></li>
                                                <li><a href="#">ValueTop</a></li>
                                                <li><a href="#">Gigabyte</a></li>
                                                <li><a href="#">CoolerMaster</a></li>
                                                <li><a href="#">ThermalTake</a></li>
                                            </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#">SSD</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">Transcend</a></li>
                                            <li><a href="#">Gigabyte</a></li>
                                            <li><a href="#">TwinMos</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">WesternDigital</a></li>
                                            <li><a href="#">Lexar</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#">GraphicsCard</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">ASUS</a></li>
                                            <li><a href="#">Hp</a></li>
                                            <li><a href="#">Acer</a></li>
                                            <li><a href="#">Lenovo</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#">CoolingFan</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">ASUS</a></li>
                                            <li><a href="#">Gigabyte</a></li>
                                            <li><a href="#">Sapphire</a></li>
                                            <li><a href="#">Zotac</a></li>
                                            <li><a href="#">MSI</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Accessories</a>
                        <div class="submenu-1">
                            <ul>
                                <li class="hover-me"><a href="#">KeyBoard</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">A4Tech</a></li>
                                            <li><a href="#">Gigabyte</a></li>
                                            <li><a href="#">Logitech</a></li>
                                            <li><a href="#">Corsair</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#">Mouse</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">A4Tech</a></li>
                                            <li><a href="#">Gigabyte</a></li>
                                            <li><a href="#">Logitech</a></li>
                                            <li><a href="#">Corsair</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#">HeadPhone</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">A4Tech</a></li>
                                            <li><a href="#">Logitech</a></li>
                                            <li><a href="#">Corsair</a></li>
                                            <li><a href="#">Zabra</a></li>
                                            <li><a href="#">Havit</a></li>
                                            <li><a href="#">Micropack</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#">PowerSupply</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">ThermalTake</a></li>
                                            <li><a href="#">Gigabyte</a></li>
                                            <li><a href="#">Corsair</a></li>
                                            <li><a href="#">CoolerMaster</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#">PenDrive</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">Transcend</a></li>
                                            <li><a href="#">PNY</a></li>
                                            <li><a href="#">TwinMos</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">UPS</a>
                        <div class="submenu-1">
                            <ul>
                                <li><a href="#">OnlineUPS</a></li>
                                <li><a href="#">OfflineUPS</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Networking</a>
                        <div class="submenu-1">
                            <ul>
                                <li class="hover-me"><a href="#">Router</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">TpLink</a></li>
                                            <li><a href="#">D-Link</a></li>
                                            <li><a href="#">Tenda</a></li>
                                            <li><a href="#">Cisco</a></li>
                                            <li><a href="#">NetGear</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me"><a href="#">LanCard</a><i class="fa fa-angle-right"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">TpLink</a></li>
                                            <li><a href="#">D-Link</a></li>
                                            <li><a href="#">Tenda</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Software</a>
                        <div class="submenu-1">
                            <ul>
                                <li class="hover-me1"><a href="#">Microsoft</a><i class="fa fa-angle-left"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">Windows</a></li>
                                            <li><a href="#">Msoffice</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hover-me1"><a href="#">Antivirus</a><i class="fa fa-angle-left"></i>
                                    <div class="submenu-2">
                                        <ul>
                                            <li><a href="#">HomeUser</a></li>
                                            <li><a href="#">BusinessUsre</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                
                </ul>

            </div>
        </div>
        <div class="small-container-3">
            <div class="account-page">
                    <div class="row">
                        <div class="col-2">
                            <img src="images/miniLogo.png" width="100%">
                        </div>
                        <div class="col-2">
                            <div class="form-container">
                                <div class="form-btn">
                                    <span onclick="login()">Login</span>
                                    <span onclick="register()">Register</span>
                                    <hr id="Indicator">
                                </div>
                                <form id="LoginForm" action="process.php" method="POST"  >
                                    <input type="text" placeholder="Username">
                                    <input type="password" placeholder="Password">
                                    <button type="submit" class="btn">Login</button>
                                    <a  href=""> Forgot password!!!</a>
                                </form >
                                <form id="RegForm"  action="insert.php" method="POST">
                                 <input type="text" placeholder="Username">
                                 <input type="email" placeholder="Email">
                                 <input type="password" placeholder="Password">
                                 <button type="submit" class="btn">Register</button>
                                </form>
         
                            </div>
                        </div>
                    </div>
            </div>
            <div class="admin">
                <div class=".col-6 .col-md-4">
                    <button onclick="location.href='adminlogin.php'"  type="button" class="adminbutton">Administrator</button>
                </div>
            </div>
        </div>
          
    </div>
            
     <!-- ---footer -->

    <div class="footer">
        <div class="container-footer">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="images/googleplaystore .jpeg">
                        <img src="images/appstore.jpeg">
                    </div>
                </div>
                <div class="footer-col-2">

                   <p>Our purpose is to sustainably make the pleaasure and benefits of sports accessible to the many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Coupons </li>
                        <li>Blog post</li>
                        <li>Return policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                       <li>Facebook </li>
                       <li>Twitter</li>
                       <li>Instagram</li>
                       <li>you tube</li>

                    </ul>
                </div>

            </div>
            <hr>
            <p class="copyright">Copyright 2021- one tech </p>
        </div>
    </div>


    <script src="script.js"></script>
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    <!---------js for toggle form-->
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
