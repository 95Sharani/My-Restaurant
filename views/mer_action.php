<?php 

include("../connect.php");
           session_start();
           if(!isset($_SESSION['email']))
    header("Location: login.php");

//$connect=mysqli_connect("localhost","root","","shancabs");

if(isset($_GET['ID'])){
    $sql="SELECT * from reg_merchant where ID = ".$_GET['ID'];
    $result=mysqli_query($conn, $sql);

}


if(isset($_POST['butn_update'])){

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $sname=$_POST['shop_name'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $contact_no=$_POST['contact_no'];
        

        $update = "UPDATE reg_merchant SET fname='$fname', lname='$lname', shop_name='$sname', email='$email', password='$pass', contact_no='$contact_no' WHERE ID=".$_GET['ID'];

        $sup = mysqli_query($conn, $update);

if(!isset($sup)){
    die("Error $sup" .mysqli_connect_error());
}else{
    ?>
    <script>
            alert ("updated Successfully");
           // window.location.href='../home2.php';
        </script>
    <?php
    
}
}
?>
