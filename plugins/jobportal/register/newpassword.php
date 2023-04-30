<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interview";




$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$password=$_POST['newpassword'];

if(isset($_GET['code'])==false)
{
    header('location:login.php');
}
else
{
    $code=$_GET['code'];
    $user=$_GET['user'];


 echo $code;

$sql = "UPDATE login SET password='$password' WHERE id=$user";

if ($conn->query($sql) === TRUE)

{
  echo "Record updated successfully";

} else {
  echo "Error updating record: " . $conn->error;
}


$s = "DELETE FROM password_reset WHERE user_id=$user";
if ($conn->query($s) === TRUE)
{
    echo "done";

}
else 
{
    echo "fail";
}





}

$conn->close();
?>