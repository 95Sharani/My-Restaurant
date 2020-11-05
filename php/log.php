<?php

include("../connect.php");
session_start();


if(isset($_POST['sign'])){

$Email = $_POST['email'];
$Pass = $_POST['pass'];
$Type = $_POST['types'];


if($Type == "customer"){
	$query=("SELECT * from reg_customer where email = '".$Email."' AND password = '".$Pass."'");
	$result=mysqli_query($conn, $query);
	if($result){
		while($row = mysqli_fetch_array($result))
		{
			echo '<script type="text/javascript"> alert("you are login successfully...!")</script>';
		}
		if(mysqli_num_rows($result)>0){
			$_SESSION['email']=$Email;
			?>
			<script type="text/javascript">
				window.location.href="../home1.php"
			</script>

			<?php

		}else {
			?>

			<script type="text/javascript">
				alert("username or password is wrong")
				window.location.href="../login.php"
			</script>
			<?php
		}
		}
	}

	$query=("SELECT * from reg_merchant where email = '".$Email."' AND password = '".$Pass."'");
	$result=mysqli_query($conn, $query);
	if($result){
		while($row = mysqli_fetch_array($result))
		{
			echo '<script type="text/javascript"> alert("You are login successfully...!")</script>';
		}
		if(mysqli_num_rows($result)>0){
			$_SESSION['email']=$Email;
			?>
			<script type="text/javascript">
				window.location.href="../home3.php"
			</script>

			<?php

		}else {
			?>

			<script type="text/javascript">
				alert("username or password is wrong")
				window.location.href="../login.php"
			</script>
			<?php
		}
		}
	}


?>