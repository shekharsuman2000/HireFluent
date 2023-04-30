<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "db_jobportal";


include("../../fetch_details.php");
$conn = new mysqli($servername, $user, $pass, $dbname);

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

   $old_pass=$_POST['old_pass'];
   $new_pass=$_POST['new_pass'];

   $password_hashed=password_hash($new_pass, PASSWORD_DEFAULT);
   
   if (password_verify($password_hashed,$old_pass))
   {

$sql = "UPDATE login SET password='$new_pass' WHERE id='$id'";

   
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
}
 else
 {
  echo "Error updating record: " . $conn->error;
}
   }

else
{
  echo"<script>alert('You have enter wrong old password')</script>";
  header("location:update_profile.php?profile_id=$id");
}
   
  


