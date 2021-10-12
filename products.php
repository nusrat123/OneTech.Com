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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="search.css">
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ul.js"></script>
  <link rel="stylesheet" href="styleallproduct.css">

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
                    <li ><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active"> <a href="#"><i class="fa fa-laptop"></i>Products</a></li>
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
    <div class="row-sorting">
            <div class="col-md-2">
                <h1>All products</h1>
            </div>
            <div class="icons">
              <div class="list">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="grid">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="col-md-2 offset-md-8">
                <select>
                    <option>Default Sorting</option>
                    <option>Sort by price(high to low)</option>
                    <option>Sort by price(low to high)</option>
                    <option>Sort by name(A to Z)</option>
                    <option>Sort by name(Z to A)</option>
                </select>
            </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="left-panel1">
            <div class="list-group">
              <h3>Price Range</h3>
              <form id="price_range" method="post">
                <label>From</label>
                <input type="number" name="min" id="value"><br>
                <label>To    </label>
                <input type="number" name="max" id="value"><br>
                
                <input type="submit" value="Search" name="search" id="search">
                <p id="price_show">1000-65000</p> 
                <div >
                  <input type="range" min="1000" max="65000" value="20000" id="slider">
                </div>
              </form>
            </div>
            <div class="list-group">
              <h3>Brand</h3>
              <form id="brand_selection" method="POST">
                <div style="height:180px; overflow-y: auto; overflow-x: hidden;">
                 
                    <div class="list-group-item checkbox">
                      <label><input type="checkbox" class="common_selector_brand" value="<?php echo $row['product_brand']; I?>"></label>
                    </div>
                 
                  <input type="submit" value="Search" name="search" id="search">
                </div>
              </form>
              
            </div>
          </div>
        </div>
        <div class="col-md-9">
              <div class="row product">
                  <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="images/m1.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title">Asus Laptop</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="productDescription.php" class="btn btn-primary">Product Details</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="images/b2.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title">Asus Laptop</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="productDescription2.php" class="btn btn-primary">Product Details</a>
                          </div>
                        </div>
                  </div>
                  <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="images/b1.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title">Asus Laptop</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="productDescription3.php" class="btn btn-primary">Product Details</a>
                          </div>
                        </div>
                  </div>
                  
              </div>
              <div class="row product">
                  <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/asus.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h3 class="card-title">Asus Laptop</h3>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Product Details</a>
                        </div>
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="images/asus.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title">Asus Laptop</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                  </div>
                  <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="images/asus.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title">Asus Laptop</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                  </div>
              </div>   
              <div class="row product">
                  <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="images/asus.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title">Asus Laptop</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                  </div>
                  <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="images/asus.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title">ASUS VivoBook F571LI</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Intel Core i5-10300H Processor (8M Cache, 2.5 GHz up to 4.5 GHz)</li>
                            <li class="list-group-item">8GB DDR4 RAM + 512GB SSD</li>
                            <li class="list-group-item">15.6"(1920x1080) FHD Display</li>
                          </ul>
                          <div class="card-body">
                            <a href="#" class="card-link">Add to Cart</a>
                            <a href="#" class="card-link">product Details</a>
                          </div>
                        </div>
                  </div>
                  <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="images/asus.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title">Asus Laptop</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                  </div>
                  
                </div>
                  <div class="row product">
                    <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="images/asus.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title">Asus Laptop</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                      </div>
                    <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="images/asus.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title">Asus Laptop</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                      </div>
                    </div>
                        <div class="col-3">
                          <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="images/asus.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h3 class="card-title">Asus Laptop</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
        </div>

      </div>

        <div class="row page-counter-layout">
            <div class="col-md-3 offset-md-1 counter">
                <a href="products1.php">1</a>
                <a href="products2.php">2</a>
                <a href="products3.php">3</a>
                <a href="products4.php">4</a>
                <a href="#">...</a>
            </div>
            <div class="col-md-1  counter">
                
            </div>
            <div class="col-md-1  counter">
                
            </div>
            <div class="col-md-1  counter">
                
            </div>
            
        </div>





        <div class="footer">
            
                <div class="row">
                    <div class="col-3 p-4">
                        <h3>Download Our App</h3>
                        <p>  Download App for Android and ios mobile phone</p>
                        <div class="app-logo">
                            <img src="images/googleplaystore .jpeg">
                            <img src="images/app-store.png">
                        </div>
                    </div>
                    <div class="col-3 p-4">
   
                       <p>Our purpose is to sustainably make the pleaasure and benefits of sports accessible to the many.</p>
                    </div>
                    <div class="col-3 p-4">
                        <h3>Useful links</h3>
                        <ul>
                            <li>Coupons </li>
                            <li>Blog post</li>
                            <li>Return policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    <div class="col-3 p-4">
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