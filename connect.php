<?php
$conn = mysqli_connect("localhost","root","","restaurent");
if(!$conn){
	die("Connection Fail: " .mysqli_connect_error());
	
}
?>