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
  $regarding =$_POST['regarding'];
  $subject =$_POST['subject'];
  $message =$_POST['message'];
  $status = 'Pending';

// $sql = "INSERT INTO contacts(name, email, phone, regarding, subject, message) VALUES ('$name', '$email', '$phone','$regarding','$subject' '$message')";
  $sql = "insert into contacts(name, email, phone,regarding,subject,message,status) values('$name', '$email', '$phone', '$regarding', '$subject','$message', '$status')";

      $result = mysqli_query($conn, $sql);
      if ($result) {
        // $_SESSION['user'] = $username;
        echo '<script language="javascript">';
        echo 'alert("Received Your Feedback"); "';
        echo '</script>';
        
        // $name = "";
        // $email = "";
        // $phone = "";
        // $message = "";
        // $subject = "";
        // $message = "";
        // header("Location: index.php");
      } else {
        echo mysqli_error($conn);
      }


// if ($conn->query($sql) === TRUE) {
//   echo "ADDED: ".$name.", ".$age.", ".$gender;
// } else {
//   echo "Error: ".$sql."<br>".$conn->error;
// }


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
	$mail->Subject ='Enquiry From: '.$_POST["name"].' subject:'.$_POST["subject"];
	$mail->Body = $_POST['message'];
	$mail->send();

	 echo '<script language="javascript">';
        echo 'alert("We will soon contact you!!");  location.href="contact.php"';
        echo '</script>';
//
}	
 ?>