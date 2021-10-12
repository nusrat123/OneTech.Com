
 <?php

$username =$_POST['Username'];
$email =$_POST['Email'];
$password =$_POST['Password'];
if(!empty($username) || !empty($email) || !empty($password) ){ 
    $host = "localhost";
    $dbUsername ="root";
    $dbPassword = "";
    $dbname = "userinfo";

    //create connection

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{
        $SELECT ="SELECT email  From userinformation  Where email = ? Limit 1";
        $INSERT="INSERT Into userinformation (username,email,password) values(?,?,?) ";

            //prepare statement

            $stmt = $conn->prepare($SELECT);
            if($stmt){
                $stmt->bind_param("s",$email);
                $stmt->execute();
                $stmt->bind_result($email);
                $stmt->store_result();
                $rnum =  $stmt->num_rows;
                $stmt->close();
    
                if($rnum==0){
                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("sss",$username,$email,$password);
                    if($stmt->execute()){
                       // echo "New record inserted successfully";
                        $message = "Congratulations!!now please log in to start";
                        echo "<script>
                        alert('$message');
                        window.location.href='account.php';
                        </script>";
                        exit;
                    }
                   /* else{
                        echo "Error: Database execution error.";
                    }*/
    
                    
                } else{
                    echo "Someone already register using this email";
                }
                $stmt->close();
            }
            else{
                echo "Error: Database execution error.";
            }
            
            $conn->close();

    }

} 
else{
        echo "All field are required";

    }




