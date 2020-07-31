<?php
// Copyright by Krieng kampee@phana.net
session_start();
include("includes/config.inc.php");
LoginAuth();
DBConn("mysql");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Order Form</TITLE>
<SCRIPT SRC="includes/wb.js"></SCRIPT>
<link rel="stylesheet" href="includes/wb.css" type="text/css">
<style type="text/css"></style>
</HEAD>
<BODY topmargin="0" leftmargin="0" BGCOLOR="WHITE">
<?php
CheckSession($session_uid,$session_cid,$session_pass);
?>


<?php
if($act=="")
{

?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">
<form action="orderform2.php?cart_id=<?php echo $cart_id; ?>&cart_qty=<?php echo $cart_qty; ?>&act=update" method="post">
<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="#CC0000" height="20">
		<font face="arial" size="4" color="white">
		&nbsp; <b>Order Form - CART ID : </b><?php echo $cart_id; ?> <b>QTY :</b> <?php echo number_format($cart_qty); ?>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="#CC0000" height="20">
		<TABLE cellSpacing="2" cellPadding="0" width="100%" bgColor="white" border="0">

		<?php

		$qchk="select * from $wb_tbl_ccse where sl_cartid='$cart_id' ";
		$rchk = mysql_db_query($wb_dbname,$qchk);
		$fchk = mysql_num_rows($rchk);
		if ($fchk>0) 
		{
			include("orderform2_edit.php");
		}
		else
		{
			include("orderform2_add.php");
		}
		?>

		</TABLE>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="#CCCCCC" height="20" align=center>
		<INPUT TYPE="submit" VALUE=" Update " class="addcart">
		&nbsp;&nbsp;&nbsp;
		<INPUT TYPE="reset" VALUE=" Reset " class="addcart">
		&nbsp;&nbsp;&nbsp;
		<INPUT TYPE="button" VALUE=" Close " class="addcart" onClick="javascript:window.close();">
	</td>
</tr>
</form>
</table>

<?php
}

if($act=="update")
{
	$ar0 = $_REQUEST['sl_fabcomp'];
	$ar1 = $_REQUEST['sl_refcode'];
	$ar2 = $_REQUEST['sl_size'];
	$ar21 = $_REQUEST['sl_size1'];
	$ar22 = $_REQUEST['sl_size2'];
	$ar23 = $_REQUEST['sl_size3'];
	$ar24 = $_REQUEST['sl_size4'];
	$ar25 = $_REQUEST['sl_size5'];
	$ar26 = $_REQUEST['sl_size6'];
	$ar3 = $_REQUEST['sl_color'];
	$ar4 = $_REQUEST['sl_qty'];
	$ar41 = $_REQUEST['sl_qty1'];
	$ar42 = $_REQUEST['sl_qty2'];
	$ar43 = $_REQUEST['sl_qty3'];
	$ar44 = $_REQUEST['sl_qty4'];
	$ar45 = $_REQUEST['sl_qty5'];
	$ar46 = $_REQUEST['sl_qty6'];
	$ar5 = $_REQUEST['sl_wi'];
	$ar6 = $_REQUEST['sl_wi_temp1'];
	$ar7 = $_REQUEST['sl_wi_temp2'];
	$ar8 = $_REQUEST['sl_ii'];
	$ar9 = $_REQUEST['sl_di'];
	$ar10= $_REQUEST['sl_ci'];
	$ar11= $_REQUEST['sl_bi'];


	$qchk="select * from $wb_tbl_ccpr where sl_cartid='$cart_id' ";
	$rchk = mysql_db_query($wb_dbname,$qchk);
	$fchk = mysql_num_rows($rchk);
	if ($fchk==1) 
	{
		for($i=0; $i<10; $i++)
		{
		$query="UPDATE $wb_tbl_ccse SET sl_fabcomp='$sl_fabcomp[$i]',sl_refcode='$sl_refcode[$i]',sl_size='$sl_size[$i]',sl_size1='$sl_size1[$i]',sl_size2='$sl_size2[$i]',sl_size3='$sl_size3[$i]',sl_size4='$sl_size4[$i]',sl_size5='$sl_size5[$i]',sl_size6='$sl_size6[$i]',sl_color='$sl_color[$i]',sl_qty='$sl_qty[$i]',sl_qty1='$sl_qty1[$i]',sl_qty2='$sl_qty2[$i]',sl_qty3='$sl_qty3[$i]',sl_qty4='$sl_qty4[$i]',sl_qty5='$sl_qty5[$i]',sl_qty6='$sl_qty6[$i]',sl_wi='$sl_wi[$i]',sl_wi_temp1='$sl_wi_temp1[$i]',sl_wi_temp2='$sl_wi_temp2[$i]',sl_ii='$sl_ii[$i]',sl_di='$sl_di[$i]',sl_ci='$sl_ci[$i]',sl_bi='$sl_bi[$i]' WHERE sl_cartid='$cart_id' and sl_no='$sl_no[$i]' ";
		$result = mysql_db_query($wb_dbname,$query);
		}
	}
	else
	{
		$query_pr="insert into $wb_tbl_ccpr (sl_cartid,sl_date,sl_time,sl_flag) ".
					"values('$cart_id','$regdate','$regtime','0')";		
		$result_pr = mysql_db_query($wb_dbname,$query_pr);				
		for($i=0; $i<10; $i++)
		{
			$query="insert into $wb_tbl_ccse (sl_cartid,sl_fabcomp,sl_refcode,sl_size,sl_size1,sl_size2,sl_size3,sl_size4,sl_size5,sl_size6,sl_color,sl_qty,sl_qty1,sl_qty2,sl_qty3,sl_qty4,sl_qty5,sl_qty6,sl_wi,sl_wi_temp1,sl_wi_temp2,sl_ii,sl_di,sl_ci,sl_bi) values('$cart_id','$sl_fabcomp[$i]','$sl_refcode[$i]','$sl_size[$i]','$sl_size1[$i]','$sl_size2[$i]','$sl_size3[$i]','$sl_size4[$i]','$sl_size5[$i]','$sl_size6[$i]','$sl_color[$i]','$sl_qty[$i]','$sl_qty1[$i]','$sl_qty2[$i]','$sl_qty3[$i]','$sl_qty4[$i]','$sl_qty5[$i]','$sl_qty6[$i]','$sl_wi[$i]','$sl_wi_temp1[$i]','$sl_wi_temp2[$i]','$sl_ii[$i]','$sl_di[$i]','$sl_ci[$i]','$sl_bi[$i]')";	
			$result = mysql_db_query($wb_dbname,$query);		
		}
	}

	//check qty.
	/*$chk_qty=0;
	for($k=0; $k<10; $k++)
	{
		$chk_qty=$chk_qty+$sl_qty[$k];
	}

	if($cart_qty<>$chk_qty)
	{
		echo "<script>javascript:alert('Please check QTY (".$chk_qty."<>".$cart_qty.").');history.back();</script>";
		echo "</body></html>";
		die;
	}*/

	echo "<script>javascript:alert('Your data has been updated');window.close();</script>";
}
?>


</BODY>
</HTML>
