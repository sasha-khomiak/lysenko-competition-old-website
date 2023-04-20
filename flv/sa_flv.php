<?
// READ  TABLE
			@ $db=mysql_pconnect("localhost","u_competiti","2TDIKjfe");
//			@ $db=mysql_pconnect("localhost");
			if (!$db)	
			{	echo "Error: Could not connected to database";
				exit;
			}
			mysql_select_db("competitj");
?>
