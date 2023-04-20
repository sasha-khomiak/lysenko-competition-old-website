<?php
//	INPUT data, n
$data=trim($_GET['data']);
$n=trim($_GET['n']);

//---------------	READ	VARIABLES
include('read_variable.php');
//---------------	END	READ	VARIABLES

//	VARIABLES
	$table='news';	$table2='news_foto';
	$account_news=0;
	$data_array=explode('.',$data);
	$data=$data_array[2].'-'.$data_array[1].'-'.$data_array[0];
	$year=$data_array[2];
	$path_to_server=$path_to_news.$year.'/';
	$select_year=$data_array[2];

	include($path);
	// SELECT  END DATE  NEWS
	$query="SELECT date	 FROM  ".$table." WHERE lang=".$lang."  ORDER BY date DESC ";
	$result=mysql_query($query);
	$num_row=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
	
//	echo $query.'	---	query<br>';	echo $result.'	---	result<br>'; 	echo $num_row.'	---	num_row<br>';
	
	$end_date=explode('-',stripslashes($row["date"]));
	$year=$end_date[0];

	$data1=$year.'-01-01';	$data2=$year.'-12-31';
	$account_news=0;
//------------------------------ SELECT	ALL	YEAR
	$query="SELECT * FROM  ".$table." WHERE lang=".$lang."  ORDER BY date ".$asc_desc;
	$result=mysql_query($query);
	$num_row=mysql_num_rows($result);
	
//	echo $query.'	---	query<br>';	echo $result.'	---	result<br>'; 	echo $num_row.'	---	num_row<br>';

		for ($i=0; $i <$num_row; $i++)
		{	$row=mysql_fetch_array($result);
			$arr_type[$i]=stripslashes($row["date"]);
			$array_date=explode("-",$arr_type[$i]);
			$arr_type[$i]=$array_date[0];
		}
		$num_year=0;
		//---------------- GROUP year  AND  copy to  $arr_year
		for ($i=0; $i <$num_row-1; $i++)
		{	if ($arr_type[$i]!=$arr_type[$i+1]) 
			{
				$arr_year[$num_year]=$arr_type[$i];
				$num_year++; 
			}
		}
			$arr_year[$num_year]=$arr_type[$i];
			$num_year++; 
		//---------------- END GROUP year  AND  copy to  $arr_year
		
	//--------------------------------  SELECT	1 NEWS
	$query="SELECT * FROM	".$table." WHERE date='".$data."' AND n=".$n." AND lang=".$lang." ";
	$result=mysql_query($query);
	$num_row=mysql_num_rows($result);
		for ($i=0; $i <$num_row; $i++)
		{	$row=mysql_fetch_array($result);
			$date=explode("-",stripslashes($row["date"]));
			$arr_news[0][$i]=$date[2].'.'.$date[1].'.'.$date[0];
			$arr_news[1][$i]=stripslashes($row["text"]);
			$arr_news[2][$i]=stripslashes($row["text_all"]);
		}

	//--------------------------------  SELECT	FOTO
	$query="SELECT * FROM	".$table2." WHERE date='".$data."' AND n=".$n." ORDER BY view ASC ";	
	$result=mysql_query($query);
	$num_row=mysql_num_rows($result);
		for ($i=0; $i <$num_row; $i++)
		{	$row=mysql_fetch_array($result);
			$arr_foto[$i]=stripslashes($row["foto"]);
		}

	mysql_close($db);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td height="60" valign="top" class="txt_12pt_black"><span class="titles"> <h1><?php echo $title; ?></h1></span></td>
    <td valign="top" class="txt_12pt_black">&nbsp;</td>
  </tr>
  <tr>
    <td width="28%" align="center" valign="top">
	<table width="140" cellpadding="0" cellspacing="0">
		<?php			
		//--------------------------------------- OUTPUT  year
		for ($i=0; $i <$num_year; $i++)
		{
			if ($arr_year[$i] == $select_year)
			echo '<tr><td valign="middle"><h1><a class="txt_title_18">'.$arr_year[$i].'</a></h1></td></tr>';
			else 
			echo '<tr><td valign="middle"><p><h1><a href="news_1.php?select_year='.$arr_year[$i].'" class="txt_12_gray">'.$arr_year[$i].'</a></h1></p></td></tr>';
		}
		   ?>
    </table>
	</td>
    <td width="70%" valign="top" class="txt_12pt_black">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="txt_12pt_black"><?php 
		  for ($i=0; $i<count($arr_news[0]); $i++)		// ------------------ 	OUTPUT  NEWS 	/descend /
		  {
				echo
				'<table width="90%" border="0" cellspacing="0" cellpadding="0">
             	<tr>
                	<td width="100" class="txt_12" valign="top">'.$arr_news[0][$i].'</td>
                	<td valign="top" class="news_title">'.$arr_news[1][$i].'</td>
              	</tr>
              	<tr>
                	<td>&nbsp;</td>
                	<td class="txt_12" align="justify"><br>'.$arr_news[2][$i].' <br>';			
					if($view_foto)
					{
						for ($i=0; $i<count($arr_foto); $i++)		// ------------------ 	OUTPUT FOTO  NEWS 	/descend /
						{
						echo '<p><img src="'.$path_to_server.$arr_foto[$i].'" alt="foto"></p><p></p>';
						}
					}
					echo'					
					</td>
              	</tr>
            	</table>';
		  }
		  ?></td>
        </tr>
      </table>      
    </td>
    <td>&nbsp;</td>
  </tr>
</table>