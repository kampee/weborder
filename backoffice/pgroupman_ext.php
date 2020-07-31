<?php
if($pst=="add")
{
	$title_tb="Create New Product Group";
}

if($pst=="update")
{

	$query="select * from $wb_tbl_pgroup where pgroup='$pgroup' ";
	$result = mysql_db_query($wb_dbname,$query);
	while ( $row = mysql_fetch_array( $result) ) 
	{
		$pgroup=$row[pgroup];
		$pcode=$row[pcode];
		$pname=$row[pname];
	}
	$title_tb="Edit Product Group : ".$pname;
}

?>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
		<table cellpadding="0" cellspacing="0" border="1" bordercolor="#99CC99" width="60%" bgcolor="F9F9F6" align="center">
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20" colspan="2">
				<font face="arial" size="2">
				&nbsp; <b><?php echo $title_tb; ?></b>
				<INPUT TYPE="hidden" name="pgroup" value="<?php echo $pgroup; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; Group Code
				</font>
			</td>
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="pcode" size="20" class="bkoffice" value="<?php echo $pcode; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; Group Name
				</font>
			</td>
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="pname" size="20" class="bkoffice" value="<?php echo $pname; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="30" colspan="2" align="center">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="submit" value="Submit" class="bkoffice">
				&nbsp; <INPUT TYPE="reset" value="Reset" class="bkoffice">
				&nbsp; <INPUT TYPE="button" name="List" value="  List  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=pgroupman&mode=admin';">
				</font>
			</td>
		</tr>
		</table>
	</td>
</tr>
