<br>
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="4" color="black">
		&nbsp; <b>Add/Edit Address</b>
		</font>
	</td>
</tr>

<?php
if($pst=="")
{
?>
<form action="index.php?mod=home&lang=en&smod=pref&tr=3&pst=update" method="post">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
				<?php

				$link_src="index.php?mod=home&lang=en&smod=pref&tr=3";
				if ( !isset($startpage) && !isset($stoppage) ){
					$startpage=0;
					$stoppage=20;
				}

				$querysum="select * from $wb_tbl_address where uid='$session_uid' order by aid DESC";
				$resultsum = mysql_db_query($wb_dbname,$querysum);
				$pfound = mysql_num_rows($resultsum);

				$query="select * from $wb_tbl_address where uid='$session_uid' order by aid DESC limit $startpage,$stoppage";
				$result = mysql_db_query($wb_dbname,$query);
				$lmfound = mysql_num_rows($result);
				?>
			<table width="100%" cellpadding="1" cellspacing="0" border="0">
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="EEEEDD">
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>#</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Contact</b>
									</FONT>
								</TD>
								<TD>
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Company</b>
									</FONT>
								</TD>
								<TD>
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Country</b>
									</FONT>
								</TD>
							</TR>

					<?php
					$j=1;
					while ( $row = mysql_fetch_array( $result) ) 
					{
						if( $bgcol=="" )
						{
							$bgcol="white";
						}
						if($j==1)
						{
							$go_hook="CHECKED";
						}
						else
						{
							$go_hook="";
						}
					?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">
			                    <TD>
									&nbsp; <font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									<INPUT TYPE="radio" NAME="aid" value="<?php echo $row[aid]; ?>" <?PHP ECHO $go_hook; ?>>
									</font>
								</TD>
			                    <TD>
									&nbsp; <font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									<?php echo $row[ship_contact]; ?>
									</font>
								</TD>
								<TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php echo $row[ship_com]; ?>
									</font>
								</TD>
								<TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php echo $row[ship_country]; ?>
									</font>
								</TD>
							</TR>
							<?php
								if($bgcol=="#EEEEEE")
								{
									$bgcol="white";
								}
								else
								{
									$bgcol="#EEEEEE";
								}
								$j++;
							}
							?>
							</TABLE>
					</td>
				</tr>
			</table>
			<?php
			$datafound=$pfound;
			$linkmaster=$link_src;
			$defpages=20;
			include("pagelist.php");
			?>

	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#DEDEDE" height="25" align="center">
			<INPUT TYPE="button" name="add" value="  Add  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=en&smod=pref&tr=3&pst=add';">
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
	echo "<form action=\"index.php?mod=home&lang=en&smod=pref&tr=3&pst=ins\" method=\"post\" name=\"chkreg\" onsubmit=\"return CheckReg();\">";
	include("pref_muladd_ext.php");
	echo "</form>";
	SpecLine("100%","center","white","5");
}
?>

<?php
if($pst=="ins")
{
	$query="INSERT INTO $wb_tbl_address (uid,ship_com,ship_add1,ship_add2,ship_add3,ship_zip,ship_city,ship_country,".
				"ship_contact,job_title,ship_phone,email,fax_no,cr_name,cr_acc)".
				"VALUES ('$session_uid','$ship_com','$ship_add1','$ship_add2','$ship_add3','$ship_zip','$ship_city','$ship_country',".
				"'$ship_contact','$job_title','$ship_phone','$email','$fax_no','$cr_name','$cr_acc')";

	$result = mysql_db_query($wb_dbname,$query);
	SpecLine("100%","center","white","5");
	
	if($goact=="0")
	{
		$go_to_page="index.php?mod=home&lang=en&smod=pref&tr=3&pst=add";
	}
	else
	{
		$go_to_page="index.php?mod=home&lang=en&smod=pref&tr=3";
	}

	AlertMsg("Company : $ship_com has been created.",$go_to_page);
}
?>


<?php
if($pst=="update")
{
	switch($submit)
	{
		case "  Edit  ":
			echo "<form action=\"index.php?mod=home&lang=en&smod=pref&tr=3&pst=upd\" method=\"post\" name=\"chkreg\" onsubmit=\"return CheckReg();\">";
			include("pref_muladd_ext.php");
			echo "</form>";
			break;
		case "Delete":
			$query="delete from $wb_tbl_address where aid='$aid' ";
			$result = mysql_db_query($wb_dbname,$query);			
			AlertMsg("Company : $ship_com has been deleted.","index.php?mod=home&lang=en&smod=pref&tr=3");
			break;
	}
	SpecLine("100%","center","white","5");
}
?>

<?php
if($pst=="upd")
{
	$query="UPDATE $wb_tbl_address SET ".
					"ship_com='$_POST[ship_com]',".
					"ship_add1='$_POST[ship_add1]',".
					"ship_add2='$_POST[ship_add2]',".
					"ship_add3='$_POST[ship_add3]',".
					"ship_zip='$_POST[ship_zip]',".
					"ship_city='$_POST[ship_city]',".
					"ship_country='$_POST[ship_country]',".
					"ship_contact='$_POST[ship_contact]',".
					"ship_phone='$_POST[ship_phone]',".
					"fax_no='$_POST[fax_no]',".
					"cr_name='$_POST[cr_name]',".
					"cr_acc='$_POST[cr_acc]',".
					"job_title='$_POST[job_title]',".
					"ship_vat='$_POST[ship_vat]',".
					"email='$_POST[email]' ".
					"WHERE aid='$aid' ";
	$result = mysql_db_query($wb_dbname,$query);
	SpecLine("100%","center","white","5");

	if($goact=="0")
	{
		$go_to_page="index.php?mod=home&lang=en&smod=pref&tr=3&pst=add";
	}
	else
	{
		$go_to_page="index.php?mod=home&lang=en&smod=pref&tr=3";
	}

	AlertMsg("Company : $ship_com has been updated..",$go_to_page);
}
?>

</table>

</td></tr></table>
