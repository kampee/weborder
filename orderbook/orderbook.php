<?php
include("includes/config.inc.php");
DBConn("mysql");

$query="select max(of_id) from $wb_tbl_of ORDER by of_id";
$result = mysql_db_query($wb_dbname,$query);
$pf = mysql_num_rows($result);
if($pf==0)
{
		$of_id=1;
}
else
{
		$rs=mysql_fetch_array( $result );
		$of_id=$rs[0]+1;
}

$query_i="insert into $wb_tbl_of (of_id,of_date,of_time,of_ip)values('$of_id','$regdate','$regtime','$wb_remote_ipaddress')";
$result_i = mysql_db_query($wb_dbname,$query_i);

?>

<HTML>
<HEAD>
<TITLE>Order Form# <?php addzero5($of_id); ?></TITLE>
</HEAD>
<BODY topmargin="0" leftmargin="0">


<table cellpadding="0" cellspacing="0" border="0" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD">
		<font face="arial" size="4"><B>
		&nbsp; ORDER FORM :<BR>
		<font size="5" color="#FF0000">
		&nbsp; <?php addzero5($of_id); ?>
		</font>
		</FONT></B>
	</td>
	<td bgcolor="EEEEDD" height="50" align="center">
		<font face="arial" size="5" color="#CC0000">
		&nbsp;<b>Computer Label Worldwide SA (Pty) Ltd.</b>
		</font>
		<br>
		<font face="arial" size="3"><b>
		5 Wetwyn Road, Wetton 7750 Cape Town South Africa<br>
		Tel # 27 21 762 5591 Fax # 27 21 762 5547
		</font>
	</td>
	<td bgcolor="EEEEDD" height="50" align="center">
		<img src="images/clw_logo.gif">
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="top">
	<td bgcolor="#EAEAEA" align="center" colspan="3" height="100">


		<table cellpadding="0" cellspacing="0" border="0" bordercolor="#CCCCCC" width="100%" bgcolor="black"><tr><td>
		<table cellpadding="1" cellspacing="1" border="1" bordercolor="#CCCCCC" width="100%" bgcolor="black">
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle"  bgcolor="#CCCCCC" >
			<td height="20" align="center">
				<font face="arial" size="3"><b>
				DESCRIPTION OF LABEL
				</font></b>
			</td>
			<td  align="center">
				<font face="arial" size="3"><b>
				LABEL<BR>
				WIDTH
				</font></b>
			</td>
			<td align="center">
				<font face="arial" size="3"><b>
				SERIES/STYLE No
				</font></b>
			</td>
			<td align="center">
				<font face="arial" size="3"><b>
				PRINTING<BR>
				COLOURS
				</font></b>
			</td>
			<td align="center">
				<font face="arial" size="3"><b>
				DEPT/CONTRACT No
				</font></b>
			</td>
			<td align="center">
				<font face="arial" size="3"><b>
				DATE
				</font></b>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="top"  bgcolor="white" >
			<td height="100">
				<font face="arial" size="2">
				WITH/WITHOUT/COTTON LOGO
				</font></b>
			</td>
			<td  align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				Washing Instruction<br>
				No<br>
				OR REF No.
				</font>
			</td>
		</tr>
		</table>
		</td></tr></table>


		<table cellpadding="0" cellspacing="0" border="0" bordercolor="#CCCCCC" width="100%" bgcolor="black"><tr><td>
		<table cellpadding="1" cellspacing="1" border="1" bordercolor="#CCCCCC" width="100%" bgcolor="black">
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle"  bgcolor="#CCCCCC" >
			<td height="20" colspan="14">
				<font face="arial" size="4"><b>
				WOOLWORTHS
				</font></b>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle"  bgcolor="white" >
			<td height="30" width="15%">
				<font face="arial" size="2">
				SIZES/AGES
				</font></b>
			</td>
			<td  align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td  align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td ROWSPAN="4">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center" width="5%">
				<font face="arial" size="2">
				<img src="images/tc1.gif">
				</font>
			</td>
			<td width="25%">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle"  bgcolor="white" >
			<td height="30" ROWSPAN="2" width="15%">
				<font face="arial" size="2">
				TO FIT ......................cm
				</font></b>
			</td>
			<td  align="center" height="30">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td  align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center" width="5%">
				<font face="arial" size="2">
				<img src="images/tc2.gif">
				</font>
			</td>
			<td width="25%">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle"  bgcolor="white" >
			<td  align="center" height="30">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td  align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center" width="5%">
				<font face="arial" size="2">
				<img src="images/tc3.gif">
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td width="25%">
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle"  bgcolor="white" >
			<td height="30" ROWSPAN="2" width="15%">
				<font face="arial" size="2">
				TO FIT ......................cm
				</font></b>
			</td>
			<td  align="center" height="30">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td  align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center" width="5%">
				<font face="arial" size="2">
				<img src="images/tc4.gif">
				</font>
			</td>
			<td width="25%">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle"  bgcolor="white" >
			<td  align="center" height="30">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td  align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>

			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td width="25%">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle"  bgcolor="white" >
			<td height="30">
				<font face="arial" size="2">
				QUANTITY
				</font></b>
			</td>
			<td  align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td  align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>

			<td>
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td width="25%">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
		</tr>
		</table>
		</td></tr></table>


		<table cellpadding="0" cellspacing="0" border="0" bordercolor="#CCCCCC" width="100%" bgcolor="black"><tr><td>
		<table cellpadding="1" cellspacing="1" border="1" bordercolor="#CCCCCC" width="100%" bgcolor="black">
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle"  bgcolor="#CCCCCC" >
			<td height="20" align="center">
				<font face="arial" size="3"><b>
				DATE
				</font></b>
			</td>
			<td  align="center">
				<font face="arial" size="3"><b>
				D/NOTE No
				</font></b>
			</td>
			<td align="center">
				<font face="arial" size="3"><b>
				INVOICE No
				</font></b>
			</td>
			<td align="center">
				<font face="arial" size="3"><b>
				DELIVERED & CHARGED TO
				</font></b>
			</td>
			<td align="center">
				<font face="arial" size="3"><b>
				WHEN REQUIRED
				</font></b>
			</td>
			<td align="center">
				<font face="arial" size="3"><b>
				METHOD OF<BR>
				DESPATCH
				</font></b>
			</td>
			<td align="center">
				<font face="arial" size="3"><b>
				SINGNATURE
				</font></b>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle"  bgcolor="white" >
			<td height="70">
				<font face="arial" size="2">
				&nbsp;
				</font></b>
			</td>
			<td  align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td  align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
			<td align="center">
				<font face="arial" size="2">
				&nbsp;
				</font>
			</td>
		</tr>
		</table>
		</td></tr></table>

	</td>
</tr>
</TABLE>

<br>
<div align="center">
<b>
<font face="arial" size="4" color="red">
NO RETURNS ACCEPTED AS PER WOOLWORTHS HEAD OFFICE
</font>
</b>
</div>



</BODY>
</HTML>
