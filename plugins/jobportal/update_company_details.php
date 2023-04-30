<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_jobportal";
$COMPANYID=$_GET['companyid'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$company_name=$_POST['name'];
$company_ID=$_POST['company_id'];
$company_address=$_POST['company_address'];
$company_contact=$_POST['contact'];



$sql = "UPDATE tblcompany SET COMPANYNAME='$company_name', company_id='$company_ID', COMPANYADDRESS='$company_address', COMPANYCONTACTNO='$company_contact' WHERE COMPANYID='$COMPANYID'";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Company Details Update Successfully')</script>";
  echo "<script>window.history.go(-1)</script>";
} else {
  echo "<script>alert('Error updating record:') </script>" . $conn->error;
  echo "<script>window.history.go(-1)</script>";
}

$conn->close();
?>