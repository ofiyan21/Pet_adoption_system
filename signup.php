
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="icons8-pet-commands-summon-50.png" rel="icon">
  <link href="icons8-pet-commands-summon-50.png" rel="apple-touch-icon">
   <style> 
  body {
  background: rgb(214, 214, 214);
}
.container {
  width: 100%;
  height: 100%;
  margin: 30px auto;
  display: flex;
  background: rgb(214, 214, 214);
  border-radius: 10px;
  box-shadow: 5px 5px 7px gray, -5px -5px 7px gray;
}
.signup {
  width: 700px;
}
form {
  width: 230px;
  margin: 35px auto;
}
form h1 {
  text-align: center;
  font-size: 36px;
  letter-spacing: 1px;
  font-weight: 400;
  margin: 0;
  padding: 0;
  text-transform: uppercase;
  font-weight: bolder;
  font-family: "Open Sans", system-ui;
   color: #ce1212;
}
p {
  text-align: center;
}
form label {
  display: block;
  font-size: 16px;
  font-weight: 600;
  padding: 8px;
  font-family: "Amatic SC", sans-serif;
}
input {
  width: 10 0%;
  padding: 8px;
  margin: 8px;
  outline: none;
  border: none;
  border: 1px solid gray;
  border-radius: 5px;
}
button {
  width: 100%;
  margin: 8px;
  padding: 8px;
  background: #ce1212;
  outline: none;
  border: none;
  border-radius: 20px;
  color: #ffffff;
  font-size: 17px;
  cursor: pointer;
  transition: 0.5s;
}
button span {
  display: inline-block;
  position: relative;
  transition: 0.5s;
  color: #ffffff;
}
button span:after {
  content: "\00bb";
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
button:hover span {
  padding-right: 30px;
}
button:hover span:after {
  opacity: 1;
  right: 0;
  color:white;
}
.logo{
text-align: center;
font-size: 64px;
  font-weight: 700;
  margin-bottom: 20px;
font-family: "Amatic SC", sans-serif;
color: #37373f;
}
p a {
  text-decoration: none;
  color: black;
}
hr {
  border-top: 2px solid purple;
}
.pic {
 width: 50%;
  background: rgb(214, 214, 214);
}
.pic img {
  width: 500px;
  margin: 18% auto;
}
 /* img:hover {
  padding: 10px 20px;
  cursor: pointer;
}  */

.log{
  color:blue;
  font-size: 20px;
  font-weight: bolder,italic;

}
.imglog{
display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100px;
  height: 80px;
/*    filter:contrast(150%);*/
}
    </style>

<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $emailErr = "Invalid format and please re-enter valid email"; 
}
  if ($password == $cpassword) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO users (name, email, password, created_at)
          VALUES ('$name', '$email', '$password',now())";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        // $_SESSION['user'] = $username;
        echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="index.php"';
        echo '</script>';
        
        $name = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
        // header("Location: index.php");
      } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
      }
    } else {
      echo "<script>alert('Woops! Email Already Exists.')</script>";
    }
    
  } else {
    echo "<script>alert('Password Not Matched.')</script>";
  }
}

?>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adopt-Here | Sign Up</title>
  </head>
  <body>
    <div class="container">
      <div class="signup">
         <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><img src=icons8-pet-commands-summon-50.png>AdoptHere<span style="color:#ce1212">.</span></h1>
      </a><hr>
        <form method="POST">
          <h1>Sign Up</h1>
          <br>
          <label>Full Name <span style="color:red">*</span></label>
          <input type="text" placeholder="Full Name" class="form-control" name="name" value="<?php echo $name; ?>" required/>
          <label>Email <span style="color:red">*</span></label>
          <input type="email" placeholder="Email" class="form-control" name="email" value="<?php echo $email; ?>" required/>
          <label>Password <span style="color:red">*</span></label>
          <input type="password" placeholder="Password" class="form-control" name="password" value="<?php echo $_POST['password']; ?>" required/>
          <label>Confirm Password <span style="color:red">*</span></label>
          <input type="password" placeholder=" Comfirm Password" class="form-control" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required/>
          <br>
          <button name="submit"><span><b>Sign Up</b></span></button>
          <br><br><p>Already have an account? <a href="login.php"><span class="log">Login</span></a></p>
        </form>
      </div>
      <div class="pic">
        <img src="assets\img\testimonials\domestic_cat_on_a_transparent_background_by_prussiaart_dcopdcg-fullview.png" />
      </div>
    </div>
  </body>
</html>

