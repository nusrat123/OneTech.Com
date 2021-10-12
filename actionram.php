<?php
   require 'database.php';
   if(isset($_POST['action'])){
       $sql= "SELECT * FROM productsram WHERE brand !=''";
       if(isset($_POST['pricerange'])){
        $pricerange = implode("','",$_POST['pricerange']);
        $sql .="AND pricerange IN('".$pricerange."')";
    }
       if(isset($_POST['brand'])){
           $brand = implode("','",$_POST['brand']);
           $sql .="AND brand IN('".$brand."')";
       }
       if(isset($_POST['capacity'])){
        $capacity = implode("','",$_POST['capacity']);
        $sql .="AND capacity IN('".$capacity."')";
    }
    if(isset($_POST['busspeed'])){
        $busspeed = implode("','",$_POST['busspeed']);
        $sql .="AND busspeed IN('".$busspeed."')";
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
                        Capacity: '.$row['capacity'].'<br>
                        Latency: 18-22-22-42
                         Package Memory Format: DIMM
                         Heat Spreader: Anodized Aluminum
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