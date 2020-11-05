<?php 

include("../connect.php");
           session_start();
           if(!isset($_SESSION['email']))
    header("Location: login.php");

//$connect=mysqli_connect("localhost","root","","shancabs");

$input=filter_input_array(INPUT_POST);

 	$item=mysqli_real_escape_string($conn, $input["item"]);
    $price=mysqli_real_escape_string($conn, $input["price"]);
    $image=mysqli_real_escape_string($conn, $input["image"]);


     if($input["action"]==='edit'){
    	$query="UPDATE $c SET 
        item='".$item."',
        price= '".$price."',
    	image='".$image."'
    	WHERE id='".$input["id"]."'
    	";

    	mysqli_query($conn, $query);

    }

    if($input["action"] === 'delete'){
    	$query = "
    	DELETE from $c 
    	where id = '".$input["id"]."'
    	";
    	mysqli_query($conn, $query);

    }
echo json_encode($input); 
    

?>