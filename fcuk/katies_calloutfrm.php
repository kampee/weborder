<?php
session_start();
include("includes/config.inc.php");
LoginAuth();
DBConn("mysql");

$query="select * from $wb_tbl_order where order_id='$order_id' ";
$result = mysql_db_query($wb_dbname,$query);
$cl = mysql_num_rows($result);

?>

<HTML>
<HEAD>
<TITLE>KT</TITLE>
</HEAD>
<BODY topmargin="0" leftmargin="0" bgcolor="white">


<table cellpadding="0" cellspacing="0" border="0" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="WHITE" height="50" align="center">
		<img src="images/clw_logo.gif">
	</td>

	<td bgcolor="WHITE" height="50">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="#CC0000">
		<b>COMPUTERLABEL WORLDWIDE CO., LTD.</b>
		</font>
		<br>
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		26/53-54 Soi. Suksawad 14 Jomthong Bangkok 10150 Thailand<br>
		Tel. +66 2 466 22 22 Fax. +66 2 476 27 82<br>
		e-mail: contact@computerlabelworldwide.com &nbsp; www.computerlabelworldwide.com
		</font>
	</td>
	<td bgcolor="WHITE" height="50" align="center">		
		<img src="images/solis_logo.gif">
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="top">
	<td bgcolor="white" colspan="3">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp;
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="top">
	<td bgcolor="white" colspan="3" height="25">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="4">
		<b>KATIES System Call Out Form</b> - ORDER # <?php echo $order_id; ?>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="top">
	<td bgcolor="white" align="center" colspan="3" height="100">


		<table cellpadding="0" cellspacing="0" border="0" bordercolor="#CCCCCC" width="100%" bgcolor="black"><tr><td>
		<table cellpadding="1" cellspacing="1" border="0" bordercolor="#CCCCCC" width="100%" bgcolor="black">
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle"  bgcolor="#CCCCCC" >
			<td height="20" >
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2"><b>
				Bill To
				</font></b>
			</td>
			<td bgcolor="white">
			</td>
			<td>
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2"><b>
				Ship To
				</font></b>
			</td>
			<td bgcolor="white">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp;
				</font>
			</td>
			<td >
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3"><b>
				Invoice # 
				</font></b>
			</td>
			<td  bgcolor="white">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp;
				</font>
			</td>
		</tr>
		</table>
		</td></tr></table>

	</td>
</tr>
</TABLE>


</BODY>
</HTML>
