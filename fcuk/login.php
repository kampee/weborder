
<table border="0" cellspacing="0" cellpadding="0" align="center" width=700>
<tr><td align="center">

<img src="images/clw_fcuk.jpg">
<br>

</td></tr>

<tr><td>


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
	<td bgcolor="#FF9900" height="40" colspan="2" align="center">
		<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="5" color="#FFFFFF">
		&nbsp;<b><?php echo $weborder_version; ?></b>
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30">
		<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
		&nbsp; <b>Username</b>
		</font>
	</td>
	<td bgcolor="EEEEDD" height="30">
		<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
		&nbsp; <INPUT TYPE="text" NAME="user" class="grayform">
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30">
		<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
		&nbsp; <b>Password</b>
		</font>
	</td>
	<td bgcolor="EEEEDD" height="30">
		<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
		&nbsp; <INPUT TYPE="password" NAME="pass" class="grayform">
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30">
		<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
		&nbsp; <b>Language</b>
		</font>
	</td>
	<td bgcolor="EEEEDD" height="30">
		<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
		&nbsp;
		<SELECT NAME="langid" class="grayform">
			<OPTION value="en">- - - - - Default - - - - -</OPTION>
			<OPTION value="en">English</OPTION>
			<!--<OPTION value="fr">French</OPTION>-->
		</SELECT>
		<!--<INPUT TYPE="hidden" name="langid" value="en">-->
		</font>
	</td>
</tr>

<!--
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Mode</b>
		</font>
	</td>
	<td bgcolor="EEEEDD" height="30">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp;
		<?php
		//
		if($smod=="")
		{
			echo "<b>Standard</b> : <a href=\"https://weborder.computerlabelworldwide.com/index.php?smod=ssl\">Secure SSL 128 bits</a>";
		}
		else
		{
			echo "<a href=\"http://weborder.computerlabelworldwide.com\">Standard</a> : <b>Secure SSL 128 bits</b>";
		}
		?>
		
		</font>
	</td>
</tr>
-->

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30" colspan="2" align="center">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		<INPUT TYPE="submit" value="Login" class="grayform">
		<INPUT TYPE="reset" value="Reset" class="grayform">
		</font>
	</td>
</tr>


<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="30" colspan="2" align="center">

<center>
<br>
<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">
<!--Contact us <img src="images/email.gif"><br>-->
Copyright &copy; 2005-2008 ComputerLabel WorldWide Co.,Ltd. All rights reserved.<br>
</font>

<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
<a href='javascript:void(0);' onclick='IsableTable("tb1");disableTable("tb2");'><font size=2 color=green><b>Track Order</b></font></a> |
<a href='javascript:void(0);' onclick='IsableTable("tb2");disableTable("tb1");'><font size=2 color=green><b>Contact Us</b></font></a>
</font>


<br>
<br>

</center>

	</td>
</tr>


</form>
</table>

</td></tr></table>
</td></tr></table>

<br>

<center>
<table cellpadding="1" cellspacing="1" border="0" bordercolor="#CCCCCC" width="40%" bgcolor="F9F9F6" id="tb1">
<form action="login.php?act=TrackOrder" method="post" name="Thisform2" onsubmit="return TrackOrder();">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
<td bgcolor="#FF3300" height="25" colspan=2>
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="white">
	&nbsp; <b>Track Order</b>
	</font>
</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
<td bgcolor="white" height="25">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
	&nbsp; CLW Order Ref #
	</font>
</td>
<td bgcolor="white" height="20">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
	&nbsp; <INPUT TYPE="text" NAME="OrderNo" size="40" class="grayform">
	</font>
</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="TOP">
<td bgcolor="white" height="25" colspan=2 align="center">
	<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="white">
	&nbsp; <INPUT TYPE="submit" value="Track">
	</font>
</td>
</tr>
</form>
</table>
</center>
<BR>




<center>
<table cellpadding="1" cellspacing="1" border="0" bordercolor="#CCCCCC" width="50%" bgcolor="F9F9F6" id="tb2">
<form action="login.php?act=SendMail" method="post" name="Thisform" onsubmit="return ChkMail();">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
<td bgcolor="#FF3333" height="25" colspan=2>
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

if ($act == "TrackOrder")
{
	$wb_server="localhost";	// Servername
	$wb_user="weborder"; // Database user
	$wb_password="wb234"; // Database password
	$wb_dbname="weborder_fcuk"; // Database name
	$link = mysql_connect($wb_server, $wb_user , $wb_password );
		if ( !$link ) {
			echo "<br><br><div align=center>";
			echo "<font color=red size=4>";
			echo "<b>Can't Link to Databases</b>";
			echo "</font>";
			echo "</div>";
			die();
			}
	mysql_select_db( $wb_dbname,$link);
	$order_no=substr($OrderNo,0,5);
	$queryX="select * from wb_order where order_id='$order_no'";
	$resultX = mysql_db_query($wb_dbname,$queryX);
	
	//echo $queryX."<br>";
	//echo $resultX;
	$pfound = mysql_num_rows($resultX);
function addzero5($amt) {
	$amt0=strlen($amt);
	if ( $amt0=="1" ) {
		$amt="0000".$amt;
		echo $amt;
	}elseif ( $amt0=="2" ) {
		$amt="000".$amt;
		echo $amt;
	}elseif ( $amt0=="3" ) {
		$amt="00".$amt;
		echo $amt;
	}elseif ( $amt0=="4" ) {
		$amt="0".$amt;
		echo $amt;
	}elseif ( $amt0=="5" ) {
		$amt=$amt;
		echo $amt;
	}
}
function addzero3($amt) {
	$amt0=strlen($amt);
	if ( $amt0=="1" ) {
		$amt="00".$amt;
		echo $amt;
	}elseif ( $amt0=="2" ) {
		$amt="0".$amt;
		echo $amt;
	}elseif ( $amt0=="3" ) {
		$amt=$amt;
		echo $amt;
	}
}
function chkcursy($sy,$price)
{
	echo "<b>";
	switch($sy)
	{
		case "EUR":
			echo "<font color=\"#CC0000\">";
			echo "&euro; ".number_format($price,2);
			echo "</font>";
			break;
		case "USD":
			echo "<font color=\"#009900\">";
			echo "US $ ".number_format($price,2);
			echo "</font>";
			break;
		case "HKD":
			echo "<font color=\"#0000FF\">";
			echo "HK $ ".number_format($price,2);
			echo "</font>";
			break;
		case "POUND":
			echo "<font color=\"#FF6600\">";
			echo "&pound; ".number_format($price,2);
			echo "</font>";
			break;
	}
	echo "</b>";
}

	require("track_view.php");
}


?>
</center>



<SCRIPT LANGUAGE="JavaScript">
<!--
document.getElementById('tb1').style.display = 'none';
document.getElementById('tb2').style.display = 'none';
//-->
</SCRIPT>

