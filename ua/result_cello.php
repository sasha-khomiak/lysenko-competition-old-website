<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>̳��������� �������� ������� ���� ������ �������</title>
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
      <div class="program_txt" ><a href="result_violin.php">���������</a></div>
    </div>
    <div id="program_back_piano">
      <div class="program_txt" ><a href="result_piano.php">������ϲ��λ</a></div>
    </div>
    <div id="program_back_vocal">
      <div class="program_txt" ><a href="result_vocal.php">�������� �ϲ»</a></div>
    </div>
    <div id="program_back_cello_activ">
      <div class="program_txt" ><a href="result_cello.php">�²�������ܻ</a></div>
    </div>
  </div>
  <div id="center">
 	  <div id="center_content">
    
      <h1>Գ������ ��������</h1>
       <br /><br /><br /><br />
      <?php
	  	 error_reporting(0);  // ��������� ��� ��������� �� �������
		 include('../result_cello.html'); ?>
	  <p>&nbsp;</p>
 	  </div>
</div>
</div>

 </div>
 
</body>
</html>
