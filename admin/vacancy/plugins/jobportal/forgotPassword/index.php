<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();

$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'db_jobportal');
$email=$_POST['email'];

$s = "select * from login where email= '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_fetch_row($result);
if($num==false)
{
    $msg="Email Not Regsitered with us";
    header("location:../forgotpassword.php?msg=$msg");
}

else
{
$query = "SELECT * FROM login WHERE email ='$email'";
$result = mysqli_query($con,$query);

while ($row = mysqli_fetch_assoc($result))
{  
$user_id=$row['user_id']; 

}
$body="Here is the link to reset your password http://localhost:8012/jobportal/plugins/jobportal/reset_password.php?user_id=$user_id ";


require 'vendor/autoload.php';

$mail = new PHPMailer(true);                             
try {

    $mail->SMTPDebug = 2;                               
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  

    $mail->SMTPAuth = true;                             
    $mail->Username = 'joinu806@gmail.com';                
    $mail->Password = '123456S@';                          
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;                                   

   
    $mail->setFrom('joinu806@gmail.com', 'JobShop Password Reset');
    $mail->addAddress($email, 'user');    
 
    $mail->isHTML(true);                                 
    $mail->Subject = 'JobShop Password Reset';
    $mail->Body=$body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $msg="Password Reset Link Send To your Email Check Mailbox";
    header("location:../forgotpassword.php?msg=$msg");
} catch (Exception $e)
 {
    $msg="Fail to send reset link email please check your internet connection";
    header("location:../forgotpassword.php?msg=$msg");}

}

?>