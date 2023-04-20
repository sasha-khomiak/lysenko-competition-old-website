<?php  require('check_user.php'); ?>
<html>
<head>
<title>Admin / News</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="admin.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="sd_admin.js"></script>
<script src="calendar_ru.js"></script>

<script language="JavaScript" type="text/javascript">
function CheckForm(var1,var2)
{
result=true;
regExp=/\d\d\-\d\d\-d\d\d\d\/;

	if(!regExp.test(var1)) { window.alert('Введите дату.'); document.form_insert_news.data.focus(); result=false; return result;}
	else	{
		if(var1=='00-00-0000' || var1==''  ) 
		{ window.alert('Введите дату.'); document.form_insert_news.data.focus(); result=false; return result;}
		else {
			if(var2=='') 
			{ window.alert('Введите заголовок, текст.'); document.form_insert_news.headline1.focus(); result=false; return result;}
		}
	}

return result;
}
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<?php
//	INPUT		year
$year=trim($_GET['year']);

//---------------	READ	VARIABLES
 include('read_variable.php');
//---------------	END	READ	VARIABLES

	//	INIT	VARIABLE
	include($path);
	$file='insert_news1.php';
	$table='news';		$table1='news_foto';	$table2='lang';	$lang=1;
	//--------------------------	SELECT		lang
		$query="SELECT * FROM  ".$table2."  ORDER BY  number  ASC";
		$result=mysql_query($query);
		$num_row=mysql_num_rows($result);
		for ($i=1; $i<=$num_row; $i++)
		{		$row=mysql_fetch_array($result);
				$lang_name[$i]=	trim($row['name']);
		}
	
	// SELECT  ALL	lang
	$query="SELECT * FROM  ".$table2."  ORDER BY number ASC";
	$result=mysql_query($query);
	$num_row_lang=mysql_num_rows($result);
	for ($i=1; $i<=$num_row_lang; $i++)
	{	$row=mysql_fetch_array($result);
		$array_lang[$i]=stripslashes(trim($row['name']));
	}
	
	// SELECT  ALL	 DATE (YEAR) news
	$query="SELECT date FROM  ".$table."  ORDER BY date ASC";
	$result=mysql_query($query);
	$num_row_year=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
	$end_date=explode('-',stripslashes($row["date"]));
	$arr_year[0]=$end_date[0];		//		YEAR
	$n=1;		//	COUNT	YEAR	
	for ($i=1; $i<$num_row_year; $i++)
	{		$row=mysql_fetch_array($result);
			$end_date=explode('-',stripslashes($row["date"]));
			if	($arr_year[$n-1]<>$end_date[0])
			{
				$arr_year[$n]=$end_date[0];		//		YEAR
				$n++;
			}
	}
		$end_date=explode('-',stripslashes($row["date"]));
//		$year=$arr_year[0];	//	THIS LINE	ONLY	FOR	edit_news.php

	$num_col=4;
	//----------------	SELECT  FROM  TABLE    news 
	$data1=$year.'-01-01';		$data2=$year.'-12-31';
	
	$query="SELECT * FROM  ".$table."  WHERE date>='".$data1."'  AND  date<='".$data2."' AND lang=".$lang."  ORDER BY date ".$asc_desc;
	$result=mysql_query($query);
	$num_row=mysql_num_rows($result);
	for ($i=0; $i<$num_row; $i++)
	{		$row=mysql_fetch_array($result);
				$news[$i][0]=stripslashes(trim($row[0]));		//		 READ data 
				$news[$i][1]=stripslashes(trim($row[1]));					//		 READ text
				$news[$i][2]=stripslashes(trim($row[2]));		//		 READ text_all
				$news[$i][3]=stripslashes(trim($row[3]));		//		 READ lang
				$news[$i][4]=stripslashes(trim($row[4]));		//		 READ n
	}
	if($view_foto)
	{
	// SELECT		FOTO		FROM		news_foto
		for ($i=0; $i<$num_row; $i++)
		{		
		$query_foto="SELECT * FROM ".$table1." WHERE date='".$news[$i][0]."' AND n=".$news[$i][3]." ORDER by date ASC";
		$result_foto=mysql_query($query_foto);
		$num_row_foto=mysql_num_rows($result_foto);
		$arr_num_row_foto[$i]=$num_row_foto;		
		}
	}
	mysql_close($db);
