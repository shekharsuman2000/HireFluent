<?php
$jobtitle=$_GET['job_id'];
$company_id=$_GET['company_name'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_jobportal";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$fname=$_POST['FNAME'];
$lname=$_POST['LNAME'];
$address=$_POST['ADDRESS'];
$sex=$_POST['sex'];
$birthplace=$_POST['BIRTHPLACE'];
$contact=$_POST['TELNO'];
$status=$_POST['CIVILSTATUS'];
$email_id=$_POST['EMAILADDRESS'];
$resume=$_FILES['picture']['name'];
$date=$_POST['date'];
$target = "resume/".basename($resume);



$sql = "INSERT INTO application (fname,lname,address,sex,contact,status,email,job_title,applicant_resume,company_name,dob)
VALUES ('$fname','$lname','$address','$sex','$contact','$status','$email_id', '$jobtitle','$resume','$company_id', '$date' )";
mysqli_query($conn,$sql);

if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)){
  echo "<script>alert('Your Application has been submitted company will contact you through email')</script>";
  header("Refresh: 1; url=index.php");
} else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>