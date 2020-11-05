<?php
include("connect.php");
session_start();


$input=filter_input_array(INPUT_POST);

$query="SELECT fname, lname, shop_name, email, contact_no, password from reg_merchant where email = '".$_SESSION['email']."' ";
$result=mysqli_query($conn, $query);


?>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Merchant</title>
	  <link href="css/style2.css" rel="stylesheet">
  	<link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>





</head>
<body>

  <div class="navi">
    <img src="img/logo1.png" class="logo" align="left">
        <h1><?php while($row=mysqli_fetch_array($result)){  
      echo ''.$row['shop_name'].'';?></h1>
    <ul class="drop">
      <li><img src="img/2.png"></li>
      <li class="d"><a href="#" onclick="myFunction()" class="dropbtn"><?php echo ''.$row["fname"].' '.$row["lname"].'';?></a>
          <ul class="dropdown1" id="dropdown1">
            <li><a href="#" id="my">My Profile</a></li>
            <li><a href="login.php">Log out</a></li>
          </ul>
        </li>

    </ul>
  </div>

	<div class="popup4">
      <div class="popup-content4">
      <form class="form1" action="views/mer_action.php?ID=<?php echo $row['ID']; ?>" method="POST">
        <img src="img/close.png" alt="close" class="close">
          <div class="container">
   
  
      <h2 align="center">My Profile</h2><br />

   <div class = "fn">
    <label>First Name : <input type="text" name="fname" placeholder="First Name" value="<?php echo ''.$row["fname"].'';?>"></label>
  

  
    <label>Last Name : <input type="text" name="lname" placeholder="Last Name" value="<?php echo ''.$row["lname"].'';?>"></label>
 <label>Shop Name : <input type="text" name="shop_name" placeholder="Shop Name" value="<?php echo ''.$row["shop_name"].'';?>"></label>
  
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

<section >

    <?php 
      $bbb="SELECT * FROM reservation, reg_customer WHERE reg_customer.email=reservation.email && reservation.memail='".$_SESSION['email']."'";
      $result_bbb=mysqli_query($conn, $bbb);

    ?>
  <div class="formC">
    <p><h3 >Reservations.</h3></p>
  </div>
<form  class="emails" id="emailForm" action="emailScript.php" method="POST">
    <div class="formD">
      <table border="2"  cellspacing="2" >
        <thead><tr>
          <th><div class ="cus">
              <p>Customer Name</p>
          </div></th>  
          <th><div class ="em">
              <p>Customer Email</p>
            </div></th>
            <th><div class ="date_1">
              <p>Date</p>
            </div></th>
            <th><div class ="time_1">
              <p>Time</p>
            </div></th>
            <th><div class ="table_1">
              <p>Table</p>
            </div></th>
            <th><div class ="Food">
              <p>Food</p>
            </div></th>
            <th colspan="2"><div class ="emad">
              <p>Email</p>
            </div></th>
          </tr>
          </thead>

          <tbody>
               <?php
            while ($row=mysqli_fetch_array($result_bbb)) {
              echo  '
              <tr>
              <td><div name="fna" id="fna"><input type="text" name="fna" value="'.$row["fname"].'"></div></td>
              <td><div name="toEmail" id="toEmail"><input type="text" name="toEmail" value="'.$row["email"].'""></div></td>
              <td><div name="da" id="da"><input type="text" name="da" value="'.$row["date_1"].'"></div></td>
              <td><div id="ti" name="ti"><input type="text" name="ti" value="'.$row["time_1"].'"></div></td>
              <td><div id="ta" name="ta"><input type="text" name="ta" value="'.$row["table_1"].'"></div></td>
              <td><div id="su"><input type="text" name="su" value="'.$row["food"].'"></div></td>

              <div id="fromEmail" name="fromEmail" hidden><input type="text" name="fromEmail" value="MyRestaurant990@gmail.com"></div>

              <div id="subject1" name="subject1" hidden><input type="text" name="subject1" value="Confirmation Email from MyRestaurant"></div>

              <div id="subject2" name="subject2" hidden><input type="text" name="subject1" value="Apologising  for the decline of Reservation from MyRestaurant"></div>
              
            <div id="message" name="message" hidden><input type="text" name="message" value="Dear '.$row["fname"].',<br/>Thank you for the reservation. We are happy to serve you. <br/>Time: '.$row["time_1"].'<br/>Table: '.$row["table_1"].'"> </div>

              <div id="message2" name="message2" hidden><input type="text" name="message2" value="Dear '.$row["fname"].',<br/>Thank you for the reservation. We are happy to serve you. <br/>Time: '.$row["time_1"].'<br/>Table: '.$row["table_1"].'"></div>

              <td><div class="buttonAccept"><button type="submit" name="Accept" onclick="sendEmail()">Accept and send Email</button></div></td>
              <td><div class="buttonDecline"><button type="submit"  name="Decline">Decline and send Email</button></div></td>
              
            
          ';
        }

        ?>
          </tbody>   
              
        </table>
      </div>
</form>
</section>

<section>

    <?php 
      $aaa="SELECT * FROM des, reg_merchant where des.shop_name=reg_merchant.shop_name && reg_merchant.email='".$_SESSION['email']."'";
      $result_aaa=mysqli_query($conn, $aaa);

    ?>
  <form class="formA",action="home3.php" method="POST" enctype="multipart/form-data" height="">
    <p><h3>My Discription.</h3></p>
  </form>
</section>
    <div class="formB">
      <table>
        <thead><tr>
          <th><div class ="shop">
              <p>Shop Name</p>
          </div></th>  
          <th><div class ="cat">
              <p>Category</p>
            </div></th>
            <th><div class ="address">
              <p>Address</p>
            </div></th>
            <th><div class ="discription">
              <p>Discription</p>
            </div></th>
            </tr>
          </thead>

          <tbody>
               <?php
            while ($row=mysqli_fetch_array($result_aaa)) {
              echo  '
              <tr>
              
              <td><div class ="item_nn">'.$row["shop_name"].'</div></td>
              <td><div class ="item_nn">'.$row["cat"].'</div></td>
              <td><div class ="item_pp">'.$row["address"].'</div></td>
              <td><div class ="item_nn">'.$row["description"].'</div></td>
              
            
          ';
        }

        ?>
          </tbody>   
              
        </table>
      </div>

<section>
  <div>
  <div class="preL">
    <p>My Menu.</p>
   
    </div>
<?php
include("connect.php");

$tbl="SELECT * from short_eats, reg_merchant where short_eats.shop_name=reg_merchant.shop_name && reg_merchant.email='".$_SESSION['email']."' ";

$result2=mysqli_query($conn, $tbl);

$tb2="SELECT * from restaurant, reg_merchant where restaurant.shop_name=reg_merchant.shop_name && reg_merchant.email='".$_SESSION['email']."' ";

$result3=mysqli_query($conn, $tb2);

$tb3="SELECT * from dessert, reg_merchant where dessert.shop_name=reg_merchant.shop_name && reg_merchant.email='".$_SESSION['email']."' ";

$result4=mysqli_query($conn, $tb3);
?>

    <form class="my-form00" action="home3.php" method="POST" enctype="multipart/form-data" height="">
    <div class="menu_1">
       <br><br><br>
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
  <div class="tta">
    <p>Table Order</p> 
  </div>
<?php 
      $aaa="SELECT * FROM des, reg_merchant where des.shop_name=reg_merchant.shop_name && reg_merchant.email='".$_SESSION['email']."'";
      $result_aaa=mysqli_query($conn, $aaa);

    ?>
 <form class="m00" action="home3.php" method="POST" enctype="multipart/form-data" height="">
   <?php
            while ($row=mysqli_fetch_array($result_aaa)) {
              echo  ' <div class ="image"><img src=img/'.$row["tablePic"].' width="500px" height="400px"></div> ';}?>
 </form>

 
</section>



</body>
</html>

<script>

function myFunction() {
  document.getElementById("dropdown1").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

    document.getElementById("my").addEventListener("click", function(){
      document.querySelector(".popup4").style.display = "flex";
    })

        document.querySelector(".close").addEventListener("click", function(){
      document.querySelector(".popup4").style.display = "none";
    })

  

</script>