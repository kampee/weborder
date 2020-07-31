<?php
if($pst=="add")
{
	$title_tb="Create New Language";
}

if($pst=="update")
{

	$query="select * from $wb_tbl_language where lid='$lid' ";
	$result = mysql_db_query($wb_dbname,$query);
	while ( $row = mysql_fetch_array( $result) ) 
	{
		$lang=$row[lang];
		$language=$row[language];
	}
	$title_tb="Edit Language : ".$language;
}

?>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
		<table cellpadding="0" cellspacing="0" border="1" bordercolor="#99CC99" width="60%" bgcolor="F9F9F6" align="center">
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20" colspan="2">
				<font face="arial" size="2">
				&nbsp; <b><?php echo $title_tb; ?></b>
				<INPUT TYPE="hidden" name="lid" value="<?php echo $lid; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; Code
				</font>
			</td>
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="lang" size="20" class="bkoffice" value="<?php echo $lang; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; Language
				</font>
			</td>
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="language" size="20" class="bkoffice" value="<?php echo $language; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="30" colspan="2" align="center">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="submit" value="Submit" class="bkoffice">
				&nbsp; <INPUT TYPE="reset" value="Reset" class="bkoffice">
				&nbsp; <INPUT TYPE="button" name="List" value="  List  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=langman&mode=admin';">
				</font>
			</td>
		</tr>
		</table>
	</td>
</tr>
