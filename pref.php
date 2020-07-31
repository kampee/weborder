<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="3" color="black">
		&nbsp; <b>Preference</b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
		<font face="arial" size="2"><b>
		<ul>
			<li><a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=pref&tr=1">Change your password</a></li>
			<li><a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=pref&tr=2">Modify your profile</a></li>
			<li><a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=pref&tr=3">Add/Edit bill & ship to address</a></li>
			<!--<li><a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=pref&tr=3">Setting</a></li>-->
		</ul></b>
		</font>
	</td>
</tr>
</table>










<?php
if($tr=="1")
{
?>
<br>
<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=pref&tr=1ok" method="post" name="chkpassword" onsubmit="return CheckPassword();">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20" colspan="2">
		<font face="arial" size="2" color="#FF9900">
		&nbsp; <b>Change Password</b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="30">
		<font face="arial" size="2">
		&nbsp; <b>Please enter your old password</b>
		</font>
	</td>
	<td bgcolor="white" height="30">
		<font face="arial" size="2">
		&nbsp; <INPUT TYPE="password" name="old_pass" size="30">
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="30">
		<font face="arial" size="2">
		&nbsp; Please enter your new password
		</font>
	</td>
	<td bgcolor="white" height="30">
		<font face="arial" size="2">
		&nbsp; <INPUT TYPE="password" name="new_pass" size="30">
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="30">
		<font face="arial" size="2">
		&nbsp; Please enter your new password again
		</font>
	</td>
	<td bgcolor="white" height="30">
		<font face="arial" size="2">
		&nbsp; <INPUT TYPE="password" name="new_pass_again" size="30">
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30" colspan="2" align="center">
		<font face="arial" size="2" color="#FF9900">
		<INPUT TYPE="submit" value="Submit">
		<INPUT TYPE="reset" value="Reset">
		</font>
	</td>
</tr>
</form>
</table>

<?php
}
if($tr=="1ok")
{
	$query="select * from $wb_tbl_users where uid='$session_uid' and upass='$_POST[old_pass]'";
	$result = mysql_db_query($wb_dbname,$query);
	$ep_found = mysql_num_rows($result);
	if ($ep_found==0) 
	{
		AlertMsg("Incorret old password !","index.php?mod=home&lang=$lang&smod=pref&tr=1");
		die;
	}
	while ( $row = mysql_fetch_array( $result ) ) 
	{
		$query_u="UPDATE $wb_tbl_users SET upass='$_POST[new_pass]' where uid='$session_uid'";
		$result_u = mysql_db_query($wb_dbname,$query_u);
		AlertMsg("Your password change successfully. Click OK for login as your new password again","index.php?mod=logout");
		die;		
	}
}
?>


<?php
if($tr=="2")
{
	$query="select * from $wb_tbl_users where uid='$session_uid'";
	$result = mysql_db_query($wb_dbname,$query);
	while ( $row = mysql_fetch_array( $result ) ) 
	{
		$cur_emails=$row[email];
		$scur=$row[scur];
		$ufname=$row[ufname];
		$ulname=$row[ulname];
	}

?>
<br>
<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="EEEEDD">
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=pref&tr=2ok" method="post" name="chkemail" onsubmit="return CheckEmail();">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20" colspan="2">
		<font face="arial" size="4" color="black">
		&nbsp; <b>My Profiles</b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="20">
		<font face="arial" size="2">
		&nbsp; <b>Firstname & Lastname</b>
		</font>
	</td>
	<td bgcolor="white" height="30">
		<font face="arial" size="2">
		&nbsp; <INPUT TYPE="text" name="ufname" size="25" value="<?php echo $ufname; ?>">
		&nbsp; <INPUT TYPE="text" name="ulname" size="30" value="<?php echo $ulname; ?>">
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="20">
		<font face="arial" size="2">
		&nbsp; <b>E-mail address</b>
		</font>
	</td>
	<td bgcolor="white" height="30">
		<font face="arial" size="2">
		&nbsp; <INPUT TYPE="text" name="email" size="60" value="<?php echo $cur_emails; ?>">
		</font>
	</td>
</tr>

<tr>
	<td bgcolor="white" height="30">
		<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
		&nbsp; <b>Currency</b> &nbsp;									
		</FONT>
	</td>
	<td bgcolor="white" height="30">
	&nbsp; <FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
		<SELECT NAME="scur">
		<OPTION VALUE="">N/A</OPTION>
		<?php
		$queryc="select * from $wb_tbl_currency order by sort_id";
		$resultc = mysql_db_query($wb_dbname,$queryc);
		while ( $rowc = mysql_fetch_array( $resultc ) ) 
		{
			if($rowc[cur_code]==$scur)
			{
				echo "<OPTION VALUE=\"$rowc[cur_code]\" SELECTED>$rowc[cur_code]</OPTION>";
			}
			else
			{
				echo "<OPTION VALUE=\"$rowc[cur_code]\">$rowc[cur_code]</OPTION>";
			}
		}
		?>
		</SELECT>

		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="30" colspan="2" align="center">
		<font face="arial" size="2">
		<INPUT TYPE="submit" value="Update Profile">
		</font>
	</td>
</tr>
</form>
</table>
<?php
}
if($tr=="2ok")
{
	$query_u="UPDATE $wb_tbl_users SET ufname='$_POST[ufname]',ulname='$_POST[ulname]',email='$_POST[email]', ".
					"scur='$_POST[scur]' where uid='$session_uid'";
	$result_u = mysql_db_query($wb_dbname,$query_u);
	$session_scur=$_POST[scur];
	AlertMsg("Your Profiles change successfully","index.php?mod=home&lang=$lang&smod=pref&tr=2");
	die;		
}
include("pref_muladd.php");
?>

</td></tr></table>