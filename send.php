<?php
include 'config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['send'])){

 $name = $_POST['name'];
  $email = $_POST['email'];
  $phone =$_POST['phone'];
  $message =$_POST['message'];

$sql = "INSERT INTO review (name, email, phone, message, created_at)
          VALUES ('$name', '$email', '$phone', '$message',now())";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        // $_SESSION['user'] = $username;
        echo '<script language="javascript">';
        echo 'alert("Received Your Feedback"); "';
        echo '</script>';
        
        $name = "";
        $email = "";
        $phone = "";
        $message = "";
        // header("Location: index.php");
      } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
      }


	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'hritikan232@gmail.com';
	$mail->Password = 'txpgpeodiyhliavg';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$mail->setFrom('hritikan232@gmail.com');
	$mail->addAddress($_POST['email']);
	$mail->isHTML(true);
	$mail->Subject ='Feedback from: '.$_POST["name"];
	$mail->Body = $_POST['message'];
	$mail->send();

	 echo '<script language="javascript">';
        echo 'alert("Feedback Received"); location.href="index.php"';
        echo '</script>';

}	
 ?>