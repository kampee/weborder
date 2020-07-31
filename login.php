<br><br>

<table border="0" cellspacing="0" cellpadding="0" width="400" align="center"><tr><td>
<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">

<?php
if($smod=="ssl")
{
	$login_auth="https://weborder.computerlabelworldwide.com/index.php?mod=login";
}
else
{
	$login_auth="http://weborder.computerlabelworldwide.com/index.php?mod=login";
}
?>

<form action="index.php?mod=login" name="vUserAndPassword" method="post" onsubmit="return valueVUS();">

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#D5D5AA" height="40" colspan="2" align="center">
		<font face="arial" size="4" color="black">
		&nbsp;<b><?php echo $weborder_version; ?></b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30">
		<font face="arial" size="2">
		&nbsp; <b>Username</b>
		</font>
	</td>
	<td bgcolor="EEEEDD" height="30">
		<font face="arial" size="2">
		&nbsp; <INPUT TYPE="text" NAME="user" class="grayform">
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30">
		<font face="arial" size="2">
		&nbsp; <b>Password</b>
		</font>
	</td>
	<td bgcolor="EEEEDD" height="30">
		<font face="arial" size="2">
		&nbsp; <INPUT TYPE="password" NAME="pass" class="grayform">
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30">
		<font face="arial" size="2">
		&nbsp; <b>Language</b>
		</font>
	</td>
	<td bgcolor="EEEEDD" height="30">
		<font face="arial" size="2">
		&nbsp;
		<SELECT NAME="langid" class="grayform">
			<OPTION value="en">- - - - - Default - - - - -</OPTION>
			<OPTION value="en">English</OPTION>
			<OPTION value="fr">French</OPTION>
		</SELECT>
		<!--<INPUT TYPE="hidden" name="langid" value="en">-->
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30">
		<font face="arial" size="2">
		&nbsp; <b>Mode</b>
		</font>
	</td>
	<td bgcolor="EEEEDD" height="30">
		<font face="arial" size="2">
		&nbsp;
		<?php
		//
		if($smod=="")
		{
			echo "<b>Standard</b> : <a href=\"https://weborder.computerlabelworldwide.com/index.php?smod=ssl\">Secure SSL</a>";
		}
		else
		{
			echo "<a href=\"http://weborder.computerlabelworldwide.com\">Standard</a> : <b>Secure SSL</b>";
		}
		?>
		
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30" colspan="2" align="center">
		<font face="arial" size="2">
		<INPUT TYPE="submit" value="Login" class="grayform">
		<INPUT TYPE="reset" value="Reset" class="grayform">
		</font>
	</td>
</tr>
</form>
</table>

<br>
<center>
<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">
<!--Contact us <img src="images/email.gif"><br>-->
Copyright &copy; 2005-2010 CLWGlobal All rights reserved.<br>
</font>

<a href='javascript:void(0);' onclick='IsableTable("tb1");'><font size=2 color=#0066CC><b><img src="images/mail.png" border=0 alt="Mail to us"></b></font></a>

<a href='javascript:void(0);' onclick='IsableTable("tb0");'><font size=2 color=#0066CC><b><img src="images/internet16.png" border=0 alt="Browser support..."></b></font></a>


</font>


<br>
</center>
</td></tr></table>


<br>
<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%" id="tb0">
<tr valign="middle"><td align="center">
<img src="images/ie.jpg" width="20" alt="IE">
<img src="images/safari.jpg" width="20" alt="Safari">
<img src="images/netscape.png" width="20" alt="Netscape">
<img src="images/opera.jpg" width="20" alt="Opera">
<img src="images/firefox.gif" width="20" alt="Firefox">
<img src="images/seamonkey.jpg" width="20" alt="Seamonkey">
<img src="images/google-chrome.png" width="20" alt="Google Chrome">
</td></tr>
</table>
<br>


<center>
<table cellpadding="1" cellspacing="1" border="0" bordercolor="#CCCCCC" width="50%" bgcolor="F9F9F6" id="tb1">
<form action="login.php?act=SendMail" method="post" name="Thisform" onsubmit="return ChkMail();" enctype="multipart/form-data">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
<td bgcolor="EEEEDD" height="25" colspan=2>
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="#000000">
	&nbsp; <b>Send Mail to Us</b>
	</font>
</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
<td bgcolor="white" height="25">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
	&nbsp; From
	</font>
</td>
<td bgcolor="white" height="20">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
	&nbsp; <INPUT TYPE="text" NAME="from" size="60" class="grayform">
	</font>
</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
<td bgcolor="white" height="25">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
	&nbsp; Email
	</font>
</td>
<td bgcolor="white" height="20">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
	&nbsp; <INPUT TYPE="text" NAME="email" size="60" class="grayform">
	</font>
</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
<td bgcolor="white" height="25">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
	&nbsp; Subject
	</font>
</td>
<td bgcolor="white" height="20">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
	&nbsp; <INPUT TYPE="text" NAME="subject" size="60" class="grayform">
	</font>
</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="TOP">
<td bgcolor="white" height="25">
  <font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2"> 
                    &nbsp; Your Messages</font> </td>
                  <td bgcolor="white" height="25"> <font face="verdana,Helvetica Condensed,Arial,verdana,sans-serif" size="2"> 
                    <b> &nbsp; 
                    <TEXTAREA NAME="messages" ROWS="10" COLS="60" class="grayform"></TEXTAREA>
                    </b> </font> 
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
<td height="25">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
	&nbsp; Anti Spam Code
	</font>
</td>
<td height="20">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
	&nbsp; <input name="antispamcode" type="text" size="6" maxlength="10" /> 
<img src="./antispam.php" />
	</font>
</td>
</tr>


<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="TOP">
<td bgcolor="white" height="25" colspan=2 align="center">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="white">
	&nbsp; <INPUT TYPE="submit" value="Send Mail">
	</font>
</td>
</tr>
</form>
</table>
</center>
<BR>


<center>
<?php
if ($act == "SendMail")
{

@session_start(); // start session if not started yet
if ($_SESSION['AntiSpamImage'] != $_REQUEST['antispamcode'])
{
	//echo '<center>Incorrect Anti Spam Code <a href="javascript:window.history.back();">Back</a></center>';
	AlertMsg("Incorrect Anti Spam Code","javascript:window.history.back();");
	//endpage();
	//die; 
}
else
{
	//echo '<center>Anti Spam Code Correct. </center>';
	$_SESSION['AntiSpamImage'] = rand(1,9999999);

		$mailFrom  = "MIME-Version: 1.0\r\n";
		$mailFrom .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$mailFrom .= "From: ".$email."\r\n";
		
		$headers = $mailFrom;
		$mailme="weborder@computerlabelworldwide.com";
		$mailsub=$subject;
		$mailmess="<b>Messages : </b> <br>\n".
				  "From: ".$_POST[from]."<br>\n".
				  "Email: ".$_POST[email]."<br><br>\n".
				  "".$_POST[messages]."<br>\n";

		if(mail($mailme, $mailsub, $mailmess, $headers))
		{
			$ErrMess="Your Messages has been sent to us. We will reply you as soon, Thank you.";
		}
		else
		{
			$ErrMess="Your Messages couldn't send, Please try again";
		}
		echo $ErrMess;
}

}
?>
</center>


<SCRIPT LANGUAGE="JavaScript">
<!--
document.getElementById('tb0').style.display = 'none';
document.getElementById('tb1').style.display = 'none';
//-->
</SCRIPT>

