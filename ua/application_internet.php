<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
<title>̳��������� �������� ������� ���� ������ �������</title>
<link href="../classes.css" rel="stylesheet" type="text/css" />

<script language="JavaScript" type="text/javascript">
var	required = new Array("name","last_name", "data_burn", "email");
    required_show = new Array("��'�","�������", "���� ����������", "email");

function sendform() {
    var i, j, function_result=true;

   for(j=0; j<required.length; j++) {
    for (i=0; i<document.forms[0].length; i++) {
    	if (document.forms[0].elements[i].name == required[j] && document.forms[0].elements[i].value == "" ) {
    	 // alert('B���i�� ' + required_show[j]);
		document.forms[0].elements[i].focus();
		document.forms[0].elements[i].className='error_form';
    	function_result=false;	
    	}
    }
   }
   //	CHECK email
   if (document.forms[0].email.value.indexOf('@',0) == -1) {
   document.forms[0].email.focus();
   document.forms[0].email.className='error_form';
   function_result=false;
   }
   //	CHECK data
   if ((document.forms[0].data_burn.value.indexOf('-',0) == -1) or (document.forms[0].data_burn.value='��-��-����')) {
   document.forms[0].data_burn.focus();
   document.forms[0].data_burn.className='error_form';
   function_result=false;
   }

    return function_result;
	
}
	
</script>
<script language="JavaScript" type="text/javascript"  >
</script>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>

<body>

 <div id="container_min_max_size">
 	<?php  include('template.html'); ?>
    
