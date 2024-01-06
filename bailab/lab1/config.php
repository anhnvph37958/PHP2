<?php 
$conn = new mysqli('localhost','root','','lab1');
if($conn == false){
die("Error: ".$conn->connect_error);
}
?>