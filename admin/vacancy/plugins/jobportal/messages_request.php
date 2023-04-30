<?php

  
  $servername = "localhost"; 
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "db_jobportal";
 
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn)
   {
    die("Connection Failed: ".mysqli_connect_error());
  }


$email = $_SESSION['Email'];
$query = "SELECT * FROM signup WHERE email ='$email'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result))
{  
	$email2= $row['Email'];
	$query6 = "SELECT * FROM signup WHERE email = '$email2'";
   $result6 = mysqli_query($conn,$query6);
   $row6 = mysqli_fetch_assoc($result6);
   $username=$row['Fullname'];

   $id=$row['id'];

   $signup_as=$row['signup_as'];

       
}
	
	?>