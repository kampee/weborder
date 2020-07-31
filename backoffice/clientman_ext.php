<?php
if($pst=="add")
{
	$title_tb="Create New Client";
}

if($pst=="update")
{

	$query="select * from $wb_tbl_clients where cid='$cid' ";
	$result = mysql_db_query($wb_dbname,$query);
	while ( $row = mysql_fetch_array( $result) ) 
	{
		$cid=$row[cid];
		$ccode=$row[ccode];
		$cname=$row[cname];
		$csc=$row[csc];
		$min_cur=$row[min_cur];
		$min_amt=$row[min_amt];
		$gemail=$row[gemail];
		$cflag=$row[cflag];
	}
	$title_tb="Edit Client : ".$cname;
}

?>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
		<table cellpadding="0" cellspacing="0" border="1" bordercolor="#99CC99" width="100%" bgcolor="F9F9F6" align="center">
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20" colspan="2">
				<font face="arial" size="2">
				&nbsp; <b><?php echo $title_tb; ?></b>
				<INPUT TYPE="hidden" name="cid" value="<?php echo $cid; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; Code
				</font>
			</td>
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="ccode" size="30" class="bkoffice" value="<?php echo $ccode; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; Name
				</font>
			</td>
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="cname" size="60" class="bkoffice" value="<?php echo $cname; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; Condition
				</font>
			</td>
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; 
				<TEXTAREA NAME="csc" ROWS="20" COLS="70"><?php echo $csc; ?></TEXTAREA>
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; Currency
				</font>
			</td>
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; 
				<SELECT NAME="min_cur" CLASS="bkoffice">
				<?php
				$queryt="select * from $wb_tbl_currency";
				$resultt = mysql_db_query($wb_dbname,$queryt);
				while ( $rowt = mysql_fetch_array( $resultt) ) 
				{
					if($pst=="update")
					{
					if($rowt[cur_code]==$min_cur)
					{
						echo "<OPTION VALUE=\"$rowt[cur_code]\" SELECTED>$rowt[cur_name]</OPTION>";
					}
					else
					{
						echo "<OPTION VALUE=\"$rowt[cur_code]\">$rowt[cur_name]</OPTION>";
					}
					}
					if($pst=="add")
					{
						echo "<OPTION VALUE=\"$rowt[cur_code]\">$rowt[cur_name]</OPTION>";
					}
				}	
				?>
				</SELECT>
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; Order Minimum
				</font>
			</td>
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="min_amt" size="10" class="bkoffice" value="<?php echo $min_amt; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; E-mail
				</font>
			</td>
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="gemail" size="60" class="bkoffice" value="<?php echo $gemail; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="20">
				<font face="arial" size="2">
				&nbsp; Status
				</font>
			</td>
			<td bgcolor="#99CC99" height="20">
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
					if($cflag=="0")
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
				<INPUT TYPE="radio" NAME="cflag" value="0" <?php echo $s0; ?>>Enable
				<INPUT TYPE="radio" NAME="cflag" value="1" <?php echo $s1; ?>>Disable
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#99CC99" height="30" colspan="2" align="center">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="submit" value="Submit" class="bkoffice">
				&nbsp; <INPUT TYPE="reset" value="Reset" class="bkoffice">
				&nbsp; <INPUT TYPE="button" name="List" value="  List  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=clientman&mode=admin';">
				</font>
			</td>
		</tr>
		</table>
	</td>
</tr>
