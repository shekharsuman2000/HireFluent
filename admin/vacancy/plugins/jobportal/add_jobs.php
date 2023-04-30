
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
          <h3>Job Shop Company Profile</h3>
        </a>
      </div>

      <nav>
        <ul class="nav-links">
          <p id="username"><?php   echo $company_ID;?></p>

          <li>
            <a class="active" href="../../logout.php">Log Out</a>
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
       
        <h1 for="name">Add new Job Vacancy in your Company</h1>
    
          </span>
        
        </h1>
        <form class="" action="job_added.php?company_id=<?php echo $profile;?>" method="POST" enctype="multipart/form-data">
            <div class="formSide">

                <input value="<?php echo $company_name;?>" readonly placeholder="Company Name" required type="text"  name="name" />
                <br>
                <br>
                <label for="cars">Job Category:</label>
                <br>

<select id="category" name="category">
    
  <option value="Technology">Technology</option>
  <option value="Engineer">Engineer</option>
  <option value="IT">IT</option>
  <option value="Civil Engineer">Civil Engineer</option>
  <option value="HR">HR</option>
  <option value="SALES">SALES</option>
  <option value="FINANCE">FINANCE</option>
  <option value="Digital Marketing">Digital Marketing</option>
  <option value="BPO">BPO</option>
</select>

<div class="col-md-8">
                    
                          


               <br>
               <br>
                <input value=""  placeholder="Job Title" required type="text"  name="job_title" />
                <br>
                <br>
                <input value=""  placeholder="Required Employee" required type="text"  name="employee" />
                <br>
                <br>
                <input value=""  placeholder="Salary" required type="text"  name="salary" />
                <br>
                <br>
                <input value=""  placeholder="Job Duaration" required type="text"  name="duration" />
                <br>
                <br>
                <input value=""  placeholder="Qualification" required type="text"  name="qualification" />
                <br>
                <br>
                <input value=""  placeholder="Job Description" required type="text"  name="description" />
                <br>
                <br>
                <input value=""  placeholder="Required Employee" required type="text"  name="employee" />
                <br>
                <br>
                <input value=""  placeholder="Vacancy" required type="text"  name="vacancy" />
                <br>
                <br>
                <label for="cars">Prefer Gender:</label>
                <br>
                <select id="gender" name="Gender">
    
  <option value="Male">Male</option>
  <option value="Female">Female</option>
                </select>
  <br>
  <br>
  <button  type="submit" name="submit" >Add Job</button>
        </form>
        </div>
      </div>
    </div>
 
  </section>
</body>
</html>




