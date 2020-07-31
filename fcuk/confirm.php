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


//update product confirm 
$query_xe="select * from $wb_tbl_cart where order_id='$order_id'";
$result_xe = mysql_db_query($wb_dbname,$query_xe);
while ( $row_xe = mysql_fetch_array( $result_xe) ) 
{
	//echo "hello---->> ".$row_xe[p_id]."<br>";
	$query_up="UPDATE $wb_tbl_product SET prod_flag='1' WHERE pid='$row_xe[p_id]' ";
	$result_up = mysql_db_query($wb_dbname,$query_up);
	//echo "**** ".$query_up."<br>".$result_up." ****";

}

?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="#CC0000">
		&nbsp; <b><?php echo $_You_have_successfully_txt; ?></b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="80">
	&nbsp; <?php echo $_Cmess1_txt; ?><br><br>

	&nbsp; <?php echo $_Order_No_txt; ?> :  <font size="4" color="green"><b>"<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="red"><b><?php echo addzero5($order_id); ?><?php echo addzero3($session_cid); ?></b></font>"</b></font> <?php echo $_Click_Here_to_txt; ?> <a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=list"><font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3"><?php echo $_Home_Page_txt; ?></font></a><br>

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
	$mailFrom .= "From: weborder-fcuk@computerlabelworldwide.com\r\n";
	//$mailFrom .= "From: kampee@computerlabelworldwide.com\r\n";

	$mailTo =$send_to_mail;

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
	
	/*
	$xmsg = 'Thank you '.$session_real.' ('.$session_cname.') for your Order.  <br>  <strong>Your ORDER NUMBER is :   '.$order_number.'  </strong>  <br>
	To View detail, Please click <a href="http://weborder.computerlabelworldwide.com/fcuk/vieworder.php?order_id='.$order_id.'&sid='.$sid.'">Here</a><br> Thank you very much for your business. 
	If you have further queries, Please email to weborder-fuck@computerlabelworldwide.com ' ;
	*/

	$xmsg = 'Thank you '.$session_real.' ('.$session_cname.') for your Order.  <br>  <strong>Your ORDER NUMBER is :   '.$order_number.'  </strong>  <br>
	To View detail, Please click <a href="http://weborder.computerlabelworldwide.com/fcuk/vieworder.php?order_id='.$order_id.'&sid='.$sid.'">Here</a><br><br>Our Customer Service Officer will be in touch with you shortly.<br>Delivery of Order will be confirmed back within 24 hours.<br>You can see the details on our Web-Ordering System or contact our Customer Service Officer.<br><br>Please feel free to contact us for your further enquiries at weborder-fcuk@CLWglobal.com<br><br>Thank you very much for your business. ' ;



	$title = 'Confirmation of your order from CLW - FCUK';
	
	mail ($mailTo,$title ,$xmsg ,$mailFrom);

?>