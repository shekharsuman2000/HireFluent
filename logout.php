<?php   
session_start(); 
session_destroy(); 
echo "<script>javascript:history.go(-1)</script>";
exit();
?>