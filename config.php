<?
$conn = new mysqli("localhost","root","","userinfo");
if($conn->connect_error){
    die("Connection failed!".$conn->connect_error);
}