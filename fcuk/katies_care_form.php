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

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" bgcolor="#FFFFCC">
<form action="katies_care_form.php?cart_id=<?php echo $cart_id; ?>&cart_qty=<?php echo $cart_qty; ?>&act=update" method="post">


<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="#FFCC99" height="25">
		<font face="verdana" size="2">
		&nbsp; 
		<!--<INPUT TYPE="submit" VALUE="SAVE" class="addcart">
		<INPUT TYPE="reset" VALUE="CANCEL" class="addcart">-->
		&nbsp;
		<b>CART ID : </b><?php echo $cart_id; ?> <b>QTY :</b> <?php echo number_format($cart_qty); ?>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="#CC0000" height="20">
		<TABLE cellSpacing="2" cellPadding="0" width="100%" bgColor="white" border="0">
			<TR bgcolor="#FFFF99">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>#</b> &nbsp;
					</FONT>
				</TD>
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>Care variables</b> &nbsp;
					</FONT>
				</TD>
				
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <b>Quantity</b> &nbsp;
				</FONT>
			</TD>
		</TR>

		<?php

		$qchk="select * from $wb_tbl_katcar_se where sl_cartid='$cart_id' ";
		$rchk = mysql_db_query($wb_dbname,$qchk);
		$fchk = mysql_num_rows($rchk);
		if ($fchk>0) 
		{
			include("katies_care_form_edit.php");
		}
		else
		{
			include("katies_care_form_add.php");
		}
		?>

		</TABLE>
	</td>
</tr>

</form>
</table>

<?php
}

// updated databases
if($act=="update")
{
	$ar1 = $_REQUEST['sl_care'];
	$ar2 = $_REQUEST['sl_qty'];


	$qchk="select * from $wb_tbl_katcar_pr where sl_cartid='$cart_id' ";
	$rchk = mysql_db_query($wb_dbname,$qchk);
	$fchk = mysql_num_rows($rchk);
	if ($fchk==1) 
	{
		for($i=0; $i<5; $i++)
		{
		$query="UPDATE $wb_tbl_katcar_se SET sl_care='$sl_care[$i]',sl_qty='$sl_qty[$i]'".
				" WHERE sl_cartid='$cart_id' and sl_no='$sl_no[$i]' ";
		$result = mysql_db_query($wb_dbname,$query);
		}
	}
	else
	{
		$query_pr="insert into $wb_tbl_katcar_pr (sl_cartid,sl_date,sl_time,sl_flag) ".
					"values('$cart_id','$regdate','$regtime','0')";		
		$result_pr = mysql_db_query($wb_dbname,$query_pr);				
		for($i=0; $i<5; $i++)
		{
			$query="insert into $wb_tbl_katcar_se (sl_cartid,sl_care,sl_qty) ".
						"values('$cart_id','$sl_care[$i]','$sl_qty[$i]')";	
			$result = mysql_db_query($wb_dbname,$query);		
		}
	}

	//check qty.
	$chk_qty=0;
	for($j=0; $j<5; $j++)
	{
		$chk_qty=$chk_qty+$sl_qty[$j];
	}
	if($cart_qty<>$chk_qty)
	{
		echo "<script>javascript:alert('Please check QTY (".$chk_qty."<>".$cart_qty.").');history.back();</script>";
		echo "</body></html>";
		die;
	}
	AlertMsg("Care label variables has been updated.","katies_care_form.php?cart_id=$cart_id&cart_qty=$cart_qty");
}
?>


</BODY>
</HTML>
