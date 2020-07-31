
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#99CC99" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#99CC99" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="black">
		&nbsp; <b>Client Databases</b>
		</font>
	</td>
</tr>

<?php
if($pst=="")
{
?>
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=clientman&mode=admin&pst=update" method="post" name="clientlist" >
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
				<?php
				$query="select * from $wb_tbl_clients";
				$result = mysql_db_query($wb_dbname,$query);
				$pfound = mysql_num_rows($result);
				?>
			<table  width="100%" cellpadding="1" cellspacing="0" border="0">
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="#72B8B8">
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>#</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Code</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Name</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Currency</b> &nbsp;
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Minimum Order</b> &nbsp;
									</FONT>
								</TD>
								<!--<TD>
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>e-mail</b>
									</FONT>
								</TD>-->
								<TD>
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
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
									&nbsp; <font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									<INPUT TYPE="radio" NAME="cid" value="<?php echo $row[cid]; ?>">
									</font>
								</TD>
			                    <TD>
									&nbsp; <font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									<?php echo $row[ccode]; ?>
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php echo $row[cname]; ?>
									<INPUT TYPE="hidden" name="cname" value="<?php echo $row[cname]; ?>">
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php echo $row[min_cur]; ?>
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php echo $row[min_amt]; ?>
									</font>
								</TD>
								<!--<TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php echo $row[gemail]; ?>
									</font>
								</TD>-->
								<TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; 
									<?php 
										if($row[cflag]==0)
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
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#DEDEDE" height="25" align="center">
			<INPUT TYPE="button" name="add" value="  Add  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=clientman&mode=admin&pst=add';">
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
	echo "<form action=\"index.php?mod=home&lang=$lang&smod=clientman&mode=admin&pst=ins\" name=\"addclient\" method=\"post\"  onsubmit=\"return AddClient();\">";
	include("clientman_ext.php");
	echo "</form>";
	SpecLine("100%","center","white","5");
}
?>

<?php
if($pst=="ins")
{
	SpecLine("100%","center","white","5");

	$query="INSERT INTO $wb_tbl_clients (ccode,cname,csc,min_cur,min_amt,gemail,cflag)"
				."VALUES ('$ccode','$cname','$csc','$min_cur', '$min_amt','$gemail','$cflag')";
	$result = mysql_db_query($wb_dbname,$query);
	SpecLine("100%","center","white","5");
	AlertMsg("Client : $cname has been created.","index.php?mod=home&lang=$lang&smod=clientman&mode=admin");
}
?>


<?php
if($pst=="update")
{
	SpecLine("100%","center","white","5");
	switch($submit)
	{
		case "  Edit  ":
			echo "<form action=\"index.php?mod=home&lang=$lang&smod=clientman&mode=admin&pst=upd\" name=\"addclient\" method=\"post\"  onsubmit=\"return AddClient();\">";
			include("clientman_ext.php");
			echo "</form>";
			break;
		case "Delete":
			$query="delete from $wb_tbl_clients where cid='$cid' ";
			$result = mysql_db_query($wb_dbname,$query);			
			AlertMsg("Client : $cname has been deleted.","index.php?mod=home&lang=$lang&smod=clientman&mode=admin");
			break;
	}
	SpecLine("100%","center","white","5");
}
?>

<?php
if($pst=="upd")
{
	SpecLine("100%","center","white","5");
	$query="UPDATE $wb_tbl_clients SET ccode='$ccode',cname='$cname',csc='$csc',min_cur='$min_cur',min_amt='$min_amt',gemail='$gemail',cflag='$cflag' WHERE cid='$cid' ";
	$result = mysql_db_query($wb_dbname,$query);
	SpecLine("100%","center","white","5");
	AlertMsg("Client : $cname has been updated..","index.php?mod=home&lang=$lang&smod=clientman&mode=admin");
}
?>


</table>

</td></tr></table>
