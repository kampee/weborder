<?php

//check ship to address & bill to address
if($session_cid>=6)
{
	if($_POST[ship_add]=="")
	{
		echo "<script>alert('Please select ship to address');location.href='index.php?mod=home&lang=$lang&smod=order';</script>";
		die;
	}
	if($_POST[bill_add]=="")
	{
		echo "<script>alert('Please select bill to address');location.href='index.php?mod=home&lang=$lang&smod=order';</script>";
		die;
	}
}

//check the last order number
$query="select max(order_id) from $wb_tbl_order ORDER by order_id";
$result = mysql_db_query($wb_dbname,$query);
$pf = mysql_num_rows($result);
if($pf==0)
{
	$order_id=1;
}
else
{
	$rs=mysql_fetch_array( $result );
	$order_id=$rs[0]+1;
}

$query_i1="insert into $wb_tbl_order (order_uid,order_cid,order_id,order_sid,ship_add,bill_add,vendor_pack,company_brochure,".
					"other_mess,sendtome,sendtodoc,sendtodoc_add,inv_doc,pac_doc,co_doc,payment_method,".
					"order_date,order_time,order_ip,order_qty,order_cur,order_amt,order_process,".
					"a30days,order_location,order_oq".
					")values (".
					"'$session_uid',".
					"'$session_cid',".
					"'$order_id',".
					"'$PHPSESSID',".
					"'$ship_add',".
					"'$bill_add',".
					"'$vendor_pack',".
					"'$company_brochure',".
					"'$other_mess',".
					"'$sendtome',".
					"'$sendtodoc',".
					"'$sendtodoc_add',".
					"'$inv_doc',".
					"'$pac_doc',".
					"'$co_doc',".
					"'$payment_method',".
					"'$regdate',".
					"'$regtime',".
					"'$wb_remote_ipaddress',".
					"'$t_qty',".
					"'$t_cur',".
					"'$t_amt','1','$a30days','$order_location','$order_oq'".
					")";
$result_i1 = mysql_db_query($wb_dbname,$query_i1);
	
$v1 = $_REQUEST['cart_id'];
for($i=0; $i<$trow; $i++)
{
	$query_u1="UPDATE $wb_tbl_cart SET order_id='$order_id',order_date='$regdate',order_time='$regtime',order_ip='$wb_remote_ipaddress',cart_flag='1' where cart_id='$cart_id[$i]'";
	$result_u1 = mysql_db_query($wb_dbname,$query_u1);
}
?>

<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<?php
include("order_stats.php");

if($a30days=="1")
{
	$redirect_to="index.php?mod=home&lang=$lang&smod=confirm&ps=payment_method&sendtome=$sendtome&sendtodoc=$sendtodoc&sendtodoc_add=$sendtodoc_add&order_id=$order_id&sid=$PHPSESSID";
	echo "<script>location.href='$redirect_to';</script>";
	echo "</td></tr></table>";
	die();
}

?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="black">
		&nbsp; <b>Payment Information</b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" >
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		
		<?php
		if($payment_method==1) 
		{
			include("payment_card.php"); // payment by credit card
		}
		else
		{
			include("payment_tt.php"); // payment by T/T
		}
		?>

		</font>
	</td>
</tr>
</table>


</td></tr></table>