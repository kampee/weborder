<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<?php
include("order_stats.php");
if($ps=="1")
{
	$query="UPDATE $wb_tbl_order SET payment_desc='$payment_desc',card_no='$card_no',card_type='$card_type',cardexp_month='$cardexp_month',cardexp_year='$cardexp_year',order_cml='1' where order_id='$order_id'";
}
else
{
	$query="UPDATE $wb_tbl_order SET payment_desc='$payment_desc',order_cml='1' where order_id='$order_id'";
}
$result = mysql_db_query($wb_dbname,$query);


?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="3" color="#CC0000">
		&nbsp; <b><?php echo $_You_have_successfully_txt; ?></b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="80">
	&nbsp; <?php echo $_Cmess1_txt; ?><br><br>

	&nbsp; <?php echo $_Order_No_txt; ?> :  <font size="4" color="green"><b>"<font face="arial" size="3" color="red"><b><?php echo addzero5($order_id); ?><?php echo addzero3($session_cid); ?></b></font>"</b></font> <?php echo $_Click_Here_to_txt; ?> <a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=list"><font face="arial" size="3"><?php echo $_Home_Page_txt; ?></font></a><br>

	</td>
</tr>

<TR bgcolor="#F0F0F0" VALIGN="middle">
	<TD HEIGHT="25" COLSPAN="5" ALIGN="CENTER">
		<INPUT TYPE="button" name="logout" value="<?php echo _logout_txt; ?>" class="addcart" onClick="javascript:if (confirm('Are you sure to logout ?')) location.href='index.php?mod=logout';">

		<INPUT TYPE="button" name="neworder" value="<?php echo $_ENTER_NEW_ORDER_btn; ?>" class="addcart" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=list';">

	</TD>
</TR>

</table>
</td></tr></table>

<?php
	// Getting email for sending
	$queryx ="select gemail from $wb_tbl_clients where cid='$session_cid' ";
	$resultx = mysql_db_query($wb_dbname,$queryx);
	while ( $rowx = mysql_fetch_array( $resultx ) )
	{
		$send_to_mail=$rowx[0];
	}

	// Sent Email To User
	$mailFrom  = "MIME-Version: 1.0\r\n";
	$mailFrom .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$mailFrom .= "From: weborder@clwglobal.com\r\n";

	$mailTo =$send_to_mail;

	//$mailTo ="weborder@computerlabelworldwide.com";
	//$mailTo ="kampee@computerlabelworldwide.com";

	if($sendtome=="1")
	{ 
		$q1="select email from $wb_tbl_users where uid='$session_uid'";
		$r1 = mysql_db_query($wb_dbname,$q1);
		while ( $w1 = mysql_fetch_array( $r1 ) ) 
		{
			$email=$w1[email];
		}	
		$mailTo .= ",".$email; 
	}

	if($sendtodoc=="1")
	{ 
		$mailTo .= ",".$sendtodoc_add;	 
	}
	
	
	$order_number=shwzero5($order_id);
	$order_number.=shwzero3($session_cid);

	$xmsg = 'Thank you '.$session_real.' ('.$session_cname.') for your Order.  <br>  <strong>Your ORDER NUMBER is :   '.$order_number.'  </strong>  <br>
	To View detail, Please click <a href="http://weborder.computerlabelworldwide.com/vieworder.php?order_id='.$order_id.'&sid='.$sid.'">Here</a><br> Thank you very much for your business. 
	If you have further queries, Please email to weborder@clwglobal.com ' ;
	$title = 'Confirmation of your order from CLW';
	
	mail ($mailTo,$title ,$xmsg ,$mailFrom);

?>