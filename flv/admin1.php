<?php 
 error_reporting(0);  // Отключить все сообщения об ошибках

$login=trim($_POST['login']);
$pass=trim($_POST['pass']);

/*echo $login.'	---	login<br>';
echo $pass.'	---	pass<br>';
*/
//---------------	READ	VARIABLES
	include('read_variable.php');
//---------------	END	READ	VARIABLES


if (($login) && ($pass))
{
	$table='xusers';	$table2='lang';
	
  // CONNENT DB
	include($path);
//	кодируем проль
	$pass=md5($pass);

	$query = "select * from ".$table." where x1='".$login."' and x2='".$pass."' ";	// 
//	$query = "SELECT * FROM ".$table." WHERE `x1` LIKE '".$login."' ";  
	$result = mysql_query($query);
	$row=mysql_num_rows($result);

/* echo $query.'	---	query<br>';
 echo $result.'	---	result<br>';
 echo $row.'	---	row<br>';
*/ 
	if ($row >0 )
 	{
    // REGISTRATION USER
	
	session_start();	
    $valid_user = $login;	
    session_register("valid_user");

	}	//	END if ($row >0 )
}	//	END if (($login) && ($pass))


  if (session_is_registered("valid_user"))
  {
  	 echo '<script language="JavaScript" type="text/JavaScript">	document.location.replace(\'edit_news.php\'); </script>';
	/**/
  }
  else
  {
  	 echo	'<script language="JavaScript" type="text/javascript"> window.alert(\'Не вірно ввели дані. Спробуйте ще.\'); history.go(-1)</script>';
	 exit;
  /**/
  }
?>
