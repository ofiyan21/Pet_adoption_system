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
  $age =$_POST['age'];
  $profession =$_POST['profession'];
  $city =$_POST['city'];
  $address =$_POST['address'];
  $family_member =$_POST['family_member'];
  $allergy =$_POST['allergy'];
  $experience =$_POST['experience'];
  $present_pet =$_POST['present_pet'];



$sql = "INSERT INTO interested_parent (`name`, `phone`, `age`, `profession`, `city`, `address`, `family_member`, `allergy`, `experience`, `present_pet`, `email`)
          VALUES ('$name', '$phone', '$age','$profession','$city','$address','$family_member','$allergy','$experience','$present_pet','$email')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        // $_SESSION['user'] = $username;
        echo '<script language="javascript">';
        echo 'alert("Received your information , we will contact you soon!");';
        echo '</script>';
        
        // $name = "";
        // $email = "";
        // $phone = "";
        // $message = "";
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
	$mail->Subject ='Interested Parent: '.$_POST["name"];
	$mail->Body = $_POST['name'].'<br> age:'.$_POST["name"].'<br>Profession:'.$_POST["profession"];
	$mail->send();

	 echo '<script language="javascript">';
        echo 'alert("We will contact you soon"); location.href="pets.php?type=Dog"';
        echo '</script>';

}	
 ?>