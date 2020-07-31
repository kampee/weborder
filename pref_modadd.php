<?php
if($tr=="2")
{
	$query="select * from $wb_tbl_users where uid='$session_uid' ";
	$result = mysql_db_query($wb_dbname,$query);
	while ( $row = mysql_fetch_array( $result ) ) 
	{
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
		$scur=$row[scur];
	}
	include("pref_addfrm.php");
}
if($tr=="2ok")
{
	$query_u="UPDATE $wb_tbl_users SET ".
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
					"scur='$_POST[scur]',".
					"email='$_POST[email]' ".
					"where uid='$session_uid'";
	$result_u = mysql_db_query($wb_dbname,$query_u);
	$session_scur=$_POST[scur];
	AlertMsg("Your address change successfully","index.php?mod=home&lang=en&smod=pref");
	die;		
}

?>