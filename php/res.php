<?php

include("../connect.php");
session_start();

$memail=$_POST['email'];
//$shop_name=$_POST['shop_name'];
$email = $_POST['email_1'];
$date = $_POST['date'];
$time = $_POST['time'];
$table = $_POST['table'];
$suggestion =$_POST['textareas'];







if(!empty($email) && !empty($date) && !empty($time) && !empty($table)){



$SELECT = "SELECT id FROM reservation where id=? Limit 1";

$INSERT = "INSERT into reservation(id,memail,email,date_1,time_1,table_1,food) values(?,?,?,?,?,?,?)";


$stmt=$conn->prepare($SELECT);
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->bind_result($id);
$stmt->store_result();
$rnum=$stmt->num_rows;


if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("issssss",$id,$memail,$email,$date,$time,$table,$suggestion);
	$stmt->execute();



 $qu="SELECT * from des, reg_merchant where reg_merchant.shop_name=des.shop_name && reg_merchant.email='".$memail."'";
	$res_qu=mysqli_query($conn, $qu);

  
	 while($rowx=mysqli_fetch_array($res_qu)){ 

 	$a=''.$rowx["email"].'';
 	//$b=''.$rowx["shop_name"].'';

 
 
	?>


<script> alert ("New record inserted Sucessfully");
	window.location.href='../home1.php';
	//$_SESSION['email']=$memail;

<?php }?>
 </script>
<?php

}else{
	?>
<script> alert ("Someone already registered with this Reservation No");
window.location.href='../home2.php';
//$_SESSION['email']=$memail;
 <?php while($row=mysqli_fetch_array($res_qu)){ 

 	$x=''.$row["email"].'';

 
 }?>
	</script>
<?php
}
$stmt->close();
$conn->close();

}else{
	?>
<script> alert ("All the fields are required");
	window.location.href='../home2.php';
	//$_SESSION['email']=$memail;
	<?php while($row=mysqli_fetch_array($res_qu)){ 

 	''.$row["email"].'';

 
 }?>
 </script>
<?php


}



?>