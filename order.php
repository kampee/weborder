
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<?php
include("order_stats.php");
?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=payment" method="post">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="3" color="black">
		&nbsp; <b>Order Inquiry Details</b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="80">

			<?php
			$cnt=0;
			$n=0;
			$qnt=0;
			$query="select * from $wb_tbl_cart where uid='$session_uid' and cid='$session_cid' and cart_flag='0' ";
			$result = mysql_db_query($wb_dbname,$query);
			$pfound = mysql_num_rows($result);
			?>
			<table  width="100%" cellpadding="2" cellspacing="0" border="0">
				<tr>
					<td>
							<TABLE cellSpacing="2" cellPadding="0" width="100%" bgColor="white" border="0">							
							<TR bgcolor="EEEEDD">
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp;
									</FONT>
								</TD>
			                    <TD>
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; Product
									</FONT>
								</TD>
			                    <TD>
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; Product Description
									</FONT>
								</TD>
			                    <TD ALIGN="CENTER">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; QTY
									</FONT>
								</TD>
			                    <TD>
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; Total
									</FONT>
								</TD>
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
						$ccode=$rowp[client_code]." ".$rowp[client_code2];
						$desc=$rowp[prod_name]." ".$rowp[prod_name2]."<br>".nl2br($rowp[prod_desc]);
						$per=$rowp[prod_per];
						$unit=$rowp[prod_unit];
						$stk_id=$row[p_id];
						$care_flag=$rowp[prod_care];
						$size_flag=$rowp[prod_size];
						require("stockbal.php");
						//addcnp($session_scur,$rowp[prod_cur],$rowp[prod_cur1],$rowp[prod_price],$rowp[prod_price1]);
						
						addcnp($session_scur,$rowp[prod_cur],$rowp[prod_cur1],$rowp[prod_cur2],$rowp[prod_cur3],$rowp[prod_price],$rowp[prod_price1],$rowp[prod_price2],$rowp[prod_price3]);		
						
						if( $bgcol=="" )
						{
							$bgcol="white";
						}
					}

				?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">
			                    <TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									<?php //echo "cart_id_".$n; ?>
									<INPUT TYPE="hidden" name="cart_id[<?php echo $n; ?>]" value="<?php echo $row[cart_id]; ?>">
									</font>
								</TD>
			                    <TD>
									<a href="javascript:ZoomPic('<?php echo $files_path_pictures.$pic_zoom; ?>');"><IMG  src="<?php echo $files_path_pictures.$pic; ?>" border="0"></a>
								</TD>
								<TD vAlign="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									<STRONG>Ref. :  &nbsp;<?php echo $ccode; ?> <br></STRONG>
									<?php echo $desc; ?>
									<br>
									<?php chkcursy($a_cur,$a_price,4); ?>

									<font color="FF0000"> &nbsp;&nbsp;  Per <?php echo number_format($per).' '.$unit; ?></font>

									<?php
									if($session_cid==6)
									{
										$balstk=$sum_bal-$row[p_qty];
										$balstk=number_format($balstk);
										echo "<br><font color=\"gray\"><b>Stock Balances : <font color=\"#CC0000\">".number_format($sum_bal)."-".$row[p_qty]." = ".$balstk."</font></font></b>";
									}
									?>

									<br><font face='arial' size='1' color="gray"><i>Item added on <?php echo $row[cart_date]." ".$row[cart_time]; ?></i></font>
									</FONT>
								</TD>
			                    <TD ALIGN="CENTER">
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									<?php echo number_format($row[p_qty]); ?>
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <b><?php chkcursy($a_cur,(($row[p_qty]*$a_price)/$per),2); ?></b>
									</font>
								</TD>
							</TR>

							<?php
							if( ($row[p_id]==111) OR ($row[p_id]==149) OR ($row[p_id]==145) OR ($row[p_id]==146) OR ($row[p_id]==147) )
							{
							?>
			                <TR VALIGN="MIDDLE" BGCOLOR="EEEEDD">
			                    <TD COLSPAN="6" height="20">
								<font face="arial" size="2" color="white"><b>
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
			                <TR VALIGN="MIDDLE" BGCOLOR="EEEEDD">
			                    <TD COLSPAN="6" height="20">
								<font face="arial" size="2" color="white"><b>
								&nbsp; Order Form for <?php echo $ccode; ?> <b>Cart id : </b><?php echo $row[cart_id]; ?> 
								</font></b>
								</TD>
							</TR>
			                <TR VALIGN="MIDDLE" BGCOLOR="EEEEDD">
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
								$qchk2x="select * from $wb_tbl_katcar_se where sl_cartid='$row[cart_id]'";
								$rchk2x = mysql_db_query($wb_dbname,$qchk2x);
								$fchk2x = mysql_num_rows($rchk2x);
								if ($fchk2x==0) 
								{
									echo "<script>alert('Please enter order details');location.href='index.php?mod=home&lang=$lang&smod=view_cart';</script>";
									die;
								}
								
							?>
			                <TR VALIGN="MIDDLE" BGCOLOR="EEEEDD">
			                    <TD COLSPAN="6" height="20">
								<font face="arial" size="2" ><b>
								&nbsp; Order Form for <?php echo $ccode; ?> <b>Cart id : </b><?php echo $row[cart_id]; ?> 
								</font></b>
								</TD>
							</TR>
			                <TR VALIGN="MIDDLE" BGCOLOR="EEEEDD">
			                    <TD COLSPAN="6" height="20">
									<?php
										include("katies_care_view.php");
									?>
								</TD>
							</TR>

							<?php
							}
							//if( ($row[p_id]==79) OR ($row[p_id]==163) )
							if( ($size_flag==1) )
							{

								$qchk3x="select * from $wb_tbl_slse where sl_cartid='$row[cart_id]' ";
								$rchk3x = mysql_db_query($wb_dbname,$qchk3x);
								$fchk3x = mysql_num_rows($rchk3x);

								if ($fchk3x==0) 
								{
									echo "<script>alert('Please enter order details');location.href='index.php?mod=home&lang=$lang&smod=view_cart';</script>";
									die;
								}

							?>
			                <TR VALIGN="MIDDLE" BGCOLOR="EEEEDD">
			                    <TD COLSPAN="6" height="20">
								<font face="arial" size="2" ><b>
								&nbsp; Order Form for <?php echo $ccode; ?> <!--<b>Cart id : </b><?php echo $row[cart_id]; ?>--> 
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
						$cnt=$cnt+(($row[p_qty]*$a_price)/$per);
						$qnt=$qnt+$row[p_qty];
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
			                <TR bgcolor="EEEEDD">
			                    <TD height="25" COLSPAN="3" >
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="2" color="red"><b>
									&nbsp; You have products <?php echo $pfound; ?> item(s) in cart.
									<INPUT TYPE="hidden" name="trow" value="<?php echo $pfound; ?>">
									</FONT></b>
								</TD>
			                    <TD height="25" align="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="2" color="red">
									&nbsp; <b><?php echo number_format($qnt); ?></b>
									<INPUT TYPE="hidden" name="t_qty" value="<?php echo $qnt; ?>">
									</FONT>
								</TD>
								<TD height="25">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="2" color="red">
									&nbsp; <b><?php chkcursy($a_cur,$cnt,2); ?></b>
									<INPUT TYPE="hidden" name="t_cur" value="<?php echo $a_cur; ?>">
									<INPUT TYPE="hidden" name="t_amt" value="<?php echo $cnt; ?>">									
									</FONT>
								</TD>
							</TR>


							<?php
							// Katies
							//if($session_cid==7)
							//{								
							//	require("katies_callout.php");
							//}
							
							// Ted Baker
							if($session_cid>=6)
							{
							?>
			                <TR bgcolor="EEEEDD" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; <b>Ship to address</b> (<a href="index.php?mod=home&lang=en&smod=pref&tr=3">Add new address</a>)
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<?php include("ship_add.php"); ?>
								</TD>
							</TR>

			                <TR bgcolor="EEEEDD" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; <b>Bill to address</b> (<a href="index.php?mod=home&lang=en&smod=pref&tr=3">Add new address</a>)
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<?php include("bill_add.php"); ?>
								</TD>
							</TR>							
							<?php
							}
							if( ($session_cid<6)  )
							{
							?>
			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; <b>Please select the information you want to request</b>
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; <INPUT TYPE="checkbox" NAME="vendor_pack" value="1">Vendor Manual Pack<br>
									&nbsp; <INPUT TYPE="checkbox" NAME="company_brochure" value="1">Company Brochure <br>
									</FONT>
								</TD>
							</TR>
							<?php
							}
							?>

			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; <b>Other messages for the supplier :</b>
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; <TEXTAREA NAME="other_mess" ROWS="8" COLS="60"  class="addcart"></TEXTAREA><br>
									&nbsp; <INPUT TYPE="checkbox" NAME="sendtome" value="1" checked>Send this inquiry document to my e-mail account also.<br>
									&nbsp; <INPUT TYPE="checkbox" NAME="sendtodoc" value="1">Send this inquiry document to :  <INPUT TYPE="text" NAME="sendtodoc_add" size="20" class="addcart"><br>
									</FONT>
									<br>
								</TD>
							</TR>

							<?php
							//disable for tedbaker
							if($session_cid<>6)
							{
							?>
			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; <b>Documents required when making delivery </b>
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="30" COLSPAN="5">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp;  <b>Invoice</b> &nbsp;
									<SELECT NAME="inv_doc">
										<OPTION VALUE="0">0</OPTION>
										<OPTION VALUE="1">1</OPTION>
										<OPTION VALUE="2">2</OPTION>
										<OPTION VALUE="3">3</OPTION>
										<OPTION VALUE="4">4</OPTION>
										<OPTION VALUE="5">5</OPTION>
									</SELECT>
									copies &nbsp;

									&nbsp;  <b>Packing List</b> &nbsp;
									<SELECT NAME="pac_doc">
										<OPTION VALUE="0">0</OPTION>
										<OPTION VALUE="1">1</OPTION>
										<OPTION VALUE="2">2</OPTION>
										<OPTION VALUE="3">3</OPTION>
										<OPTION VALUE="4">4</OPTION>
										<OPTION VALUE="5">5</OPTION>
									</SELECT>
									copies &nbsp;

									&nbsp;  <b>C/O</b> &nbsp;
									<SELECT NAME="co_doc">
										<OPTION VALUE="0">0</OPTION>
										<OPTION VALUE="1">1</OPTION>
										<OPTION VALUE="2">2</OPTION>
										<OPTION VALUE="3">3</OPTION>
										<OPTION VALUE="4">4</OPTION>
										<OPTION VALUE="5">5</OPTION>
									</SELECT>
									copies &nbsp;

									<br>
									</FONT>
									<br>
								</TD>
							</TR>
							<?php
							}
							?>


						<?php
							$queryx ="select pay_credit,pay_tt from $wb_tbl_clients where cid='$session_cid' ";
							$resultx = mysql_db_query($wb_dbname,$queryx);
							while ( $rowx = mysql_fetch_array( $resultx ) )
							{
								$payment_by_credit=$rowx[0];
								$payment_by_tt=$rowx[1];
							}
						?>

			                
							<?php
							if ($session_cid==12)
							{
							?>
							<TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="40" COLSPAN="5">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; We only accept Telegraphic Transfer (T/T) payment at this time. <br>
									&nbsp; And we are currently updating our payment system. 
									</FONT>
								</TD>
							</TR>

							<?php
							}else{
							?>
							
							<TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
									&nbsp; Please select a payment method . We have provided 1 method<br>
									&nbsp; for accepting your payments.
									</FONT>
								</TD>
							</TR>

							<?php
							}
							?>


			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2">
									
									<?php
									if ($payment_by_credit=="1")
									{
									?>
									&nbsp; <INPUT TYPE="radio" NAME="payment_method" value="1" CHECKED>Credit Card<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Just simply fill out your card information required by our system. After confirmation of <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the transaction,we will proceed with your orders accordingly.<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All the credit card payment charges will have to be responsiblity of the buyer<br>
									<?php
									}
									?>


									<?php
									if ($payment_by_tt=="1")
									{
									?>
									&nbsp; <INPUT TYPE="radio" NAME="payment_method" value="2" CHECKED>Telegraphic Transfer (T/T)<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; After confirming the order with us and after the goods are shipped, we will send you the<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Monthly Statement for money collection. Kindly make T/T to our designated Bank Account only. <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The credit terms will start counting from the shipment date. All the bank charges have <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to be responsible by the buyers. 
									<?php
									}
									?>
									
									
									</FONT>
								</TD>
							</TR>
							
							<?php
								if ($session_cid==12)
								{
							?>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="80" COLSPAN="5" bgcolor="#FFE9D2">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2" color="red">
									<b>
&nbsp; Telegraphic Transfer (T/T) before shipment credit account</b> <br>
&nbsp; ** Minimum charges is 200 EURO / 300 USD per order in C&F Price. <br>
&nbsp;&nbsp;&nbsp;&nbsp; Below 200 EURO / 300 USD per order should be charged as FOB<br>
&nbsp; ** All bank charges required to be paid by customer<br>
									</FONT>
								</TD>
							</TR>


							<?php
								}
							else
							{
							?>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="30" COLSPAN="5" bgcolor="#FFE9D2">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2" color="red">
									<b>
									&nbsp; <INPUT TYPE="checkbox" NAME="a30days" value="1">30 days credit account</b><br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ** All bank charges required to be paid by customer
									</FONT>
								</TD>
							</TR>
							<?php
							}
							?>

			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="25" COLSPAN="5" ALIGN="CENTER">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									<INPUT TYPE="button" name="submit" value="  Back  " class="addcart" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=view_cart';">
									&nbsp;&nbsp;
									<INPUT TYPE="submit" name="submit" value="  Confirm  " class="addcart">
									</FONT>
								</TD>
							</TR>
							</TABLE>		
					</td>
				</tr>

			</table>

	</td>
</tr>
</form>
</table>

</td></tr></table>