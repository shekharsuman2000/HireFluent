<?php
$company_id=$_GET['company_id'];
  $db = mysqli_connect("localhost", "root", "", "db_jobportal");

  if (isset($_POST['submit'])) 
  {
  
    $image = $_FILES['logo']['name'];
  
    $target = "companylogo/".basename($image);

    $sql = "UPDATE tblcompany SET  logo='$image' WHERE COMPANYID='$company_id'";


    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['logo']['tmp_name'], $target))
     {

        echo "<script>alert('Updatation successfull')</script>";
   
        echo "<script>window.history.go(-1)</script>";
     
    }

    else

    {
      echo "<script>alert('Fail To Update')</script>";
      echo "<script>window.history.go(-1)</script>";

    }
  }

  $result = mysqli_query($db, "SELECT * FROM login");
?>