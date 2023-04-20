<?php  require('check_user.php'); ?>
<?php
 error_reporting(0);  // Отключить все сообщения об ошибках

//	INPUT		$data,	$headline,	$text_all , year
/*
	echo	$data;	echo	'	-	data <br>';
	echo	$year;	echo	'	-	year <br>';
//exit;
*/
$data=trim($_POST['data']);
$year=trim($_POST['year']);

$count_lang=trim($_POST['count_lang']);
$n=trim($_POST['n']);
$flag=trim($_POST['flag']);


/*	echo	$data;	echo	"	----	data<br>";
	echo	$year;	echo	"	----	year<br>";
*/
	$arr_data=explode('-',$data);
	
	if($arr_data[0]=='00' || $arr_data[1]=='00' || $arr_data[0]>'31' || $arr_data[1]>'12' )
	{echo	'<script> window.alert("Неверная дата."); history.go(-1);</script>';
	exit;
	}
	if (strpos($data,'-')!=2)
	{echo	'<script> window.alert("Введите дату."); history.go(-1);</script>';
	exit;
	}

//---------------	READ	VARIABLES
 include('read_variable.php');
//---------------	END	READ	VARIABLES

//	INIT	VARIABLE
		$table='news';
		$table2='lang';

	include($path);

//--------------------------	SELECT		lang
	$query="SELECT * FROM  ".$table2."  ORDER BY  number  ASC";
	$result=mysql_query($query);
	$num_row=mysql_num_rows($result);
	for ($i=1; $i<=$num_row; $i++)
	{		$row=mysql_fetch_array($result);
			$lang_array[$i]=trim($row['name']);		// READ name 
	}

	//	CREATE DIR
	mkdir($path_to_news.$year,0775);

	$data=explode('-',$data);						//	dd-mm
	$new_data=$year.'-'.$data[1].'-'.$data[0];		//	YYYY-mm-dd
	//$n=0;
	//	IF	DATE	EXIST	THEN	n+1
		$query="SELECT date FROM  ".$table."  WHERE	date='".$new_data."' ";	
		$result=mysql_query($query);
		$num_row=mysql_num_rows($result);
		if	($num_row==0)	$n=1;
		else		$n=$num_row+1;

	//	-------------	INSERT NEWS
	for($i=1; $i<=count($lang_array); $i++)
	{
		$headline=nl2br(trim($_POST['headline'][$i-1]));
		$text_all=nl2br(trim($_POST['text_all'][$i-1]));		
// echo $headline.'<br>';
// echo $text_all.'<br>';

		$query="INSERT INTO  ".$table."   VALUES ('".addslashes(trim($new_data))."','".addslashes(trim($headline))."','".addslashes(trim($text_all))."',".addslashes($i).",".addslashes($n)." )";
		$result=mysql_query($query);

		$query="OPTIMIZE TABLE ".$table." ";
		$result_opt=mysql_query($query);
	}

		mysql_close($db);

		echo	'<script language="JavaScript" type="text/JavaScript">document.location.replace(\'edit_news_year.php?year='.$year.'\');	</script>';
/**/
?>