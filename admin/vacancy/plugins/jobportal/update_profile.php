
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
  
  $servername = "localhost"; 
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "db_jobportal";
 
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn)
   {
    die("Connection Failed: ".mysqli_connect_error());
  }


$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM login WHERE user_id ='$user_id'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result))
{  

   $signup_as=$row['signup_as'];
   $username=$row['fullname'];
   $email=$row['email'];
   $freelancer_skill=$row['skill'];
   $freelancer_experience=$row['experience'];   
   $image=$row['profile_pic']; 
}
  if ($signup_as ==1)
  {
  $skill="<li><a class='active'  href='#'>Freelancer Skill:-$freelancer_skill</a></li>";
  $experience="<li><a class='active'  href='#'>Freelancer Experience:-$freelancer_experience</a></li>";
  $login_as="Freelancer";
  $update_skill="<label for='name'>Skill</label>
  <input name='skill' autofocus autocomplete='given-name' placeholder='Skill' required type='text'
   value= $freelancer_skill>";
   $update_experience="<label for='name'>Experience in year</label>
   <input name='experience' autofocus autocomplete='given-name' placeholder='Skill' required type='text'
    value= $freelancer_experience>";
    $form_action="update_action_1.php";
 
  
  }
  else
  {
    $skill="";
    $experience="";
    $login_as="Worker/Client";
    $update_skill="";
     $update_experience="";
     $form_action="update_action_2.php";
  }
  
  ?>
   

<?php
  if ($profile_id==$id)
  {
     $check_user="You are login as";
     $update="<li><a class='active'  href='update_profile.php?profile_id=$profile_id'>Click here to update details</a></li>";
   
  }
  else
  {
     $check_user="User is login as";
     $update="";
     
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
            <a href="#">
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
               <?php echo $update;?>
          </ul>
        </nav>
      </div>
      <div class="drawerRight center">
        <div class="size">
          <form class="applyfrom" action="<?php echo $form_action;?>" method="POST" enctype="multipart/form-data">
            <div class="formSide">

              <fieldset>
                <legend>Update Details</legend>


                <label for="name">Name</label>
                <input name="fullname" autofocus autocomplete="given-name" placeholder="Your full name" required type="text" value="<?php echo $username;   ?>" id="name" name="name" />

                <label for="email">Email</label>
                <input required autocomplete="email" type="email" id="email" value="<?php echo $email; ?>" placeholder="Email" name="email" />
                <?php echo $update_skill;?>
                <?php echo $update_experience;?>

           

                <label for="phone">Update Profile Photo</label>
                <input type="file" name="image" />

                <label for="phone">Change Your Account Type</label>
                <select  name="sign_up_as">

    <option value="1">Work as a Freelancer</option>
    <option value="0">Hire a freelancer</option>
    

  </select>

                <button class="center" type="submit" name="submit">Update</button>
              </fieldset>
            </div>
          </form>
        </div>
        <div class="size">

          <form class="applyfrom" action="change_password.php" method="POST" enctype="multipart/form-data">
            <div class="formSide">
              <fieldset>
                <legend>Update Password</legend>


                <label for="name">Old Password</label>
                <input autofocus autocomplete="given-name" placeholder="Old Password" required type="password" id="oldPass" name="old_pass" />

                <label for="email">New Password</label>
                <input required autocomplete="email" type="password" id="newPass" placeholder="New Password" name="new_pass" onkeyup="check()" />


                <label for="email">Confirm New Password</label>
                <input required autocomplete="email" type="password" id="confirmPass" placeholder="Confirm Password" name="confirm_pass" onkeyup="check()" />
                <p id='message'></p>
                </label>

                <button class="center" type="submit" type="submit">Change Password</button>
              </fieldset>


            </div>
          </form>
        </div>
      </div>
</body>

</html>