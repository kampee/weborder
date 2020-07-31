function button_over(eButton)
	{
	eButton.style.backgroundColor = "#CCFFFF";
	eButton.style.borderColor = "darkblue darkblue darkblue darkblue";
	}
function button_out(eButton)
	{
	eButton.style.backgroundColor = "threedface";
	eButton.style.borderColor = "threedface";
	}
function button_down(eButton)
	{
	eButton.style.backgroundColor = "#8494B5";
	eButton.style.borderColor = "darkblue darkblue darkblue darkblue";
	}
function button_up(eButton)
	{
	eButton.style.backgroundColor = "#B5BDD6";
	eButton.style.borderColor = "darkblue darkblue darkblue darkblue";
	eButton = null; 
	}

function Trim(s)
{
        var temp = " ";
        var i = 0;

        while ((temp == " ") && (i <= s.length)) {
                temp = s.charAt(i);
                i++;
        }
        s = s.substring(i - 1, s.length);
        return(s);
}


function valuecheck()
{	
	var f = document.chkemail;
	var email_add=f.email_add.value;
	var errMsg = "";
	var objFocus="";
	
	f.email_add.value=Trim(f.email_add.value);

	if(f.email_add.value == "")
	{
		errMsg += "Please enter your email address ! \n";
		if(!objFocus)
			objFocus = f.email_add;
	}
	else
	{
	 if (f.email_add.value.length < 5 || f.email_add.value.indexOf ('@', 0) == -1 || f.email_add.value.indexOf ('.', 0) == -1 || (f.email_add.value.substring(1,0)=='@'))
		{
			errMsg += "Your email address is incorrect ! \n";
			if(!objFocus)
				objFocus = f.email_add;
		}
	}

	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}

function valuekeyword()
{	
	var f = document.chkkey;
	var keyword=f.keyword.value;
	var errMsg = "";
	var objFocus="";
	
	f.keyword.value=Trim(f.keyword.value);

	if(f.keyword.value == "")
	{
		errMsg += "Please enter keyword ! \n";
		if(!objFocus)
			objFocus = f.keyword;
	}
	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}

function valueVUS()
{	
	var f = document.vUserAndPassword;
	var user=f.user.value;
	var pass=f.pass.value;
	var errMsg = "";
	var objFocus="";
	
	f.user.value=Trim(f.user.value);

	if(f.user.value == "")
	{
		errMsg += "Invalid Username ! \n";
		if(!objFocus)
			objFocus = f.user;
	}
	if(f.pass.value == "")
	{
		errMsg += "Invalid Password ! \n";
		if(!objFocus)
			objFocus = f.pass;
	}

	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}

function MEMselect(Selected){
	document.memfrm.email_new.value = memfrm.email_add.value
}

function valuecheckcon()
{	
	var f = document.thisForm;
	var email=f.email.value;
	var comment=f.comment.value;
	var errMsg = "";
	var objFocus="";
	
	f.email.value = 	Trim(f.email.value);
	f.comment.value = Trim(f.comment.value);

	if(f.email.value == "")
	{
		errMsg += "Please enter your email address !\n";
		if(!objFocus)
			objFocus = f.email;
	}
	else
	{
	 if (f.email.value.length < 5 || f.email.value.indexOf ('@', 0) == -1 || f.email.value.indexOf ('.', 0) == -1 || (f.email.value.substring(1,0)=='@'))
		{
			errMsg += "Your email address is incorrect ! \n";
			if(!objFocus)
				objFocus = f.email;
		}
	}
	if(f.comment.value == "")
	{
		errMsg += "Please enter your comment ! \n";
		if(!objFocus)
			objFocus = f.comment;
	}
	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}

function NewsWin(link)
{
	window.open(link,'','toolbar=no,menubar=no,location=no,height=500,width=600,scrollbars=yes,dependent=yes');
}

function BarPOP(link)
{
	window.open(link,'','toolbar=no,menubar=no,location=no,height=400,width=570,scrollbars=yes,dependent=yes');
}