?>
<table width="90%" height="100" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="4%" class="text_zagl">&nbsp;</td>
    <td width="21%" valign="middle" class="text-12-black"> <br> 
      <form name="form_year" action="edit_news_year.php">
        Выберите год <br>
        <select name="year" onChange="javascript: if (this.value=='new_year') 
		  		{	var year=window.prompt('Добавить год',''); 
					if (year)	location.replace('edit_news_year.php?year='+year); }
		  			else document.form_year.submit();">
            <option selected value="0"></option>
			<option  value="new_year">Добавить год</option>			
			<option  value="">........................</option>	
            <?php
				for ($i=0;	$i<$n;	$i++)
				{
				echo '<option value="'.$arr_year[$i].'">'.$arr_year[$i].'</option>';
				}
				?>
        </select>
      </form></td>
    <td>
      <?php include('adm_header.php');?>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><table width="90%" height="30" border="0" cellpadding="0" cellspacing="0">
      <tr bgcolor="#<?php echo  $tbl_bkgr_zagl1; ?>">
        <td width="10%" height="30" align="center" class="text-12-black-bold"><font size="4"><?php echo  $year; ?></font></td>
        <td width="40%"  class="text-12-black-bold">Новости</td>
        <td width="12%" align="center"  class="text-12-black-bold"> Дата</td>
        <td width="12%" align="center" class="text-12-black-bold"><?php  if($view_foto) echo 'Фото';  ?>
        </td>
        <td width="12%" align="center" class="text-12-black-bold"> Удалить</td>
        <td width="5%">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="6" class="text_zagl"><img src="images/transparent.gif" width="5" height="7"></td>
      </tr>
      <tr bgcolor="#<?php echo  $tbl_bkgr_zagl2; ?>">
        <td width="10%" height="25" align="center" valign="middle"><!--<a href="insert_news.php" class="text"> -->
          <a  onClick="view('x')" style='cursor:hand;' class="text"> Добавить </a> <a  onClick="view('x')" style='cursor:hand;' class="text"><img src="images/admin%2B.gif"  alt="добавить" width="19" height="18" border=0 align="absmiddle"></a></td>
        <td valign="middle">&nbsp;</td>
        <td >&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr bgcolor="#<?php echo  $tbl_bkgr_zagl2; ?>">
        <td colspan="6"><div  class="galery_menu"  id="x"  style="display: none">
            <!--	INSERT	FORM-->
            <form action="<?php echo $file; ?>" method="post" name="form_insert_news" target="_parent">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="4%" class="text_zagl">&nbsp;</td>
                  <td><table border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="right" height="50" valign="middle" class="text-12-black-bold">Дата&nbsp;</td>
                        <td class="text" height="50" valign="middle" nowrap><input type="text" id="data" name="data" value="дд-мм-гггг" onFocus="this.select(); lcs(this)"
	onclick="event.cancelBubble=true;this.select();lcs(this)"></td>
                        <td class="text" nowrap></td>
                        <td valign="top"></td>
                      </tr>
                      <tr>
                      <tr height="40">
                        <td width="100">&nbsp;</td>
                        <td width="280" align="left" class="text-12-black-bold">Заголовок</td>
                        <td class="text-12-black-bold">Весь текст</td>
                        <td valign="top"></td>
                      </tr>
                      <?php
						for ($i=1; $i<=count($array_lang); $i++)
						{	
							echo'
							 <tr>
							  <td width="100" valign="top" align="center" class="text-12-black-bold">'.$array_lang[$i].'</td>
							  <td width="200" valign="top">
								<input name="headline[]" type="text" class="text-12-black-bold" id="headline[]" size="40" maxlength="40"></td>
							  <td valign="top">
								<textarea name="text_all[]" cols="60" rows="5" class="text-12-black" id="text_all[]"></textarea></td><td valign="top"></td>
							 </tr>';
						}
						   ?>
                      <tr>
                        <td ></td>
                        <td width="10" class="text" nowrap><input name="year" id="year" type="hidden" value="<?php echo  $year; ?>">
						<a  href="javascript:  document.form_insert_news.submit();" class="text-12-black-bold">Сохранить</a>
						<!--
                      	<a  href="javascript:  
					  	if (CheckForm(document.form_insert_news.data.value,document.form_insert_news.headline[1].value)) 
						document.form_insert_news.submit();" class="text-12-black-bold">Сохранить</a>-->
						
						
						</td>
                        <td ></td>
                        <td ></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align="right" valign="top" ></td>
                  <td width="10" class="text" nowrap></td>
                  <td class="text" nowrap></td>
                  <td valign="top"></td>
                </tr>
              </table>
            </form>
          <!--   END  FORM-->
        </div></td>
      </tr>
      <tr >
        <td></td>
        <td><?php // OUTPUT 
		for ($i=0; $i<$num_row; $i++)
		{
		$data=explode('-',$news[$i][0]);
		$new_data=$data[2].'.'.$data[1].'.'.$data[0];
		  echo'
			<tr valign="middle"  onMouseOver="javascript:this.bgColor=\'#'.$tbl_bkgr_zagl3.'\';"  onMouseOut="javascript:this.bgColor=\'#FFFFFF\';">
				<td></td>
			     <td width="50%" height="25"   class="text_and_border"  onMouseOver="this.style.cursor=\'hand\'">
				 <a href="edit_news1.php?n='.$news[$i][3].'&data='.$news[$i][0].'" target="_parent" class="text-12-black">'.$news[$i][1].' </a></td>
				<td  width="15%"  height="25" align="center" class="text-12-black">
				&nbsp;'.$new_data.'</td>
				<td	width="15%"  height="25" align="center" class="text-12-black">'; 
				if($view_foto) echo '[ '.$arr_num_row_foto[$i].' ]';
				echo'
				</td>
				 <td  width="15%" height="25" align="center" class="text-12-black">
				 <a href="javascript: if  (window.confirm(\'Удалить `'.$news[$i][1].'` ?\'))
				  location.replace(\'delete_news.php?n='.$news[$i][4].'&data='.$news[$i][0].'\');" 
				  onMouseOver="this.style.cursor=\'hand\'"  target="_parent" >
				  <img src="images/admin_del_sm.gif" width="16" height="16" border=0></a></td>
		    </tr>';
		 }
	?></td>
        <td valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>