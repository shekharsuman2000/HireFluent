<?php
if (isset($_POST['submit']))
 {


session_start();

$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'db_jobportal');


  $fullname = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $signup_as =$_POST['sign_up_as'];
  $profile_pic="profile.png";

 $password_hashed=password_hash($password, PASSWORD_DEFAULT);
 $s = "select * from login where email= '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_fetch_row($result);
if($num==true)
{
  $msg="Email Id Already Used";
  header("location:signup.php?msg=$msg");
}
 else
 {


$reg="insert into login (email,password,fullname,signup_as,profile_pic)

 values ('$email','$password_hashed','$fullname','$signup_as','$profile_pic')";

mysqli_query($con,$reg);

$msg = "Registration Successfull";
header("location:signup.php?msg=$msg");


exit();
    
 }
  
 }
       ?>
    