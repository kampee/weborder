<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="black">
		&nbsp; <b><?php echo _contact_us_txt; ?></b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">

<center>
<table cellpadding="1" cellspacing="1" border="0" bordercolor="#CCCCCC" width="100%" bgcolor="F9F9F6" id="tb2">
<form action="index.php?mod=home&lang=en&smod=contact&act=SendMail" method="post" name="Thisform" onsubmit="return ChkMail();">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
<td bgcolor="#CCCC00" height="25" colspan=2>
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="white">
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
                    </b> </font> </td>
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
	
	
	</td>
</tr>
</table>

</td></tr></table>





<center>

<?php
if ($act == "SendMail")
{
		$mailFrom  = "MIME-Version: 1.0\r\n";
		$mailFrom .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$mailFrom .= "From: ".$email."\r\n";
		
		$headers = $mailFrom;
		$mailme="weborder-fcuk@computerlabelworldwide.com";
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
?>

</center>