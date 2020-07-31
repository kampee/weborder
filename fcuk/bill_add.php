<?php
$q1="select * from $wb_tbl_address where uid='$session_uid' ";
$r1 = mysql_db_query($wb_dbname,$q1);
$cnt_y=1;
while ( $w1 = mysql_fetch_array( $r1 ) ) 
{
	$aid=$w1[aid];
	$ship_com=$w1[ship_com];
	$ship_add1=$w1[ship_add1];
	$ship_add2=$w1[ship_add2];
	$ship_add3=$w1[ship_add3];
	$ship_zip=$w1[ship_zip];
	$ship_city=$w1[ship_city];
	$ship_country=$w1[ship_country];
	$ship_contact=$w1[ship_contact];
	$ship_phone=$w1[ship_phone];
	$ship_email=$w1[email];
	$ship_vat=$w1[ship_vat];
	$job_title=$w1[job_title];
	$fax_no=$w1[fax_no];
	$cr_name=$w1[cr_name];
	$cr_acc=$w1[cr_acc];
?>

<table cellspacing=1 cellpadding=1 border=0 width="100%" bgcolor="#E6FFEC">
<tr>
	<td>
		<?php
		if($cnt_y==1)
		{
			$make_select_y="CHECKED";
		}
		else
		{
			$make_select_y="";
		}
		?>
		<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2"><b>
		<INPUT TYPE="radio" NAME="bill_add" value="<?php echo $aid; ?>" <?php echo $make_select_y; ?>>
		<?php echo $ship_com; ?> - <i><?php echo $ship_contact; ?> (<?php echo $job_title; ?>)</i>
		</font></b>
	</td>
</tr>

<tr>
	<td>
		<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
		&nbsp; <?php echo $ship_add1.",".$ship_add2.",".$ship_add3.",".$ship_city." ".$ship_zip." ".$ship_country; ?>
		</font>
	</td>
</tr>

<tr>
	<td>
		<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
		&nbsp; Phone : 
		<?php echo $ship_phone; ?>
		&nbsp; Fax :
		<?php echo $fax_no; ?>
		</font>
	</td>
</tr>

<tr>
	<td>
		<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
		&nbsp; Email :
		<?php echo $ship_email; ?>
		</font>
	</td>
</tr>

<tr>
	<td>
		<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
		&nbsp; Vat :
		<?php echo $ship_vat; ?>
		&nbsp; Courier Name :
		<?php echo $cr_name." ".$cr_acc; ?>
		</font>
	</td>
</tr>
</table>
<?php
	$cnt_y++;
}
?>