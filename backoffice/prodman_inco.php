<?php
if ($prod_inco==1)
{

$qchX="select * from $wb_tbl_ictprice where ict_pid='$pid' ";
$rchX = mysql_db_query($wb_dbname,$qchX);
$fchX = mysql_num_rows($rchX);

?>

<tr><td>
<br>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" bgcolor="F9F9F6" width="100%">
<form action="index.php?mod=home&lang=en&smod=prodman&mode=admin&pst=ICTUpdate" method="post">

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle" >
	<td bgcolor="EEEEDD" height="20">
		<font face="verdana, arial" size="2">
		&nbsp; <a href='javascript:void(0);' onclick='IsableTable("tbInco");IsableTable("tbInco2");'><img src="images/grafplus.png" border=0></a> <b>INCOTERMS PRICE FOR PRODUCT ID : </b><?php echo $pid; ?>
		</font>
		&nbsp;
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle" id="tbInco">
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
					&nbsp; <b>Currency</b> &nbsp;
					</FONT>
				</TD>

				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>Incoterms</b> &nbsp;
					</FONT>
				</TD>
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>Price</b> &nbsp;
					</FONT>
				</TD>

		</TR>

			<?php
			$i=0;
			while ( $row = mysql_fetch_array( $rchX ) )
			{
				$ict_id[$i] = $row[ict_id];
				$ict_cur[$i] = $row[ict_cur];
				$ict_incoid[$i] = $row[ict_incoid];
				$ict_price[$i] = $row[ict_price];
			?>

			<TR bgcolor="EEEEDD">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <?php echo $i+1; ?>
					<INPUT TYPE="hidden" NAME="ict_id[<?php echo $i; ?>]" value="<?php echo $ict_id[$i]; ?>">
					</FONT>
				</TD>

				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<SELECT NAME="ict_cur[<?php echo $i; ?>]">
					<OPTION VALUE="">N/A</OPTION>
					<?php
						$queryc="select * from $wb_tbl_currency order by sort_id";
						$resultc = mysql_db_query($wb_dbname,$queryc);
						while ( $rowc = mysql_fetch_array( $resultc ) ) 
						{
							if($rowc[cur_code]==$ict_cur[$i])
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
					</FONT>
				</TD>

				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<SELECT NAME="ict_incoid[<?php echo $i; ?>]">
					<OPTION VALUE="">N/A</OPTION>
					<?php
						$queryD="select * from $wb_tbl_incoterms";
						$resultD = mysql_db_query($wb_dbname,$queryD);
						while ( $rowD = mysql_fetch_array( $resultD ) ) 
						{
							if($rowD[inco_id]==$ict_incoid[$i])
							{
								echo "<OPTION VALUE=\"$rowD[inco_id]\" SELECTED>$rowD[inco_name]</OPTION>";
							}
							else
							{
								echo "<OPTION VALUE=\"$rowD[inco_id]\">$rowD[inco_name]</OPTION>";
							}
						}
					?>
					</SELECT>
					</FONT>
				</TD>

				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="ict_price[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $ict_price[$i]; ?>">
					
				</FONT>
			</TD>
		</TR>
		<?php
		$i++;
		}
		for($x=$i; $x<=$i+3; $x++)
		{
		?>

			<TR bgcolor="EEEEDD">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <?php echo $x+1; ?>
					<INPUT TYPE="hidden" NAME="ict_id[<?php echo $x; ?>]" value="<?php echo $ict_id[$x]; ?>">
					</FONT>
				</TD>

				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<SELECT NAME="ict_cur[<?php echo $x; ?>]">
					<OPTION VALUE="">N/A</OPTION>
					<?php
						$queryc="select * from $wb_tbl_currency order by sort_id";
						$resultc = mysql_db_query($wb_dbname,$queryc);
						while ( $rowc = mysql_fetch_array( $resultc ) ) 
						{
							if($rowc[cur_code]==$ict_cur[$x])
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
					</FONT>
				</TD>

				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<SELECT NAME="ict_incoid[<?php echo $x; ?>]">
					<OPTION VALUE="">N/A</OPTION>
					<?php
						$queryD="select * from $wb_tbl_incoterms";
						$resultD = mysql_db_query($wb_dbname,$queryD);
						while ( $rowD = mysql_fetch_array( $resultD ) ) 
						{
							if($rowD[inco_id]==$ict_incoid[$x])
							{
								echo "<OPTION VALUE=\"$rowD[inco_id]\" SELECTED>$rowD[inco_name]</OPTION>";
							}
							else
							{
								echo "<OPTION VALUE=\"$rowD[inco_id]\">$rowD[inco_name]</OPTION>";
							}
						}
					?>
					</SELECT>
					</FONT>
				</TD>

				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="ict_price[<?php echo $x; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $ict_price[$x]; ?>">
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

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle" id="tbInco2">
	<td bgcolor="EEEEDD" height="20" align=center>
		&nbsp;
		<INPUT TYPE="hidden" NAME="xrec2" value="<?php echo $x; ?>">
		<INPUT TYPE="hidden" NAME="pid" value="<?php echo $pid; ?>">
		<INPUT TYPE="submit" VALUE="Save ">
	</td>
</tr>


	</td>
</tr>
</form>

<SCRIPT LANGUAGE="JavaScript">
<!--
document.getElementById('tbInco').style.display = 'none';
document.getElementById('tbInco2').style.display = 'none';
//-->
</SCRIPT>

<?php
}
?>

