<?php

include("../connect.php");
session_start();
if(!isset($_SESSION['email']))
	header("Location: login.php");


$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$Email = $_POST['email'];
$Pass = $_POST['pass'];
$Phone = $_POST['phone'];


if(!empty($Fname) && !empty($Lname) && !empty($Email) && !empty($Pass) && !empty($Phone))
{

$SELECT = "SELECT ID FROM reg_customer where ID =? Limit 1";
$INSERT = "INSERT into reg_customer (ID, fname, lname, email, password, contact_no) values(?,?,?,?,?,?)";


$stmt=$conn->prepare($SELECT);
$stmt->bind_param("i",$ID);
$stmt->execute();
$stmt->bind_result($ID);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("isssss",$ID,$Fname,$Lname,$Email,$Pass,$Phone);
	$stmt->execute();

	?>
<script> alert ("New record inserted Sucessfully");
	window.location.href='../login.php';
 </script>
<?php

}else{
	?>
<script> alert ("Someone already registered with this Reservation No");
	window.location.href='../login.php';
</script>
<?php
}
$stmt->close();
$conn->close();

}else{
	?>
<script> alert ("All the fields are required");
	window.location.href='../login.php';
 </script>
<?php


}



?>