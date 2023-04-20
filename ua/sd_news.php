<?php
 error_reporting(0);  // Отключить все сообщения об ошибках

//---------------	READ	VARIABLES
include('read_variable.php');
//---------------	END	READ	VARIABLES

	$table='news'; 		$lang=1;	//	RUSSIAN
	include($path);
	// SELECT  END DATE  NEWS
	$query="SELECT date FROM  ".$table." WHERE lang=".$lang."  ORDER BY date DESC ";
	$result=mysql_query($query);
	$num_row=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
	$end_date=explode('-',stripslashes($row["date"]));
	$year=$end_date[0];
	
	$data1=$year.'-01-01';	$data2=$year.'-12-31';
	$account_news=0;
//------------------------------ SELECT	ALL	YEAR
	$query="SELECT * FROM  ".$table." WHERE lang=".$lang."  ORDER BY date ".$asc_desc;
	$result=mysql_query($query);
	$num_row=mysql_num_rows($result);
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

//---------------------------- SELECT  NEWS
		$query="SELECT * FROM ".$table." WHERE  date>='".$data1."'  AND  date<='".$data2."' AND lang=".$lang." ORDER BY date ".$asc_desc;
		$result=mysql_query($query);
		$num_row_select_y=mysql_num_rows($result);
			for ($i=0; $i <$num_row_select_y; $i++)
			{	$row=mysql_fetch_array($result);
				$arr_date[$i]=stripslashes($row["date"]);
				$arr_news[0][$i]=stripslashes($row["text"]);
				$arr_news[1][$i]=stripslashes($row["text_all"]);
				$date=explode("-",$arr_date[$i]);
				$arr_select_y[$i]=$date[0];					// YEAR
				$arr_select_m[$i]=$date[1];					// MONTH
				$arr_select_d[$i]=$date[2];					// DAY
				//echo		$arr_select_y[$i].' - '.$arr_select_m[$i].'<br>';
				//echo		$arr_date[$i].'<br>';
				//echo		$arr_news[$i].'<br>';
				$arr_all_news[0][$account_news]=$arr_select_d[$i].'.'.$arr_select_m[$i].'.'.$arr_select_y[$i];	// DATE
				$arr_all_news[1][$account_news]=$arr_news[0][$i];									// TEXT		NEWS
				$arr_all_news[2][$account_news]=$arr_news[1][$i];									// TEXT_ALL	NEWS
				$arr_all_news[3][$account_news]=stripslashes($row["n"]);
				$account_news++;
			}//END FOR

//------------------ END SELECT  NEWS

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
			if ($arr_year[$i] == $year)
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
          <td class="txt_12pt_black">
		  <?php 
  		$s='';
		  for ($i=0; $i<$account_news; $i++)		// ------------------ 	OUTPUT  NEWS 	/descend /
		  {		$s='';
				$search_str=explode(' ',trim($arr_all_news[2][$i]),$word); 	// ------------------ 	FIND   WORD	FOR NEWS
				//echo		count($search_str)	;	echo '<br>';
				if(	count($search_str) == $word)
				{
				for ($j=0; $j<$word-1; $j++)
				{
					$s.=' '.$search_str[$j];
					//echo		$s	;	echo '<br>';
				}// end for
				$s.=' ...';
				}// end if
				else										// IF  WORD  < 
				{	$s=$arr_all_news[2][$i];
				}
				echo
				'<table width="90%" border="0" cellspacing="0" cellpadding="0">
              	<tr>
                	<td width="100" >
					<a class="txt_12" href="news_2.php?data='.$arr_all_news[0][$i].'&n='.$arr_all_news[3][$i].' ">'.$arr_all_news[0][$i].'</a></td>
                	<td >
					<a class="news_title" href="news_2.php?data='.$arr_all_news[0][$i].'&n='.$arr_all_news[3][$i].' ">'.$arr_all_news[1][$i].'</a></td>
              	</tr>
              	<tr>
                	<td>&nbsp;</td>
                	<td class="txt_12" align="justify"><br>'.$s.'</td>
              	</tr>
            	</table><br><br>';
		  }
?>
		</td>
        </tr>
      </table>      
    </td>
    <td>&nbsp;</td>
  </tr>
</table>
