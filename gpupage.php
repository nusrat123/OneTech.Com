<?php
   require 'database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OneTech.com | Ecommerce Website</title>
    <link rel="icon" href="images/Tlogo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</head>
<body>
     <div class="container">

        <div class="small-container-1">
            <div class="navbar">
                <div class="logo">
                    <img src="images/newlogo1.png" width="280px">
                </div>
                <nav>
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home"></i>Home</a></li>
                        <li > <a href="products.php"><i class="fa fa-laptop"></i>Products</a></li>
                        <li><a href="about.php"><i class="fa fa-university"></i>About</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
                        <li><a href= "account.php"><i class="fa fa-user-circle"></i>Account</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <br>
                    <br><br>
                    <br>

        <div class="small-container-3">
          <h3 class="text-center text-light bg-info p-2">
              Pc building with one tech
          </h3>
          <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-3">
                      <h5>Filter Product</h5>
                      <hr>
                      <h6 class="text-info">Select price range</h6>
                      <ul class="list-group">
                         <?php
                             
                             $sql="SELECT DISTINCT pricerange FROM productsgpu ORDER BY pricerange";
                             $result= $conn->query($sql);
                             while($row=$result->fetch_assoc()){

                             

                         ?>
                         <li class="list-group-item">
                           <div class="form-check">
                             <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input product_check"  value="<?= $row['pricerange']; ?>" id="pricerange"><?= $row['pricerange']; ?>
                             </label>
                           </div>
                         </li>
                        <?php } ?>
                      
                      </ul>
                      <h6 class="text-info">Select Brand</h6>
                      <ul class="list-group">
                         <?php
                             
                             $sql="SELECT DISTINCT brand FROM productsgpu ORDER BY brand";
                             $result= $conn->query($sql);
                             while($row=$result->fetch_assoc()){

                             

                         ?>
                         <li class="list-group-item">
                           <div class="form-check">
                             <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input product_check"  value="<?= $row['brand']; ?>" id="brand"><?= $row['brand']; ?>
                             </label>
                           </div>
                         </li>
                        <?php } ?>
                      
                      </ul>

                      <h6 class="text-info">Memory capacity</h6>
                      <ul class="list-group">
                         <?php
                             
                             $sql="SELECT DISTINCT memory FROM productsgpu ORDER BY memory";
                             $result= $conn->query($sql);
                             while($row=$result->fetch_assoc()){

                             

                         ?>
                         <li class="list-group-item">
                           <div class="form-check">
                             <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input product_check"  value="<?= $row['memory']; ?>" id="memory"><?= $row['memory']; ?>
                             </label>
                           </div>
                         </li>
                        <?php } ?>
                      
                      </ul>
                      
                    </div>
                    <div class="col-lg-9">
                    <br>
                    
                         <h5 class="text-center" id="textChange"> Choose Your Graphics Card
                          </h5>
                          <hr>
                          <div class="text-center">
                            <img src="images/loader.gif" id="loader" width="200" style="display: none;">
                          </div>
                          <div class="row" id="result">
                           <?php
                           $sql="SELECT * FROM productsgpu";
                           $result=$conn->query($sql);
                           while($row=$result->fetch_assoc()){
                               ?>
                               <div class="col-md-3 mb2"> 
                                  <div class="card-deck">
                                      <div class="card border-secondery">
                                         <img src="<?= $row['product_image']; ?>"
                                         class="card-img-top">
                                         <div class="card-img-overlaly">
                                             <h6 style="margin-top: 150px;" class="text-light bg-info text-center rounded p-1"><?= $row['product_name']; ?></h6>

                                         </div>
                                         <div class="card-body">
                                              <h4 class="card-title text-danger"> Price
                                              : <?= number_format($row['product_price']); ?>/-</h4>
                                              <p> 
                                             Category of memory: <?= $row['memory']; ?><br>
                                             
                                              </p>
                                              <a href="#" class="btn btn-success btn-block"> Add</a>
                                          </div>
                                      </div>
                                  </div>
                               </div>
                           <?php } ?>
                          </div>
                        
                    </div>
               </div>
          </div>

          <script type="text/javascript">
          $(document).ready(function(){
              $(".product_check").click(function(){

                $("#loader").show();

                var action='data';
                var pricerange =get_filter_text('pricerange');
                var brand =get_filter_text('brand');
                
                var memory  =get_filter_text('memory');

                $.ajax({
                    url: 'actiongpu.php',
                    method:'POST',
                    data:{action:action,pricerange:pricerange,brand:brand,memory:memory},
                    success:function(response){
                        $("#result").html(response);
                        $("#loader").hide();
                        $("#textChange").text("Filtered Procucts");
                    }

                });


              });
              function get_filter_text(text_id){
                  var filterData = [];
                  $('#'+text_id+':checked').each(function(){
                      filterData.push($(this).val());

                  });
                  return filterData;
              }
          });



        
        
        
         
         
          </script>
        
        </div>
        <div class="small-container-4">
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

     </div>


</body>

</html>
