<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>KATIES SYSTEM CALL OUT FORM</TITLE>
</HEAD>
<BODY BGCOLOR="WHITE" topmargin="5" leftmargin="5"> 

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<form action="katies_calloutfrm.php?act=save&order_id=<?php echo $order_id; ?>" method="post" target="MainData">
	<td bgcolor="#FFCC66" height="30">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="4"><B>
		&nbsp; 
		<INPUT TYPE="submit" value="Refresh">
		<INPUT TYPE="button" value="Print Now" onClick="printFrame(MainData)">
		<INPUT TYPE="button" value="Call Out List" onClick="javascript:location.href='index.php?mod=home&lang=en&smod=callout';">
		</FONT></B>
	</td>
</tr>
</form>
</table>
<br>

<iframe width="100%" id="appsData" height="1050" SRC="katies_calloutfrm.php" name="MainData"  FRAMEBORDER=0 scrolling=AUTO></iframe> 

</BODY>
</HTML>
