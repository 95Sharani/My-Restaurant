<?php
use PHPMailer;

if(isset($_POST['Accept'])){
	$name = $_POST['fna'];
	$toEmail = $_POST['toEmail'];
    $subject1Name = $_POST['subject1'];
    $message = $_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTM.php";
    require_once "PHPMailer/Exeception.php";

    $mail=new PHPMailer();

    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->Username = "MyRestaurant990@gmail.com";
    $mail->Password = 'dinethra1234';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->isHtml(true);
    $mail->setForm($email, $name);
    $mail->addAddress("MyRestaurant990@gmail.com");
    $mail->Subject=("$email ($subject)");
    $mail->Body=$body;

    if($mail->send()){
    	$status="success";
    	$response="Email is sent!";
    }
    else{
    	$status="failed";
    	$response="Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>