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

<center>
<?php
if($act=="")
{

	if($pid==111)
	{
		echo "<img src=\"images/CER-LB0017-X.gif\">";
	}

?>
</center>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">
<form action="orderform1.php?cart_id=<?php echo $cart_id; ?>&cart_qty=<?php echo $cart_qty; ?>&act=update" method="post">
<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="#CC0000" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="4" color="white">
		&nbsp; <b>Order Form - CART ID : </b><?php echo $cart_id; ?> <b>QTY :</b> <?php echo number_format($cart_qty); ?>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="#CC0000" height="20">
		<TABLE cellSpacing="2" cellPadding="0" width="100%" bgColor="white" border="0">
			<TR bgcolor="#D8D8D8">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>#</b>
					</FONT>
				</TD>
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>Size1</b>
					</FONT>
				</TD>
				
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>Size2</b>
					</FONT>
				</TD>

				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>Quantity</b>
				</FONT>
			</TD>
		</TR>

		<?php

		$qchk="select * from $wb_tbl_slse where sl_cartid='$cart_id' ";
		$rchk = mysql_db_query($wb_dbname,$qchk);
		$fchk = mysql_num_rows($rchk);
		if ($fchk>0) 
		{
			include("orderform1_edit.php");
		}
		else
		{
			include("orderform1_add.php");
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

// updated databases
if($act=="update")
{
	$ar0 = $_REQUEST['sl_num'];
	$ar1 = $_REQUEST['sl_usa'];
	$ar9 = $_REQUEST['sl_qty'];
	$id_no=30;

	$qchk="select * from $wb_tbl_slpr where sl_cartid='$cart_id' ";
	$rchk = mysql_db_query($wb_dbname,$qchk);
	$fchk = mysql_num_rows($rchk);
	if ($fchk==1) 
	{
		for($i=0; $i<$id_no; $i++)
		{
		$query="UPDATE $wb_tbl_slse SET sl_num='$sl_num[$i]',sl_usa='$sl_usa[$i]',sl_qty='$sl_qty[$i]'".
				" WHERE sl_cartid='$cart_id' and sl_no='$sl_no[$i]' ";
		$result = mysql_db_query($wb_dbname,$query);
		}
	}
	else
	{
		$query_pr="insert into $wb_tbl_slpr (sl_cartid,sl_date,sl_time,sl_flag) ".
					"values('$cart_id','$regdate','$regtime','0')";		
		$result_pr = mysql_db_query($wb_dbname,$query_pr);				
		for($i=0; $i<$id_no; $i++)
		{
			$query="insert into $wb_tbl_slse (sl_cartid,sl_num,sl_usa,sl_qty) ".
						"values('$cart_id','$sl_num[$i]','$sl_usa[$i]','$sl_qty[$i]')";	
			$result = mysql_db_query($wb_dbname,$query);		
		}
	}

	//check qty.
	$chk_qty=0;
	for($j=0; $j<$id_no; $j++)
	{
		$chk_qty=$chk_qty+$sl_qty[$j];
	}
	if($cart_qty<>$chk_qty)
	{
		echo "<script>javascript:alert('Please check QTY (".$chk_qty."<>".$cart_qty.").');history.back();</script>";
		echo "</body></html>";
		die;
	}

	echo "<script>javascript:alert('Your data has been updated');window.close();</script>";
}
?>


</BODY>
</HTML>
