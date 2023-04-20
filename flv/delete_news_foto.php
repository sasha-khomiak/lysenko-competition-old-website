<?php  require('check_user.php'); ?>
<?php 
//	INPUT		n,	data, name_foto
/*
echo	$n.'	---	n	<br>';
echo	$data.'	---	data	<br>';
*/
$data=trim($_GET['data']);
$n=trim($_GET['n']);
$name_foto=trim($_GET['name_foto']);

//---------------	READ	VARIABLES
 include('read_variable.php');
//---------------	END	READ	VARIABLES

	include($path);

//	INIT	VARIABLE
	$table1='news_foto';

	$year=explode('-',$data);		//	YYYY-mm-dd
	//	PATH  TO  SERVER
		$path_to_server=$_SERVER["DOCUMENT_ROOT"];
		$path_server=$path_to_server.substr($path_to_news,2);
		
//		$upfile1=$path_server.$year[0].'/'.$name_foto;
//	$upfile1=$path_server.$foto1_name; 
	
	//--------------------	DELETE  TABLE news_foto
	$query="SELECT  foto  FROM  ".$table1."  WHERE  n=".$n." AND date='".$data."'  AND foto='".$name_foto."' ";
	$result=mysql_query($query);
	$num_row_foto=mysql_num_rows($result);
	for ($i=0; $i<$num_row_foto; $i++)
	{		$row=mysql_fetch_array($result);
			$foto_name	= 	stripslashes(trim($row[0]));		// READ foto
			$upfile1=$path_server.$year[0].'/'.$name_foto; 
			echo	$upfile1.'	-	upfile1<br>';
			unlink($upfile1);
	}
	$query="DELETE  FROM	".$table1."  WHERE  n=".$n." AND  date='".$data."' AND foto='".$name_foto."' ";
	$result=mysql_query($query);
	
//	echo	$query.'	-	query<br>';	echo	$result.'	-	result<br>';
	//--------------------	END	DELETE  TABLE news_foto
			
		$sql = 'OPTIMIZE TABLE '.$table1;
		$result_opt=mysql_query($sql);

		echo'<script language="JavaScript" type="text/JavaScript">	document.location.replace(\'edit_news_year.php?year='.$year[0].'\');		</script>';
/**/
		mysql_close($db);		
?>
