<?php
$user=$_GET['user_id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_jobportal";
$user_id=$_GET['user_id'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$password=$_POST['password'];
$password_hashed=password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE login SET password='$password_hashed' WHERE user_id=$user_id";

if ($conn->query($sql) === TRUE) {

  echo "<script>alert('Your Password has been updated now you login with your new Password')</script>";
  header("Refresh: 1; url=login.php");
}

 else
  {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>