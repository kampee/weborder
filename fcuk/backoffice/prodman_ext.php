<?php
if($pst=="add")
{
	$title_tb="Create New Product";
	$prod_per=1000;
}

if($pst=="update")
{

	$query="select * from $wb_tbl_product where pid='$pid' ";
	$result = mysql_db_query($wb_dbname,$query);
	while ( $row = mysql_fetch_array( $result) ) 
	{
		$cid=$row[cid];
		$pgroup=$row[pgroup];
		$client_code=$row[client_code];
		$client_code2=$row[client_code2];
		$prod_name=$row[prod_name];
		$prod_name2=$row[prod_name2];
		$prod_desc=$row[prod_desc];
		$prod_price=$row[prod_price];
		$prod_cur=$row[prod_cur];	
		$prod_price1=$row[prod_price1];
		$prod_cur1=$row[prod_cur1];	
		$prod_per=$row[prod_per];
		$prod_unit=$row[prod_unit];
		$pic_thum=$row[pic_thum];
		$pic_zoom=$row[pic_zoom];
		$cur_stock=$row[cur_stock];
	}
	$title_tb="Edit Product : ".$client_code;
}

?>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" >
		<table cellpadding="0" cellspacing="0" border="1" bordercolor="#0099FF" width="100%" bgcolor="#0099FF" align="center">
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#CCCCCC" height="20" colspan="2">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="4">
				&nbsp; <b><?php echo $title_tb; ?></b>
				<INPUT TYPE="hidden" name="pid" value="<?php echo $pid; ?>">
				</font>
			</td>
		</tr>


		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="white" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; Categories
				</font>
			</td>
			<td bgcolor="white" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; 
				<?php
					echo "<select name=\"pgroup\" class=\"bkoffice\">";
					echo "<option value=\"0\">N/A</option>";
					$queryp="select * from $wb_tbl_pgroup";
					$resultp = mysql_db_query($wb_dbname,$queryp);
					while ( $rowp = mysql_fetch_array( $resultp ) ) 
					{
						if($rowp[pgroup]==$pgroup)
						{
							echo "<option value=\"$rowp[pgroup]\" SELECTED>$rowp[pname]</option>";
						}
						else
						{
							echo "<option value=\"$rowp[pgroup]\">$rowp[pname]</option>";
						}
					}
					echo "</select>";
				?>
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="white" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; Product Ref.
				</font>
			</td>
			<td bgcolor="white" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; <INPUT TYPE="text" NAME="client_code" size="30" class="bkoffice" value="<?php echo $client_code; ?>">
				<INPUT TYPE="text" NAME="client_code2" size="30" class="bkoffice" value="<?php echo $client_code2; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="white" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; Product Name
				</font>
			</td>
			<td bgcolor="white" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; <INPUT TYPE="text" NAME="prod_name" size="30" class="bkoffice" value="<?php echo $prod_name; ?>">
				<INPUT TYPE="text" NAME="prod_name2" size="30" class="bkoffice" value="<?php echo $prod_name2; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="top">
			<td bgcolor="white" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; Product Description
				</font>
			</td>
			<td bgcolor="white" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; 
				<TEXTAREA NAME="prod_desc" ROWS="10" COLS="60" class="bkoffice"><?php echo $prod_desc; ?></TEXTAREA>
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#FFCC00" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; Price#1
				</font>
			</td>
			<td bgcolor="#FFFFCC" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; 
				<?php
					echo "<select name=\"prod_cur\" class=\"bkoffice\">";
					$queryc="select * from $wb_tbl_currency";
					$resultc = mysql_db_query($wb_dbname,$queryc);
					while ( $rowc = mysql_fetch_array( $resultc ) ) 
					{
						if($rowc[cur_code]==$prod_cur)
						{
							echo "<option value=\"$rowc[cur_code]\" SELECTED>$rowc[cur_code]</option>";
						}
						else
						{
							echo "<option value=\"$rowc[cur_code]\">$rowc[cur_code]</option>";
						}
					}
					echo "</select>";
				?>
				<INPUT TYPE="text" NAME="prod_price" size="8" class="bkoffice" value="<?php echo $prod_price; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#FFCC00" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; Price#2
				</font>
			</td>
			<td bgcolor="#FFFFCC" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; 
				<?php
					echo "<select name=\"prod_cur1\" class=\"bkoffice\">";
					$queryc="select * from $wb_tbl_currency";
					$resultc = mysql_db_query($wb_dbname,$queryc);
					while ( $rowc = mysql_fetch_array( $resultc ) ) 
					{
						if($rowc[cur_code]==$prod_cur1)
						{
							echo "<option value=\"$rowc[cur_code]\" SELECTED>$rowc[cur_code]</option>";
						}
						else
						{
							echo "<option value=\"$rowc[cur_code]\">$rowc[cur_code]</option>";
						}
					}
					echo "</select>";
				?>
				<INPUT TYPE="text" NAME="prod_price1" size="8" class="bkoffice" value="<?php echo $prod_price1; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#FFCC00" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; Per
				</font>
			</td>
			<td bgcolor="#FFFFCC" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; 
				<INPUT TYPE="text" NAME="prod_per" size="8" class="bkoffice" value="<?php echo $prod_per; ?>"> <b>Unit :</b> <INPUT TYPE="text" NAME="prod_unit" size="15" class="bkoffice" value="<?php echo $prod_unit; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#CCCCCC" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; Product Picture<BR>
				&nbsp; <small>Thumbnils & Original</small>
				</font>
			</td>
			<td bgcolor="#E7E7E7" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; <INPUT TYPE="file" NAME="pic_thum" value="Browse" size="30" class="bkoffice">
				[<a href="javascript:ZoomPic('<?php echo $files_path_pictures.$pic_thum; ?>');"><?php echo $pic_thum; ?></a>]
				<br>
				&nbsp; <INPUT TYPE="file" NAME="pic_zoom" value="Browse" size="30" class="bkoffice">
				[<a href="javascript:ZoomPic('<?php echo $files_path_pictures.$pic_zoom; ?>');"><?php echo $pic_zoom; ?></a>]
				</font>
			</td>
		</tr>

		<!--<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#66CCFF" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; Current Stock
				</font>
			</td>
			<td bgcolor="#CCFFFF" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; <INPUT TYPE="text" NAME="cur_stock" size="10" class="bkoffice" value="<?php echo $cur_stock; ?>">
				</font>
			</td>
		</tr>-->

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#E4E4E4" height="30" colspan="2" align="center">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; <INPUT TYPE="submit" value="Submit" class="bkoffice">
				&nbsp; <INPUT TYPE="reset" value="Reset" class="bkoffice">
				&nbsp; <INPUT TYPE="button" name="List" value="  List  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=prodman&mode=admin';">
				</font>
			</td>
		</tr>
		</table>
	</td>
</tr>
