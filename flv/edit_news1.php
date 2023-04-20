<?php  require('check_user.php'); ?>
<html>
<head>
<title>Admin / News</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="admin.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
v='false';
function view_foto(all_obj,obj)
{
	if (v)	
	{	document.getElementById(obj).style.display='block';	}
	else	
	{	document.getElementById(obj).style.display='none';	}
	v=!v;
}
//-->
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php
//	INPUT		data,	n	
$data=trim($_GET['data']);
$n=trim($_GET['n']);
//---------------	READ	VARIABLES
 include('read_variable.php');
//---------------	END	READ	VARIABLES
//	INIT	VARIABLE
	$file='update_news.php';
	$table='news';	$table1='news_foto';	$table2='lang';
	$num_row_news_all=0;
//

	include($path);
	//--------------------------	SELECT		lang
		$query="SELECT * FROM  ".$table2."  ORDER BY  number  ASC";
		$result=mysql_query($query);
		$num_row=mysql_num_rows($result);
		for ($i=1; $i<=$num_row; $i++)
		{		$row=mysql_fetch_array($result);
				$lang_array[$i]=	stripslashes(trim($row['name']));		// READ name 
		}

	//--------------------------------	SELECT  FROM  TABLE    news  
	for ($lng=1; $lng<=count($lang_array); $lng++)
	{	
		$query="SELECT * FROM  ".$table."  WHERE	date='".$data."' AND n=".$n."  AND lang=".$lng."	";
		$result=mysql_query($query);
		$num_row_news=mysql_num_rows($result);
		$row=mysql_fetch_array($result);
				$news[$lng][1][1] = trim(stripslashes($row['date']));
				$news[$lng][1][2] = trim(stripslashes($row['text']));
				$news[$lng][1][3] = trim(stripslashes($row['text_all']));
				$num_row_news_all+=$num_row_news;
	}

	
	// SELECT	FOTO	FROM	news_foto
	$query_foto="SELECT * FROM ".$table1." WHERE date='".$data."' AND n=".$n."	ORDER by view ASC";
	$result_foto=mysql_query($query_foto);
	$num_row_foto=mysql_num_rows($result_foto);

/*echo	$query_foto.'	---	query_foto	<br>';
echo	$result_foto.'	---	dataresult_foto<br>';
echo	$num_row_foto.'	---	num_row_foto	<br>';
*/
	for ($i=0; $i<$num_row_foto; $i++)							
	{
		$row=mysql_fetch_array($result_foto);
		$arr_foto[$i]=trim(stripslashes($row['foto']));
	}
		
	mysql_close($db);
?>
<table width="90%" height="100" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="4%" class="text_zagl">&nbsp;</td>
    <td width="21%" valign="middle" class="text_zagl">&nbsp;</td>
    <td><?php include('adm_header.php');?></td>
  </tr>
</table>
<br>
<form action="<?php echo $file; ?>" method="post" name="form1" target="_parent">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">
        <table width="60%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="100"  height="23" align="right" valign="top" class="text-12-black"><strong>Дата</strong></td>
                  <td width="10"><img src="images/transparent.gif" width="10" height="5"></td>
                  <td valign="top" class="text-12-black"><?php echo $news[1][1][1]; ?></td>
                </tr>
              </table>
              <p>
		<?php 
			for ($i=1; $i<=count($lang_array); $i++)
			{	echo	'<div class="text-12-black"><strong>'.$lang_array[$i].' <strong> </div> ';
							echo	'<table width="100%" border="0" cellpadding="0" cellspacing="0" class="text-11-black">
							<tr> 
							  <td width="10"><img src="images/transparent.gif" width="10" height="5"></td>
							  <td valign="top" class="text-12-black"><br><strong>Заголовок</strong><br>
								<textarea name="headline[]" cols="40" rows="2" id="headline[]"  class="text-11-black">'.$news[$i][1][2].' </textarea>	</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top" class="text-12-black"><br><strong>Весь текст</strong><br>
								<textarea name="text_all[]" cols="60" rows="5" id="text_all[]"  class="text-11-black">'.$news[$i][1][3].'</textarea>
								
							</tr>
							<tr>
							  <td height="5">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td height="5" valign="top">&nbsp;</td>
							</tr>
						  </table>';
			}
		?>&nbsp;</p>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="10" height="23"><img src="images/transparent.gif" width="10" height="5"></td>
                  <td valign="top"> 
                    <?php 
					echo	'<input name="data" type="hidden" id="data" value="'.$news[1][1][1].'">'; 
					echo	'<input name="count_lang" type="hidden" id="count_lang" value='.count($lang_array).'>'; 
					echo	'<input name="n" type="hidden" id="n" value='.$n.'>'; 
					echo	'<input name="flag" type="hidden" id="flag" value=0>'; 
					?>
                    <input name="Submit" type="submit" class="text-11-black" value="сохранить"></td>
                </tr>
              </table>
