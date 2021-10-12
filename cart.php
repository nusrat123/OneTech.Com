<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title>OneTech.com | Ecommerce Website</title>
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Tlogo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="stylecart.css">

</head>
<!----cart-->
<body>

    <div class="container">
        <div class="small-container-1">
            <div class="navbar">
                <div class="logo">
                    <img src="images/newlogo1.png" width="280px" height="120px">
                </div>
                <nav>
                    <ul>
                        <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li > <a href="products.php"><i class="fa fa-laptop"></i>Products</a></li>
                        <li><a href="about.php"><i class="fa fa-university"></i>About</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
                        <li><a href="account.php"><i class="fa fa-user-circle"></i>Account</a></li> 
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





        <div class="small-container cart">
            <h1>Shopping Cart</h1>
            <table>
                <tr>
                    <th>Product </th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/m1.jpg">
                            <div>
                                <p>Asus TUF GAMING A520M-PLUS DDR4</p>
                                <small>price: 11200</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                        
                    </td>
                    <td><input type="number" value="2"></td>
                    <td>11200</td>

                </tr>
               <!-- <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/b1.jpg">
                            <div>
                                <p>Benq Mobiuz EX2510 24.5" 144Hz 1ms <br> IPS Gaming Monitor</p>
                                <small>price: 34500</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                        
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>34500</td>

                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/b2.jpg">
                            <div>
                                <p>Asus ZenBook 14 UX425JA Core i5 10th Gen <br> 512GB SSD 14" FHD Laptop with Windows 10</p>
                                <small>price: 90000</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                        
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>90000</td>

                </tr>-->
            </table>
            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>22400</td>
                    </tr>
                    <tr>
                        <td>Delivery Charge</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>22900</td>
                    </tr>
                </table>
                
            </div>
            <div class="build" style="margin-left : 820px; margin-top : 30px; width : 200px">
                    <a class="pc-builder-btn" href="checkoutpage.php">
                    <span class="desktop-icon">Place Order</span></a>
            </div>
        </div>
    </div>  
    <div class="footer">
        <div class="container">
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
</body>
</html>