<html>
<head>
<title>E-mail</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?
$name=trim($_POST['name']);
$last_name=trim($_POST['last_name']);
$nomin=trim($_POST['nomin']);
$select_sing=trim($_POST['select_sing']);

$data_burn=trim($_POST['data_burn']);
$state=trim($_POST['state']);
$adress1=trim($_POST['adress1']);
$adress2=trim($_POST['adress2']);

$fax=trim($_POST['fax']);
$tel=trim($_POST['tel']);
$mob=trim($_POST['mob']);
$email=trim($_POST['email']);
$lang=trim($_POST['lang']);
$lang_own=trim($_POST['lang_own']);


$muz_education=trim($_POST['muz_education']);
$teacher=trim($_POST['teacher']);
$concurse=trim($_POST['concurse']);
$posada=trim($_POST['posada']);

// First round

$round_1_comp_1=trim($_POST['round_1_comp_1']);
$round_1_comp_1_h1=trim($_POST['round_1_comp_1_h1']);
$round_1_comp_2=trim($_POST['round_1_comp_2']);
$round_1_comp_2_h2=trim($_POST['round_1_comp_2_h2']);
$round_1_comp_3=trim($_POST['round_1_comp_3']);
$round_1_comp_3_h3=trim($_POST['round_1_comp_3_h3']);
$round_1_comp_4=trim($_POST['round_1_comp_4']);
$round_1_comp_4_h4=trim($_POST['round_1_comp_4_h4']);
$round_1_h_all=trim($_POST['round_1_h_all']);
// Second round
$round_2_comp_1=trim($_POST['round_2_comp_1']);
$round_2_comp_1_h1=trim($_POST['round_2_comp_1_h1']);
$round_2_comp_2=trim($_POST['round_2_comp_2']);
$round_2_comp_2_h2=trim($_POST['round_2_comp_2_h2']);
$round_2_comp_3=trim($_POST['round_2_comp_3']);
$round_2_comp_3_h3=trim($_POST['round_2_comp_3_h3']);
$round_2_comp_4=trim($_POST['round_2_comp_4']);
$round_2_comp_4_h4=trim($_POST['round_2_comp_4_h4']);
$round_2_h_all=trim($_POST['round_2_h_all']);
// Final round
$round_3_comp_1=trim($_POST['round_3_comp_1']);
$round_3_comp_1_h1=trim($_POST['round_3_comp_1_h1']);
$round_3_comp_2=trim($_POST['round_3_comp_2']);
$round_3_comp_2_h2=trim($_POST['round_3_comp_2_h2']);
$round_3_comp_3=trim($_POST['round_3_comp_3']);
$round_3_comp_3_h3=trim($_POST['round_3_comp_3_h3']);
$round_3_comp_4=trim($_POST['round_3_comp_4']);
$round_3_comp_4_h4=trim($_POST['round_3_comp_4_h4']);
$round_3_h_all=trim($_POST['round_3_h_all']);

$viza=trim($_POST['viza']);

