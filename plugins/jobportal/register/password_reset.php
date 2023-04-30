<?php
$servername = "localhost"; 
$dBUsername = "root";
$dBPassword = "";
$dBName = "interview";

$conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn)
 {
  die("Connection Failed: ".mysqli_connect_error());
}


$code=$_GET['code'];
$user_id=$_GET['user'];

$s = "select * from password_reset where otp= '$code'";
$result = mysqli_query($conn, $s);
$num = mysqli_fetch_row($result);
if ($num == true)
{
$query = "SELECT * FROM login WHERE id ='$user_id'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result))
{  
	$email= $row['email'];
}











}
else 
{
    header("location:login.php");
}


?>



<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Login | Jo!n Us</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" type="text/css" media="screen" href="files/main.css" />

</head>

<body>
  <Section id="main">
    <section id="main">
      <header id="homeheader">
        <div class="logo">
          <a href="index.php">
            <h3>Jo!n Us</h3>
          </a>
        </div>
        <nav>
          <ul class="nav-links">
            <li>
              <a href="index.php#home">Home </a>
            </li>


            <li>
              <a href="index.php#contact">Contact </a>
            </li>
            <li>
              <a class="active" href="login.php">Forget Password</a>
            </li>
            <li>
              <a href="adminlogin.php">Admin</a>
            </li>
          </ul>
        </nav>
      </header>

      <div class="login center">
        <div class="box">
      


          <form action="newpassword.php?user=<?php echo $user_id;?> && code= <?php echo $code;?>" method="post">

            <h2 class="center">Enter New Password</h2>

            <div class="container">


              <label for="email"><b>Enter New Password for <?php echo $email;?> </b></label>
              <input type="password" placeholder="new password" name="newpassword" required>

              <button name="login_submit" type="submit">Verify</button>



              <p><a href="signUp.php">Need an Account?</a></p>
              <p><a href="login.php">Already have an Account?</a></p>

            </div>
          </form>

          <!-- <div class="bar"></div>
        <a class="admin" href="#">Administration</a> -->


        </div>
      </div>
    </Section>
</body>

</html>