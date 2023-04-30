
<?php


include "../../fetch_details.php";

if (isset($_POST['submit']))
 {


session_start();

$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'db_jobportal');


  $messages = $_POST['messages'];
  $r_id=$r_id;
  $sender_id=$id;
  $messages_time= date('Y-m-d H:i:s');



$reg="insert into messages (messages,r_id,sender_id,messages_time)

 values ('$messages','$r_id','$sender_id','$messages_time')";

mysqli_query($con,$reg);




exit();
    

  
 }
       ?>
    