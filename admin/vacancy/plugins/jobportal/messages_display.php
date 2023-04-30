<?php
$sender_id = $_GET['sender_id'];
$r_id = $_GET['r_id'];
 $servername = "localhost"; 
 $dBUsername = "root";
 $dBPassword = "";
 $dBName = "db_jobportal";

 $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

 if (!$conn)
  {
   die("Connection Failed: ".mysqli_connect_error());
 }


session_start();
$r_id = $r_id;
$query = "SELECT * FROM messages WHERE r_id ='$r_id'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result))
{  

 $rec_messages = $row['messages'];
 
 echo $rec_messages;
 echo $r_id;
	
       
}

	?>