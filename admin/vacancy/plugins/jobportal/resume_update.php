<?php
include("../../fetch_details.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_jobportal";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$resume=$_POST['resume'];


$sql = "UPDATE login SET resum='$resume' WHERE user_id=$id";

if ($conn->query($sql) === TRUE) 
{
  echo "<script>alert('Updatation successfull')</script>";
        echo "<script>javascript:history.go(-1)</script>";
}
 else 
{
  echo "<script>alert('Error in updating content')</script>";
         echo "<script>javascript:history.go(-1)</script>";
}


$conn->close();
?>