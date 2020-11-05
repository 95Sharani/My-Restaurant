<?php
$conn=mysqli_connect("localhost","root","restaurent");
 $get=$_POST['search'];

if($get){
    $show="SELECT * from des, reg_merchant where reg_merchant.shop_name='$get'";
    $resu=mysqli_query($conn, $show);

    while($row=mysqli_fetch_array($resu)){

?>
<div class="intro">
      
      <div class="intro_img">
        
        <center><h3><?php echo ''.$row["shop_name"].' '?></h3></center>
        <div class="intro_i">
        <?php echo "<img src='img/".$row['image1']."' width='300px' height='200px'>";?></div><br>
    </div>
    <div class="intro_des">
      Address : <?php echo ''.$row["address"].''?><br>Owner : <?php echo ''.$row["fname"].' '.$row["lname"].''?><br> Category : <?php echo ''.$row["cat"].''?><br> <br>


  <?php 


  $myVariable=''.$row["email"].'';

   ?>   

<form method="post" action="home2.php">
      <input type="hidden" name="email" value="<?php echo ''.$myVariable.'' ?>">
      <input type="submit" name="tt" class="ttc" value="More Details" /> <?php ?>
    
</form>
      </div>
      
    
  </div>  

<?php
}
  }


 ?>