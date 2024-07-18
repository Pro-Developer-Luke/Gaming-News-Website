<?php 

$host="localhost";
$user="root";
$pass="";
$db="gamecheats";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Connection Failure".$conn->$connect_error;
}
?>