function MediaPOP(link)
{
	window.open(link,'','toolbar=no,menubar=no,location=no,height=450,width=600,scrollbars=yes,dependent=yes');
}

function ZoomPic(link)
{
	window.open(link,'','toolbar=no,menubar=no,location=no,height=450,width=600,scrollbars=yes,dependent=yes');
}

function CheckSearch()
{	
	var f = document.chksearch;
	var key=f.key.value;
	var errMsg = "";
	var objFocus="";
	
	f.key.value=Trim(f.key.value);

	if(f.key.value == "")
	{
		errMsg += "Please fill in keyword ! \n";
		if(!objFocus)
			objFocus = f.key;
	}

	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}


function Check(object,minimum) {
var value = object.value;

	result = _checkinteger(value,minimum);

	if(! result) {
		alert("Please Check Qty.");
		object.value ="0";
		//object.focus(); 
		}

}


function CheckPassword()
{	
	var f = document.chkpassword;
	var old_pass=f.old_pass.value;
	var new_pass=f.new_pass.value;
	var new_pass_again=f.new_pass_again.value;
	var errMsg = "";
	var objFocus="";
	
	f.old_pass.value=Trim(f.old_pass.value);
	f.new_pass.value=Trim(f.new_pass.value);
	f.new_pass_again.value=Trim(f.new_pass_again.value);

	if(f.old_pass.value == "")
	{
		errMsg += "Invalid your old password \n";
		if(!objFocus)
			objFocus = f.old_pass;
	}
	if(f.new_pass.value == "")
	{
		errMsg += "Invalid your new password \n";
		if(!objFocus)
			objFocus = f.new_pass;
	}
	if(f.new_pass_again.value == "")
	{
		errMsg += "Invalid your new password again \n";
		if(!objFocus)
			objFocus = f.new_pass_again;
	}
	if(f.new_pass.value!=f.new_pass_again.value)
	{
		errMsg += "your new password not match \n";
		if(!objFocus)
			objFocus = f.new_pass;
	}


	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}


function CheckEmail()
{	
	var f = document.chkemail;
	var email=f.email.value;
	var errMsg = "";
	var objFocus="";
	
	f.email.value=Trim(f.email.value);

	if(f.email.value == "")
	{
		errMsg += "Please enter e-mail address \n";
		if(!objFocus)
			objFocus = f.email;
	}
	else
	{
	 if (f.email.value.length < 5 || f.email.value.indexOf ('@', 0) == -1 || f.email.value.indexOf ('.', 0) == -1 || (f.email.value.substring(1,0)=='@'))
		{
			errMsg += "Your email address is incorrect ! \n";
			if(!objFocus)
				objFocus = f.email;
		}
	}

	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}


function CheckPayment()
{	
	var f = document.chkpayment;
	var card_no=f.card_no.value;
	var errMsg = "";
	var objFocus="";
	
	f.card_no.value=Trim(f.card_no.value);

	if(f.card_no.value == "")
	{
		errMsg += "Invalid Credit card number. ! \n";
		if(!objFocus)
			objFocus = f.card_no;
	}
	else
	{
		if (f.card_no.value.length < 16)
		{
			errMsg += "Please check digit ! \n";
			if(!objFocus)
				objFocus = f.card_no;
		}
	}
	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}

function CheckTrack()
{	
	var f = document.chktrack;
	var order_no=f.order_no.value;
	var errMsg = "";
	var objFocus="";
	
	f.order_no.value=Trim(f.order_no.value);

	if(f.order_no.value == "")
	{
		errMsg += "Please fill in order number ! \n";
		if(!objFocus)
			objFocus = f.order_no;
	}

	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}

function sel() {
	with(document.form1) {
		for(i=0;i<elements.length;i++) {
			thiselm = elements[i];
			if(thiselm.name.substring(0,7) == 'cart_id')
				thiselm.checked = !thiselm.checked
		}
	}
}

