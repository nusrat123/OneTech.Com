<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Products|OneTech.com | Ecommerce Website</title>
    <link rel="icon" href="images/Tlogo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleallproduct.css">
    <link rel="stylesheet" href="buildp1.css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> 
</head>
<body>
     <div class="container">

        <div class="navbar">
            <div class="logo">
                <img src="images/newlogo1.png" width="280px">
            </div>
            <nav>
                <ul>
                    <li ><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li  href="products.html"><i class="fa fa-laptop"></i>Products</a></li>
                    <li><a href="about.php"><i class="fa fa-university"></i>About</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
                    <li><a href="account.php"><i class="fa fa-user-circle"></i>Account</a></li>
                </ul>
            </nav>
        </div>
         <div class="row sorting">
            <div class="col-md-2">
                <h4>All products</h4>
            </div>
            
            <div class="col-md-2 offset-md-8">
                
                <select>
                    <option>Default Sorting</option>
                    <option>Sort by price</option>
                    <option>Sort by popularity</option>
                    <option>Sort by rating</option>
                    <option>Sort by sale</option>
                </select>
            </div>
        </div> 


        <div class="mydisplay">
            <div class="col-sm-6 col-xs-5">
                <div class="left-button">
                  <a class="pc-builder-button get-quate" href="account.php">Get a Quote</a>
                </div>
            </div>



            <div class="right-button pull-right">
                <a class="pc-builder-button cart-icon" href="add to cart"><i class="fa fa-cart-plus"></i></a>
                
                <a class="pc-builder-button rs-none" href="printing"><i class="fa fa-print"></i></a>
               
    
              </div>
            

        </div>


        <table class="table-component-table">
            <tbody class="pc-builder-tbody">

                <tr class="component-title">
                    <td class="component-col"> component</td>
                    <td class="image-col"> image</td>
                    <td class="name-col">  productname</td>
                    <td class="price-col"> price</td>
                    <td class="Action-col"> Action</td>
                </tr>

                <tr class="cpu-title">
                    
                    <td class="component-col"><i class="fa fa-microchip"></i>CPU</td>
                    <td class="image-col"></td>
                    <td class="name-col"> </td>
                    <td class="price-col"></td>
                    <td class="Action-col">
                        <button onclick="location.href='cpupage.php'"> Choose</button>
                    </td>
                </tr>

                <tr class="motherboard-title">
                    
                    <td class="component-col"> <i class="fa fa-memory"></i>MotherBoard</td>
                    <td class="image-col"> </td>
                    <td class="name-col">  </td>
                    <td class="price-col"> </td>
                    <td class="Action-col"> 
                        <button onclick="location.href='motherboardpage.php'"> Choose</button></td>
                </tr>

                <tr class="ram-title">
                    
                    <td class="component-col"><i class="fa fa-memory"></i>RAM</td>
                    <td class="image-col"></td>
                    <td class="name-col">  </td>
                    <td class="price-col"> </td>
                    <td class="Action-col">
                        <button onclick="location.href='rampage.php'"> Choose</button>
                    </td>
                </tr>

                <tr class="storage-title">
                    
                    <td class="component-col"><i class="fa fa-hdd"></i>STORAGE</td>
                    <td class="image-col"> </td>
                    <td class="name-col"> </td>
                    <td class="price-col"> </td>
                    <td class="Action-col"> 
                        <button onclick="location.href='storage.php'"> Choose</button>
                    </td>
                </tr>

                <tr class="graphicscard-title">
                    
                    <td class="component-col"><i class="fa fa-microchip"></i>GPU</td>
                    <td class="image-col"> </td>
                    <td class="name-col">  </td>
                    <td class="price-col"> </td>
                    <td class="Action-col"> 
                    <button onclick="location.href='gpupage.php'"> Choose</button>
                    </td>
                </tr>

                <tr class="casing-title">
                    
                    <td class="component-col"><i class="fa fa-microchip"></i>Casing</td>
                    <td class="image-col"></td>
                    <td class="name-col">  </td>
                    <td class="price-col"> </td>
                    <td class="Action-col"> 
                    <button onclick="location.href='casingpage.php'"> Choose</button>
                    </td>
                </tr>

                <tr class="monitor-title">
                    
                    <td class="component-col"><i class="fa fa-microchip"></i>Monitor</td>
                    <td class="image-col"> </td>
                    <td class="name-col">  </td>
                    <td class="price-col"> </td>
                    <td class="Action-col"> 
                    <button onclick="location.href='monitorpage.php'"> Choose</button>
                    </td>
                </tr>

               


                <tr class="totalprice-title">
                    <td class="totalprice-col">Total price=</td>
                    <td class="imagenull-col"> </td>
                    <td class="namenull-col">  </td>
                    <td class="price-col"> </td>
                    <td class="Action-col"> </td>

                    
                </tr>

                




                
                



            </tbody>




        </table>





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


        



</body>

</html>

       

