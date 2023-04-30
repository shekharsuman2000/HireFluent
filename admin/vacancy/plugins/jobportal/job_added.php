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

  $category = $_POST['category'];
  $job_title = $_POST['job_title'];
  $Reqnoofemp = $_POST['employee'];
  $salary = $_POST['salary'];
  $duration = $_POST['duration'];
  $qualification = $_POST['qualification'];
  $description = $_POST['description'];
  $gender = $_POST['Gender'];
  $vacancy = $_POST['vacancy'];
 


$sql = "INSERT INTO tbljob (COMPANYID,CATEGORY,OCCUPATIONTITLE,REQ_NO_EMPLOYEES,SALARIES,DURATION_EMPLOYEMENT,QUALIFICATION_WORKEXPERIENCE,JOBDESCRIPTION,PREFEREDSEX,SECTOR_VACANCY)
VALUES ('$company_id','$category','$job_title','$Reqnoofemp','  $salary ','  $duration','$qualification','  $description ','$gender',' $vacancy')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Job added successfully')</script>";
  echo "<script>window.history.go(-1)</script>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  echo "<script>window.history.go(-1)</script>";
}

$conn->close();
?>
