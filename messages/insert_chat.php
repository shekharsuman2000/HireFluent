<?php

//insert_chat.php
$sender_id=$_GET['sender_id'];
$r_id=$_GET['r_id'];
include('database_connection.php');

session_start();

$data = array(
	':to_id'		=>	$r_id,
	':from_id'		=>	$sender_id,
	':chat_message'		=>	$_POST['chat_message'],
	':status'			=>	'1'
);

$query = "
INSERT INTO chat_message 
(to_id, from_id, chat_message, status) 
VALUES (:to_id, :from_id, :chat_message, :status)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
	echo fetch_user_chat_history($sender_id, $_POST['to_id'], $connect);
}

?>