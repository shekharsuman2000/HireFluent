<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_jobportal";

$user_id=$_GET['id'];


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "DELETE FROM login WHERE user_id=$user_id";

if (mysqli_query($conn, $sql))
 {
    echo "<script>alert('User Deleted')</script>";
    echo "<script>window.history.go(-1)</script>";

} else {
    echo "<script>alert('Fail to Delete')</script>";
    echo "<script>window.history.go(-1)</script>";
}

mysqli_close($conn);
?>