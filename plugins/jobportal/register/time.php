<?php 
$otp=$_POST['otp'];
$servername = "localhost"; 
$dBUsername = "root";
$dBPassword = "";
$dBName = "examworld";

$conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn)
 {
  die("Connection Failed: ".mysqli_connect_error());
}
$query = "SELECT * FROM password_reset WHERE otp ='$otp'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result))
{  
 $user_id=$row['user_id'];
 $time=$row['time']; 
}

$s = "select * from password_reset where otp= '$otp'";
$check = mysqli_query($conn, $s);
$num = mysqli_fetch_row($check);
if ($num == true) 
{
$current_time=date("hi");

$diff=$current_time-$time;


if($diff > 20)
{
    $error="OTP you Enter is expired request new one";
    header("location:../enterotp.php?error=$error");
 
    
}
else 
{
    header("location:password_reset.php?code=$otp&&user=$user_id");
    

}
}

else
{
    $error= "You have Enter wrong OTP or its not valid anymore";
    header("location:../enterotp.php?error=$error");
}




?>