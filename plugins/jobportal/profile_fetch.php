<?php 
$profile_id=$_GET['profile_id'];
include("../../fetch_details.php");
?>
<style>
.table{
color:white;
font-size: 30px;
}
.edit
{
  font-size: 30px;
  
}

div
{
    position:left;
    left:10cm;

}

table, td, th {  
  border: 5px solid black;
  text-align: center;
  font-size:30px;
  color: black;
  font-weight: bold;
}

table {
  border-collapse:collapse;
  width:70;
}

th{
    
    font-size: 30px;
    color:blue;
    font-style: bold;
} 
td {
  padding:20px;
}
</style>


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



$query = "SELECT * FROM login WHERE user_id ='$profile_id'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result))
{  


   $username=$row['fullname'];
   $email=$row['email'];
   $sign_up_login=$row['signup_as'];
 

       
}


	
?>

<html>
<head>


</head>


</html>
<?php  
if ($profile_id == $id)
{

 $updates= "<th>Update Your Profile</th>"; 

$edit= "<button><div class='edit'><a href='update_profile.php?profile_id=$profile_id'>Update</button></div>";


}
else
{
  $updates="";
  $edit="";

}

if ($sign_up_login==1)

{
  $skill= "Skill";
  $experience= "Experience";
}
else
{
$skill="";
$experience="";

}




?>
<table class="table table-striped table-advance table-hover">
      
      <?php
    
      ?>
 <div class="table">
    <th>Your name</th>
      <th>Email</th>
      <th><?php echo $skill;?></th>
      <th><?php echo $experience;?></th>
      <th>Registered as</th>
      <?php echo $updates;?>



                                        
  </tr>
  </thead>
  <tbody>
                       <?php 
                       
                       
                       $con= mysqli_connect('localhost','root','');
                       mysqli_select_db($con,'db_jobportal');
                      
                       
 
  $query2="SELECT * FROM login WHERE user_id ='$profile_id'";
  $ret=mysqli_query($con,$query2);
$cnt=1;
while($row=mysqli_fetch_array($ret))
{
  if  ($row['signup_as'] == 0)
    {
        $login_as="A Client who provide online jobs";
    }
    else
    {
        $login_as="A freelancer or worker";
    }
 $r_id=$row['user_id'];
 ?> 
  <tr>
  
      <td><?php echo $row['fullname']?></td>
           <td><?php echo $row['email'];?></td>
             <td><?php echo $row['skill'];?></td>
              <td><?php echo $row['experience'];?></td>
              <td><?php echo $login_as;?></td>
              <td> <?php echo $edit;?></td>
     
         
      </td>
  </tr>
  <?php $cnt=$cnt+1; }?>

      </td>
  </tr>
 
 
  </tbody>
</table>
<?php
     