<div id="content">
 	<div id="left">&nbsp;</div>
 
 
 	<div id="center">
 	  <div id="center_content" class="txt_12">
      <h1>������</h1>
      <p>&nbsp;</p>
      
      <form  method="post"  action="send_application.php" onsubmit="return sendform();">
 	    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F5F5F5">
          <tr>
            <td width="62%" height="50" align="left" valign="top" ></tr>
          <tr>
            <td align="center" class="table_fon">
            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                <tr>
                  <td height="40" align="left" valign="top" nowrap="nowrap">��������
                    <select name="nomin" id="nomin" class="txt_12pt_black" onchange="javascript: if(this.value=='������� �ϲ�') document.getElementById('sing').style.display='block'; else document.getElementById('sing').style.display='none';">
                        <option value="�����ϲ���">�����ϲ���</option>
                        <option value="�������">�������</option>
                        <option value="²��������">²��������</option>
                        <option value="������� �ϲ�" >������� �ϲ�</option>
                    </select></td>
                  <td align="right" valign="top" nowrap="nowrap">
				  <div id="sing" style="display:none"> �������� ��������
                    <select name="select_sing" id="select_sing" class="txt_12pt_black" id="select_sing">
                            <option value=""></option>
                            <option value="�������">�������</option>
                            <option value="����-�������">����-�������</option>
                            <option value="����������">����������</option>
                            <option value="�����">�����</option>
                            <option value="�������">�������</option>
                            <option value="���">��� </option>
                        </select>
                  </div></td>
                </tr>
                <tr>
                  <td height="40" align="left" nowrap="nowrap">��'�
                    <input name="name" type="text" class="txt_12pt_black" size="28" onfocus="clear_form" /></td>
                  <td align="right" nowrap="nowrap">������� 
                    <input name="last_name" type="text" class="txt_12pt_black" size="40" /></td>
                </tr>
                <tr>
                  <td height="40" align="left"  nowrap="nowrap">���� ���������� 
                    <input name="data_burn" type="text" class="txt_12pt_black" onfocus="javascript: this.value=''" value="��-��-����" size="12" maxlength="10" />
                    &nbsp;</td>
                  <td align="right" nowrap="nowrap">�����, ��� �� �������������
                      <input name="state" type="text" class="txt_12pt_black" size="40" /></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td align="center" >&nbsp;</td>
          </tr>
          <tr>
            <td align="center" class="table_fon"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black"  >
                <tr>
                  <td height="70" colspan="3" align="left" valign="top">������� ������ � ��������</td>
                  <td valign="top"><textarea name="adress1" cols="60" rows="3" class="txt_12pt_black" id="adress1"></textarea></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">������ ����������� 15-25 �������� 2012 ����, ���� ���� �������������� �� �������</td>
                  <td><textarea name="adress2" cols="60" rows="3" class="txt_12pt_black" id="adress2"></textarea></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left" nowrap="nowrap">&nbsp;����</td>
                   <td><input name="fax" type="text" class="txt_12pt_black" id="fax" size="63" /></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">�������&nbsp;</td>
                  <td><input name="tel" type="text" class="txt_12pt_black" id="tel" size="63" /></td>
                </tr>
                <tr>
                  <td colspan="3" align="left">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">�������� �������(�) </td>
                  <td><input name="mob" type="text" class="txt_12pt_black" id="mob" size="63" /></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">e-mail </td>
                  <td><input name="email" type="text" class="txt_12pt_black" id="email" size="63" /></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">����� ������ �� ����䳺��? </td>
                  <td><input name="lang_own" type="text" class="txt_12pt_black" id="lang_own" size="63" /></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">���� ����� �� ������ ���������� �������������� �� ���������� �� ��������? </td>
                  <td align="right"><input name="lang" type="radio" value="����������" checked="checked" />
                    ����������
                    <input name="lang" type="radio" value="����������" />
                    ����������
                     <input name="lang" type="radio" value="���������" />
                    ���������
                     </td>
                </tr>
                <tr>
                  <td colspan="4">&nbsp;</td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td align="center" >&nbsp;</td>
          </tr>
          <tr>
            <td align="center" class="table_fon" ><table width="70%" border="0" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                <tr>
                  <td height="30">������� ����� <i>(�� ������ �������� ������� � ���� �� ���������  ��� ���������, �������  ������� ��� ������� ����� �  �����������  �� ����������� ���� ���������) </i></td>
                </tr>
                <tr>
                  <td><textarea name="muz_education" cols="70" rows="5" class="txt_12pt_black" id="muz_education"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>�������� <i>(�� ����������� ������ �������� � ������� ��������)</i></td>
                </tr>
                <tr>
                  <td><textarea name="teacher" cols="70" rows="5" class="txt_12pt_black" id="teacher"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>������ � ���������, ���쳿, �������� </td>
                </tr>
                <tr>
                  <td><textarea name="concurse" cols="70" rows="5" class="txt_12pt_black" id="concurse"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>������� ���� ������, ������ ����������� (���� �) </td>
                </tr>
                <tr>
                  <td><textarea name="posada" cols="70" rows="5" class="txt_12pt_black" id="posada"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td align="center" >&nbsp;</td>
          </tr>
          <tr>
            <td align="center" class="table_fon" ><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                <tr>
                  <td colspan="3" class="tur">I ��� </td>
                </tr>
                <tr>
                  <td>������� �����������, ����� ����� �����<br />
                    / ����������, ��.(��.), ����� ������, ���� � / </td>
                  <td width="20">&nbsp;</td>
                  <td>�����������</td>
                </tr>
                <tr>
                  <td height="30"><input name="round_1_comp_1" type="text" class="txt_12pt_black" id="round_1_comp_1" size="70" /></td>
                  <td>&nbsp;</td>
                  <td><input name="round_1_comp_1_h1" type="text" id="t1_h1" class="txt_12pt_black" /></td>
                </tr>
                <tr>
                  <td height="30"><input name="round_1_comp_2" type="text" class="txt_12pt_black" id="round_1_comp_1" size="70" /></td>
                  <td>&nbsp;</td>
                  <td><input name="round_1_comp_2_h2" type="text" id="round_1_comp_2_h2" class="txt_12pt_black" /></td>
                </tr>
                <tr>
                  <td height="30"><input name="round_1_comp_3" type="text" class="txt_12pt_black" id="round_1_comp_3" size="70" /></td>
                  <td>&nbsp;</td>
                  <td><input name="round_1_comp_3_h3" type="text" id="round_1_comp_3_h3" class="txt_12pt_black" /></td>
                </tr>
                <tr>
                  <td height="30"><input name="round_1_comp_4" type="text" class="txt_12pt_black" id="round_1_comp_4" size="70" /></td>
                  <td>&nbsp;</td>
                  <td><input name="round_1_comp_4_h4" type="text" id="round_1_comp_4_h4" class="txt_12pt_black" /></td>
                </tr>
                <tr>
                  <td height="50" align="right">������ ������ </td>
                  <td>&nbsp;</td>
                  <td><input name="round_1_h_all" type="text" id="round_1_h_all" class="txt_12pt_black" /></td>
                </tr>
              </table>
                <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                  <tr>
                    <td colspan="3" class="tur">II ��� </td>
                  </tr>
                  <tr>
                    <td>������� �����������, ����� ����� �����<br />
                      / ����������, ��.(��.), ����� ������, ���� � / </td>
                    <td width="20">&nbsp;</td>
                    <td>�����������</td>
                  </tr>
                  <tr>
                    <td height="30"><input name="round_2_comp_1" type="text" class="txt_12pt_black" id="round_2_comp_1" size="70" /></td>
                    <td>&nbsp;</td>
                    <td><input name="round_2_comp_1_h1" type="text" id="round_2_comp_1_h1" class="txt_12pt_black" /></td>
                  </tr>
                  <tr>
                    <td height="30"><input name="round_2_comp_2" type="text" class="txt_12pt_black" id="round_2_comp_2" size="70" /></td>
                    <td>&nbsp;</td>
                    <td><input name="round_2_comp_2_h2" type="text" id="round_2_comp_2_h2" class="txt_12pt_black" /></td>
                  </tr>
                  <tr>
                    <td height="30"><input name="round_2_comp_3" type="text" class="txt_12pt_black" id="round_2_comp_3" size="70" /></td>
                    <td>&nbsp;</td>
                    <td><input name="round_2_comp_3_h3" type="text" id="round_2_comp_3_h3" class="txt_12pt_black" /></td>
                  </tr>
                  <tr>
                    <td height="30"><input name="round_2_comp_4" type="text" class="txt_12pt_black" id="round_2_comp_4" size="70" /></td>
                    <td>&nbsp;</td>
                    <td><input name="round_2_comp_4_h4" type="text" id="round_2_comp_4_h4" class="txt_12pt_black" /></td>
                  </tr>
                  <tr>
                    <td height="50" align="right">������ ������ </td>
                    <td>&nbsp;</td>
                    <td><input name="round_2_h_all" type="text" id="round_2_h_all" class="txt_12pt_black" /></td>
                  </tr>
                </table>
              <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                  <tr>
                    <td colspan="3" class="tur">III ��� </td>
                  </tr>
                  <tr>
                    <td>������� �����������, ����� ����� �����<br />
                      / ����������, ��.(��.), ����� ������, ���� � / </td>
                    <td width="20">&nbsp;</td>
                    <td>�����������</td>
                  </tr>
                  <tr>
                    <td height="30"><input name="round_3_comp_1" type="text" class="txt_12pt_black" id="round_3_comp_1" size="70" /></td>
                    <td>&nbsp;</td>
                    <td><input name="round_3_comp_1_h1" type="text" id="round_3_comp_1_h1" class="txt_12pt_black" /></td>
                  </tr>
                  <tr>
                    <td height="30"><input name="round_3_comp_2" type="text" class="txt_12pt_black" id="round_3_comp_2" size="70" /></td>
                    <td>&nbsp;</td>
                    <td><input name="round_3_comp_2_h2" type="text" id="round_3_comp_2_h2" class="txt_12pt_black" /></td>
                  </tr>
                  <tr>
                    <td height="30"><input name="round_3_comp_3" type="text" class="txt_12pt_black" id="round_3_comp_3" size="70" /></td>
                    <td>&nbsp;</td>
                    <td><input name="round_3_comp_3_h3" type="text" id="round_3_comp_3_h3" class="txt_12pt_black" /></td>
                  </tr>
                  <tr>
                    <td height="30"><input name="round_3_comp_4" type="text" class="txt_12pt_black" id="round_3_comp_4" size="70" /></td>
                    <td>&nbsp;</td>
                    <td><input name="round_3_comp_4_h4" type="text" id="round_3_comp_4_h4" class="txt_12pt_black" /></td>
                  </tr>
                  <tr>
                    <td height="50" align="right">������ ������ </td>
                    <td>&nbsp;</td>
                    <td><input name="round_3_h_all" type="text" id="round_3_h_all" class="txt_12pt_black" /></td>
                  </tr>
              </table></td>
          </tr>
          <tr>
            <td align="center" >&nbsp;</td>
          </tr>
          <tr>
            <td align="center" class="table_fon" ><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                <tr>
                  <td height="30" align="left">�� ������� ��� ��� � ������? </td>
                  <td width="50" align="left"><input type="radio" name="viza" id="viza" value="���" />
                    ��� </td>
                  <td width="50" align="left"><input type="radio" name="viza" id="viza" value="ͳ" />
                    ͳ</td>
                </tr>
                <tr>
                  <td height="30" align="left">�� ������ ��� ��������� ������� ���������� ��������������� ��������? </td>
                  <td align="left"><input name="concertmaster" type="radio" value="���" onfocus="javascript: document.getElementById('other_data1').style.display='none'; this.checked='checked';" />
                    ���</td>
                  <td align="left"><input name="concertmaster" type="radio"  value="ͳ" onfocus="javascript: document.getElementById('other_data1').style.display='block'; this.checked='checked';" />
                    ͳ</td>
                </tr>
              </table>
                <div id="other_data1" style="display: none">
                  <table width="85%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="txt_12pt_black">
                    <tr>
                      <td height="30" colspan="3" class="application_item">������ ��� ��� ������ ���������� ���������������:</td>
                    </tr>
                    <tr>
                      <td height="50" colspan="3" nowrap="nowrap">��'�, �������
                        <input name="concertmaster_name" id="concertmaster_name" type="text" class="txt_12pt_black" size="70" /></td>
                    </tr>
                    <tr>
                      <td height="50" colspan="3" nowrap="nowrap">������������
                        <input name="concertmaster_country" id="concertmaster_country" type="text" class="txt_12pt_black" size="70" /></td>
                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>�� ������� ���� ��� � ������? </td>
                      <td><input name="radiobutton" type="radio" value="���" />
                        ���</td>
                      <td><input name="radiobutton" type="radio" value="ͳ" />
                        ͳ </td>
                    </tr>
                  </table>
                </div>
              <p>&nbsp;</p>
              <table width="85%" border="0" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                  <tr>
                    <td>�� ������� ��� �������� ���������� � ����������� ���� ���������� �� ����� ������� ����? </td>
                    <td width="50"><input type="radio" name="rezerv" value="���" onclick="javascript: document.getElementById('other_data2').style.display='block'; " />
                      ��� </td>
                    <td width="50"><input type="radio" name="rezerv" value="ͳ" onclick="javascript: document.getElementById('other_data2').style.display='none'; " />
                      ͳ</td>
                  </tr>
                </table>
              <div id="other_data2" style="display: none">
                  <table width="85%" border="0" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                    <tr>
                      <td height="30" class="application_item">���� ���, �� �� ������ ����������? </td>
                      <td class="application_item">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">� ����� ***** (1-����� �� $150 �� ����) </td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="� ����� *****" /></td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">� ����� *** (1-����� �� $70 �� ����)</td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="� ����� ***" /></td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">� ���������� ������ (1-������� �������� �� $30 �� ����) </td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="� ���������� ������" /></td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">� ���������� (�� $20 �� ����)</td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="� ����������" /></td>
                    </tr>
                    <tr>
                      <td height="50" colspan="2" nowrap="nowrap"><textarea name="apartment_text" cols="75" rows="5" class="txt_12pt_black" id="apartment_text" onfocus="javascript: this.value=''" >ʳ������ ��� �� ����-�� ���� ��������� ���� ���� ���������� </textarea></td>
                    </tr>
                  </table>
              </div></td>
          </tr>
          <tr>
            <td align="center" >&nbsp;</td>
          </tr>
          <tr>
            <td align="center" class="table_fon" ><table width="85%" border="0" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                <tr>
                  <td height="30" align="left" class="txt_12pt_blac_bold">�� ������ � �������� ���������� ���� � �� �� ��������� ��� ���������: </td>
                </tr>
                <tr>
                  <td align="left"><ul>
                      <p>&nbsp; </p>
                    <li>���� ��������� ������� ��������, �� ���������� �� �������� <br />
                      (�� ��������� �������� � ���� �������� ��� ����������)</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>���� ������� ��� ������� �����, ��� �������� - ������ � ���� ��������</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>������ �������� (������) � ����������� ������</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>�� ���������� (���� �������� � �����  9x12 ��., ������� ��� ������������� ����������; ���� � ������������ ������ � ���������� �������� �� ����� 1600�1200)</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>��ﳿ ������� �������� ����� �������� (� ��� ��������)</li>
                    </p>
                    </ul>
                      <p>�� ���������� ��������� ������ ��������� ����������� ������ 
                        �� ������ <a href="mailto:kolgasun@gmail.com">office@competition.com.ua</a> �� ����������� �������� � ������� � ��� �����. <br />
                                <br />
                        ϳ��� ��������� ��� ���������� ��������� ��������� �������� 
                        ������� ������������ ��� ������ � ������� �� ���� ��������� 
                        ������, ������� � ������. � ��� ����������� ������� �������� 
                        ����������. ��������� �������� �� ���� ������������� �� 
                        ������ ��������� �� ��� ����������� ������. ������� ����� 
                        ������� ������: �� 25 ������� 2012 ���� (�� ���� ��������), 
                        ��  25 ������� 2012 ���� (������).</p>
                    <p>&nbsp;</p>
                    <p><strong>����������, ��������� ���� 
                      � ��� ������, � ���������.<br />
                      � ����������� ������� ������(��) � ����������� �� ����������.
                          <input name="checkbox" type="checkbox" value="checkbox"
						  onClick="javascript: if(this.checked)
						  document.getElementById('submit').disabled=0; 
						  else 
						  document.getElementById('submit').disabled=1;"/>
                        </strong></p>
                    <p>
						  <input name="submit"  id="submit" type="submit"  value="³��������" disabled="disabled"/>
                    </p>
                    <p>&nbsp;</p></td>
                </tr>
            </table></td>
          </tr>
        </table>
        </form>
        <p>&nbsp;</p>
      </div>
</div>
</div>
 </div>
</body>
</html>
