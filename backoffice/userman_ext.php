<?php
if($pst=="add")
{
	$title_tb="Create New User";
	$gid=3;
	$cid=$session_cid;
	$uid=$session_uid;
	$bid=$session_bid;
}

if($pst=="update")
{

	$query="select * from $wb_tbl_users where uid='$uid' ";
	$result = mysql_db_query($wb_dbname,$query);
	while ( $row = mysql_fetch_array( $result) ) 
	{
		$uid=$row[uid];
		$gid=$row[gid];
		$cid=$row[cid];
		$bid=$row[bid];
		$uname=$row[uname];
		$upass=$row[upass];
		$ufname=$row[ufname];
		$ulname=$row[ulname];
		$email=$row[email];
		$scur=$row[scur];
		$inco_id=$row[inco_id];
		$langid=$row[langid];
		$status=$row[status];
	}
	$title_tb="Edit User : ".$uname;
}

?>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">


		<table cellpadding="1" cellspacing="1" border="0" bordercolor="#99CC99" width="80%" bgcolor="F9F9F6" align="center">
		<tr bordercolordark="#ffffff" bordercolorlight="white" valign="middle">
			<td bgcolor="EEEEDD" height="30" colspan="2">
				<font face="arial" size="2">
				&nbsp; <b><?php echo $title_tb; ?></b>
				<INPUT TYPE="hidden" name="uid" value="<?php echo $uid; ?>">
				<INPUT TYPE="hidden" name="cid" value="<?php echo $cid; ?>">
				</font>
			</td>
		</tr>
				
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#FFFFCC" height="20">
				<font face="arial" size="2" color=red>
				&nbsp; <b>User Mode</b>
				</font>
			</td>
			<td bgcolor="#FFFFCC" height="20">
				<font face="arial" size="2">
				<?php 
				if($pst=="add")
				{
					$u0="checked";
					$u1="";
					$u2="";
					$u3="";
				}
				if($pst=="update")
				{
					switch($gid)
					{
						case "4":
							$u0="";
							$u1="";
							$u2="";
							$u3="CHECKED";
							break;
						case "3":
							$u0="CHECKED";
							$u1="";
							$u2="";
							$u3="";
							break;
						case "2":
							$u0="";
							$u1="CHECKED";
							$u2="";
							$u3="";
							break;
						case "1":
							$u0="";
							$u1="";
							$u2="CHECKED";
							$u3="";
							break;
					}
				}
				?>
				<INPUT TYPE="radio" NAME="gid" value="3" <?php echo $u0; ?>>User
				<INPUT TYPE="radio" NAME="gid" value="4" <?php echo $u3; ?>>Manager
				<INPUT TYPE="radio" NAME="gid" value="2" <?php echo $u1; ?>>Super User
				
				<?php
				if($session_gid==1){
				?>
				<INPUT TYPE="radio" NAME="gid" value="1" <?php echo $u2; ?>>Administrator
				<?php
				}
				?>
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="white" height="30">
				<font face="arial" size="2">
				&nbsp; Brand/Program
				</font>
			</td>
			<td bgcolor="white" height="20">
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

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; User Name
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="uname" size="20" class="bkoffice" value="<?php echo $uname; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Password
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="password" NAME="upass" size="20" class="bkoffice" value="<?php echo $upass; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Confirm Password
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="password" NAME="cpass" size="20" class="bkoffice" value="<?php echo $upass; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; First Name
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="ufname" size="20" class="bkoffice" value="<?php echo $ufname; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Last Name
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="ulname" size="20" class="bkoffice" value="<?php echo $ulname; ?>">
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; E-mail
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="text" NAME="email" size="30" class="bkoffice" value="<?php echo $email; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td height="20">
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Currency</b> &nbsp;									
				</FONT>
			</td>
			<td >
				&nbsp;
				<SELECT NAME="scur">
				<OPTION VALUE="">N/A</OPTION>
				<?php
				$queryc="select * from $wb_tbl_currency order by sort_id";
				$resultc = mysql_db_query($wb_dbname,$queryc);
				while ( $rowc = mysql_fetch_array( $resultc ) ) 
				{
					if($rowc[cur_code]==$scur)
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
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td height="20">
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Incoterms</b> &nbsp;									
				</FONT>
			</td>
			<td >
				&nbsp;
				<SELECT NAME="inco_id">
				<OPTION VALUE="">N/A</OPTION>
				<?php
				$queryD="select * from $wb_tbl_incoterms";
				$resultD = mysql_db_query($wb_dbname,$queryD);
				while ( $rowD = mysql_fetch_array( $resultD ) ) 
				{
					if($rowD[inco_id]==$inco_id)
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
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Language
				</font>
			</td>
			<td height="20">
				<font face="arial" size="2">
				&nbsp;
				<?php 
				if($langid=="en")
				{
					$select_lang="SELECTED";
				}
				else
				{
					$select_lang="";
				}
				?>
				<SELECT NAME="langid" class="bkoffice">
					<OPTION value="en" <?php echo $select_lang; ?>>English</OPTION>
				</SELECT>
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td height="20">
				<font face="arial" size="2">
				&nbsp; Status
				</font>
			</td>
			<td  height="20">
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
					if($status=="0")
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
				<INPUT TYPE="radio" NAME="status" value="0" <?php echo $s0; ?>>Enable
				<INPUT TYPE="radio" NAME="status" value="1" <?php echo $s1; ?>>Disable
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td  height="30" colspan="2" align="center">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="submit" value="Submit" class="bkoffice">
				&nbsp; <INPUT TYPE="reset" value="Reset" class="bkoffice">
				&nbsp; <INPUT TYPE="button" name="List" value="  List  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=userman&mode=admin';">
				</font>
			</td>
		</tr>
		</table>
	</td>
</tr>