$concertmaster=trim($_POST['concertmaster']);
$concertmaster_name=trim($_POST['concertmaster_name']);
$concertmaster_country=trim($_POST['concertmaster_country']);
$radiobutton=trim($_POST['radiobutton']);
$rezerv=trim($_POST['rezerv']);
$apartment=trim($_POST['apartment']);
$apartment=trim($_POST['apartment']);
$apartment_text=trim($_POST['apartment_text']);


	$email_array=explode("@","$email");
	$s1='';
	$s1=strstr($adress1,'http:'); $s2=strstr($adress2,'http:'); $s3=strstr($muz_education,'http:');
	$s4=strstr($teacher,'http:'); $s5=strstr($concurse,'http:'); $s6=strstr($posada,'http:');
	$s7=strstr($apartment_text,'http:');
	if($s1 || $s2 || $s3 || $s4 || $s5 || $s6  || $s7 )
	{
		echo '
		<script language="JavaScript" type="text/JavaScript">
		window.alert("���������� ����!");	history.go(-1);	</script>';
	exit;
	}
	
	
	if (!$name || !$last_name  || !$email_array[0] || !$email_array[1] || !$data_burn)
	{
	echo	'<script language="JavaScript" type="text/JavaScript"> 
	window.alert("������ ����������� �� �������� ����.");	history.go(-1);	</script>';
	exit;
	}

	$toemail="office@competition.com.ua";

	$subj="������.";
	$header = "Content-type: text/html; charset=\"windows-1251\"\r\n"; //��� � ��������� 
	$header .= "From: ".$email."\r\n"; //from
	$header .= "Reply-to:\r\n"; //Reply
	$message="<html> ";
	$message.="<head>";
	$message.="<style type='text/css'>";
	$message.=".titles {font-family: Arial, Helvetica, sans-serif;	font-size: 24px;	color: #990000;}";
	$message.=".txt_12pt_black {font-family: Arial, Helvetica, sans-serif;	font-size: 12px;	color: #000000; text-decoration: none;}
	.txt_12pt_blac_bold {	font-family: Arial, Helvetica, sans-serif;	font-size: 12px;	color: #000000;	text-decoration: none;	font-weight: bold;}
	.fon_aplication_form {
		background-color:#FFFFFF;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
		color: #990000;
		padding: 10px 10px 10px 10px;
		text-align: right;
	}
	.tur
	{
		font-family: Arial, Helvetica, sans-serif;
		font-size: 16px;
		color: #990000;
		font-weight:bold;
		text-decoration: none;
		white-space:nowrap;
		padding: 15px 0px 15px 0px;
		text-align:center;
	}
	.table_fon
	{
		background-color:#EFEFEF;
		margin: 10px 10px 10px 10px;
		padding: 10px 5px 10px 10px;
	}
	.application_item {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
		color: #990000;
		text-decoration: none;
		white-space:nowrap;
	}
	";
	
	$message.="</style></head>";
	$message.="<body>";
	/*	FORM	*/
	$message.="<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
      <tr>
        <td width='25%' align='center' valign='top' nowrap='nowrap' >&nbsp;</td>
        <td width='62%' height='50' align='left' valign='top' ><span class='titles'>������</span></td>
        <td>        </td>
    </tr>
    <tr>
        <td align='center' valign='top' nowrap='nowrap' class='fon_aplication_form'>����������� 
          ����</td>
        <td align='center' class='table_fon'><table width='85%' border='0' align='center' cellpadding='0' cellspacing='0' class='txt_12pt_black'>
          <tr>
            <td height='40' valign='top'>��������: ".$nomin."
              </td>
            <td align='right'>";
			
			if($nomin=='������� �ϲ�') $sing='�������� ��������: '.$select_sing;
			else $sing='';

			$message.=" ".$sing."
			</td>
          </tr>
          <tr>
            <td height='40'>��'�:	".$name."</td>
            <td align='right'>�������:	".$last_name."</td>
          </tr>
          <tr>
            <td height='40'  nowrap='nowrap'>���� ����������:	".$data_burn."</td>
            <td align='right'>������������:	".$state."</td>
          </tr>
        </table></td>
        <td >&nbsp;</td>
    </tr>
    <tr>
      <td align='center' valign='top' nowrap='nowrap' class='txt_menu_inactiv'>&nbsp;</td>
      <td align='center' >&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr>
        <td align='center' valign='top' nowrap='nowrap' class='fon_aplication_form'>�������� 
          ���� </td>
        <td align='center' class='table_fon'><table width='85%' border='0' align='center' cellpadding='0' cellspacing='0' class='txt_12pt_black'  >
          <tr>
            <td height='70' colspan='3' valign='top'>������� ������ � ��������:	</td>
            <td valign='top'>".$adress1."</td>
          </tr>
          <tr>
            <td colspan='4'>&nbsp;</td>
          </tr>
          <tr>
            <td colspan='3'>������ ����������� , ���� ���� �������������� �� �������</td>
            <td>".$adress2."</td>
          </tr>
          <tr>
            <td colspan='4'>&nbsp;</td>
          </tr>
          <tr>
            <td valign='middle' nowrap>�������: &nbsp;</td>
            <td>	".$tel."</td>
            <td align='right' valign='middle' nowrap>����: &nbsp;</td>
            <td>".$fax."</td>
          </tr>
          <tr>
            <td colspan='4'>&nbsp;</td>
          </tr>
          <tr>
            <td colspan='3'>�������� �������(�): </td>
            <td>".$mob."</td>
          </tr>
          <tr>
            <td colspan='4'>&nbsp;</td>
          </tr>
          <tr>
            <td colspan='3'>e-mail</td>
            <td>".$email."</td>
          </tr>
          <tr>
            <td colspan='4'>&nbsp;</td>
          </tr>
          <tr>
            <td colspan='3'>����� ������ �� ����䳺��? </td>
            <td>".$lang_own."</td>
          </tr>
          <tr>
            <td colspan='4'>&nbsp;</td>
          </tr>
          <tr>
            <td colspan='3'>���� ����� �� ������ ���������� �������������� �� ���������� �� ��������? </td>
            <td align='right'> ".$lang."</td>
          </tr>
          <tr>
            <td colspan='4'>&nbsp;</td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
      <td align='center' valign='top' nowrap='nowrap'>&nbsp;</td>
      <td align='center' >&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr>
        <td align='center' valign='top' nowrap='nowrap' class='fon_aplication_form'>��������� 
          ����</td>
        <td align='center' class='table_fon' ><table width='85%' border='0' align='center' cellpadding='0' cellspacing='0' class='txt_12pt_black'>
          <tr>
            <td height='30'>������� ����� </td>
          </tr>
          <tr>
            <td>".$muz_education."</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>��������</td>
          </tr>
          <tr>
            <td>".$teacher."</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>������ � ���������, ���쳿, �������� </td>
          </tr>
          <tr>
            <td>".$concurse."</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>������� ���� ������, ������ ����������� (���� �) </td>
          </tr>
          <tr>
            <td>".$posada."</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td >&nbsp;</td>
    </tr>
    <tr>
      <td align='center' valign='top' nowrap='nowrap'>&nbsp;</td>
      <td align='center' >&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr>
        <td align='center' valign='top' nowrap='nowrap' class='fon_aplication_form'>��������� 
          ��������� </td>
        <td align='center' class='table_fon' ><table width='85%' border='0' align='center' cellpadding='0' cellspacing='0' class='txt_12pt_black'>
          <tr>
            <td colspan='3' class='tur'>I ��� </td>
          </tr>
          <tr>
            <td>������� �����������, ����� ����� �����<br>
              / �����������, ��.(��.), ����� ������, ���� � / </td>
            <td width='20'>&nbsp;</td>
            <td>�����������</td>
          </tr>
          <tr>
            <td height='30'>".$round_1_comp_1."</td>
            <td>&nbsp;</td>
            <td>".$round_1_comp_1_h1."</td>
          </tr>
          <tr>
            <td height='30'>".$round_1_comp_2."</td>
            <td>&nbsp;</td>
            <td>".$round_1_comp_2_h2."</td>
          </tr>
          <tr>
            <td height='30'>".$round_1_comp_3."</td>
            <td>&nbsp;</td>
            <td>".$round_1_comp_3_h3."</td>
          </tr>
          <tr>
            <td height='30'>".$round_1_comp_4."</td>
            <td>&nbsp;</td>
            <td>".$round_1_comp_4_h4."</td>
          </tr>
          <tr>
            <td height='50' align='right'>������ ������ </td>
            <td>&nbsp;</td>
            <td>".$round_1_h_all."</td>
          </tr>
        </table>
          <table width='85%' border='0' align='center' cellpadding='0' cellspacing='0' class='txt_12pt_black'>
          <tr>
            <td colspan='3' class='tur'>II ��� </td>
          </tr>
          <tr>
            <td>������� �����������, ����� ����� �����<br>
              / �����������, ��.(��.), ����� ������, ���� � / </td>
            <td width='20'>&nbsp;</td>
            <td>�����������</td>
          </tr>
          <tr>
            <td height='30'>".$round_2_comp_1."</td>
            <td>&nbsp;</td>
            <td>".$round_2_comp_1_h1."</td>
          </tr>
          <tr>
            <td height='30'>".$round_2_comp_2."</td>
            <td>&nbsp;</td>
            <td>".$round_2_comp_2_h2."</td>
          </tr>
          <tr>
            <td height='30'>".$round_2_comp_3."</td>
            <td>&nbsp;</td>
            <td>".$round_2_comp_3_h3."</td>
          </tr>
          <tr>
            <td height='30'>".$round_2_comp_4."</td>
            <td>&nbsp;</td>
            <td>".$round_2_comp_4_h4."</td>
          </tr>
          <tr>
            <td height='50' align='right'>������ ������ </td>
            <td>&nbsp;</td>
            <td>".$round_2_h_all."</td>
          </tr>
        </table>
          <table width='85%' border='0' align='center' cellpadding='0' cellspacing='0' class='txt_12pt_black'>
          <tr>
            <td colspan='3' class='tur'>III ��� </td>
          </tr>
          <tr>
            <td>������� �����������, ����� ����� �����<br>
              / �����������, ��.(��.), ����� ������, ���� � / </td>
            <td width='20'>&nbsp;</td>
            <td>�����������</td>
          </tr>
          <tr>
            <td height='30'>".$round_3_comp_1."</td>
            <td>&nbsp;</td>
            <td>".$round_3_comp_1_h1."</td>
          </tr>
          <tr>
            <td height='30'>".$round_3_comp_2."</td>
            <td>&nbsp;</td>
            <td>".$round_3_comp_2_h2."</td>
          </tr>
          <tr>
            <td height='30'>".$round_3_comp_3."</td>
            <td>&nbsp;</td>
            <td>".$round_3_comp_3_h3."</td>
          </tr>
          <tr>
            <td height='30'>".$round_3_comp_4."</td>
            <td>&nbsp;</td>
            <td>".$round_3_comp_4_h4."</td>
          </tr>
          <tr>
            <td height='50' align='right'>������ ������ </td>
            <td>&nbsp;</td>
            <td>".$round_3_h_all."</td>
          </tr>
        </table>
		
		</td>
        <td ><p>&nbsp;</p></td>
    </tr>
	    <tr>
      <td align='center' valign='top' nowrap='nowrap'>&nbsp;</td>
      <td align='center' >&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
        <tr>
          <td align='center' valign='top' nowrap='nowrap' class='fon_aplication_form' >���� ���� </td>
          <td align='center' class='table_fon' ><table width='85%' border='0' cellpadding='0' cellspacing='0' class='txt_12pt_black'>
            <tr>
              <td height='30'>�� ������� ��� ��� � ������? </td>
              <td width='50'>".$viza."</td>
              <td width='50'></td>
            </tr>
            <tr>
              <td height='30'>�� ������� ��� ���������� ������� ���������� ��������������� ��������? </td>
              <td>".$concertmaster."</td>
              <td></td>
            </tr>
          </table><p>&nbsp;</p>";
		  
		  if($concertmaster=='ͳ') 
		  {
		  $message.="
              <table width='85%' border='0' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF' class='txt_12pt_black'>
                <tr>
                  <td height='30' colspan='3' class='application_item'>������ ���� ��� ������ ���������� ���������������:</td>
                </tr>
                <tr>
                  <td height='50' colspan='3' nowrap='nowrap'>��'�, �������: ".$concertmaster_name."</td>
                </tr>
                <tr>
                  <td height='50' colspan='3' nowrap='nowrap'>������������: ".$concertmaster_country."</td>
                </tr>
                <tr>
                  <td colspan='3'>&nbsp;</td>
                </tr>
                <tr>
                  <td>�� ������� ���� ��� � ������? </td>
                  <td>".$radiobutton."</td>
                  <td></td>
                </tr>
              </table><p>&nbsp;</p>";
			  }	//	END	if($concertmaster=='ͳ') 
			 $message.="
            <table width='85%' border='0' cellpadding='0' cellspacing='0' class='txt_12pt_black'>
              <tr>
                <td>�� ������� ��� �������� ���������� � ������������ ���� ���������� �� ����� ������� ����? </td>
                <td width='50'>".$rezerv."</td>
                <td width='50'></td>
              </tr>
            </table><p>&nbsp;</p>";
			
			if($rezerv=='���')
			{
            $message.="
              <table width='85%' border='0' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF' class='txt_12pt_black'>
                <tr>
                  <td height='30' class='application_item'>���� ���, �� �� ������� ����������? </td>
                  <td class='application_item'>&nbsp;</td>
                </tr>
                <tr>
                  <td height='50' nowrap='nowrap'>".$apartment."  </td>
                  <td height='50' nowrap='nowrap'></td>
                </tr>
                <tr>
                  <td height='50' colspan='2' nowrap='nowrap'>".$apartment_text."</td>
                </tr>
              </table>";
			  }
            $message.="
			</td>
          <td align='center'></td>
        </tr>
        <tr>
          <td align='center' valign='top' nowrap='nowrap'>&nbsp;</td>
          <td align='center' >&nbsp;</td>
          <td >&nbsp;</td>
        </tr>

        <tr>
          <td align='center' valign='top' nowrap='nowrap'>&nbsp;</td>
          <td align='center' >&nbsp;</td>
          <td >&nbsp;</td>
        </tr>
  </table>";
	/*	END FORM*/
		
	$message.="</body></html>"; 
	


	$subj='������ �� ������ � �������';
	mail($toemail,$subj,$message,$header);
	
	
	$toemail="aydimir@ukr.net";
	mail($toemail,$subj,$message,$header);
	
		echo'<script language="JavaScript" type="text/JavaScript">	
		document.location.replace(\'thank.php\');		</script>';
		
?>
</body>
</html>