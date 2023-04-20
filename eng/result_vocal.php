<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Mykola Lysenko International Music Competition</title>
<link href="../classes.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
td {
	height:35px;
	text-align:left;
	white-space:nowrap;
	vertical-align:text-top;
}
.number {
	width:30px;
}
.fio {
font-weight:bold;
}

-->

</style>
</head>

<body>

 <div id="container_min_max_size">
 	<?php  include('template.html'); ?>
    
<div id="content">
  <div id="left">
    <p>&nbsp;</p>
    <br />
    <div id="program_back_viola">
      <div class="program_txt" ><a href="result_violin.php">«VIOLIN»</a></div>
    </div>
    <div id="program_back_piano">
      <div class="program_txt" ><a href="result_piano.php">«PIANO»</a></div>
    </div>
    <div id="program_back_vocal_activ">
      <div class="program_txt" ><a href="result_vocal.php">«SOLO SINGING»</a></div>
    </div>
    <div id="program_back_violin">
      <div class="program_txt" ><a href="result_cello.php">«CELLO»</a></div>
    </div>
  </div>
  <div id="center">
 	  <div id="center_content">
    
      <h1>Final Round </h1>
       <br /><br /><br /><br />
      <?php 
	 error_reporting(0);  // Отключить все сообщения об ошибках
	  include('../result_vocal.html'); ?>
	  <p>&nbsp;</p>
 	  </div>
</div>
</div>

 </div>
 
</body>
</html>
