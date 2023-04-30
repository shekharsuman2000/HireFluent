<?php

include('database_connection.php');

session_start();



if(isset($_POST['submit']))
{
  $query = "
    SELECT * FROM tblcompany
      WHERE company_id = :company_id
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
    array(
      ':company_id' => $_POST["company_id"]
    )
  );  
  $count = $statement->rowCount();
  if($count > 0)
  {
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
      if(password_verify($_POST["password"], $row["company_password"]))
      {
        $_SESSION['COMPANYID'] = $row['COMPANYID'];
        $_SESSION['COMPANYNAME'] = $row['COMPANYNAME'];
        $sub_query = "
        INSERT INTO login_details 
          (COMPANYID) 
          VALUES ('".$row['COMPANYID']."')
        ";
        $statement = $connect->prepare($sub_query);
        $statement->execute();
        $_SESSION['login_details_id'] = $connect->lastInsertId();
        header('location:company_profile.php');
      }
      else
      {
      echo "<script>alert('Wrong Password')</script>";
      echo "<script>window.history.go(-1)</script>";
      }
    }
  }
  else
  {
    echo "<script>alert('Email not Found')</script>";
    echo "<script>window.history.go(-1)</script>";
  }
}


?>