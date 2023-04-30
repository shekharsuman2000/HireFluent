<?php 
$sender_id = $id;
$query = "SELECT * FROM messages WHERE sender_id ='$sender_id'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result))
{  
	$sender_id2= $id;
	$query6 = "SELECT * FROM messages WHERE sender_id = '$sender_id2'";
   $result6 = mysqli_query($conn,$query6);
   $row6 = mysqli_fetch_assoc($result6);
   $messages=$row['messages'];

   $messages_time=$row['messages_time'];

   echo "<style text-align:center"> $messages;

       
}
    
 
	?>