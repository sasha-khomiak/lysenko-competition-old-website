<?
  session_start();

  $old_user = $valid_user;  // store  to test if they *were* logged in
  $result = session_unregister("valid_user");
  session_destroy();
  header("location: ../admin.html");	// посылаем пользователя вежливо на admin.html
?>