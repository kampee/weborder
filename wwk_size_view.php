<?php
$cart_id=$row[cart_id];
$mh1="Made in"; 
$mh2="Size";

?>
<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="#CC0000" height="20">
		<TABLE cellSpacing="2" cellPadding="0" width="100%" bgColor="white" border="0">
			<TR bgcolor="EEEEDD">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>No.</b>
					</FONT>
				</TD>
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b><?php echo $mh1; ?></b>
					</FONT>
				</TD>
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>Size</b> &nbsp;
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>Quantity</b>
				</FONT>
			</TD>
		</TR>

		<?php

		//$qchk="select * from $wb_tbl_slse where sl_cartid='$cart_id' and sl_num<>'' ";
		$qchk="select * from $wb_tbl_slse where sl_cartid='$cart_id' and sl_qty<>'' ";
		$rchk = mysql_db_query($wb_dbname,$qchk);
		$fchk = mysql_num_rows($rchk);
		$k=1;
		while ( $row_chk = mysql_fetch_array( $rchk ) )
		{	
			if( $bcs=="" )
			{
				$bcs="white";
			}
		?>
			<TR bgcolor="<?php echo $bcs; ?>">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <?php echo $k; ?>
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<?php echo $row_chk[sl_usa]; ?>
					</FONT>
				</TD>
				

				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<?php echo $row_chk[sl_num]; ?>
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<?php echo $row_chk[sl_qty]; ?>
				</FONT>
			</TD>
		</TR>
		<?php
			$k++;
			if($bcs=="#EFEFF8")
			{
				$bcs="white";
			}
			else
			{
				$bcs="#EFEFF8";
			}
		}
		?>
		</TABLE>
	</td>
</tr>
</table>
