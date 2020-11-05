       	<?php
       	
       	include("connect.php");
              session_start();
              if(!isset($_SESSION['email']))
                     header("Location: login.php");

       	$qr1="SELECT * FROM des, reg_merchant where  des.shop_name=reg_merchant.shop_name  && reg_merchant.email='".$_SESSION['email']."'"; 

       	$res1=mysqli_query($conn, $qr1);

       	if(!$qr1){


if(isset($_POST['upload'])){

	$target = "img/".basename($_FILES['image']['name']);

	$sname=$_POST['shop_name'];
	$image=$_FILES['image']['name'];
	$text=$_POST['text'];
	$location=$_POST['location'];
	$address=$_POST['address'];

	$select = "SELECT id from des where id =? Limit 1";
	$abc="INSERT INTO des (id, shop_name, image, text, location, address) VALUES (?,?,?,?,?,?)";

	$stmt=$conn->prepare($select);
	$stmt->bind_param("i",$id);
	$stmt->execute();
	$stmt->bind_result($id);
	$stmt->store_result();
	$rnum=$stmt->num_rows;

	if($rnum==0){
		$stmt=$conn->prepare($abc);
		$stmt->bind_param("isssss",$id, $sname, $image, $text, $location, $address);
		?>

		<script>alert("New record inserted Sucessfully");</script>

		<?php
	}else{
		?>
		<script>alert("Error");</script>
		<?php
	}

	$stmt->close();
	//$conn->close();
	
} 	


       }
       else
       {

       	$input=filter_input_array(INPUT_POST);

	while($row1=mysqli_fetch_array($res1)){
       		echo "<div id='img_div'>";
       		//echo "<p>".$_SESSION['email']."</p>";
       		echo "<div id='name'>";
       		echo "<label>".$row1['shop_name']."</Label>";
       		echo "</div>";
       		echo "<div id='ima'>";
       		echo "<img src='img/".$row1['image']."' width=410px' hight='400px'>";
       		echo "</div>";
       		echo "<div id='dis'>";
       		echo "<p>".$row1['text']."</p>";
       		echo "</div>";
       		echo "<div id='loc'>";
       		echo "<p>".$row1['location']."</p>";
       		echo "</div>";
       		echo "<div id='add'>";
       		echo "<p>".$row1['address']."</p>";
       		echo "</div>";
       		echo "</div>";
       	}
              echo json_encode($input); 
       }
       ?>