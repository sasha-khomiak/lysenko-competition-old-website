<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Міжнародний музичний конкурс імені Миколи Лисенка</title>
<link href="../classes.css" rel="stylesheet" type="text/css" />
<SCRIPT language="JavaScript" type="text/javascript" src='../sd.js'></SCRIPT>

<script>

function OpasityChange() {

	var e1 = document.getElementById("box1");        // Получаем объект Element
	var e2 = document.getElementById("box2");
	var e3 = document.getElementById("box3");
	var e4 = document.getElementById("box4");


	
	e1.style.opacity = "1";	
	e2.style.opacity = "1";
	e3.style.opacity = "1";
	e4.style.opacity = "1";

}
</script>
</head>

<body onLoad="OpasityChange()">
<?php 
 error_reporting(0);  // Отключить все сообщения об ошибках

//---------------	READ	VARIABLES
include('read_variable.php');
//---------------	END	READ	VARIABLES

	$table='news'; 		$lang=1;	//	RUSSIAN
	include($path);
	// SELECT  END DATE  NEWS
	$query="SELECT * FROM  ".$table." WHERE lang=".$lang."  ORDER BY date DESC ";
	$result=mysql_query($query);
	$num_row=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
//	echo $query.' <br> '.$result.'<br>';

	$date=explode("-",stripslashes($row["date"]));
	$arr_news[0][0]=$date[2].'.'.$date[1].'.'.$date[0];
	$arr_news[0][1]=stripslashes($row["text"]);
	$arr_news[0][2]=stripslashes($row["n"]);
	
?>
    <div id="container_menu_positions">
    <div id="container_menu">
    
    		<div id="menu_item_first" onMouseOver="hide_menu(4); view('smenu1',1);"><a href="#" class="menu_txt">Про нас</a></div>
			<div id="menu_item" onMouseOver="hide_menu(4);"><a href="news.php" class="menu_txt">Новини</a></div>
        	<div id="menu_item" onMouseOver="hide_menu(4);"><a href="welcome.php" class="menu_txt">Привітання</a></div>
			<div id="menu_item" onMouseOver="hide_menu(4); view('smenu2',1);"><a href="#" class="menu_txt">Конкурс</a></div>
			<div id="menu_item" onMouseOver="hide_menu(4); view('smenu3',1);"><a href="#" class="menu_txt">Умови участі</a></div>
	  		<div id="menu_item" onMouseOver="hide_menu(4); view('smenu4',1);"><a href="#" class="menu_txt">Заявка</a></div>
	  		<div id="menu_item" onMouseOver="hide_menu(4);"><a href="documents.php" class="menu_txt">Документи</a></div>
			<div id="menu_item_last" onMouseOver="hide_menu(4);"><a href="contact.php" class="menu_txt">Контакти</a></div>		

		<div id="left_clear"></div>
	</div><!-- END container_menu //-->
    
		<!-- SUBMENU  //-->
		<div id="submenu" 	 > <!--  onmouseout="hide_menu(4);" -->
				<!-- SUBMENU 1 //-->
				<div id="smenu1" class="ramka_menu" > 
					<a href="#">ідея конкурсу</a>
					<a href="history.php">історія конкурсу</a>
					<a href="lysenko.php">Микола Лисенко </a>
					<a href="organisation.php">організація</a>
					<a href="sponsors.php">спонсори</a>                  
                    </div>
                <!-- END SUBMENU 1 //-->
				<!-- SUBMENU 2 //-->
				<div id="smenu2" class="ramka_menu"> 
					<a href="schedule.php">розклад</a>
					<a href="prizes.php">премії та нагороди</a>
					<a href="competitors.php">конкурсанти </a>
					<a href="winners_violin.php">переможцi </a>
					<a href="jury.php">журі</a>
					<a href="concertmeyster.php">концертмейстери</a>				
                    </div>
				 <!-- END SUBMENU 2 //-->
				<!-- SUBMENU 3 //-->
				<div id="smenu3" class="ramka_menu"> 
					<a href="gen_conditions.php">загальні умови</a>
					<a href="fin_conditions.php">фінансові умови</a>
					<a href="prog_req_piano.php">програмні вимоги </a>
					<a href="competition_rules.php">правила проведення</a>				
                    </div>
				 <!-- END SUBMENU 3 //-->
				<!-- SUBMENU 4 //-->
				<div id="smenu4" class="ramka_menu"> 
					<a href="../doc/anketa.pdf" target="_blank">поштою</a>
					<a href="application_internet.php">на інтернет сайті</a>		
                    </div>
				 <!-- END SUBMENU 4 //-->	    
		</div>
		<!-- END submenu ----------------->		
		<div id="submenu_hide" onMouseOver="hide_menu(4);"></div> 

    <div id="container_language">
   		  <div id="menu_item_first"><a href="../eng/" class="menu_txt">Eng</a></div>
          <div id="menu_item_last"><a href="#" class="menu_txt">Укр</a></div>
    	</div>
    </div>

<div align="center">
      <p class="txt_indx_red">15-24 листопада 2012 року Київ, Україна</p>
      <p class="txt_indx_violet">IV Мiжнародний музичний конкурс iменi Миколи Лисенка</p>
      <p class="txt_14_news"><strong>НОВИНИ:</strong> 
	  <?php
	  echo '<a  href="news_2.php?data='.$arr_news[0][0].'&n='.$arr_news[0][2].' ">'.$arr_news[0][1].'...</a>';
	   ?>
       </p> 

</div>
    
    <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div id="box1">
   			<div id="comp_section"> 
       	  		<div class="txt_title_24"> Скрипка</div>
                	<br />
            	<div class="txt_12"><a href="winners_violin.php" target="_self">переможці</a></div>
       	</div>
    	</div>
    
    </td>
    <td><div id="box2">
		<div id="comp_section"> 
   	  		<div class="txt_title_24">Фортепіано</div>
                	<br />
            	<div class="txt_12"><a href="winners_piano.php" target="_self">переможці</a></div>
       	</div>
    	</div>
    
    </td>
    
    <td><div id="box3">
   		<div id="comp_section"> 
   	  		<div class="txt_title_24">Сольний спів</div>
                	<br />
            	<div class="txt_12"><a href="winners_vocal.php" target="_self">переможці</a></div>
       	</div>
    </div></td>
    
    <td><div id="box4">
   		<div id="comp_section"> 
   	  		<div class="txt_title_24">Віолончель</div>
    <br />
            	<div class="txt_12"><a href="winners_cello.php" target="_self">переможці</a></div>
       	</div>
    </div></td>
  </tr>
</table>
    
    
    <p>&nbsp;</p>
</body>
</html>
