<?php 
  session_start();
  // check session variable // ПРОВЕРКА ПОЛЬЗОВАТЕЛЯ
  if (session_is_registered("valid_user"))
  {
  /*
    echo "<table width='100%' >  	<tr>    <td>Добро пожаловать  <b>".$valid_user."</b>. &nbsp;</td>    <td>&nbsp;</td>
	<td><a href=\"logout.php\">Выход</a>&nbsp;</td>	</tr>	</table>";
	*/
  }
  else
  {
  	// посылаем пользователя вежливо на index.php
  	echo '<script language="JavaScript" type="text/JavaScript">	document.location.replace(\'index.php\'); </script>';
	
  }
?>