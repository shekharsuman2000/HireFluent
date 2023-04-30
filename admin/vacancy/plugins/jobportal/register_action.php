<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_jobportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $company_name = $_POST['company_name'];
  $company_id = $_POST['company_id'];
  $password = $_POST['password'];
  $company_address =$_POST['company_address'];
  $company_contact=$_POST['company_contact'];
  $password_hashed=password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO tblcompany (COMPANYNAME,company_id,COMPANYADDRESS,COMPANYCONTACTNO,company_password)
VALUES ('$company_name','$company_id','$company_address','$company_contact','$password_hashed')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Your Company has been added to jobshop')</script>";
  header("Refresh: 1; url=company_login.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
