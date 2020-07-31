<?php
if ($prod_size==1)
{

$qchk="select * from $wb_tbl_wwksize where pid='$pid' ";
$rchk = mysql_db_query($wb_dbname,$qchk);
$fchk = mysql_num_rows($rchk);
switch($session_cid)
{
	case "11":
		$_icode = "Size";
		break;
	case "12":
		$_icode = "Size";
	default:
		$_icode = "Size";
}

?>

<tr><td>
<br>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" bgcolor="F9F9F6" width="100%">
<form action="index.php?mod=home&lang=en&smod=prodman&mode=admin&pst=SizeUpdate" method="post">

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="verdana, arial" size="2">
		&nbsp; <a href='javascript:void(0);' onclick='IsableTable("tbSize");IsableTable("tbSize2");'><img src="images/grafplus.png" border=0></a> <b>SIZE BREAK DOWN FOR PRODUCT ID : </b><?php echo $pid; ?>
		</font>
		&nbsp;
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle" id="tbSize">
	<td bgcolor="EEEEDD" height="20">
		<TABLE cellSpacing="2" cellPadding="0" width="100%" bgColor="white" border="0">
			<TR bgcolor="EEEEDD">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>#</b> &nbsp;
					</FONT>
				</TD>
				
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b><?php echo $_icode; ?></b> &nbsp;
					</FONT>
				</TD>
		</TR>

<?php
			$i=0;
			while ( $row = mysql_fetch_array( $rchk ) )
			{
				$wwksize_name[$i] = $row[wwksize_name];
				$wwksize_id[$i] = $row[wwksize_id];
		?>
			<TR bgcolor="EEEEDD">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <?php echo $i+1; ?>
					<INPUT TYPE="hidden" NAME="wwksize_id[<?php echo $i; ?>]" value="<?php echo $wwksize_id[$i]; ?>">
					</FONT>
				</TD>

				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="wwksize_name[<?php echo $i; ?>]" size="65" class="addcart" maxlength="60" value="<?php echo $wwksize_name[$i]; ?>">
					
				</FONT>
			</TD>
		</TR>
		<?php
		$i++;
		}
		for($x=$i; $x<=$i+5; $x++)
		{
		?>

			<TR bgcolor="EEEEDD">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <?php echo $x+1; ?>
					<INPUT TYPE="hidden" NAME="wwksize_id[<?php echo $x; ?>]" value="<?php echo $wwksize_id[$x]; ?>">
					</FONT>
				</TD>

				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="wwksize_name[<?php echo $x; ?>]" size="65" class="addcart" maxlength="60" value="<?php echo $wwksize_name[$x]; ?>">
					
				</FONT>
			</TD>
		</TR>

		<?php
		}
		?>
		</TABLE>
	</td>
</tr>

</table>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle" id="tbSize2">
	<td bgcolor="EEEEDD" height="20" align=center>
		&nbsp;
		<INPUT TYPE="hidden" NAME="xrec" value="<?php echo $x; ?>">
		<INPUT TYPE="hidden" NAME="pid" value="<?php echo $pid; ?>">
		<INPUT TYPE="submit" VALUE="Save ">
	</td>
</tr>


	</td>
</tr>
</form>

<?php
}
?>

<SCRIPT LANGUAGE="JavaScript">
<!--
document.getElementById('tbSize').style.display = 'none';
document.getElementById('tbSize2').style.display = 'none';
//-->
</SCRIPT>
