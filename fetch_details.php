<?php



session_start();
  
  $servername = "localhost"; 
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "db_jobportal";
 
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn)
   {
    die("Connection Failed: ".mysqli_connect_error());
  }


$id = $_SESSION['user_id'];
$query = "SELECT * FROM login WHERE user_id ='$id'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result))
{  

   $signup_as=$row['signup_as'];
   $username=$row['fullname'];
   $email=$row['email'];
   $password=$row['password'];

       
}
	
	?>