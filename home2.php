 <?php
include("connect.php");
session_start();

$eee=$_POST['email'];



$input=filter_input_array(INPUT_POST);
$query="SELECT * from reg_merchant where email = '".$eee."' ";
$result=mysqli_query($conn, $query);

  $qr1="SELECT * FROM des, reg_merchant where  des.shop_name=reg_merchant.shop_name  && reg_merchant.email='".$eee."'"; 

        $res1=mysqli_query($conn, $qr1);


?>
<html>
<head>
  <title>Merchant</title>

  <link href="css/style2.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
  <script src="js/3.3.6.bootstrap.min.js"></script>
  <script src="js/2.2.0.jquery.min.js"></script>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <linl href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css"/>

<style>
  .navi{
  background: #000;
  border:3px solid #37f;
  text-align: right;
  height:85px;  
}
</style>

</head>
<body>

  <div class="navi">
    <img src="img/logo1.png" class="logo" align="left">
    <h1><?php while($row1=mysqli_fetch_array($res1)){ 
      echo ''.$row1['shop_name'].'';}?></h1>
    <ul class="drop">
        <li><button onclick="goBack()">Go Back</button></li>

<script>
function goBack() {
  window.history.back();
}
</script>

      <li><a href="#"><?php while ($row=mysqli_fetch_array($result)) {
        ;?></a>

        </li>

    </ul>
  </div>



       <section>
          <div id="content">

<?php

  $qr1="SELECT * FROM des, reg_merchant where  des.shop_name=reg_merchant.shop_name  && reg_merchant.email='".$eee."'"; 

        $res1=mysqli_query($conn, $qr1);

        while($row1=mysqli_fetch_array($res1)){

          echo "<div id='ima1'>";
          echo "<img src='img/".$row1['image1']."' width='505px' height='500px'>";
          echo "</div>";
          echo "<div id='ima2'>";
          echo "<img src='img/".$row1['image2']."' width='510px' height='500px'>";
          echo "<a class='dis' href='#reserv'>Reservation</a>";
          echo "</div>";
          echo "<div id='ima3'>";
          echo "<img src='img/".$row1['image3']."' width='515px' height='500px'>";
          echo "</div>";
          echo "<div id='description'>";
          echo "<h3>About Us</h3><br>";
          echo "<textarea name='text' cols='50' rows='10'>".$row1['description']."</textarea>";
          echo "</div>";
          echo "<div id='loc'>";
          echo "<p>Google location : ";?><i class="material-icons" style="font-size:20px;color:blue">add_location</i><?php

          echo "<div id='locp'>";?>
          <center><iframe src="<?php echo " ".$row1['location']."</p>"; ?>" width="500" height="300" frameborder="0" style="border:2px solid #000;"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>


            <?php 
          echo "</div>";
          echo "</div>";
                   }
      
        
?>
</div>
       </section>

             <div class="popup4">
      <div class="popup-content4">
      <form class="form1" action="views/mer_action.php?ID=<?php echo $row['ID']; ?>" method="POST">
        <img src="img/close.png" alt="close" class="close">
          <div class="container">
   
  
      <h2 align="center">My Profile</h2><br />

   <div class = "fn">
    <label>First Name : <input type="text" name="fname" placeholder="First Name" value="<?php echo ''.$row["fname"].'';?>"></label>
  

  
    <label>Last Name : <input type="text" name="lname" placeholder="Last Name" value="<?php echo ''.$row["lname"].'';?>"></label>


    <label>Shop Name : <input type="text" name="shop_name" placeholder="Name of the Shop" value="<?php echo ''.$row["shop_name"].'';?>"></label>

    <label>Email : <input type="text" name="email" placeholder="Email" value="<?php echo ''.$row["email"].'';?>"></label>

    <Label>Password :  <input type="text" name="password" placeholder="Password" value="<?php echo ''.$row["password"].'';?>"></Label>

    <label>Contact Number : </label> <input type="text" name="contact_no" placeholder="Contact No." value="<?php echo ''.$row["contact_no"].''; ?>"><?php }?>
  </div>

        <br>
        <center><button type="submit" class="butn_update" name="butn_update" id="butn_update" ><strong>Update</strong></button></center>


  </div>
         </form>
      </div>
       </div> 

