<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_jobportal";

$company_id=$_GET['company_id'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM tblcompany WHERE COMPANYID='$company_id'";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Company has been deleted')";
  header('location:../../index.php');

} else 
{
  echo "<script>alert('Error deleting record:')</script>" . $conn->error;
  header('location:../../index.php');
}

$conn->close();
?>