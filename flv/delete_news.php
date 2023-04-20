<?php  require('check_user.php'); ?>
<?php 
//	INPUT		n,	data, year_del
/*
echo	$n;	echo	'	---	n	<br>';
echo	$data;	echo	'	---	data	<br>';
//exit;
*/
$data=trim($_GET['data']);
$n=trim($_GET['n']);
$year_del=trim($_GET['year_del']);

//---------------	READ	VARIABLES
 include('read_variable.php');
//---------------	END	READ	VARIABLES

//	INIT	VARIABLE
	$table='news';	$table1='news_foto';

	$year=explode('-',$data);		//	YYYY-mm-dd
	//	PATH  TO  SERVER

		$path_to_server=$_SERVER["DOCUMENT_ROOT"];
		$path_server=$path_to_server.substr($path_to_news,3);

	include($path);
	
	//--------------------  IF delete year
	if($year_del)
	{

		$data1=$year_del.'-01-01';	$data2=$year_del.'-12-31';
		
		$query="SELECT  *  FROM ".$table1." WHERE  date>='".$data1."' AND  date<='".$data2."' ";
		echo	$query.'<br>';
		$result=mysql_query($query);
		$num_row_foto=mysql_num_rows($result);
		for ($i=0; $i<$num_row_foto; $i++)
		{		$row=mysql_fetch_array($result);
				$foto_name	= 	stripslashes(trim($row["foto"]));		// READ foto
				
				$upfile1=$path_server.$year_del.'/'.$foto_name;
				unlink($upfile1);	//	DELETE foto
		}
		
		$query="DELETE  FROM	".$table1."  WHERE  date>='".$data1."' AND  date<='".$data2."' ";		//	SELECT  FROM  DB 
		$result=mysql_query($query);
		
		$query="DELETE  FROM	".$table."  WHERE  date>='".$data1."' AND  date<='".$data2."' ";		//	SELECT  FROM  DB 
		$result=mysql_query($query);
		
		rmdir($path_to_news.$year_del);

		$sql = 'OPTIMIZE TABLE '.$table1;
		$result_opt=mysql_query($sql);
		$sql = 'OPTIMIZE TABLE '.$table;
		$result_opt=mysql_query($sql);

		mysql_close($db);
		
		echo'<script language="JavaScript" type="text/JavaScript">	document.location.replace(\'edit_news.php\');		</script>';
		
		exit;
	}
	//-------------------- END IF delete year

	//--------------------	DELETE  TABLE news_foto
	$query="SELECT  foto  FROM  ".$table1."  WHERE  n=".$n." AND date='".$data."'  ";
	$result=mysql_query($query);
	$num_row_foto=mysql_num_rows($result);
	for ($i=0; $i<$num_row_foto; $i++)
	{		$row=mysql_fetch_array($result);
			$foto_name	= 	stripslashes(trim($row[0]));		// READ foto
			$upfile1=$path_server.$year[0].'/'.$foto_name;
			unlink($upfile1);
	}
		$query="DELETE  FROM	".$table1."  WHERE  n=".$n." AND  date='".$data."' ";		//	SELECT  FROM  DB 
		$result=mysql_query($query);
	//--------------------	END	DELETE  TABLE news_foto

		//	COUNT		n		FOR		CURRENT		NEWS
		$query="SELECT  *  FROM  ".$table."  WHERE	date='".$data."' AND n=".$n." ";
		$result=mysql_query($query);
		$num_row_news=mysql_num_rows($result);

		//	DELETE  TABLE news
		$query="DELETE  FROM	".$table."  WHERE  n=".$n." AND  date='".$data."' ";	 
		$result1=mysql_query($query);
		if	($n==1)
		{
		$query="UPDATE ".$table."  SET n =n-1	 WHERE date ='".$data."'  ";
		$result=mysql_query($query);
		}
		else
		{
			if	($n!=$num_row_news)
			{	
				$query="UPDATE ".$table."  SET n =n-1	 WHERE date ='".$data."' AND	n>".$n." ";
				$result=mysql_query($query);
			}
		}
			
		$sql = 'OPTIMIZE TABLE '.$table1;
		$result_opt=mysql_query($sql);
		
		$sql = 'OPTIMIZE TABLE '.$table;
		$result_opt=mysql_query($sql);

		mysql_close($db);
		
		echo'<script language="JavaScript" type="text/JavaScript">	document.location.replace(\'edit_news_year.php?year='.$year[0].'\');		</script>';
?>