<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interview";

$code=$_GET['user'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo $code;

$sql = "DELETE FROM password_reset WHERE user_id='$code'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>