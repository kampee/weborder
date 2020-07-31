<?php
if($pst=="add")
{
	$title_tb="Create Stock";
	$stock_date=$regdate;
	$stock_time=$regtime;
	$stock_ip=$wb_remote_ipaddress;
}

if($pst=="update")
{

	$query="select * from $wb_tbl_stock where stock_id='$stock_id' ";
	$result = mysql_db_query($wb_dbname,$query);
	while ( $row = mysql_fetch_array( $result) ) 
	{
		$stock_cid=$row[stock_cid];
		$stock_pid=$row[stock_pid];
		$stock_type=$row[stock_type];
		$stock_qty=$row[stock_qty];
		$stock_rem=$row[stock_rem];
		$stock_date=$row[stock_date];
		$stock_time=$row[stock_time];
		$stock_ip=$row[stock_ip];

	}
	$title_tb="Edit Stock of ".$stock_pid;
}

?>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" >
		<table cellpadding="0" cellspacing="0" border="1" bordercolor="#0099FF" width="100%" bgcolor="#0099FF" align="center">
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="EEEEDD" height="20" colspan="2">
				<font face="arial" size="4">
				&nbsp; <b><?php echo $title_tb; ?></b>
				<INPUT TYPE="hidden" name="stock_id" value="<?php echo $stock_id; ?>">
				</font>
			</td>
		</tr>



		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="white" height="20">
				<font face="arial" size="2">
				&nbsp; Product Ref.
				</font>
			</td>
			<td bgcolor="white" height="20">
				<font face="arial" size="2">
				&nbsp; 
				<?php
					if($pst=="update")
					{
						$opt_type="DISABLED";
					}
					else
					{
						$opt_type="";
					}

					echo "<select name=\"stock_pid\" class=\"bkoffice\" $opt_type>";
					echo "<option value=\"0\">N/A</option>";
					$queryp="select * from $wb_tbl_product where cid='$session_cid' and prod_stats='0'";
					$resultp = mysql_db_query($wb_dbname,$queryp);
					while ( $rowp = mysql_fetch_array( $resultp ) ) 
					{
						if($rowp[pid]==$stock_pid)
						{
							echo "<option value=\"$rowp[pid]\" SELECTED>$rowp[client_code]</option>";
						}
						else
						{
							echo "<option value=\"$rowp[pid]\">$rowp[client_code]</option>";
						}
					}
					echo "</select>";
				?>
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="white" height="20">
				<font face="arial" size="2">
				&nbsp; Stock Type
				</font>
			</td>
			<td bgcolor="white" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="stock_type" value="<?php echo $stock_type; ?>" size="1" <?php echo $opt_type; ?> maxlength="1">&nbsp; <b>O</b>=Openning(+) &nbsp; <b>R</b>=Receive(+) &nbsp; <b>I</b>=Issue(-) &nbsp; <b>A</b>=Adjust(+/-)
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="white" height="20">
				<font face="arial" size="2">
				&nbsp; Stock Qty.
				</font>
			</td>
			<td bgcolor="white" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="stock_qty" value="<?php echo $stock_qty; ?>" size="10" maxlength="10">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="white" height="20">
				<font face="arial" size="2">
				&nbsp; Stock Remark
				</font>
			</td>
			<td bgcolor="white" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="stock_rem" value="<?php echo $stock_rem; ?>" size="30" maxlength="30"> 
				(P/O number or any remark)
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="white" height="20">
				<font face="arial" size="2">
				&nbsp; Modified
				</font>
			</td>
			<td bgcolor="white" height="20">
				<font face="arial" size="2" color=gray>
				&nbsp; <?php echo $stock_date." ".$stock_time." : ".$stock_ip; ?>
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#E4E4E4" height="30" colspan="2" align="center">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="submit" value="Submit" class="bkoffice">
				&nbsp; <INPUT TYPE="reset" value="Reset" class="bkoffice">
				&nbsp; <INPUT TYPE="button" name="List" value="  List  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=stockman&mode=admin';">
				</font>
			</td>
		</tr>
		</table>
	</td>
</tr>
