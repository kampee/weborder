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
		$bid=$row[bid];
		$pgroup=$row[pgroup];
		$client_code=$row[client_code];
		$client_code2=$row[client_code2];
		$prod_name=$row[prod_name];
		$prod_name2=$row[prod_name2];
		$prod_desc=$row[prod_desc];
		
		// price 1
		$prod_price=number_format($row[prod_price],4);
		$prod_cur=$row[prod_cur];	

		// price 2
		$prod_price1=number_format($row[prod_price1],4);
		$prod_cur1=$row[prod_cur1];

		// price 3
		$prod_price2=number_format($row[prod_price2],4);
		$prod_cur2=$row[prod_cur2];

		// price 4
		$prod_price3=number_format($row[prod_price3],4);
		$prod_cur3=$row[prod_cur3];
		

		$prod_per=$row[prod_per];
		$prod_unit=$row[prod_unit];
		$pic_thum=$row[pic_thum];
		$pic_zoom=$row[pic_zoom];
		$cur_stock=$row[cur_stock];
		$prod_size=$row[prod_size];
		$prod_care=$row[prod_care];
		$prod_inco=$row[prod_inco];
		$prod_stats=$row[prod_stats];
	}
	$title_tb="Edit Product : ".$client_code;
}

?>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" >
		<table cellpadding="0" cellspacing="0" border="0" bordercolor="#0099FF" width="100%" bgcolor="#0099FF" align="center">
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#FFFFCC" height="20" colspan="2">
				<font face="arial" size="3">
				&nbsp; <b><?php echo $title_tb." ID#".$pid; ?></b>
				<INPUT TYPE="hidden" name="pid" value="<?php echo $pid; ?>">
				</font>
			</td>
		</tr>


		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Categories
				</font>
			</td>
			<td height="30">
				<font face="arial" size="2">
				&nbsp; 
				<?php
					echo "<select name=\"pgroup\" class=\"bkoffice\">";
					echo "<option value=\"0\">N/A</option>";
					$queryp="select * from $wb_tbl_pgroup ";
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

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="30">
				<font face="arial" size="2">
				&nbsp; Brand/Program
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; 
				<?php
					echo "<select name=\"bid\" class=\"bkoffice\">";
					echo "<option value=\"0\">N/A</option>";
					$queryB="select * from $wb_tbl_brand where cid='$session_cid' ";
					$resultB = mysql_db_query($wb_dbname,$queryB);
					while ( $rowB = mysql_fetch_array( $resultB ) ) 
					{
						if($rowB[bid]==$bid)
						{
							echo "<option value=\"$rowB[bid]\" SELECTED>$rowB[brand]</option>";
						}
						else
						{
							echo "<option value=\"$rowB[bid]\">$rowB[brand]</option>";
						}
					}
					echo "</select>";
				?>
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Product Ref.
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="client_code" size="30" class="bkoffice" value="<?php echo $client_code; ?>">
				<INPUT TYPE="text" NAME="client_code2" size="30" class="bkoffice" value="<?php echo $client_code2; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Product Name
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="prod_name" size="30" class="bkoffice" value="<?php echo $prod_name; ?>">
				<INPUT TYPE="text" NAME="prod_name2" size="30" class="bkoffice" value="<?php echo $prod_name2; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="top" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Product Details...
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; 
				<TEXTAREA NAME="prod_desc" ROWS="10" COLS="60" class="bkoffice"><?php echo $prod_desc; ?></TEXTAREA>
				</font>
			</td>
		</tr>
		
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Price#1
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; 
				<?php
					echo "<select name=\"prod_cur\" class=\"bkoffice\">";
					echo "<option value=\"\">N/A</option>";
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

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Price#2
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; 
				<?php
					echo "<select name=\"prod_cur1\" class=\"bkoffice\">";
					echo "<option value=\"\">N/A</option>";
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

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Price#3
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; 
				<?php
					echo "<select name=\"prod_cur2\" class=\"bkoffice\">";
					echo "<option value=\"\">N/A</option>";
					$queryc="select * from $wb_tbl_currency";
					$resultc = mysql_db_query($wb_dbname,$queryc);
					while ( $rowc = mysql_fetch_array( $resultc ) ) 
					{
						if($rowc[cur_code]==$prod_cur2)
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
				<INPUT TYPE="text" NAME="prod_price2" size="8" class="bkoffice" value="<?php echo $prod_price2; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Price#4
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; 
				<?php
					echo "<select name=\"prod_cur3\" class=\"bkoffice\">";
					echo "<option value=\"\">N/A</option>";
					$queryc="select * from $wb_tbl_currency";
					$resultc = mysql_db_query($wb_dbname,$queryc);
					while ( $rowc = mysql_fetch_array( $resultc ) ) 
					{
						if($rowc[cur_code]==$prod_cur3)
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
				<INPUT TYPE="text" NAME="prod_price3" size="8" class="bkoffice" value="<?php echo $prod_price3; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Per
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; 
				<INPUT TYPE="text" NAME="prod_per" size="8" class="bkoffice" value="<?php echo $prod_per; ?>"> <b>Unit :</b> <INPUT TYPE="text" NAME="prod_unit" size="15" class="bkoffice" value="<?php echo $prod_unit; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Product Picture<BR>
				&nbsp; <small>Thumbnils & Original</small>
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
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
				<font face="arial" size="2">
				&nbsp; Current Stock
				</font>
			</td>
			<td bgcolor="#CCFFFF" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="cur_stock" size="10" class="bkoffice" value="<?php echo $cur_stock; ?>">
				</font>
			</td>
		</tr>-->

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Use Size Breakdown
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp;
				<?php 
				if($pst=="add")
				{
					$ss0="";
					$ss1="checked";
				}
				if($pst=="update")
				{
					if($prod_size=="0")
					{
						$ss0="";
						$ss1="checked";				
					}
					else
					{
						$ss0="checked";				
						$ss1="";						
					}
				}

				?>
				<INPUT TYPE="radio" NAME="prod_size" value="1" <?php echo $ss0; ?>>Yes
				<INPUT TYPE="radio" NAME="prod_size" value="0" <?php echo $ss1; ?>>No
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Use Incoterms Price
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp;
				<?php 
				if($pst=="add")
				{
					$sc0="";
					$sc1="checked";
				}
				if($pst=="update")
				{
					if($prod_inco=="0")
					{
						$sc0="";
						$sc1="checked";				
					}
					else
					{
						$sc0="checked";				
						$sc1="";						
					}
				}

				?>
				<INPUT TYPE="radio" NAME="prod_inco" value="1" <?php echo $sc0; ?>>Yes
				<INPUT TYPE="radio" NAME="prod_inco" value="0" <?php echo $sc1; ?>>No 
				&nbsp; <font size=1 color=gray>(** Need to select incoterms at user profile)</font>
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Status
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp;
				<?php 
				if($pst=="add")
				{
					$s0="checked";
					$s1="";
				}
				if($pst=="update")
				{
					if($prod_stats=="0")
					{
						$s0="checked";
						$s1="";				
					}
					else
					{
						$s0="";				
						$s1="checked";						
					}
				}

				?>
				<INPUT TYPE="radio" NAME="prod_stats" value="0" <?php echo $s0; ?>>Show
				<INPUT TYPE="radio" NAME="prod_stats" value="1" <?php echo $s1; ?>>Drop
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle" bgcolor="EEEEDD">
			<td height="40" colspan="2" align="center">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="submit" value="Submit">
				&nbsp; <INPUT TYPE="reset" value="Reset">
				&nbsp; <INPUT TYPE="button" name="List" value="  List  " onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=prodman&mode=admin';">
				</font>
			</td>
		</tr>
		</table>
	</td>
</tr>
