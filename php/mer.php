<?php
 
include("../connect.php");
session_start();
if(!isset($_SESSION['email']))
	header("Location: login.php");

$Fname=$_POST['fname'];
$Lname=$_POST['lname'];
$Sname=$_POST['sname'];
$Email=$_POST['email'];
$Pass=$_POST['pass'];
$Phone=$_POST['phone'];

if(!empty($Fname) && !empty($Lname) && !empty($Sname) && !empty($Email) && !empty($Pass) && !empty($Phone))
{
	$select = "SELECT ID from reg_merchant where ID =? Limit 1";
	$insert = "INSERT into reg_merchant (ID, fname, lname, shop_name, email, password, contact_no) values(?,?,?,?,?,?,?)";

	$stmt=$conn->prepare($select);
	$stmt->bind_param("i",$ID);
	$stmt->execute();
	$stmt->bind_result($ID);
	$stmt->store_result();
	$rnum=$stmt->num_rows;

	if($rnum==0){
		$stmt=$conn->prepare($insert);
		$stmt->bind_param("issssss",$ID,$Fname,$Lname,$Sname,$Email,$Pass,$Phone);
		$stmt->execute();

		?>

		<script> alert ("New record inserted Sucessfully");
			window.location.href='../login.php';
		</script>

		<?php

	}else{
		?>

		<script>
			alert ("Someone already registered with this Reservation No");
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