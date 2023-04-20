<?php 
	$fp = fopen('../noread/news_var_adm.txt',"r");
	if ($fp)
	{
	 while(!feof($fp)) 
	 {
		$str=fgets($fp);
		if($str[0]!='#') {
		$variable=explode('=',$str);
		if(trim($variable[0])  and trim($variable[1]))	{
			switch($variable[0])
			{
				case	'path'				:	$path=trim($variable[1]); break;
				case	'view_foto'			:	$view_foto=trim($variable[1]); break;
				case	'title'				:	$title=trim($variable[1]); break;
				case	'title_news'		:	$title_news=trim($variable[1]); break;
				case	'path_to_gallery'	:	$path_to_gallery=trim($variable[1]); break;
				case	'path_to_news'				:	$path_to_news=trim($variable[1]); break;				
				case	'asc_desc'			:	$asc_desc=trim($variable[1]); break;
				case	'lang'				:	$lang=trim($variable[1]); break;
				case	'word'				:	$word=trim($variable[1]); break;
				case	'tbl_bkgr_zagl1'	:	$tbl_bkgr_zagl1=trim($variable[1]); break;
				case	'tbl_bkgr_zagl2'	:	$tbl_bkgr_zagl2=trim($variable[1]); break;
				case	'tbl_bkgr_zagl3'	:	$tbl_bkgr_zagl3=trim($variable[1]); break;

				}
		}
		}
	 }
	}
	else	exit;
	fclose($fp);
?>