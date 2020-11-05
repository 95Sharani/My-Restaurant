<?php  
$connect = mysqli_connect("localhost", "root", "", "restaurent");
session_start();
$sql = "INSERT INTO food(shop_name,item_name, price,image) VALUES('".$_SESSION['shop_name']."','".$_POST["item_name"]."', '".$_POST["price"]."','".$_POST["image"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>