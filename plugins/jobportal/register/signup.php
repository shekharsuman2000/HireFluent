<?php

session_start();

$x = 6;
$sum = 0;


for($i=0;$i<$x;$i++)
{
    $sum = $sum + rand(0,9)*pow(10,$i);

}

 $otp=$sum; 

$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'airline');

$EncodedData=file_get_contents('php://input');
$DecodedData=json_decode($EncodedData,true);

$email=$DecodedData['email'];
$password=$DecodedData['password'];
$name=$DecodedData['name'];

$s = "select * from logins where email= '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_fetch_row($result);
if($num==true)
{
    
  $myJSON='These email is already registered with us';
  $response = array(
    'status' => false,
    'message' => 'These email is already registered with us',
    'result' => []
    );
    echo json_encode($response);

}
else
{
$sql = "INSERT INTO logins (name,email,password,verify)
VALUES ('$name', '$email' ,'$password','$otp')";
if ($con->query($sql) === TRUE) {

  $query = "SELECT * FROM logins WHERE email ='$email'";
  $result = mysqli_query($con,$query);

  while ($row = mysqli_fetch_assoc($result))
 {
     $id=$row['id'];
 }
 $response = array(
  'status' => true,
  'message' => 'Registration sucessfull',
  'result' => ['id' => ($id), 'name'=> ($name), 'email' => ($email)]
  );
  echo json_encode($response);

} else {


  $response = array(
    'status' => false,
    'message' => 'Fail to Register try again',
    'result' => []
    );
    echo json_encode($response);

  }

}

?>