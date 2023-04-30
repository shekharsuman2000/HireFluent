
<?php
$profile_id=$_GET['profile_id'];

  
  $servername = "localhost"; 
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "db_jobportal";
 
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn)
   {
    die("Connection Failed: ".mysqli_connect_error());
  }




 include("../../fetch_details.php");


  if (!$conn)
   {
    die("Connection Failed: ".mysqli_connect_error());
  }


$profile=$_GET['profile_id'];
$query = "SELECT * FROM login WHERE user_id ='$profile'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result))
{  

   $signup_as=$row['signup_as'];
   $username=$row['fullname'];
   $email=$row['email'];
   $freelancer_skill=$row['skill'];
   $freelancer_experience=$row['experience'];   
   $image=$row['profile_pic']; 
   $user_resume=$row['resum'];
}
  if ($signup_as ==1)
  {
  $skill="<li><a class='active'  href='#'>Freelancer Skill:-$freelancer_skill</a></li>";
  $experience="<li><a class='active'  href='#'>Freelancer Experience:-$freelancer_experience</a></li>";
  $login_as="Freelancer";
  
  
  }
  else
  {
    $skill="";
    $experience="";
    $login_as="Client";
   
  }
  
  ?>
   

<?php
  if ($profile_id==$id)
  {
     $check_user="You are login as";
     $update="<li><a class='active'  href='update_profile.php?profile_id=$profile_id'>Click here to update details</a></li>";
     $update_resume="<li><a class='active'  href='jobshop_resume.php?profile_id=$profile_id'>Add or update your Resume CV</a></li>";
  }
  else
  {
     $check_user="User is login as";
     $update="";
     $update_resume="<li><a class='active'  href='jobshop_resume.php?profile_id=$profile_id'> Resume CV</a></li>";
  }
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php  echo $username;    ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="profile.css">

   
  </head>
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
            <p id="username"><?php   echo $username;?></p>

            <li>
              <a class="active" href="logout.php">Log Out</a>
            </li>
          </ul>
        </nav>
      </header>
      <div class="mainbodyuser">
        <div class="drawerLeft">
          <div class="profilePic">
            <a href="profile picture/<?php echo $image; ?>">
              <img class="center" src="profile picture/<?php echo $image; ?>" alt="" />
            </a>
          </div>
          <p id="username" class="center"><?php  echo $username;  ?></p>
          <hr />
          <nav>
            <ul>
              <li><a class="active" href="#">Name:- <?php echo $username;?></a></li>
              <li><a  class="active"  href="#">Email <?php echo $email;?></a></li>
              <li><a class="active"  href="#"><?php echo $check_user?><?php echo $login_as;?> </a></li>
              
              <?php echo $skill;?>

               <?php echo $experience;?>
               <?php echo $update_resume;?>
               <?php echo $update;?>
              
            </ul>
          </nav>
        </div>
        <div class="drawerRight center">
          <div class="intro">
          
            </span></h1>
          
          </div>
        </div>
      </div>
   
    </section>
  </body>
</html>





    