</form>
<br>

	<table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr bgcolor="#<?php echo  $tbl_bkgr_zagl1; ?>">
                    <td width="10%" height="30" align="center" class="text-12-black-bold">Фото</td>
                    <td width="20%"  class="text-12-black-bold">Название</td>
                    <td width="30%" align="center" class="text-12-black-bold">Удалить</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="text_zagl"><img src="images/transparent.gif" width="5" height="7"></td>
                  </tr>
                  <tr bgcolor="#<?php echo  $tbl_bkgr_zagl2; ?>">
                    <td height="25" align="center" valign="middle"  class="text_zagl">
					<a  onClick="view_foto(2,'xx0')" style="cursor:hand;" class="text"> Добавить <img src="images/admin%2B.gif" alt="добавить" width="19" height="18" border=0 align="absmiddle"></a></td>
                    <td>&nbsp;</td>
                    <td align="center">&nbsp;</td>
                  </tr>
      </table>
      <div  id="xx0" style="display: none" >
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#<?php echo  $tbl_bkgr_zagl2; ?>">
          <tr>
            <td>
				  <form name="form_insert_foto" method="post" enctype="multipart/form-data"  action="<?php echo $file  ?>">
                      <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td valign="top"  width="10%" class="text"></td>
                          <td>
						  <p class="text-12-black"><strong>Номер фото</strong>
                      <input type="text" name="number_foto" size="5" class="text-12-black" value="<?php echo $num_row_foto+1 ?> ">
                          </p>
						  <p class="text-12-black"><strong>Фото</strong><br>
                              <input name="max_file_size1" type="hidden" id="max_file_size1" value="500000">
                              <input type="file" name="foto" size="55"  class="text-12-black">
                            <br>максимальный размер 500 kb </p>
                          </td>
                        </tr>
                        <tr>
                          <td valign="top"  width="10%" class="text"></td>
						  <td height="40" valign="middle">
						  <input name="data" type="hidden" id="data" value="<?php echo $news[1][1][1]  ?>">
						  <input name="n" type="hidden" id="n" value="<?php echo $n  ?>">
						  <input name="count_lang" type="hidden" id="count_lang" value="<?php echo count($lang_array) ?>">
 						  <input name="flag" type="hidden" id="flag" value=1>
						  <input name="Submit" type="submit" class="text-11-black" value="сохранить"></tr>
                        <tr>
                      </table>
              </form>
			</td>
		  </tr>
		</table>
	</div>
<?php
	echo'
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
              <td valign="top">';
			  if(count($arr_foto)!=0)
			  {
				echo	'<table width="100%" border="0" cellspacing="0" cellpadding="0">';
				for ($i=0; $i<count($arr_foto); $i++)
				{
			 	 echo'<tr align="left" valign="middle"  onMouseOver="javascript:this.bgColor=\'#'.$tbl_bkgr_zagl3.'\';"  onMouseOut="javascript:this.bgColor=\'#FFFFFF\';">
				 <td width="18%"></td>
				<td class="text" width="55%" height="25">'.$arr_foto[$i].'</td>
				<td  class="text">
  				<a href="javascript: if  (window.confirm(\'Удалить `'.$arr_foto[$i].'`?\')) 
				 location.replace(\'delete_news_foto.php?data='.$data.'&n='.$n.'&name_foto='.$arr_foto[$i].'\');" 
				 class="text"><img src="images/admin_del_sm.gif" width="16" height="16" border=0 alt="удалить"></a>
				</td>
				</tr>';
				}
				echo	'</table>';
			}
echo	'</td></tr></table>';
	//	END	IF	view_foto=1
	  ?>
</body>
</html>