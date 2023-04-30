
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
$COMPANYID=$row['COMPANYID'];
$logo=$row['logo'];

}
echo $company_name;

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
          <h3>Job Shop Company Profile</h3>
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
        <h1 style="color: white;">Upload Logo or Update logo</h1>

        <form action="logo_action.php?company_id=<?php echo $COMPANYID?>" method="POST"  enctype="multipart/form-data">
        <input type="file" name="logo">
        <br>
        <br>
      
        <button style="font-size: 30px;" type="submit" name="submit">Upload</button>
        </form>
          </span></h1>
        
        </div>
      </div>
    </div>
 
  </section>
</body>
</html>




