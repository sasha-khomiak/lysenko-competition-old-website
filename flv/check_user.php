<?php 
  session_start();
  // check session variable // �������� ������������
  if (session_is_registered("valid_user"))
  {
  /*
    echo "<table width='100%' >  	<tr>    <td>����� ����������  <b>".$valid_user."</b>. &nbsp;</td>    <td>&nbsp;</td>
	<td><a href=\"logout.php\">�����</a>&nbsp;</td>	</tr>	</table>";
	*/
  }
  else
  {
  	// �������� ������������ ������� �� index.php
  	echo '<script language="JavaScript" type="text/JavaScript">	document.location.replace(\'index.php\'); </script>';
	
  }
?>