<table cellpadding="1" cellspacing="1" border="0" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=confirm&ps=1&sendtome=<?php echo $sendtome; ?>&sendtodoc=<?php echo $sendtodoc; ?>&sendtodoc_add=<?php echo $sendtodoc_add; ?>" method="post" name="chkpayment" onsubmit="return CheckPayment();">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="2">
		&nbsp; <b>Payment Method</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="arial" size="2">
		&nbsp; Credit Card
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="2">
		&nbsp; <b>Order No</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="arial" size="3" color="red"><b>
		&nbsp; <?php echo addzero5($order_id); ?><?php echo addzero3($session_cid); ?></b>
		<INPUT TYPE="hidden" name="order_id" value="<?php echo $order_id; ?>">
		<INPUT TYPE="hidden" name="sid" value="<?php echo $PHPSESSID; ?>">
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="2">
		&nbsp; <b>Client </b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="arial" size="2">
		&nbsp; <?php echo $session_cname; ?>
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="2">
		&nbsp; <b>Payment to</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="arial" size="2">
		&nbsp; Computer Label World Wide Co., Ltd.
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="2">
		&nbsp; <b>Name of Credit Card</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="arial" size="2">
		&nbsp; <INPUT TYPE="text" NAME="payment_desc" size="50" maxlength="255" class="addcart">
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="2">
		&nbsp; <b>Credit Card No.</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="arial" size="2">
		&nbsp; <INPUT TYPE="text" NAME="card_no" size="30" class="addcart" maxlength="16">
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="2">
		&nbsp; <b>Card Type</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="arial" size="2">
		&nbsp; 
		<select name='card_type' style="width:160px;" class="addcart">
		<option value='6' >MasterCard</option>
		<option value='7' SELECTED>VISA</option>
		</select>
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="2">
		&nbsp; <b>Card Expire</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="arial" size="2">
		&nbsp; 
		<select name='cardexp_month' style='width:101px;' class="addcart">
		<option value='01'>01 (January)</option>
		<option value='02'>02 (February)</option>
		<option value='03'>03 (March)</option>
		<option value='04'>04 (April)</option>
		<option value='05'>05 (May)</option>
		<option value='06'>06 (June)</option>
		<option value='07'>07 (July)</option>
		<option value='08'>08 (August)</option>
		<option value='09'>09 (September)</option>
		<option value='10'>10 (October)</option>
		<option value='11'>11(November)</option>
		<option value='12'>12 (December)</option>
		</select>
		<select name='cardexp_year' style='width:55px' class="addcart">
		<option value='04' selected>2004</option>
		<option value='05'>2005</option>
		<option value='06'>2006</option>
		<option value='07'>2007</option>
		<option value='08'>2008</option>
		<option value='09'>2009</option>
		<option value='10'>2010</option>
		<option value='11'>2011</option>
		</select>
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="2">
		&nbsp; <b>Amount</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="arial" size="2"><b>
		&nbsp; <?php chkcursy($t_cur,$t_amt,2); ?> <?php //echo $t_cur." ".number_format($t_amt,2); ?>
		</font></b>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30" colspan="2" align="center">
		<font face="arial" size="2">
		<INPUT TYPE="submit" value="Submit" class="addcart">
		&nbsp;&nbsp;
		<INPUT TYPE="reset" value="Reset" class="addcart">
		</font>
	</td>
</tr>
</form>
</table>