function selpid() {
	with(document.pidfrm) {
		for(i=0;i<elements.length;i++) {
			thiselm = elements[i];
			if(thiselm.name.substring(0,7) == 'cart_id')
				thiselm.checked = !thiselm.checked
		}
	}
}

function AddUser()
{	
	var s = document.adduser;
	var uname=s.uname.value;
	var upass=s.upass.value;
	var cpass=s.cpass.value;
	var ufname=s.ufname.value;
	var ulname=s.ulname.value;
	var email=s.email.value;
	var errMsg = "";
	var objFocus="";
	
	s.uname.value=Trim(s.uname.value);
	s.upass.value=Trim(s.upass.value);
	s.cpass.value=Trim(s.cpass.value);
	s.ufname.value=Trim(s.ufname.value);
	s.ulname.value=Trim(s.ulname.value);
	s.email.value=Trim(s.email.value);

	if(s.uname.value == "")
	{
		errMsg += "Please enter user name \n";
		if(!objFocus)
			objFocus = s.uname;
	}
	if(s.upass.value == "")
	{
		errMsg += "Please enter password \n";
		if(!objFocus)
			objFocus = s.upass;
	}
	if(s.cpass.value == "")
	{
		errMsg += "Please enter confirm password \n";
		if(!objFocus)
			objFocus = s.cpass;
	}

	if(s.upass.value!=s.cpass.value)
	{
		errMsg += "your password not match \n";
		if(!objFocus)
			objFocus = s.upass;
	}
	if(s.ufname.value == "")
	{
		errMsg += "Please enter first name \n";
		if(!objFocus)
			objFocus = s.ufname;
	}
	if(s.ulname.value == "")
	{
		errMsg += "Please enter last name \n";
		if(!objFocus)
			objFocus = s.ulname;
	}
	if(s.email.value == "")
	{
		errMsg += "Please enter e-mail \n";
		if(!objFocus)
			objFocus = s.email;
	}
	else
	{
	 if (s.email.value.length < 5 || s.email.value.indexOf ('@', 0) == -1 || s.email.value.indexOf ('.', 0) == -1 || (s.email.value.substring(1,0)=='@'))
		{
			errMsg += "e-mail is wrong ! \n";
			if(!objFocus)
				objFocus = s.email;
		}
	}

}

function CUL()
{	
	var f = document.userlist;
	var uid=f.uid.check.value;
	var errMsg = "";
	var objFocus="";
	
	if(f.uid.check.value == "Off" )
	{
		errMsg += "Please select user! \n";
		if(!objFocus)
			objFocus = f.uid;
	}

	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}

function CallOut(link)
{
	window.open(link,'','toolbar=no,menubar=no,location=no,height=500,width=700,scrollbars=yes,dependent=yes');
}

// The code by Captain <cerebrum@iname.com>
// Mead & Company, http://www.meadroid.com/wpm/

// fake print() for IE4.x
if ( !printIsNativeSupport() )
  window.print = printFrame;

// main stuff
function printFrame(frame, onfinish) {
  if ( !frame ) frame = window;

  if ( frame.document.readyState !== "complete" &&
       !confirm("The document to print is not downloaded yet! Continue with printing?") )
  {
    if ( onfinish ) onfinish();
    return;
  }

  if ( printIsNativeSupport() ) {
    /* focus handling for this scope is IE5Beta workaround,
       should be gone with IE5 RTM.
    */
    var focused = document.activeElement; 
    frame.focus();
    frame.self.print();
    if ( onfinish ) onfinish();
    if ( focused && !focused.disabled ) focused.focus();
    return;
  }

  var eventScope = printGetEventScope(frame);
  var focused = document.activeElement;

  window.printHelper = function() {
    execScript("on error resume next: printWB.ExecWB 6, 1", "VBScript");
    printFireEvent(frame, eventScope, "onafterprint");
    printWB.outerHTML = "";
    if ( onfinish ) onfinish();
    if ( focused && !focused.disabled ) focused.focus();
    window.printHelper = null;
  }

  document.body.insertAdjacentHTML("beforeEnd",
    "<object id=\"printWB\" width=0 height=0 \
    classid=\"clsid:8856F961-340A-11D0-A96B-00C04FD705A2\"></object>");

  printFireEvent(frame, eventScope, "onbeforeprint");
  frame.focus();
  window.printHelper = printHelper;
  setTimeout("window.printHelper()", 0);
}

