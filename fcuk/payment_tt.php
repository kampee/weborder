<table cellpadding="1" cellspacing="1" border="0" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=confirm&ps=2&sendtome=<?php echo $sendtome; ?>&sendtodoc=<?php echo $sendtodoc; ?>&sendtodoc_add=<?php echo $sendtodoc_add; ?>" method="post" name="chkpayment2">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Payment Method</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; Telegraphic Transfer (T/T)
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Note</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <INPUT TYPE="text" NAME="payment_desc" size="50" maxlength="255" class="addcart">
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Order No</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="red"><b>
		&nbsp; <?php echo addzero5($order_id); ?><?php echo addzero3($session_cid); ?></b>
		<INPUT TYPE="hidden" name="order_id" value="<?php echo $order_id; ?>">
		<INPUT TYPE="hidden" name="sid" value="<?php echo $PHPSESSID; ?>">
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Client </b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <?php echo $session_cname; ?>
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Payment to</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; Computer Label World Wide Co., Ltd.
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Amount</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2"><b>
		&nbsp; <?php chkcursy($t_cur,$t_amt); ?> <?php //echo $t_cur." ".number_format($t_amt,2); ?>
		</font></b>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30" colspan="2" align="center">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		<INPUT TYPE="submit" value="Submit" class="addcart">
		&nbsp;&nbsp;
		<INPUT TYPE="reset" value="Reset" class="addcart">
		</font>
	</td>
</tr>
</form>
</table>

