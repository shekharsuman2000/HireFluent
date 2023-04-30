<?php

include('database_connection.php');

session_start();



if(isset($_POST['submit']))
{
  $query = "
    SELECT * FROM login 
      WHERE email = :email
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
    array(
      ':email' => $_POST["email"]
    )
  );  
  $count = $statement->rowCount();
  if($count > 0)
  {
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
      if(password_verify($_POST["password"], $row["password"]))
      {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['email'] = $row['email'];
        $sub_query = "
        INSERT INTO login_details 
          (user_id) 
          VALUES ('".$row['user_id']."')
        ";
        $statement = $connect->prepare($sub_query);
        $statement->execute();
        $_SESSION['login_details_id'] = $connect->lastInsertId();
        header('location:../../index.php');
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