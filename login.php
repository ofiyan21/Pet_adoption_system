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
  height: 500px;
  margin: 30px auto;
  display: flex;
  background: rgb(214, 214, 214);
  border-radius: 10px;
  box-shadow: 5px 5px 7px gray, -5px -5px 7px gray;
}
.signup {
  width: 800px;
}
.logo{
text-align: center;
font-size: 64px;
  font-weight: 700;
  margin-bottom: 20px;
font-family: "Amatic SC", sans-serif;
color: #37373f;
}
form {
  width: 230px;
  margin: 8% auto;
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
  width: 100%;
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
  margin: 10% auto;
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


session_start();
error_reporting(0);
$error = '<h3>Email Or Password is incorrect</h3>';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid format and please re-enter valid email"; 
                                                              }
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $_SESSION['id']=$id;
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $email;
    echo '<script language="javascript">';
        echo 'alert("Login Successfull !!!"); location.href="index.php"';
        echo '</script>';
    // header("Location: index.php");
  } 
  else {
    
    $_SESSION["error"] = $error;
    echo '<script language="javascript">';
        echo 'alert("Invalid credentials"); location.href="login.php"';
        echo '</script>';
    // header("Location: login.php");
  }
}

?>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adopt-Here | Log In</title>
  </head>
  <body>

    <div class="container">
      <div class="signup">
        
        <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><img src=icons8-pet-commands-summon-50.png>AdoptHere<span style="color:#ce1212">.</span></h1>
      </a><hr />
        <form method="POST">
          <h1>Log In</h1>
          
          <label>Email</label>
          <input type="email" placeholder="Email" class="form-control" name="email" value="<?php echo $email; ?>" required/>
          <label>Password</label>
          <input type="password" placeholder="Password" class="form-control" name="password" value="<?php echo $_POST['password']; ?>" required/>
          <br>
          <button name="submit"><span><b>Login</b></span></button>
          <br><br><p>Need an account? <a href="signup.php"><span class="log">Sign Up</span></a></p>
        </form>
      </div>
      <div class="pic">
        <img src="assets\img\testimonials\domestic_cat_on_a_transparent_background_by_prussiaart_dcopdcg-fullview.png" />
      </div>
    </div>
  </body>
</html>

