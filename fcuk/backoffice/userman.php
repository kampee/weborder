
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#99CC99" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#99CC99" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="black">
		&nbsp; <b>User Management</b>
		</font>
	</td>
</tr>

<?php
if($pst=="")
{
?>
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=userman&mode=admin&pst=update" method="post" name="userlist" >
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
				<?php

				$link_src="index.php?mod=home&lang=".$lang."&smod=userman&mode=admin";
				if ( !isset($startpage) && !isset($stoppage) ){
					$startpage=0;
					$stoppage=20;
				}

				$querysum="select * from $wb_tbl_users where cid='$session_cid' ";
				$resultsum = mysql_db_query($wb_dbname,$querysum);
				$pfound = mysql_num_rows($resultsum);

				$query="select * from $wb_tbl_users where cid='$session_cid' limit $startpage,$stoppage";
				$result = mysql_db_query($wb_dbname,$query);
				$lmfound = mysql_num_rows($result);
				?>

			<table  width="100%" cellpadding="1" cellspacing="0" border="0">
				<tr>
					<td bgcolor="#CCCCCC">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="red">
						&nbsp; Result <?php echo $pfound; ?> users.
						</font>
					</td>
				</tr>
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="#CCFFCC">
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>#</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>UID</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>GID</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>User</b> &nbsp;
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Password</b> &nbsp;
									</FONT>
								</TD>
								<TD>
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Name</b>
									</FONT>
								</TD>
								<TD>
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Currency</b>
									</FONT>
								</TD>
								<TD>
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Status</b>
									</FONT>
								</TD>
							</TR>

					<?php
					while ( $row = mysql_fetch_array( $result) ) 
					{
						if( $bgcol=="" )
						{
							$bgcol="white";
						}
					?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">
			                    <TD>
									&nbsp; <font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									<INPUT TYPE="radio" NAME="uid" value="<?php echo $row[uid]; ?>">
									</font>
								</TD>
			                    <TD>
									&nbsp; <font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									<?php echo $row[uid]; ?>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									&nbsp; <?php echo $row[gid]; ?>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									&nbsp; <?php echo $row[uname]; ?>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2" color="#CCCCCC">
									&nbsp; <?php echo $row[upass]; ?>
									</font>
								</TD>
								<TD>
									<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									&nbsp; <?php echo $row[ufname]." ".$row[ulname]; ?>
									</font>
								</TD>
								<TD>
									<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									&nbsp; <?php echo $row[scur]; ?>
									</font>
								</TD>
								<TD>
									<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									&nbsp; 
									<?php 
										if($row[status]==0)
										{
											echo "<font color=green>Activate";
										}
										else
										{
											echo "<font color=red>Disabled";
										}										
									?>
									<font>
									</font>
								</TD>
							</TR>
							<?php
								if($bgcol=="#D3E9E9")
								{
									$bgcol="white";
								}
								else
								{
									$bgcol="#D3E9E9";
								}
							}
							?>
							</TABLE>
					</td>
				</tr>
			</table>
			<?php
			$datafound=$pfound;
			$linkmaster=$link_src;
			$defpages=20;
			include("pagelist.php");
			?>

	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#DEDEDE" height="25" align="center">
			<INPUT TYPE="button" name="add" value="  Add  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=userman&mode=admin&pst=add';">
			&nbsp; 
			<INPUT TYPE="submit" name="submit" value="  Edit  " class="bkoffice">
			&nbsp;
			<INPUT TYPE="submit" name="submit" value="Delete" class="bkoffice">
			&nbsp;
	</td>
</tr>
</form>
<?php
}
?>


<?php
if($pst=="add")
{
	SpecLine("100%","center","white","5");
	echo "<form action=\"index.php?mod=home&lang=$lang&smod=userman&mode=admin&pst=ins\" name=\"adduser\" method=\"post\"  onsubmit=\"return AddUser();\">";
	include("userman_ext.php");
	echo "</form>";
	SpecLine("100%","center","white","5");
}
?>

<?php
if($pst=="ins")
{

	if( empty($_POST[uname]) )
	{
		errmess("Please enter username");
		echo "</table></td></tr></table>";
		die;
	}

	if( empty($_POST[upass]) )
	{
		errmess("Please enter password");
		echo "</table></td></tr></table>";
		die;
	}

	if( empty($_POST[ufname]) )
	{
		errmess("Please enter first name");
		echo "</table></td></tr></table>";
		die;
	}

	if( empty($_POST[email]) )
	{
		errmess("Please enter e-mail address");
		echo "</table></td></tr></table>";
		die;
	}

	$queryc="select * from $wb_tbl_users where uname='$uname' ";
	$resultc = mysql_db_query($wb_dbname,$queryc);
	$cfound = mysql_num_rows($resultc);
	if ($cfound<>0) {
		errmess("User : $uname exist in databases.");
		echo "</table></td></tr></table>";
		die;
	}

	$query="INSERT INTO $wb_tbl_users (gid,cid,uname,upass,ufname,ulname,email,langid,status,scur)"
				."VALUES ('$gid','$session_cid','$uname','$upass', '$ufname','$ulname','$email', '$langid','$status','$scur')";
	$result = mysql_db_query($wb_dbname,$query);

	AlertMsg("User : $uname has been created.","index.php?mod=home&lang=$lang&smod=userman&mode=admin");
}
?>


<?php
if($pst=="update")
{
	SpecLine("100%","center","white","5");
	switch($submit)
	{
		case "  Edit  ":
			echo "<form action=\"index.php?mod=home&lang=$lang&smod=userman&mode=admin&pst=upd\" name=\"adduser\" method=\"post\"  onsubmit=\"return AddUser();\">";
			include("userman_ext.php");
			echo "</form>";
			break;
		case "Delete":
			$query="delete from $wb_tbl_users where uid='$uid' ";
			$result = mysql_db_query($wb_dbname,$query);			
			AlertMsg("User : $uname has been deleted.","index.php?mod=home&lang=$lang&smod=userman&mode=admin");
			break;
	}
	SpecLine("100%","center","white","5");
}
?>

<?php
if($pst=="upd")
{
	SpecLine("100%","center","white","5");
	$query="UPDATE $wb_tbl_users SET gid='$gid',uname='$uname',upass='$upass',ufname='$ufname',ulname='$ulname',email='$email',langid='$langid',status='$status',scur='$scur' WHERE uid='$uid' ";
	$result = mysql_db_query($wb_dbname,$query);
	SpecLine("100%","center","white","5");
	AlertMsg("User : $uname has been updated..","index.php?mod=home&lang=$lang&smod=userman&mode=admin");
}
?>


</table></td></tr></table>
