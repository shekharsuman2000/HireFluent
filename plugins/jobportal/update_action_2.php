<?php
include ("../../fetch_details.php");
  $db = mysqli_connect("localhost", "root", "", "db_jobportal");

  if (isset($_POST['submit'])) 
  {
$fullname=$_POST['fullname'];
$email_id=$_POST['email'];
$sign_up_as=$_POST['sign_up_as'];
$image = $_FILES['image']['name'];
$target = "profile picture/".basename($image);

$sql = "UPDATE  login  SET email='$email_id',fullname='$fullname',profile_pic='$image', signup_as = '$sign_up_as' WHERE user_id=$id";


if (move_uploaded_file($_FILES['image']['name'], $target)) 
{
  echo "<script>alert('Profile updated successfully')</script>";
  header("Refresh:1; url=update_profile.php?profile_id=$id");
} else
 {
    echo "<script>alert('Fail to Update ')</script>";
    header("Refresh:1; url=update_profile.php?profile_id=$id");
}
  }

$conn->close();
?>