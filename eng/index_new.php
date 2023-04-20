<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Mykola Lysenko International Music Competition</title>
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
<style type="text/css">
<!--
#partner td {
text-align:center;
padding:15px;
}
-->
</style>
</head>

<body onLoad="OpasityChange()">
<?php 
 error_reporting(0);  // Отключить все сообщения об ошибках

//---------------	READ	VARIABLES
include('read_variable.php');
//---------------	END	READ	VARIABLES

	$table='news'; 		$lang=2;	//	ENGLISH
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
    
    		<div id="menu_item_first" onMouseOver="hide_menu(4); view('smenu1',1);"><a href="#" class="menu_txt">about  us</a></div>
			<div id="menu_item" onMouseOver="hide_menu(4);"><a href="news.php" class="menu_txt">news</a></div>
        	<div id="menu_item" onMouseOver="hide_menu(4);"><a href="welcome.php" class="menu_txt">welcome</a></div>
			<div id="menu_item" onMouseOver="hide_menu(4); view('smenu2',1);"><a href="#" class="menu_txt">competition</a></div>
			<div id="menu_item" onMouseOver="hide_menu(4); view('smenu3',1);"><a href="#" class="menu_txt">conditions</a></div>
	  		<div id="menu_item" onMouseOver="hide_menu(4); view('smenu4',1);"><a href="#" class="menu_txt">applications</a></div>
	  		<div id="menu_item" onMouseOver="hide_menu(4);"><a href="documents.php" class="menu_txt">downloads</a></div>
			<div id="menu_item_last" onMouseOver="hide_menu(4);"><a href="contact.php" class="menu_txt">contact</a></div>		

		<div id="left_clear"></div>
	</div><!-- END container_menu //-->	
    
		<!-- SUBMENU  //-->
		<div id="submenu" 	 > <!--  onmouseout="hide_menu(4);" -->
				<!-- SUBMENU 1 //-->
				<div id="smenu1" class="ramka_menu" > 
					<a href="#">idea</a>
					<a href="history.php">history</a>
					<a href="lysenko.php">Mykola Lysenko</a>
					<a href="organisation.php">organisation</a>
					<a href="#">sponsors</a>                  </div>
                <!-- END SUBMENU 1 //-->
				<!-- SUBMENU 2 //-->
				<div id="smenu2" class="ramka_menu"> 
					<a href="schedule.php">schedule</a>
					<a href="prizes.php">prizes and awards</a>
					<a href="competitors.php">competitors </a>
					<a href="jury.php">juries</a>
					<a href="concertmeyster.php">accompanists</a>				</div>
				 <!-- END SUBMENU 2 //-->
				<!-- SUBMENU 3 //-->
				<div id="smenu3" class="ramka_menu"> 
					<a href="gen_conditions.php">general conditions</a>
					<a href="fin_conditions.php">financial conditions</a>
					<a href="prog_req_piano.php">programme requirements</a>
					<a href="competition_rules.php">competition rules</a>				</div>
				 <!-- END SUBMENU 3 //-->
				<!-- SUBMENU 4 //-->
				<div id="smenu4" class="ramka_menu"> 
					<a href="../doc/anketa.pdf" target="_blank">by post</a>
					<a href="application_internet.php">online</a>	</div>
				 <!-- END SUBMENU 4 //-->	    
		</div>
		<!-- END submenu ----------------->		
		<div id="submenu_hide" onMouseOver="hide_menu(4);"></div> 
    
    	<div id="container_language">
   		  <div id="menu_item_first"><a href="#" class="menu_txt">Eng</a></div>
          <div id="menu_item_last"><a href="../ua/" class="menu_txt">Укр</a></div>
    	</div>
    </div>




<div align="center">
      <p class="txt_indx_red">15 – 24 November 2012 Kyiv, Ukraine</p>
      <p class="txt_indx_violet">The Fourth Mykola Lysenko International Music Competition</p>
      <p class="txt_14_news">
      	  <?php
	  echo '<a  href="news_2.php?data='.$arr_news[0][0].'&n='.$arr_news[0][2].' ">'.$arr_news[0][1].'...</a>';
	   ?>
  </p>
</div>
    
    <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div id="box1">
   			<div id="comp_section"> 
       	  		<div class="txt_title_24"> Violin</div>
       	    <br />
            	<div class="txt_12"><a href="schedule.php" target="_self">schedule</a></div>
       	</div>
    	</div>
    
    </td>
    <td><div id="box2">
		<div id="comp_section"> 
   	  		<div class="txt_title_24">Piano</div>
                	<br />
            	<div class="txt_12"><a href="schedule.php" target="_self">schedule</a></div>
       	</div>
    	</div>
    
    </td>
    
    <td><div id="box3">
   		<div id="comp_section"> 
   	  		<div class="txt_title_24">Solo singing</div>
    <br />
            	<div class="txt_12"><a href="schedule.php" target="_self">schedule</a></div>
       	</div>
    </div></td>
    
    <td><div id="box4">
   		<div id="comp_section"> 
   	  		<div class="txt_title_24">Cello</div>
<br />
            	<div class="txt_12"><a href="schedule.php" target="_self">schedule</a></div>
       	</div>
    </div></td>
  </tr>
</table>
    
    
    <br />
    <table id="partner" width="700" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><div align="left"> <h1>Partners </h1></div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><img src="../images/1tv_logo_blue.jpg" width="105" height="34" /></td>
        <td><img src="../images/den.jpg" width="105" height="50" /></td>
        <td><img src="../images/dzerkalo_tyzhnia.jpg" width="160" height="27" /></td>
      </tr>
      <tr>
        <td><img src="../images/interplus.jpg" width="123" height="19" /></td>
        <td><img src="../images/logo_bb_competitions.jpg" width="133" height="59" /></td>
        <td><img src="../images/ukraine-1.jpg" width="140" height="61" /></td>
      </tr>
      <tr>
        <td><img src="../images/ngzhv.jpg" width="154" height="63" /></td>
        <td><img src="../images/fl.jpg" width="116" height="79" /></td>
        <td><img src="../images/jca.jpg" width="140" height="83" /></td>
      </tr>
      <tr>
        <td><img src="../images/iwck.jpg" width="105" height="106" /></td>
        <td><img src="../images/ukraine_hotel.jpg" width="105" height="110" /></td>
        <td><img src="../images/logo_wieniawski_lublin.jpg" width="105" height="104" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><img src="../images/mareazzuro.jpg" width="75" height="96" /></td>
        <td>&nbsp;</td>
      </tr>
    </table>    
    <p><br />
    </p>
</body>
</html>
