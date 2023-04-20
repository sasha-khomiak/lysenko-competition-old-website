<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
<title>Міжнародний музичний конкурс імені Миколи Лисенка</title>
<link href="../classes.css" rel="stylesheet" type="text/css" />

<script language="JavaScript" type="text/javascript">
var	required = new Array("name","last_name", "data_burn", "email");
    required_show = new Array("Ім'я","Прізвище", "Дата народження", "email");

function sendform() {
    var i, j, function_result=true;

   for(j=0; j<required.length; j++) {
    for (i=0; i<document.forms[0].length; i++) {
    	if (document.forms[0].elements[i].name == required[j] && document.forms[0].elements[i].value == "" ) {
    	 // alert('Bведiть ' + required_show[j]);
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
   if ((document.forms[0].data_burn.value.indexOf('-',0) == -1) or (document.forms[0].data_burn.value='дд-мм-рррр')) {
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
      <h1>Заявка</h1>
      <p>&nbsp;</p>
      
      <form  method="post"  action="send_application.php" onsubmit="return sendform();">
 	    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F5F5F5">
          <tr>
            <td width="62%" height="50" align="left" valign="top" ></tr>
          <tr>
            <td align="center" class="table_fon">
            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                <tr>
                  <td height="40" align="left" valign="top" nowrap="nowrap">Номінація
                    <select name="nomin" id="nomin" class="txt_12pt_black" onchange="javascript: if(this.value=='СОЛЬНИЙ СПІВ') document.getElementById('sing').style.display='block'; else document.getElementById('sing').style.display='none';">
                        <option value="ФОРТЕПІАНО">ФОРТЕПІАНО</option>
                        <option value="СКРИПКА">СКРИПКА</option>
                        <option value="ВІОЛОНЧЕЛЬ">ВІОЛОНЧЕЛЬ</option>
                        <option value="СОЛЬНИЙ СПІВ" >СОЛЬНИЙ СПІВ</option>
                    </select></td>
                  <td align="right" valign="top" nowrap="nowrap">
				  <div id="sing" style="display:none"> Голосова категорія
                    <select name="select_sing" id="select_sing" class="txt_12pt_black" id="select_sing">
                            <option value=""></option>
                            <option value="сопрано">сопрано</option>
                            <option value="мецо-сопрано">мецо-сопрано</option>
                            <option value="контральто">контральто</option>
                            <option value="тенор">тенор</option>
                            <option value="баритон">баритон</option>
                            <option value="бас">бас </option>
                        </select>
                  </div></td>
                </tr>
                <tr>
                  <td height="40" align="left" nowrap="nowrap">Ім'я
                    <input name="name" type="text" class="txt_12pt_black" size="28" onfocus="clear_form" /></td>
                  <td align="right" nowrap="nowrap">Прізвище 
                    <input name="last_name" type="text" class="txt_12pt_black" size="40" /></td>
                </tr>
                <tr>
                  <td height="40" align="left"  nowrap="nowrap">Дата народження 
                    <input name="data_burn" type="text" class="txt_12pt_black" onfocus="javascript: this.value=''" value="дд-мм-рррр" size="12" maxlength="10" />
                    &nbsp;</td>
                  <td align="right" nowrap="nowrap">Країна, яку Ви представляєте
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
                  <td height="70" colspan="3" align="left" valign="top">Постійна адреса з індексом</td>
                  <td valign="top"><textarea name="adress1" cols="60" rows="3" class="txt_12pt_black" id="adress1"></textarea></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">Адреса перебування 15-25 листопад 2012 року, якщо вона відрізнятиметься від постійної</td>
                  <td><textarea name="adress2" cols="60" rows="3" class="txt_12pt_black" id="adress2"></textarea></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left" nowrap="nowrap">&nbsp;Факс</td>
                   <td><input name="fax" type="text" class="txt_12pt_black" id="fax" size="63" /></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">Телефон&nbsp;</td>
                  <td><input name="tel" type="text" class="txt_12pt_black" id="tel" size="63" /></td>
                </tr>
                <tr>
                  <td colspan="3" align="left">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">Мобільний телефон(и) </td>
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
                  <td colspan="3" align="left">Якими мовами Ви володієте? </td>
                  <td><input name="lang_own" type="text" class="txt_12pt_black" id="lang_own" size="63" /></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">Якою мовою Ви бажаєте отримувати кореспонденцію та інформацію від Конкурсу? </td>
                  <td align="right"><input name="lang" type="radio" value="українською" checked="checked" />
                    українською
                    <input name="lang" type="radio" value="англійською" />
                    англійською
                     <input name="lang" type="radio" value="російською" />
                    російською
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
                  <td height="30">Музична освіта <i>(усі музичні навчальні заклади в яких Ви навчалися  або навчаєтесь, отримані  дипломи про музичну освіту і  кваліфікації  із зазначенням року отримання) </i></td>
                </tr>
                <tr>
                  <td><textarea name="muz_education" cols="70" rows="5" class="txt_12pt_black" id="muz_education"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Педагоги <i>(із зазначенням періоду навчання в кожного педагога)</i></td>
                </tr>
                <tr>
                  <td><textarea name="teacher" cols="70" rows="5" class="txt_12pt_black" id="teacher"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Участь у конкурсах, премії, нагороди </td>
                </tr>
                <tr>
                  <td><textarea name="concurse" cols="70" rows="5" class="txt_12pt_black" id="concurse"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Постійне місце роботи, посада конкурсанта (якщо є) </td>
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
                  <td colspan="3" class="tur">I тур </td>
                </tr>
                <tr>
                  <td>Вказати композитора, повну назву твору<br />
                    / тональність, тв.(ор.), назви частин, якщо є / </td>
                  <td width="20">&nbsp;</td>
                  <td>хронометраж</td>
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
                  <td height="50" align="right">Всього хвилин </td>
                  <td>&nbsp;</td>
                  <td><input name="round_1_h_all" type="text" id="round_1_h_all" class="txt_12pt_black" /></td>
                </tr>
              </table>
                <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                  <tr>
                    <td colspan="3" class="tur">II тур </td>
                  </tr>
                  <tr>
                    <td>Вказати композитора, повну назву твору<br />
                      / тональність, тв.(ор.), назви частин, якщо є / </td>
                    <td width="20">&nbsp;</td>
                    <td>хронометраж</td>
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
                    <td height="50" align="right">Всього хвилин </td>
                    <td>&nbsp;</td>
                    <td><input name="round_2_h_all" type="text" id="round_2_h_all" class="txt_12pt_black" /></td>
                  </tr>
                </table>
              <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                  <tr>
                    <td colspan="3" class="tur">III тур </td>
                  </tr>
                  <tr>
                    <td>Вказати композитора, повну назву твору<br />
                      / тональність, тв.(ор.), назви частин, якщо є / </td>
                    <td width="20">&nbsp;</td>
                    <td>хронометраж</td>
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
                    <td height="50" align="right">Всього хвилин </td>
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
                  <td height="30" align="left">Чи потрібна Вам віза в Україну? </td>
                  <td width="50" align="left"><input type="radio" name="viza" id="viza" value="Так" />
                    Так </td>
                  <td width="50" align="left"><input type="radio" name="viza" id="viza" value="Ні" />
                    Ні</td>
                </tr>
                <tr>
                  <td height="30" align="left">Чи потрібні Вам безоплатні послуги офіційного концертмейстера Конкурсу? </td>
                  <td align="left"><input name="concertmaster" type="radio" value="Так" onfocus="javascript: document.getElementById('other_data1').style.display='none'; this.checked='checked';" />
                    Так</td>
                  <td align="left"><input name="concertmaster" type="radio"  value="Ні" onfocus="javascript: document.getElementById('other_data1').style.display='block'; this.checked='checked';" />
                    Ні</td>
                </tr>
              </table>
                <div id="other_data1" style="display: none">
                  <table width="85%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="txt_12pt_black">
                    <tr>
                      <td height="30" colspan="3" class="application_item">Вкажіть дані про Вашого особистого концертмейстера:</td>
                    </tr>
                    <tr>
                      <td height="50" colspan="3" nowrap="nowrap">Ім'я, Прізвище
                        <input name="concertmaster_name" id="concertmaster_name" type="text" class="txt_12pt_black" size="70" /></td>
                    </tr>
                    <tr>
                      <td height="50" colspan="3" nowrap="nowrap">Громадянство
                        <input name="concertmaster_country" id="concertmaster_country" type="text" class="txt_12pt_black" size="70" /></td>
                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Чи потрібна йому віза в Україну? </td>
                      <td><input name="radiobutton" type="radio" value="Так" />
                        Так</td>
                      <td><input name="radiobutton" type="radio" value="Ні" />
                        Ні </td>
                    </tr>
                  </table>
                </div>
              <p>&nbsp;</p>
              <table width="85%" border="0" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                  <tr>
                    <td>Чи потрібна Вам допомога оргкомітету в резервуванні місця проживання на період першого туру? </td>
                    <td width="50"><input type="radio" name="rezerv" value="Так" onclick="javascript: document.getElementById('other_data2').style.display='block'; " />
                      Так </td>
                    <td width="50"><input type="radio" name="rezerv" value="Ні" onclick="javascript: document.getElementById('other_data2').style.display='none'; " />
                      Ні</td>
                  </tr>
                </table>
              <div id="other_data2" style="display: none">
                  <table width="85%" border="0" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                    <tr>
                      <td height="30" class="application_item">Якщо так, де Ви бажаєте зупинитись? </td>
                      <td class="application_item">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">у готелі ***** (1-місний від $150 на добу) </td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="у готелі *****" /></td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">у готелі *** (1-місний від $70 на добу)</td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="у готелі ***" /></td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">у приватному секторі (1-кімнатна квартира від $30 на добу) </td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="у приватному секторі" /></td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">у гуртожитку (від $20 на добу)</td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="у гуртожитку" /></td>
                    </tr>
                    <tr>
                      <td height="50" colspan="2" nowrap="nowrap"><textarea name="apartment_text" cols="75" rows="5" class="txt_12pt_black" id="apartment_text" onfocus="javascript: this.value=''" >Кількість осіб та будь-які інші побажання щодо місця проживання </textarea></td>
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
                  <td height="30" align="left" class="txt_12pt_blac_bold">Ця Заявка є частиною конкурсних умов і до неї додаються такі документи: </td>
                </tr>
                <tr>
                  <td align="left"><ul>
                      <p>&nbsp; </p>
                    <li>копія відповідних сторінок паспорта, які засвідчують вік учасника <br />
                      (за відсутністю паспорту – копія свідоцтва про народження)</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>копія диплому про музичну освіту, для студентів - довідка з місця навчання</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>творча біографія (резюме) у друкованому вигляді</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>дві фотокартки (якщо друковані – розмір  9x12 см., придатні для поліграфічного відтворення; якщо в електронному форматі – розподільча здатність не менше 1600х1200)</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>копії дипломів лауреата інших конкурсів (у разі наявності)</li>
                    </p>
                    </ul>
                      <p>Всі вищевказані документи бажано надсилати електронною поштою 
                        на адресу <a href="mailto:kolgasun@gmail.com">office@competition.com.ua</a> із зазначенням номінації і прізвища в темі листа. <br />
                                <br />
                        Після отримання всіх необхідних документів Оргкомітет Конкурсу 
                        надсилає підтвердження про участь у Конкурсі на Вашу контактну 
                        адресу, вказану у Заявці. У разі необхідності надсилає офіційне 
                        запрошення. Оргкомітет конкурсу не несе відповідальності за 
                        втрату документів під час пересилання поштою. Останній термін 
                        подання Заявки: до 25 вересня 2012 року (на сайті Конкурсу), 
                        до  25 вересня 2012 року (поштою).</p>
                    <p>&nbsp;</p>
                    <p><strong>Інформація, викладена мною 
                      в цій Заявці, є правдивою.<br />
                      З Конкурсними умовами згоден(на) і зобов’язуюсь їх виконувати.
                          <input name="checkbox" type="checkbox" value="checkbox"
						  onClick="javascript: if(this.checked)
						  document.getElementById('submit').disabled=0; 
						  else 
						  document.getElementById('submit').disabled=1;"/>
                        </strong></p>
                    <p>
						  <input name="submit"  id="submit" type="submit"  value="Відправити" disabled="disabled"/>
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
