<?php
if($pst=="add")
{
	$title_tb="Add ";
}

if($pst=="update")
{

	$query="select * from $wb_tbl_address where aid='$aid' ";
	$result = mysql_db_query($wb_dbname,$query);
	while ( $row = mysql_fetch_array( $result) ) 
	{
		$aid=$row[aid];
		$uid=$row[uid];
		$cur_emails=$row[email];
		$ship_com=$row[ship_com];
		$ship_add1=$row[ship_add1];
		$ship_add2=$row[ship_add2];
		$ship_add3=$row[ship_add3];
		$ship_zip=$row[ship_zip];
		$ship_city=$row[ship_city];
		$ship_country=$row[ship_country];
		$ship_contact=$row[ship_contact];
		$job_title=$row[job_title];
		$ship_phone=$row[ship_phone];
		$fax_no=$row[fax_no];
		$cr_name=$row[cr_name];
		$cr_acc=$row[cr_acc];
		$ship_vat=$row[ship_vat];
	}
	$title_tb="Edit ".trim($ship_com);
}

?>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
		<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="white">
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td bgcolor="EEEEDD" height="20" colspan="3">
				<font face="arial" size="3">
				&nbsp; <i><?php echo $title_tb; ?></i>
				<INPUT TYPE="hidden" name="aid" value="<?php echo $aid; ?>">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle" bgcolor="EEEEDD">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Company Name*</b> &nbsp;
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="ship_com" size="40" class="addcart" value="<?php echo $ship_com; ?>" >
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Business Address*</b> &nbsp;
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="ship_add1" size="50" class="addcart" value="<?php echo $ship_add1; ?>" >
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b></b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="ship_add2" size="50" class="addcart" value="<?php echo $ship_add2; ?>" >
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b></b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="ship_add3" size="50" class="addcart" value="<?php echo $ship_add3; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Zip Code*</b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="ship_zip" size="10" class="addcart" value="<?php echo $ship_zip; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>City*</b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="ship_city" size="20" class="addcart" value="<?php echo $ship_city; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Country*</b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="ship_country" size="20" class="addcart" value="<?php echo $ship_country; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Contact Name*</b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="ship_contact" size="30" class="addcart" value="<?php echo $ship_contact; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Job Title*</b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="job_title" size="30" class="addcart" value="<?php echo $job_title; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Phone*</b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="ship_phone" size="20" class="addcart" value="<?php echo $ship_phone; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Fax*</b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="fax_no" size="20" class="addcart" value="<?php echo $fax_no; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Email*</b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="email" size="40" class="addcart" value="<?php echo $cur_emails; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
				&nbsp; <b>Vat*</b> &nbsp;									
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="ship_vat" size="5" class="addcart" value="<?php echo $ship_vat; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial,MS Sans Serif, Microsoft Sans Serif" size="2">
				&nbsp; <b>Courier Name </b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="cr_name" size="30" class="addcart" value="<?php echo $cr_name; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td>
				<FONT face="arial" size="2">
				&nbsp; <b>Courier Account </b> &nbsp;
				</FONT>
			</td>
			<td>
				&nbsp; <INPUT TYPE="text" NAME="cr_acc" size="30" class="addcart" value="<?php echo $cr_acc; ?>">
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td bgcolor="#FFFFFF" height="25" colspan="2" align="center">
				<font face="arial" size="2">
				<INPUT TYPE="radio" NAME="goact" value="0" CHECKED>Insert another new address 
				<INPUT TYPE="radio" NAME="goact" value="1">Go back to list page
				</font>
			</td>
		</tr>
		<tr bordercolordark="#ffffff" bordercolorlight="EEEEDD" valign="middle">
			<td bgcolor="EEEEDD" height="30" colspan="2" align="center">
				<font face="arial" size="2">
				&nbsp; <INPUT TYPE="submit" value="Submit" class="bkoffice">
				&nbsp; <INPUT TYPE="reset" value="Reset" class="bkoffice">
				&nbsp; <INPUT TYPE="button" name="List" value="  List  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=en&smod=pref&tr=3';">
				</font>
			</td>
		</tr>
		</table>
	</td>
</tr>
