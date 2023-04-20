<?php  require('check_user.php'); ?>
<?php
	//	INPUT	:
$data=trim($_POST['data']);
$count_lang=trim($_POST['count_lang']);
$n=trim($_POST['n']);
$flag=trim($_POST['flag']);
$number_foto=trim($_POST['number_foto']);


/*
	echo	$data;	echo	"	----	data<br>";
	echo	$n;	echo	"	----	n<br>";
	echo	$count_lang;	echo	"	----	count_lang<br>";
	echo	$flag;	echo	"	----	flag<br>";
exit;
*/
//---------------	READ	VARIABLES
include('read_variable.php');
//---------------	END	READ	VARIABLES
	
	include($path);

//	flag=0		IF		EDIT	ONLY	TEXT	NEWS
	if	($flag==0)
	{
	$table='news';
	for($i=1; $i<=$count_lang; $i++)
	{
		$headline=nl2br(trim($_POST['headline'][$i-1]));
		$text_all=nl2br(trim($_POST['text_all'][$i-1]));		
		
// echo $headline.'<br>';
// echo $text_all.'<br>';
//-------------------	CHEK	NEWS	//	IF	NEWS	EXIST
		$query="SELECT * FROM  ".$table."  WHERE	date='".$data."' AND n=".$n."  AND lang=".$i."	";
		$result=mysql_query($query);

		$num_row_news=mysql_num_rows($result);
		if($num_row_news)	//	IF	NEWS	EXIST
		{
		$query="UPDATE ".$table." SET text='".addslashes(trim($headline))."' WHERE date='".$data."' AND n=".$n." AND lang=".$i."";
		$result=mysql_query($query);

		$query="UPDATE ".$table." SET text_all='".addslashes(trim($text_all))."'  WHERE  date ='".$data."' AND n=".$n." AND lang=".$i." ";
		$result=mysql_query($query);
		}
		else
		{
		$query="INSERT INTO ".$table." VALUES ('".addslashes(trim($data))."','".addslashes(trim($headline))."','".addslashes(trim($text_all))."',".addslashes($i).",".addslashes($n).")";
		$result=mysql_query($query);
		}	
//-------------------	END	CHEK	NEWS
	}//	END	FOR

		$query="OPTIMIZE TABLE ".$table;
		$result_opt=mysql_query($query);

	$data=explode('-',$data);		// YEAR
	mysql_close($db);

	echo'<script language="JavaScript" type="text/JavaScript">	document.location.replace(\'edit_news_year.php?year='.$data[0].'\');		</script>';
/**/
	}	//	END	IF	flag=0	IF	EDIT	ONLY		NEWS		

//-----------------------------------------	flag=1	// IF	EDIT	FOTO	NEWS
	if	($flag==1)		
	{
	
$foto_name=htmlspecialchars(stripslashes(trim($_FILES['foto']['name'])));
$foto=htmlspecialchars(stripslashes(trim($_FILES['foto']['tmp_name'])));

	//	INSERT	FOTO	FOR	CURRENT	NEWS
		$year=explode('-',$data);		//		YYYY-mm-dd
	//	PATH  TO  SERVER
		$path_to_server=$_SERVER["DOCUMENT_ROOT"];
		$path_server=$path_to_server.substr($path_to_news,2);
		
		$upfile1=$path_server.$year[0].'/'.$foto_name;
		mkdir($path_server.$year[0],0775);
		
		echo $upfile1.'	--- upfile1<br>';
		if	(file_exists($upfile1))
		{
			echo	'<script language="JavaScript" type="text/JavaScript">
			 	(window.alert(\'тюик `'.$foto_name.'`   сфе ясыеярбсер. \')) </script>';

			mysql_close($db);
		
				echo'<script language="JavaScript" type="text/JavaScript">	document.location.replace(\'edit_news1.php?n='.$n.'&data='.$data.'\'); </script>';
/**/
// exit;
		
		}
		
		if (trim($foto_name)!='')		//	IF		FILE	UPLOAD
		{		
			if ( !copy($foto,$upfile1))
			{
				echo	"<br>-= FILE `".$foto_name."` NOT COPY =- "; //exit;
				$result_foto=0;
			}
			else
			{
				$table='news_foto';
				
				$query="INSERT INTO ".$table."
				VALUES ('".addslashes(trim($data))."', ".addslashes($n).",'".addslashes(trim($foto_name))."',".addslashes($number_foto).")";
				$result_foto=mysql_query($query);
//			echo	$query.'<br>';			echo	$result_foto.'<br>';
				
				$query="OPTIMIZE TABLE ".$table;	
				$result_opt=mysql_query($query);
			}
		}	//	END	IF		FILE	UPLOAD

	mysql_close($db);
	
	echo	'<script language="JavaScript" type="text/JavaScript">	document.location.replace(\'edit_news1.php?n='.$n.'&data='.$data.'\'); </script>';
/*	*/
	}//	END	flag=1	IF	EDIT	FOTO	NEWS
?>