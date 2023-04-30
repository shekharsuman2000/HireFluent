<?php
include ("../../fetch_details.php");
  $db = mysqli_connect("localhost", "root", "", "db_jobportal");

  if (isset($_POST['submit'])) 
  {
$fullname=$_POST['fullname'];
$email_id=$_POST['email'];
$sign_up_as=$_POST['sign_up_as'];
$skill=$_POST['skill'];
$experience=$_POST['experience'];
$image = $_FILES['image']['name'];
$target = "profile picture/".basename($image);


$sql = "UPDATE  login SET email='$email_id',profile_pic='$image',fullname='$fullname',signup_as
 = '$sign_up_as',skill='$skill',experience='$experience'
 WHERE user_id=$id";


    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
     {

        echo "<script>alert('Updatation successfull')</script>";
        header("Refresh:1; url=update_profile.php?profile_id=$id");
        
     
    }

    else

    {
      echo "<script>alert('Fail To Update')</script>";
      header("Refresh:1; url=update_profile.php?profile_id=$id");

    }
  }

  $result = mysqli_query($db, "SELECT * FROM login");
?>