<section>
	<div>
  <div class="pre">
  	<p>Make your choice according to our menu.</p>
  	<p>Try different in every time, you will be suprized..!</p>
  	</div>
<?php
include("connect.php");

$tbl="SELECT * from short_eats, reg_merchant where short_eats.shop_name=reg_merchant.shop_name && reg_merchant.email='".$eee."' ";

$result2=mysqli_query($conn, $tbl);

$tb2="SELECT * from restaurant, reg_merchant where restaurant.shop_name=reg_merchant.shop_name && reg_merchant.email='".$eee."' ";

$result3=mysqli_query($conn, $tb2);

$tb3="SELECT * from dessert, reg_merchant where dessert.shop_name=reg_merchant.shop_name && reg_merchant.email='".$eee."' ";

$result4=mysqli_query($conn, $tb3);
?>

    <form class="my-form" action="home2.php" method="POST" enctype="multipart/form-data" height="">
    <div class="menu_1">
       <h2>Menu</h2>
    </div>
    <div class="form">
      <table>
        <thead><tr>
          <th><div class ="item_n">
              <p>Item Name</p>
          </div></th>  
          <th><div class ="item_p">
              <p>Price</p>
            </div></th>
            <th><div class ="item_im">
              <p>Image</p>
            </div></th></tr>
          </thead>

          <tbody>
               <?php
            while ($row=mysqli_fetch_array($result2)) {
              echo  '
              <tr>
              
              <td><div class ="item_nn">'.$row["item"].'</div></td>
              <td><div class ="item_pp">Rs. '.$row["price"].'.00</div></td>
              <td><div class ="item_imm"><img src=img/menu/'.$row["image"].' width="130px" height="75px"></div></td></tr>
          ';
        }

          while ($row=mysqli_fetch_array($result3)) {
              echo  '
              <tr>
              
              <td><div class ="item_nn">'.$row["item"].'</div></td>
              <td><div class ="item_pp">Rs. '.$row["price"].'.00</div></td>
              <td><div class ="item_imm"><img src=img/menu/'.$row["image"].' width="130px" height="75px"></div></td></tr>
          ';
        }

        while ($row=mysqli_fetch_array($result4)) {
              echo  '
              <tr>
              
              <td><div class ="item_nn">'.$row["item"].'</div></td>
              <td><div class ="item_pp">Rs. '.$row["price"].'.00</div></td>
              <td><div class ="item_imm"><img src=img/menu/'.$row["image"].' width="130px" height="75px"></div></td></tr>
          ';
        }
        ?>
          </tbody>   
              
        </table>
      </div>  
     </form> 
  </div>
</section>


<section>
  <div id="reserv">
    <p>Resesrve your table NOW..! </p>
    <p>Before it is too late.</p>
</div>
    <form class="my-forms" action="php/res.php" method="POST" id="framework_form">
      <div>
        <h2>Registration</h2>
      </div>
        <div class="forms">
          
          <div class ="email">
              <p>Email:</p>
              <input type="text" name="email_1" placeholder= "Enter your email">
          </div>
          
