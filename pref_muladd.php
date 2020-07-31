<?php

if($tr=="3")
{
	include("pref_muladd_list.php");
}



if($tr=="3ok")
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