<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
<title>The Third Mykola Lysenko International Music Competition</title>
<link href="../classes.css" rel="stylesheet" type="text/css" />

<script language="JavaScript" type="text/javascript">
var	required = new Array("name","last_name", "data_burn", "email");
    required_show = new Array("First name","Surname", "Date of Birth", "email");

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
   if ((document.forms[0].data_burn.value.indexOf('-',0) == -1) or (document.forms[0].data_burn.value='dd-mm-yyyy')) {
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
      <h1>Online Application Form</h1>
      <p>&nbsp;</p>
      
      <form  action="send_application.php"  method="post" onsubmit="return sendform();">
 	    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F5F5F5">
          <tr>
            <td width="62%" height="50" align="left" valign="top" >
          </tr>
          <tr>
            <td align="center" class="table_fon">
            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                <tr>
                  <td height="40" align="left" valign="top" nowrap="nowrap">Your instrument
                    <select name="nomin" id="nomin" class="txt_12pt_black" onchange="javascript: if(this.value=='SINGING') document.getElementById('sing').style.display='block'; else document.getElementById('sing').style.display='none';">
                        <option value="PIANO">PIANO</option>
                  		<option value="VIOLIN">VIOLIN</option>
                 		<option value="CELLO">CELLO</option>
                  		<option value="SINGING">SOLO SINGING</option>
                    </select></td>
                  <td align="right" valign="top" nowrap="nowrap">
				  <div id="sing" style="display:none"> voice
                    <select name="select_sing" id="select_sing" class="txt_12pt_black" id="select_sing">
                            <option value=""></option>
							<option value="soprano">soprano</option>
							<option value="mezzosoprano">mezzosoprano</option>
							<option value="contralto">contralto</option>
							<option value="tenor">tenor</option>
							<option value="baritone">baritone</option>
							<option value="bass">bass</option>
                        </select>
                  </div></td>
                </tr>
                <tr>
                  <td height="40" align="left" nowrap="nowrap">First name 
                    <input name="name" type="text" class="txt_12pt_black" size="28" onfocus="clear_form" /></td>
                  <td align="right" nowrap="nowrap">Surname
                    <input name="last_name" type="text" class="txt_12pt_black" size="40" /></td>
                </tr>
                <tr>
                  <td height="40" align="left"  nowrap="nowrap">Date of Birth 
                    <input name="data_burn" type="text" class="txt_12pt_black" onfocus="javascript: this.value=''" value="dd-mm-yyyy" size="12" maxlength="10" />
                    &nbsp;</td>
                  <td align="right" nowrap="nowrap">Nationality
                    <input name="state" type="text" class="txt_12pt_black" size="40" /></td></tr>
            </table></td>
          </tr>
          <tr>
            <td align="center" >&nbsp;</td>
          </tr>
          <tr>
            <td align="center" class="table_fon"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black"  >
                <tr>
                  <td height="70" colspan="3" align="left" valign="top">Permanent postal address</td>
                  <td valign="top"><textarea name="adress1" cols="60" rows="3" class="txt_12pt_black" id="adress1"></textarea></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">Address of stay 15-25 November 2012, if different from permanent</td>
                  <td><textarea name="adress2" cols="60" rows="3" class="txt_12pt_black" id="adress2"></textarea></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left" nowrap="nowrap">&nbsp;Fax number</td>
                   <td><input name="fax" type="text" class="txt_12pt_black" id="fax" size="63" /></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">Phone number&nbsp;</td>
                  <td><input name="tel" type="text" class="txt_12pt_black" id="tel" size="63" /></td>
                </tr>
                <tr>
                  <td colspan="3" align="left">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">Mobile number(s)</td>
                  <td><input name="mob" type="text" class="txt_12pt_black" id="mob" size="63" /></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">e-mail</td>
                  <td><input name="email" type="text" class="txt_12pt_black" id="email" size="63" /></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">Languages spoken?</td>
                  <td><input name="lang_own" type="text" class="txt_12pt_black" id="lang_own" size="63" /></td>
                </tr>
                <tr align="left">
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3" align="left">Please choose your preferred language for correspondence? </td>
                  <td align="right"><input name="lang" type="radio" value="Ukrainian" checked="checked" />
                    Ukrainian
                    <input name="lang" type="radio" value="English" />
                    English
                     <input name="lang" type="radio" value="Russian" />
                    Russian</td>
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
                  <td height="30">Music education <i>(please give details of all musical institutions attented and details of all diplomas obtained and qualifications achieved) </i></td>
                </tr>
                <tr>
                  <td><textarea name="muz_education" cols="70" rows="5" class="txt_12pt_black" id="muz_education"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Teachers <i>(names of all your teachers in your selected discipline indicating dates of your study with them)</i></td>
                </tr>
                <tr>
                  <td><textarea name="teacher" cols="70" rows="5" class="txt_12pt_black" id="teacher"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Awards, prizes, participation in competitions</td>
                </tr>
                <tr>
                  <td><textarea name="concurse" cols="70" rows="5" class="txt_12pt_black" id="concurse"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>If you are on a permanent job, indicate where, and what is your position</td>
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
                  <td colspan="3" class="tur">First round</td>
                </tr>
                <tr>
                  <td>Please fill in the composer's name, full title of the piece with key and opus information if available, names of movements if applicable. For non-standart repertoire please enclose music photocopies and send to the Competition office</td>
                  <td width="20">&nbsp;</td>
                  <td>timing</td>
                </tr>
                <tr>
                  <td height="30"><input name="round_1_comp_1" type="text" class="txt_12pt_black" id="round_1_comp_1" size="70" /></td>
                  <td>&nbsp;</td>
                  <td><input name="round_1_comp_1_h1" type="text" id="t1_h1" class="txt_12pt_black" /></td>
                </tr>
                <tr>
                  <td height="30"><input name="round_1_comp_2" type="text" class="txt_12pt_black" id="round_1_comp_2" size="70" /></td>
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
                  <td height="50" align="right">Total minutes</td>
                  <td>&nbsp;</td>
                  <td><input name="round_1_h_all" type="text" id="round_1_h_all" class="txt_12pt_black" /></td>
                </tr>
              </table>
                <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                  <tr>
                    <td colspan="3" class="tur">Second round</td>
                  </tr>
                  <tr>
                    <td>Please fill in the composer's name, full title of the piece with key and opus information if available, names of movements if applicable. For non-standart repertoire please enclose music photocopies and send to the Competition office</td>
                    <td width="20">&nbsp;</td>
                    <td>timing</td>
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
                    <td height="50" align="right">Total minutes</td>
                    <td>&nbsp;</td>
                    <td><input name="round_2_h_all" type="text" id="round_2_h_all" class="txt_12pt_black" /></td>
                  </tr>
                </table>
              <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                  <tr>
                    <td colspan="3" class="tur">Final round</td>
                  </tr>
                  <tr>
                    <td>Please fill in the composer's name, full title of the piece with key and opus information if available, names of movements if applicable. For non-standart repertoire please enclose music photocopies and send to the Competition office</td>
                    <td width="20">&nbsp;</td>
                    <td>timing</td>
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
                    <td height="50" align="right">Total minutes</td>
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
                  <td height="30" align="left">Do you require a visa for Ukraine? </td>
                  <td width="50" align="left"><input type="radio" name="viza" id="viza" value="yes" />
                    yes</td>
                  <td width="50" align="left"><input type="radio" name="viza" id="viza" value="no" />
                    no</td>
                </tr>
                <tr>
                  <td height="30" align="left">Do you require free services of a Competition official accompanist? </td>
                  <td align="left"><input name="concertmaster" type="radio" value="yes" onclick="javascript: document.getElementById('other_data1').style.display='block'; this.checked='checked';" />
                    yes</td>
                  <td align="left"><input name="concertmaster" type="radio"  value="no" onclick="javascript: document.getElementById('other_data1').style.display='none'; this.checked='checked';" />
                    no</td>
                </tr>
              </table>
                <div id="other_data1" style="display: none">
                  <table width="85%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="txt_12pt_black">
                    <tr>
                      <td height="30" colspan="3" class="application_item">Please enter detail about your personal accompanist:</td>
                    </tr>
                    <tr>
                      <td height="50" colspan="3" nowrap="nowrap">Name, surname
                        <input name="concertmaster_name" id="concertmaster_name" type="text" class="txt_12pt_black" size="70" /></td>
                    </tr>
                    <tr>
                      <td height="50" colspan="3" nowrap="nowrap">Nationality
                        <input name="concertmaster_country" id="concertmaster_country" type="text" class="txt_12pt_black" size="70" /></td>
                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Visa required? </td>
                      <td><input name="radiobutton" type="radio" value="yes" />
                        yes</td>
                      <td><input name="radiobutton" type="radio" value="no" />
                        no </td>
                    </tr>
                  </table>
                </div>
              <p>&nbsp;</p>
              <table width="85%" border="0" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                  <tr>
                    <td>Do you require Competition's assistance in reserving your accommodation during the First round of the Competition? </td>
                    <td width="50"><input type="radio" name="rezerv" value="yes" onclick="javascript: document.getElementById('other_data2').style.display='block'; " />
                    yes</td>
                    <td width="50"><input type="radio" name="rezerv" value="no" onclick="javascript: document.getElementById('other_data2').style.display='none'; " />
                    no</td>
                  </tr>
                </table>
              <div id="other_data2" style="display: none">
                  <table width="85%" border="0" cellpadding="0" cellspacing="0" class="txt_12pt_black">
                    <tr>
                      <td height="30" class="application_item">If YES, where would you like to stay? </td>
                      <td class="application_item">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">at Dnipro Hotel ***** (singl room from $150 a day) </td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="hotel *****" /></td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">other hotel *** (singl room from $70 a day)</td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="hotel ***" /></td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">private accommodation (studio flatfrom $30 a day)  </td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="private accommodation" /></td>
                    </tr>
                    <tr>
                      <td height="50" nowrap="nowrap">at a student hall of residence (from $20 a day)</td>
                      <td height="50" nowrap="nowrap"><input name="apartment" type="radio" value="student hall" /></td>
                    </tr>
                    <tr>
                      <td height="50" colspan="2" nowrap="nowrap"><textarea name="apartment_text" cols="75" rows="5" class="txt_12pt_black" id="apartment_text" onfocus="javascript: this.value=''" >  </textarea></td>
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
                  <td height="30" align="left" class="txt_12pt_blac_bold">This Application Form forms part of the Rules of the Competition, and is to be submitted together with the following Additional Documents: </td>
                </tr>
                <tr>
                  <td align="left"><ul>
                      <p>&nbsp; </p>
                    <li>a photocopy of the appropriate page(s) of Candidate’s passport certifying his/her age</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>copies of all diplomas of musical education, for current students - a letter from the college showing that the Candidate is a student</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>curriculum vitae (if sent by post - handwritten not accepted)</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>two recent publicity photographs for publicity purposes</li>
                    </p>
                      <p>&nbsp; </p>
                    <li>copies of any competition diplomas if available</li>
                    </p>
                    </ul>
                      <p>It is recommended to send all the above documents in electronic format to <a href="mailto:office@competition.com.ua">office@competition.com.ua</a> . <br />
                      </p>
                    <p><strong><span class="txt_12pt_blac_bold">By submitting this Application Form I declare that the information in this Application is true and correct.<br />
I agree to abide by the Rules of the Competition, which form a part of the Official Application</span>.
                          <input name="checkbox" type="checkbox" value="checkbox"
						  onClick="javascript: if(this.checked)
						  document.getElementById('submit').disabled=0;
						  else 
						  document.getElementById('submit').disabled=1;"/>
                      </strong></p>
                    <p>
						  <input name="submit"  id="submit" type="submit"  value="Send" disabled="disabled" />
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
