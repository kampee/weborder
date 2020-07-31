
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="black">
		<b><?php echo _howto_txt; ?></b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#CCCCCC" height="20">
<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" bgcolor="F9F9F6" align="left">
	<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
		<td bgcolor="#FFCC00" align="left" height="25">		
			&nbsp; <b><a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=list"><font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="red"><?php echo _start_ordering_button; ?></font></a></b> &nbsp;		
		</td>
	</tr>
</table>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="80">

<center>
<?php
	/*$query="select * from $wb_tbl_clients where cid='$session_cid' ";
	$result = mysql_db_query($wb_dbname,$query);
	$f = mysql_num_rows($result);
	while ( $row = mysql_fetch_array( $result ) ) 
	{
		echo $row[chowto];		
	}*/
	switch($session_cid)
	{
		case 1:
			define(_start_ordering_button,"Start Ordering Now");
			include("howto_fcuk.php");
			break;
		default:
			define(_start_ordering_button,"Start Ordering Now");
			include("howto_fcuk.php");
	}
?>
	</center>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#CCCCCC" height="20">
<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" bgcolor="F9F9F6" align="left">
	<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
		<td bgcolor="#FFCC00" align="left" height="25">		
			&nbsp; <b><a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=list"><font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="red"><?php echo _start_ordering_button; ?></font></a></b> &nbsp;		
		</td>
	</tr>
</table>
	</td>
</tr>


</table>
</td></tr></table>