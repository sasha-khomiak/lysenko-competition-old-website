// JavaScript Document

	digit_img= new Array('digit1.png', 'digit2.png', 'digit3.png');
	digit_text= new Array('75059', '15963', '78952');
	m = digit_img.length;
	n=0;

function sendform() {
    var i, j, function_result=true;

   for(j=0; j<required.length; j++) {
    for (i=0; i<document.forms[0].length; i++) {
    	if (document.forms[0].elements[i].name == required[j] && document.forms[0].elements[i].value == "" ) {
    	// alert('??????????, ??????? ' + required_show[j]);
		document.forms[0].elements[i].className='error_form';
    	function_result=false;	
    	}
//	document.forms[0].elements[i].focus();	
    }
   }
   //	CHECK email
   if (document.forms[0].email.value.indexOf('@',0) == -1) {
   document.forms[0].email.className='error_form';
   function_result=false;
   }
   
	if (!function_result) 
	{
	r=Math.floor( Math.random() * (n - m + 1) ) + m;
//	alert(Math.random()+' ; r='+r+' ; m='+m+'; n='+n);
	document.getElementById('digit_img').src=digit_img[r];
	document.getElementById('digit_text').value=digit_text[r];
	return false; 
	}
	
    return true;
	
}