<div class ="abc">
  <?php 
              $qrx="SELECT * FROM des, reg_merchant where  des.shop_name=reg_merchant.shop_name  && reg_merchant.email='".$eee."'"; 

        $resx=mysqli_query($conn, $qrx);?>
               <!-- <p>Email:</p> = <?php echo ''.$my.'' ?>
              <input type="text" name="email" value= "<?php echo ''.$my.'' ?>"> -->
              <?php
          while($row1=mysqli_fetch_array($resx)){ 

            $m1=''.$row1["email"].'';
            $m2=''.$row1["shop_name"].'';?>

      <input type="hidden" name="email" value="<?php echo ''.$m1.'' ?>" > 
      <input type="hidden" name="shop_name" value="<?php echo ''.$m2.'' ?>" >
          </div>
<?php }?>

           <div class ="date">
              <p>Date:</p>
              <input type="date" name="date" placeholder= "Enter the Starting date">
          </div>

          


           <div class ="time">
              <p>Expected Time:</p>
              <select name="time" id="time" class="control"placeholder="Select Time">
              		<option>Select Time Slot</option>
					<option value="8AM-9AM" [disabled]='8<= hours'>8AM-9AM</option>
              		<option value="9AM-10AM" [disabled]='9<= hours'>9AM-10AM</option>
              		<option value="10AM-11AM"[disabled]='10<= hours'>10AM-11AM</option>
              		<option value="11AM-12PM" [disabled]='11<= hours'>11AM-12PM</option>
              		<option value="12PM-1PM"[disabled]='12<= hours'>12PM-1PM</option>
              		<option value="1PM-2PM"[disabled]='1<= hours'>1PM-2PM</option>
              		<option value="2PM-3PM"[disabled]='2<= hours'>2PM-3PM</option>
              		<option value="3PM-4PM"[disabled]='3<= hours'>3PM-4PM</option>
              		<option value="4PM-5PM"[disabled]='4<= hours'>4PM-5PM</option>
              		<option value="5PM-6PM"[disabled]='5<= hours'>5PM-6PM</option>
              		<option value="6PM-7PM"[disabled]='6<= hours'>6PM-7PM</option>
              		<option value="7PM-8PM"[disabled]='7<= hours'>7PM-8PM</option>
              </select>
          </div>
           <div class ="table">
              <p>Table:</p>
              <select name="table" id="table" class="control">
              		<option>Select table</option>
					<option value="1" [disabled]='1<= hours'>1</option>
              		<option value="2" [disabled]='2<= hours'>2</option>
              		<option value="3" [disabled]='3<= hours'>3</option>
              		<option value="4" [disabled]='4<= hours'>4</option>
              		<option value="5" [disabled]='5<= hours'>5</option>
              		<option value="6" [disabled]='6<= hours'>6</option>
              		<option value="7" [disabled]='7<= hours'>7</option>
              		<option value="8" [disabled]='8<= hours'>8</option>
              		<option value="9" [disabled]='9<= hours'>9</option>
              		<option value="10"[disabled]='10<= hours'>10</option>
              		
              </select>
          </div>
          <div name="mea" hidden><?php echo '"'.$eee.'"'?></div>
          <div class="form_group">
          	<p>Suggestions:</p>
          			<textarea name="textareas" placeholder="Please let us know you food choices and your special requests"></textarea>
          		</div>

          <div class ="submit" >
              <input type="submit" name="submit" value="Submit">
          </div>
          <div class ="clear">
              <input type="reset" name="clear" value="Clear all">
          </div>
        </div>
    </form>

</section>  

<section>
  <div class="tta">
    <p>Table Order</p> 
  </div>
<?php 
      $aaa="SELECT * FROM des, reg_merchant where des.shop_name=reg_merchant.shop_name && reg_merchant.email='".$eee."'";
      $result_aaa=mysqli_query($conn, $aaa);

    ?>
 <form class="m00" action="home3.php" method="POST" enctype="multipart/form-data" height="">
   <?php
            while ($row=mysqli_fetch_array($result_aaa)) {
              echo  ' <div class ="image"><img src=img/'.$row["tablePic"].' width="500px" height="400px"></div> ';}?>
 </form>

 
</section>
<script type="text/javascript">
  	var expanded=false;
function showCheckBoxes(){
	var checkboxes = document.getElementById("checkboxes");
	if(!expanded){
		checkboxes.style.display="block";
		expanded=true;
	}else{
		checkboxes.style.display="none";
		expanded=false;
	}
}
  </script>


</body>
</html>

<script>

    document.getElementById("my").addEventListener("click", function(){
      document.querySelector(".popup4").style.display = "flex";
    })

        document.querySelector(".close").addEventListener("click", function(){
      document.querySelector(".popup4").style.display = "none";
    })



</script>