<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecart.css">
    <link rel="stylesheet" href="style.css">
    <title>Product Details</title>
</head>
<body>

    <!---- product Details---->
    <div class="container">


        <div class="navbar">
            <div class="logo">
                <img src="images/newlogo1.png" width="280px">
            </div>
            <nav>
                <ul>
                    <li ><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                    <li ><a href="products.html"><i class="fa fa-laptop"></i>Products</a></li>
                    <li><a href="#"><i class="fa fa-university"></i>About</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
                    <li><a href="homepage.html"><i class="fa fa-user-circle"></i>Account</a></li>
                </ul>
            </nav>
        </div>

            <div class="small-container single_product">
            <div class="row">
            <div class="col-2">
                <img src="images/b2.jpg" width="100%" id="productImg"  >
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/l1.jpg" width="100%" class="smallimg"  >
                    </div>
                    <div class="small-img-col">
                        <img src="images/l2jpg.jpg" width="100%" class="smallimg" >
                    </div>
                    <div class="small-img-col">
                        <img src="images/b2.jpg" width="100%" class="smallimg" >
                    
                    </div>
                    

                
                </div>
            </div>
            <div class="col-2">
                <p>Asus ZenBook</p>
                <h1>Asus ZenBook 14 UX425JA Core i5 10th Gen <br> 512GB SSD 14" FHD Laptop with Windows 10</h1>
                <h4>Price 90000 taka</h4>
                <input type="number" value="1">
                <a href="http://127.0.0.1:5500/cart.html" class="btn">Add to Cart</a>
                <h3>Description</h3>
                <p>The compact, thin and ultralight all-metal design of ZenBook 14 makes it the ideal traveling companion. It's also the world's thinnest 14-inch laptop to feature a full set of I/O ports1 — including HDMI and USB Type-A — so you can enjoy versatile connectivity wherever you are. With ZenBook 14's amazing 22-hour battery life4, traveling without a charger isn't a big deal. When you do need to top up, its fast-charge feature can restore the battery to a 60% charge level in just 49 minutes, so you'll be ready to go in no time. Getting stuff done on the go is effortless with the elegant and lightweight ZenBook 14.
                    Its small size and big capabilities will make it your go-to device for productivity and inspiration, whether you're inside or outside, working or relaxing, alone or collaborating. </p>
                
            </div>

            </div>

            </div>
            <div class="small-container">
            <div class="row row-2">
                <h2>Related Product</h2>
                <p>View More</p>
            </div>
            </div>
                    <!-- ---footer -->

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


    </div>

    <!---- Js for img--->
    <script>
        var productImg = document.getElementById("productImg")
        var smallimg = document.getElementsByClassName("smallimg");

        smallimg[0].onclick = function() 
        {
            productImg.src =  smallimg[0].src;
        }
        smallimg[1].onclick = function() 
        {
            productImg.src =  smallimg[1].src;
        }
        smallimg[2].onclick = function() 
        {
            productImg.src =  smallimg[2].src;
        }
    </script>
    
    
</body>
</html>