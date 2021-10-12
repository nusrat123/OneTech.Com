<?php


$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "userinfo";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  



$username =$_POST['Username'];
$password =$_POST['Password'];


$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);  
$password = mysqli_real_escape_string($con, $password);  

$sql = "select *from userinformation where username = '$username' and password = '$password'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  

if($count == 1){  
   // echo "<h1><center> Login successful </center></h1>";  
   $message = "Welcome to one tech";
    echo "<script>
    alert('$message');
    window.location.href='index.php';
    </script>";
    exit;
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}     


?>