// helpers
function printIsNativeSupport() {
  var agent = window.navigator.userAgent;
  var i = agent.indexOf("MSIE ")+5;
  return parseInt(agent.substr(i)) >= 5 && agent.indexOf("5.0b1") < 0;
}

function printFireEvent(frame, obj, name) {
  var handler = obj[name];
  switch ( typeof(handler) ) {
    case "string": frame.execScript(handler); break;
    case "function": handler();
  }
}

function printGetEventScope(frame) {
  var frameset = frame.document.all.tags("FRAMESET");
  if ( frameset.length ) return frameset[0];
  return frame.document.body;
}

function OrderForm(link)
{
	window.open(link,'','toolbar=no,menubar=no,location=no,height=500,width=700,scrollbars=yes,dependent=yes');
}

function OrderForm2(link)
{
	window.open(link,'','toolbar=no,menubar=no,location=no,height=600,width=800,scrollbars=yes,dependent=yes');
}

function ableTable(tableName)
{
	document.getElementById(tableName).style.display = 'block';
}

function disableTable(tableName)
{
	document.getElementById(tableName).style.display = 'none';
}

function IsableTable(tableName)
{
	//alert(document.getElementById(tableName).style.display);
		if( document.getElementById(tableName).style.display == "none" ) {
				document.getElementById( tableName ).style.display = "block";
			} else {
				document.getElementById( tableName ).style.display = "none";
			}
}


function ShowPlus(tableName)
{
	  document.write("<a href='javascript:void(0);' onclick=IsableTable('"+tableName+"')><font color=white>+</font></a>");
}


function ChkMail()
{
	var s = document.Thisform;
	var from=s.from.value;
	var email=s.email.value;
	var subject=s.subject.value;
	var messages=s.messages.value;
	var errMsg = "";
	var objFocus="";

	s.from.value=Trim(s.from.value);
	s.email.value=Trim(s.email.value);
	s.subject.value=Trim(s.subject.value);
	s.messages.value=Trim(s.messages.value);

	if(s.from.value == "")
	{
		errMsg += "Please enter your name or company name \n";
		if(!objFocus)
			objFocus = s.from;
	}

	if(s.email.value == "")
	{
		errMsg += "Please enter your e-mail \n";
		if(!objFocus)
			objFocus = s.email;
	}
	else
	{
	 if (s.email.value.length < 5 || s.email.value.indexOf ('@', 0) == -1 || s.email.value.indexOf ('.', 0) == -1 || (s.email.value.substring(1,0)=='@'))
		{
			errMsg += "e-mail is wrong ! \n";
			if(!objFocus)
				objFocus = s.email;
		}
	}

	if(s.subject.value == "")
	{
		errMsg += "Please enter Subject \n";
		if(!objFocus)
			objFocus = s.subject;
	}

	if(s.messages.value == "")
	{
		errMsg += "Please enter Messages \n";
		if(!objFocus)
			objFocus = s.messages;
	}

	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}


function TrackOrder()
{
	var s = document.Thisform2;
	var OrderNo=s.OrderNo.value;
	var errMsg = "";
	var objFocus="";

	s.OrderNo.value=Trim(s.OrderNo.value);

	if(s.OrderNo.value == "")
	{
		errMsg += "Please enter CLW Order Ref # \n";
		if(!objFocus)
			objFocus = s.OrderNo;
	}



	if(errMsg == "")
	{
		return true;
	}
	else
	{
		alert(errMsg);
		objFocus.focus();
		return false;
	}
}
