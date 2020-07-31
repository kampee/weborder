<?php
// Copyright by Krieng kampee@clwglobal.com 
// Last update /// 

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
$mh1="Made in"; 
$mh2="Size";
?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" bgcolor="F9F9F6" width="100%">
<form action="wwk_size_form.php?cart_id=<?php echo $cart_id; ?>&cart_qty=<?php echo $cart_qty; ?>&pid=<?php echo $pid; ?>&act=update" method="post">

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="verdana, arial" size="2">
		&nbsp;<!--<b>PRODUCT ID : </b><?php echo $pid; ?>  <b>CART ID : </b><?php echo $cart_id; ?> <b>QTY :</b> <?php echo number_format($cart_qty); ?>-->
		</font>
		<INPUT TYPE="submit" VALUE="Check Order Qty.& Save">
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<TABLE cellSpacing="2" cellPadding="0" width="100%" bgColor="white" border="0">
			<TR bgcolor="EEEEDD">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>#</b>
					</FONT>
				</TD>

				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b><?php echo $mh1; ?></b>
					</FONT>
				</TD>
				
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>Size</b> &nbsp;
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
			include("wwk_size_form_edit.php");
		}
		else
		{
			include("wwk_size_form_add.php");
		}
		?>

		</TABLE>
	</td>
</tr>

</form>
</table>

<?php

// updated databases
if($act=="update")
{
	$ar1s = $_REQUEST['sl_num'];
	$ar2s = $_REQUEST['sl_qty'];
	$ar3s = $_REQUEST['sl_usa'];
	$ar4s = $_REQUEST['sl_h1'];

	$qchk="select * from $wb_tbl_slpr where sl_cartid='$cart_id' ";
	$rchk = mysql_db_query($wb_dbname,$qchk);
	$fchk = mysql_num_rows($rchk);
	if ($fchk==1) 
	{
		for($i=0; $i<20; $i++)
		{
		$query="UPDATE $wb_tbl_slse SET sl_h1='$sl_h1[$i]',sl_num='$sl_num[$i]',sl_usa='$sl_usa[$i]',sl_qty='$sl_qty[$i]' WHERE sl_cartid='$cart_id' and sl_no='$sl_no[$i]'";
		$result = mysql_db_query($wb_dbname,$query);

		//echo $query."**".$result."<br>";
		//echo $cart_id.'$'.$sl_no[$i]."/".$sl_num[$i].'#'.$sl_qty[$i]."<br>";
		}
		//die;
	}
	else
	{
		$query_pr="insert into $wb_tbl_slpr (sl_cartid,sl_date,sl_time,sl_flag) ".
					"values('$cart_id','$regdate','$regtime','0')";		
		$result_pr = mysql_db_query($wb_dbname,$query_pr);				
		for($i=0; $i<20; $i++)
		{
			$query="insert into $wb_tbl_slse (sl_cartid,sl_h1,sl_num,sl_usa,sl_qty) ".
						"values('$cart_id','$sl_h1[$i]','$sl_num[$i]','$sl_usa[$i]','$sl_qty[$i]')";	
			$result = mysql_db_query($wb_dbname,$query);		
		}
	}

	//check qty.
	$chk_qty=0;
	for($j=0; $j<20; $j++)
	{
		$chk_qty=$chk_qty+$sl_qty[$j];
	}
	if($cart_qty<>$chk_qty)
	{
		echo "<script>javascript:alert('Please check QTY (".$chk_qty."<>".$cart_qty.").');history.back();</script>";
		echo "</body></html>";
		die;
	}

	AlertMsg("Size label variables has been updated.","wwk_size_form.php?cart_id=$cart_id&cart_qty=$cart_qty&pid=$pid");
	//echo "<script>window.parent.refresh();</script>";

	//echo "<script>javascript:alert('Your data has been updated');window.close();</script>";
}
?>


</BODY>
</HTML>
