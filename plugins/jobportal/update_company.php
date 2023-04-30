
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
$logo=$row['logo'];
$company_address=$row['COMPANYADDRESS'];
$company_contact=$row['COMPANYCONTACTNO'];
$company_ID=$row['company_id'];


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
<body class="profileMain">
  <section>
    <header id="homeheader">
      <div class="logo">
        <a href="index.html">
          <h3>Company Profile</h3>
        </a>
      </div>

      <nav>
        <ul class="nav-links">
          <p id="username"><?php   echo $company_ID;?></p>

          <li>
            <a class="active" href="../../index.php">Log Out</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="mainbodyuser">
      <div class="drawerLeft">
        <div class="profilePic">
        <a href="companylogo/<?php echo $logo; ?>">
            <img class="center" src="companylogo/<?php echo $logo; ?>" alt="" />
          </a>
        </div>
        <p id="username" class="center">Company Logo for <?php echo $company_name;?></p>
        <hr />
        <nav>
          <ul>
    
          <li><a class="active" href="applied_job.php">Check who apply for job in your company</a></li>
          <li><a class="active" href="update_company.php">Update Your Company Details</a></li>
          <li><a class="active" href="upload_logo.php">Upload Logo For Your Company</a></li>
          <li><a class="active" href="add_jobs.php">Add Jobs </a></li>
          <li><a class="active" href="delete_company.php">Delete Your Company from Jobshop </a></li>











            
          </ul>
        </nav>
      </div>
      <div class="drawerRight center">
        <div class="intro">
       
        <h1 for="name">Update Company Details</h1>
    
          </span>
        
        </h1>
        <form class="applyfrom" action="update_company_details.php?companyid=<?php echo $profile;?>" method="POST" enctype="multipart/form-data">
            <div class="formSide">

                <input value="<?php echo $company_name;?>"  placeholder="Company Name" required type="text"  name="name" />
                <br>
                <br>
                <input value="<?php echo $company_ID;?>"  placeholder="Company ID" required type="text"  name="company_id" />
               <br>
               <br>
                <input value="<?php echo $company_address;?>"  placeholder="Company Address" required type="text"  name="company_address" />
                <br>
                <br>
                <input value="<?php echo $company_contact;?>"  placeholder="Company Contact" required type="text"  name="contact" />
                <br>
                <br>
               <button type="submit" name="submit">Update</button>
        </form>
        </div>
      </div>
    </div>
 
  </section>
</body>
</html>




