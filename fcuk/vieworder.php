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
<TITLE><?php echo $wb_title_global; ?></TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="Kampee Sridavong">
<META NAME="Keywords" CONTENT="clw,web,order">
<META NAME="Description" CONTENT="CLW Web Ordering System 2.0 Beta">
<SCRIPT SRC="includes/wb.js"></SCRIPT>
<link rel="stylesheet" href="includes/wb.css" type="text/css">
<style type="text/css"></style>
</HEAD>
<BODY BGCOLOR="#CCCCCC" topmargin="10" leftmargin="10">

<?php
$qs="select * from $wb_tbl_order where order_id='$order_id' ";
$rs = mysql_db_query($wb_dbname,$qs);
while ( $ws = mysql_fetch_array( $rs ) ) 
{
	if($sid!=$ws[order_sid])
	{
		echo "<font color=red size=+3><b>";
		echo "YOU HAVEN'T PERMISSION TO ACCESS THIS ORDER";
		echo "</font></b>";
		die;
	}
	$order_cur=$ws[order_cur];
	$order_uid=$ws[order_uid];
	$order_cid=$ws[order_cid];

	$query3="select *from $wb_tbl_ostatus where os_id='$ws[order_process]' ";
	$result3 = mysql_db_query($wb_dbname,$query3);
	while ( $row3 = mysql_fetch_array( $result3) ) 
	{
		$order_status="$row3[os_name]";
	}
?>

<table border="0" cellspacing="0" cellpadding="0" width="100%"><tr><td>
<?php

$q1="select * from $wb_tbl_users where uid='$order_uid' ";
$r1 = mysql_db_query($wb_dbname,$q1);
while ( $w1 = mysql_fetch_array( $r1 ) ) 
{
	$uname=$w1[uname];
	$ureal=$w1[ufname]." ".$w1[ulname];
}	

?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="black">
		&nbsp; <b>View Order Details of </b>Order No.<?php echo addzero5($order_id).addzero3($order_cid); ?> 
		&nbsp; <b>Status : </b><?php echo $order_status; ?> <br>
		&nbsp; <B>Order On : </b><?php echo $ws[order_date]." ".$ws[order_time]." <B>IP:</B> ".$ws[order_ip]; ?><br>
		&nbsp; <font color=red><B>Delivery On: </b><?php echo $ws[del_date]; ?></font><br>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="80">

				<?php
				$cnt=0;
				$n=0;
				$qnt=0;
				$query="select * from $wb_tbl_cart where uid='$order_uid' and order_id='$order_id' ";
				$result = mysql_db_query($wb_dbname,$query);
				$pfound = mysql_num_rows($result);
				?>
			<table  width="100%" cellpadding="2" cellspacing="0" border="0">
				<tr>
					<td>
							<TABLE cellSpacing="2" cellPadding="0" width="100%" bgColor="white" border="0">							
							<TR bgcolor="#D8D8D8">
					<td>
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; 
						</font>
					</td>
					<td>
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; File Name
						</font>
					</td>
					<td>
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; Product Code
						</font>
					</td>
					<td>
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; Product Name
						</font>
					</td>
					<td>
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; Download
						</font>
					</td>
							</TR>
				<?php
				while ( $row = mysql_fetch_array( $result) ) 
				{


					$queryp="select * from $wb_tbl_product where pid='$row[p_id]' ";
					$resultp = mysql_db_query($wb_dbname,$queryp);				
					while ( $rowp = mysql_fetch_array( $resultp) ) 
					{
						$pic=$rowp[pic_thum];
						$pic_zoom=$rowp[pic_zoom];
						$ccode=$rowp[client_code];
						$desc=$rowp[prod_name];
						$per=$rowp[prod_per];
						$unit=$rowp[prod_unit];
						$care_flag=$rowp[prod_care];
		
				
				
				
				//addcnp($order_cur,$rowp[prod_cur],$rowp[prod_cur1],$rowp[prod_price],$rowp[prod_price1]);

						if( $bgcol=="" )
						{
							$bgcol="white";
						}
					}

				?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">
			                    <TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
									&nbsp;		
									</font>
								</TD>
			                    <TD>
									&nbsp; <a href="<?php echo $files_path_pictures.$pic_zoom; ?>" target="_blank"><?php echo $pic_zoom; ?></a>
								</TD>
								<TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
									&nbsp; <?php echo $ccode; ?>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
									&nbsp; <?php echo $desc; ?>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
									&nbsp; <a href="<?php echo $files_path_pictures.$pic_zoom; ?>" target="_blank">Download</a>
									</font>
								</TD>
							</TR>

							<?php
							if( ($row[p_id]==111) OR ($row[p_id]==149) OR ($row[p_id]==145) OR ($row[p_id]==146) OR ($row[p_id]==147))
							{
							?>
			                <TR VALIGN="MIDDLE" BGCOLOR="#CC0000">
			                    <TD COLSPAN="6" height="20">
								<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="white"><b>
								&nbsp; Order Form for <?php echo $ccode; ?> <b>Cart id : </b><?php echo $row[cart_id]; ?> 
								</font></b>
								</TD>
							</TR>
			                <TR VALIGN="MIDDLE" BGCOLOR="#CC0000">
			                    <TD COLSPAN="6" height="20">
									<?php
										include("view_orderform1.php");
									?>
								</TD>
							</TR>

							<?php
								}
							?>

							<?php
							if( ($row[p_id]==113) )
							{
							?>
			                <TR VALIGN="MIDDLE" BGCOLOR="#CC0000">
			                    <TD COLSPAN="6" height="20">
								<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="white"><b>
								&nbsp; Order Form for <?php echo $ccode; ?> <b>Cart id : </b><?php echo $row[cart_id]; ?> 
								</font></b>
								</TD>
							</TR>
			                <TR VALIGN="MIDDLE" BGCOLOR="#CC0000">
			                    <TD COLSPAN="6" height="20">
									<?php
										include("view_orderform2.php");
									?>
								</TD>
							</TR>

							<?php
								}
							?>

							<?php
							if( ($care_flag==1) )
							{
							?>
			                <TR VALIGN="MIDDLE" BGCOLOR="#CC0000">
			                    <TD COLSPAN="6" height="20">
								<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="white"><b>
								&nbsp; Order Form for <?php echo $ccode; ?> <b>Cart id : </b><?php echo $row[cart_id]; ?> 
								</font></b>
								</TD>
							</TR>
			                <TR VALIGN="MIDDLE" BGCOLOR="#CC0000">
			                    <TD COLSPAN="6" height="20">
									<?php
										include("katies_care_view.php");
									?>
								</TD>
							</TR>

							<?php
								}
							?>

							<?php
							if( ($row[p_id]==79) OR ($row[p_id]==163) )
							{
							?>
			                <TR VALIGN="MIDDLE" BGCOLOR="#CC0000">
			                    <TD COLSPAN="6" height="20">
								<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="white"><b>
								&nbsp; Order Form for <?php echo $ccode; ?> <b>Cart id : </b><?php echo $row[cart_id]; ?> 
								</font></b>
								</TD>
							</TR>
			                <TR VALIGN="MIDDLE" BGCOLOR="#CC0000">
			                    <TD COLSPAN="6" height="20">
									<?php
										include("katies_size_view.php");
									?>
								</TD>
							</TR>

							<?php
								}
							?>


				<?php
						//$cnt=$cnt+(($row[p_qty]*$a_price)/$per);
						//$qnt=$qnt+$row[p_qty];
						$n++;
						if($bgcol=="#F2F2F2")
						{
							$bgcol="white";
						}
						else
						{
							$bgcol="#F2F2F2";
						}
					}
				?>
			                <TR bgcolor="#F0F0F0">
			                    <TD height="25" COLSPAN="3" >
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1" color="green"><b>
									&nbsp; You have products <?php echo $pfound; ?> item(s) in cart.
									<INPUT TYPE="hidden" name="trow" value="<?php echo $pfound; ?>">
									</FONT></b>
								</TD>
			                    <TD height="25" align="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1" color="green">
									&nbsp; <b><!--<?php echo number_format($qnt); ?>--></b>
									<INPUT TYPE="hidden" name="t_qty" value="<?php echo $qnt; ?>">
									</FONT>
								</TD>
								<TD height="25">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1" color="green">
									&nbsp; <b><!--<?php chkcursy($a_cur,$cnt); ?>--></b>					
									</FONT>
								</TD>
							</TR>

							<?php
							if( ($session_cid>=1) )
							{
							?>
			                <TR bgcolor="#CCCC99" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2" color="#0000FF">
									&nbsp; <b>Ship to address</b> 
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<?php include("ship_add_view.php"); ?>
								</TD>
							</TR>

			                <TR bgcolor="#99CC99" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2" color="red">
									&nbsp; <b>Bill to address</b> 
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<?php include("bill_add_view.php"); ?>
								</TD>
							</TR>
							<?php
							}
							if($session_cid<6)
							{
							?>
							<TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; <b>Please select the information you want to request</b>
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
									<?php
									if($ws[vendor_pack]==1) {$v_pack="CHECKED";}
									if($ws[company_brochure]==1) {$c_bro="CHECKED";}
									?>
									&nbsp; <INPUT TYPE="checkbox" NAME="vendor_pack" ReadOnly value="1" <?php echo $v_pack; ?> DISABLED>Vendor Manual Pack<br>
									&nbsp; <INPUT TYPE="checkbox" NAME="company_brochure" ReadOnly value="1" <?php echo $c_bro; ?> DISABLED>Company Brochure <br>
									</FONT>
								</TD>
							</TR>
							<?php
							}
							?>


			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; <b>Other messages for the supplier :</b>
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; <TEXTAREA NAME="other_mess" ROWS="8" COLS="60"  class="addcart" ReadOnly ><?php echo $ws[other_mess]; ?></TEXTAREA><br>

									<?php
									if($ws[sendtome]==1) {$s_tome="CHECKED";}
									if($ws[sendtodoc]==1) {$s_todoc="CHECKED";}
									?>

									&nbsp; <INPUT TYPE="checkbox" NAME="sendtome" value="1" readonly <?php echo $s_tome; ?> DISABLED>Send this inquiry document to my e-mail account also.<br>
									&nbsp; <INPUT TYPE="checkbox" NAME="sendtodoc" value="1"  DISABLED <?php echo $s_todoc; ?>>Send this inquiry document to :  <INPUT TYPE="text" NAME="sendtodoc_add" size="20" class="addcart" readonly value="<?php echo $ws[sendtodoc_add]; ?>"><br>
									</FONT>
									<br>
								</TD>
							</TR>
							
			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; <b>Documents required when delivery </b>
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="30" COLSPAN="6">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp;  <b>Invoice</b> &nbsp;
									<SELECT NAME="inv_doc">
										<OPTION VALUE="<?php echo $ws[inv_doc]; ?>"><?php echo $ws[inv_doc]; ?></OPTION>
									</SELECT>
									copies &nbsp;

									&nbsp;  <b>Packing List</b> &nbsp;
									<SELECT NAME="pac_doc">
										<OPTION VALUE="<?php echo $ws[pac_doc]; ?>"><?php echo $ws[pac_doc]; ?></OPTION>
									</SELECT>
									copies &nbsp;

									&nbsp;  <b>C/O</b> &nbsp;
									<SELECT NAME="co_doc">
										<OPTION VALUE="<?php echo $ws[co_doc]; ?>" ><?php echo $ws[co_doc]; ?></OPTION>
									</SELECT>
									copies &nbsp;

									<br>
									</FONT>
									<br>
								</TD>
							</TR>

			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Country of Manufacturing </b>
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="30" COLSPAN="5">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp;  <b>Country</b> &nbsp;
									<SELECT NAME="order_location">
										<OPTION VALUE="<?php echo $ws[order_location]; ?>"><?php echo $ws[order_location]; ?></OPTION>
									</SELECT>
									&nbsp;

									<br>
									</FONT>
									<br>
								</TD>
							</TR>

			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Overage Quantity</b>
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="30" COLSPAN="5">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp;  <b></b> &nbsp;
									<SELECT NAME="order_oq">
										<OPTION VALUE="<?php echo $ws[order_oq]; ?>"><?php echo $ws[order_oq]; ?>%</OPTION>
									</SELECT>
									&nbsp;

									<br>
									</FONT>
									<br>
								</TD>
							</TR>

			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; Please select a payment method . We have provided 1 method<br>
									&nbsp; for accepting your payments.
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<?php
									if($ws[payment_method]=="1") 
									{
										$pm_cc="CHECKED";
										$pm_tt="";
									}
									else
									{
										$pm_cc="";
										$pm_tt="CHECKED";
									}
									?>
									
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2">
									<!--
									&nbsp; <INPUT TYPE="radio" NAME="payment_method" value="1" <?php echo $pm_cc; ?> DISABLED>Credit Card<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Just simply fill out your card information required by our system. After confirmation of <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the transaction,we will proceed with your orders accordingly.<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All the credit card payment charges will have to be responsiblity of the buyer<br>
									-->
									&nbsp; <INPUT TYPE="radio" NAME="payment_method" value="2" <?php echo $pm_tt; ?> DISABLED>Telegraphic Transfer (T/T)<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; After confirming the order with us and after the goods are shipped, kindly make T/T to our designated Bank Account only. <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The credit terms will start counting from the shipment date. All the bank charges have <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to be responsible by the buyers. 
									</FONT>
								</TD>
							</TR>
	
						<?php
									if($ws[a30days]=="1") 
									{
										$a_days="CHECKED";
									}
									else
									{
										$a_days="";
									}
									if($ws[a30days]=="1") 
									{

							?>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="30" COLSPAN="5" bgcolor="#FFE9D2">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2" color="red">
									<b>
									&nbsp; <INPUT TYPE="checkbox" NAME="a30days" value="1" <?php echo $a_days; ?> DISABLED>30 days credit account</b>
									</FONT>
								</TD>
							</TR>
							<?php
									}
							?>

			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="30" COLSPAN="5" bgcolor="#FFE9D2">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,MS Sans Serif, Microsoft Sans Serif"  size="2" color="red">
									<b>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ** All bank charges required to be paid by customer
									</FONT>
								</TD>
							</TR>

							</TABLE>		
					</td>
				</tr>

			</table>

	</td>
</tr>
</table>
</td></tr></table>
<br>

<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>
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
		if($ws[payment_method]==1)
		{
		?>
<!--	
<table cellpadding="1" cellspacing="1" border="0" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Payment Method</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; Credit Card
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>CLW Order No.</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="green"><b>
		&nbsp; <?php echo addzero5($order_id).addzero3($order_cid); ?></b>
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
		&nbsp; <?php echo $ureal." ".$uname; ?>
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
		&nbsp; ComputerLabel Worldwide Co., Ltd.
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Name on Credit Card</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <?php echo $ws[payment_desc]; ?>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Credit Card No.</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <?php echo $ws[card_no]; ?>
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Type of Credit Card</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; 
		<?php
			if($ws[card_type]==6)
			{
				echo "MasterCard";
			}
			if($ws[card_type]==7)
			{
				echo "VISA";
			}
		?>
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Expired Date of Card</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <?php echo $ws[cardexp_month]."/".$ws[cardexp_year]; ?>
		</font>
	</td>
</tr>
</table>
-->
		<?php
		}
		else
		{
		?>
<table cellpadding="1" cellspacing="1" border="0" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Payment Method</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; Telegraphic Transfer (T/T) / Bank Transfer
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
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="green"><b>
		&nbsp; <?php echo addzero5($order_id).addzero3($order_cid); ?></b>
		<INPUT TYPE="hidden" name="order_id" value="<?php echo $order_id; ?>">
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
		&nbsp; <?php echo $ureal." ".$uname; ?>
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
		&nbsp; ComputerLabel Worldwide Co., Ltd.
		</font>
	</td>
</tr>

</table>

		<?php
		}
		?>

		</font>
	</td>
</tr>
</table>

</td></tr></table>

<?php
}
?>
</BODY>
</HTML>
