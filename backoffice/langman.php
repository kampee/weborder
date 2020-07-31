
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#CC9900" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#CC9900" height="20">
		<font face="arial" size="3" color="black">
		&nbsp; <b>Language</b>
		</font>
	</td>
</tr>

<?php
if($pst=="")
{
?>
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=langman&mode=admin&pst=update" method="post" name="lang" >
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
				<?php
				$query="select * from $wb_tbl_language";
				$result = mysql_db_query($wb_dbname,$query);
				$pfound = mysql_num_rows($result);
				?>
			<table  width="100%" cellpadding="1" cellspacing="0" border="0">
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="#CC9966">
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <B>#</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Code</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Language</b>
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
									<INPUT TYPE="radio" NAME="lid" value="<?php echo $row[lid]; ?>">
									</font>
								</TD>
			                    <TD>
									&nbsp; <font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									<?php echo $row[lang]; ?>
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php echo $row[language]; ?>
									<INPUT TYPE="hidden" name="language" value="<?php echo $row[language]; ?>">
									</font>
								</TD>
							</TR>
							<?php
								if($bgcol=="#FDE6D7")
								{
									$bgcol="white";
								}
								else
								{
									$bgcol="#FDE6D7";
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
			<INPUT TYPE="button" name="add" value="  Add  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=langman&mode=admin&pst=add';">
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
	echo "<form action=\"index.php?mod=home&lang=$lang&smod=langman&mode=admin&pst=ins\" name=\"addlang\" method=\"post\"  onsubmit=\"return AddLang();\">";
	include("langman_ext.php");
	echo "</form>";
	SpecLine("100%","center","white","5");
}
?>

<?php
if($pst=="ins")
{
	SpecLine("100%","center","white","5");

	$query="INSERT INTO $wb_tbl_language (lang,language)"
				."VALUES ('$lang','$language')";
	$result = mysql_db_query($wb_dbname,$query);
	SpecLine("100%","center","white","5");
	AlertMsg("Language : $language has been created.","index.php?mod=home&lang=$lang&smod=langman&mode=admin");
}
?>


<?php
if($pst=="update")
{
	SpecLine("100%","center","white","5");
	switch($submit)
	{
		case "  Edit  ":
			echo "<form action=\"index.php?mod=home&lang=$lang&smod=langman&mode=admin&pst=upd\" name=\"addlang\" method=\"post\"  onsubmit=\"return AddLang();\">";
			include("langman_ext.php");
			echo "</form>";
			break;
		case "Delete":
			$query="delete from $wb_tbl_language where lid='$lid' ";
			$result = mysql_db_query($wb_dbname,$query);			
			AlertMsg("Language : $language has been deleted.","index.php?mod=home&lang=$lang&smod=langman&mode=admin");
			break;
	}
	SpecLine("100%","center","white","5");
}
?>

<?php
if($pst=="upd")
{
	SpecLine("100%","center","white","5");

	$query="UPDATE $wb_tbl_language SET lang='$lang',language='$language' WHERE lid='$lid' ";
	$result = mysql_db_query($wb_dbname,$query);
	SpecLine("100%","center","white","5");
	AlertMsg("Language : $language has been updated..","index.php?mod=home&lang=$lang&smod=langman&mode=admin");
}
?>


</table>

</td></tr></table>
