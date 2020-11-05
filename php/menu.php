<?php

 

?>

<!DOCTYPE html>
<html>
<head>
  <title>View</title>

   <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="js/2.2.0.jquery.min.js"></script>
  <link rel="stylesheet" href="css/3.3.6.bootstrap.min.css" />
  <script src="js/3.3.6.bootstrap.min.js"></script>
  <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
  <link rel ="stylesheet" type="text/css" href="css/res_view.css">
   <!--script src="jquery-tabledit-1.2.3/jquery.tabledit.js"></script-->
<!--link rel ="stylesheet" type="text/css" href="css/res_view.css"-->

</head>
<body background="image/23.jpg">
 
<div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../home2.php'"></i>
  
</div>


  <div class="container">
   
    <div class="table-responsive">
      <h3 align="center">Menu View</h3><br />
      <table id="editable_table" class="table table-bordered table-striped">
        <thead>
          <tr>
               
                <th>Id</th>
                <th>Item</th>
                <th>Price</th>
                <th>Image</th>
                 
          </tr>
        </thead>
        <tbody>
          <?php

include("../connect.php");
            session_start();

$qr1="SELECT shop_name FROM des, reg_merchant where  des.shop_name=reg_merchant.shop_name  && reg_merchant.email='".$_SESSION['email']."'"; 

        $r1 = mysqli_query($conn, $qr1);

        while($row2=mysqli_fetch_array($r1)){
          echo "".$row2["shop_name"]."";
       

              $query="SELECT * FROM '".$row2["shop_name"]."'";
              $result=mysqli_query($conn, $query);


            while ($row=mysqli_fetch_array($result)) {
              echo '
                <tr>
                 
                  <td>'.$row["id"].'</td>
                  <td>'.$row["item"].'</td>
                  <td>'.$row["price"].'</td>
                  <td>'.$row["image"].'</td>
                 
                </tr>
              ';
            }
}
          ?>
        </tbody>
      </table>
      
    </div>

  </div>
</div>



</body>
</html>

<script>
  $(document).ready(function(){
    $('#editable_table').Tabledit({
      url:'menu_action.php',
      columns:{
        identifier:[0,"id"],
        editable:[[1, 'item'], [2, 'price'], [3, 'image']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR){
        if(data.action == 'delete'){
          $('#' +data.customer_id).remove();
        }
      }
    });
  });
</script>