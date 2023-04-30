<?php

//fetch_user_chat_history.php

include('database_connection.php');


include '../fetch_details.php';

echo fetch_user_chat_history($id, $_POST['to_id'], $connect);

?>