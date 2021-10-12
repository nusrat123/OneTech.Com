<?php
   require 'database.php';
   if(isset($_POST['action'])){
       $sql= "SELECT * FROM productsmotherboard WHERE brand !=''";
       if(isset($_POST['pricerange'])){
        $pricerange = implode("','",$_POST['pricerange']);
        $sql .="AND pricerange IN('".$pricerange."')";
    }
       if(isset($_POST['brand'])){
           $brand = implode("','",$_POST['brand']);
           $sql .="AND brand IN('".$brand."')";
       }
       if(isset($_POST['ramtype'])){
        $ramtype = implode("','",$_POST['ramtype']);
        $sql .="AND ramtype IN('".$ramtype."')";
    }
    $result = $conn->query($sql);
    $output = '';

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){

            $output .='<div class="col-md-3 mb2"> 
            <div class="card-deck">
                <div class="card border-secondery">
                   <img src="'. $row['product_image'].'"
                   class="card-img-top">
                   <div class="card-img-overlaly">
                       <h6 style="margin-top: 150px;" class="text-light bg-info text-center rounded p-1">'. $row['product_name'].'</h6>

                   </div>
                   <div class="card-body">
                        <h4 class="card-title text-danger"> Price : '.
                        number_format($row['product_price']).' /-</h4>
                        <p> 
                        Ram type: '.$row['ramtype'].'<br>
                        Clock speed : 2.4 ghz to 3.6 ghz;
                        </p>
                        <a href="#" class="btn btn-success btn-block"> Add</a>
                    </div>
                </div>
            </div>
         </div>';

        }
    }
    else{
        $output = "<h3>No products found!</h3>";
    }
    echo $output;
    





   }
?>