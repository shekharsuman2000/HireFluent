
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

$profile=$_SESSION['COMPANYID'];
$query = "SELECT * FROM tblcompany WHERE COMPANYID ='$profile'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result))
{  
$company_name=$row['COMPANYNAME'];

}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?php  echo $company_name;    ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="profile.css">

 
</head>
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
  border: 2px solid black;
  text-align: center;
  font-size:15px;
  color: black;
  font-weight: bold;
}

table {
  border-collapse:collapse;
  width:50;
}

th{
    
    font-size: 15px;
    color:blue;
    font-style: bold;
} 
td {
  padding:20px;
}
</style>




</style>



<body class="profileMain">
  <section>
    <header id="homeheader">
      <div class="logo">
        <a href="index.html">
          <h3>Job Shop Profile</h3>
        </a>
      </div>

      <nav>
        <ul class="nav-links">
          <p id="username"><?php   echo $company_name;?></p>

          <li>
            <a class="active" href="logout.php">Log Out</a>
          </li>
        </ul>
      </nav>
    </header>











            
          </ul>
        </nav>
      </div>
      <div class="drawerRight center">
        <div class="intro">
        <table class="table table-striped table-advance table-hover">
 <h1 style="text-align: center;"  >List of Applicant who apply for job in your Company</h1>

  <hr>
  <thead>
  <tr>
    <div class="table">

    <th>Applicant Name</th>
      <th>Applicant Address</th>
     
      <th>Applicant Gender</th>
      <th>Applicant Contact</th>
      <th>Applicant Status</th>
      <th>Applicant Email</th>
      <th>Applicant Date of Birth</th>
      <th>Send mail to applicant</th>


                                        
  </tr>
  </thead>
  <tbody>
<?php
         
         $query = "SELECT * FROM application WHERE company_name ='$company_name'";
         $result = mysqli_query($conn,$query);
         
         while ($row = mysqli_fetch_assoc($result))
         {  
         
         $fname=$row['fname'];
         $lname=$row['lname'];
         $address=$row['address'];
         $sex=$row['sex'];
         $contact=$row['contact'];
         $status=$row['status'];
         $email=$row['email'];
         $dob=$row['dob'];
         $resume=$row['applicant_resume'];
         ?>
         <tr>
 
      <td style="color:white" ><?php  echo $fname.$lname;?></td>
  
             <td style="color:white">  <?php echo $address;?></td>
              <td style="color:white"><?php echo $sex;?></td>
              <td style="color:white"><?php echo $contact;?></td>
              <td style="color:white"><?php echo $status;?></td>
              <td style="color:white"><?php echo $email;?></td>
              <td style="color:white"><?php echo $dob;?></td>
                         <td style="color:white">< <?php echo "<a href='../../resume/$resume'>'"?>View Resume</a></td>
              <td style="color:white"> <?php echo "<a href='mailto:$email'>'"?>Send Mail</a></td>
              <td style="color:white"><?php echo "<a href='company_profile.php'>'"?>Back to Company Profile</a></botton></td>
            
     
      <td>
         
      </td>
  </tr>
 <?php } ?>

      </td>
  </tr>
 
 
  </tbody>
</table>
                
     
         
         
         
         
       
          </span></h1>
        
        </div>
      </div>
    </div>
 
  </section>
</body>
</html>




