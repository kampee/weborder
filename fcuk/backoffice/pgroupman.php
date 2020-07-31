
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#99CC99" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#99CC99" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="black">
		&nbsp; <b>Product Group</b>
		</font>
	</td>
</tr>

<?php
if($pst=="")
{
?>
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=pgroupman&mode=admin&pst=update" method="post" name="pgroup" >
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
				<?php
				$query="select * from $wb_tbl_pgroup";
				$result = mysql_db_query($wb_dbname,$query);
				$pfound = mysql_num_rows($result);
				?>
			<table  width="100%" cellpadding="1" cellspacing="0" border="0">
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="#72B8B8">
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <B>Group No.</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Group Code</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Group Name</b>
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
									<INPUT TYPE="radio" NAME="pgroup" value="<?php echo $row[pgroup]; ?>">
									<?php echo $row[pgroup]; ?>
									</font>
								</TD>
			                    <TD>
									&nbsp; <font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									<?php echo $row[pcode]; ?>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									&nbsp; <?php echo $row[pname]; ?>
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
			<INPUT TYPE="button" name="add" value="  Add  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=pgroupman&mode=admin&pst=add';">
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
	echo "<form action=\"index.php?mod=home&lang=$lang&smod=pgroupman&mode=admin&pst=ins\" name=\"addpgroup\" method=\"post\"  onsubmit=\"return AddPGroup();\">";
	include("pgroupman_ext.php");
	echo "</form>";
	SpecLine("100%","center","white","5");
}
?>

<?php
if($pst=="ins")
{
	SpecLine("100%","center","white","5");

	$query="INSERT INTO $wb_tbl_pgroup (pgroup,pcode,pname)"
				."VALUES ('$pgroup','$pcode','$pname')";
	$result = mysql_db_query($wb_dbname,$query);
	SpecLine("100%","center","white","5");
	AlertMsg("Product Group : $pname has been created.","index.php?mod=home&lang=$lang&smod=pgroupman&mode=admin");
}
?>


<?php
if($pst=="update")
{
	SpecLine("100%","center","white","5");
	switch($submit)
	{
		case "  Edit  ":
			echo "<form action=\"index.php?mod=home&lang=$lang&smod=pgroupman&mode=admin&pst=upd\" name=\"addpgroup\" method=\"post\"  onsubmit=\"return AddPGroup();\">";
			include("pgroupman_ext.php");
			echo "</form>";
			break;
		case "Delete":
			$query="delete from $wb_tbl_pgroup where pgroup='$pgroup' ";
			$result = mysql_db_query($wb_dbname,$query);			
			AlertMsg("Product Group : $pname has been deleted.","index.php?mod=home&lang=$lang&smod=pgroupman&mode=admin");
			break;
	}
	SpecLine("100%","center","white","5");
}
?>

<?php
if($pst=="upd")
{
	SpecLine("100%","center","white","5");

	$query="UPDATE $wb_tbl_pgroup SET pgroup='$pgroup',pcode='$pcode',pname='$pname' WHERE pgroup='$pgroup' ";
	$result = mysql_db_query($wb_dbname,$query);
	SpecLine("100%","center","white","5");
	AlertMsg("Product Group : $pname has been updated..","index.php?mod=home&lang=$lang&smod=pgroupman&mode=admin");
}
?>


</table>

</td></tr></table>
