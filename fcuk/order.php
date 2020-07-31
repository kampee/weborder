
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<?php
include("order_stats.php");
?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=payment" method="post">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="black">
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
						$stk_id=$row[p_id];
						$care_flag=$rowp[prod_care];					
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
									<INPUT TYPE="hidden" name="cart_id[<?php echo $n; ?>]" value="<?php echo $row[cart_id]; ?>">
									<INPUT TYPE="hidden" name="p_id[<?php echo $n; ?>]" value="<?php echo $stk_id; ?>">
		
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
							if( ($row[p_id]==111) OR ($row[p_id]==149) OR ($row[p_id]==145) OR ($row[p_id]==146) OR ($row[p_id]==147) )
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
								$qchk2x="select * from $wb_tbl_katcar_se where sl_cartid='$row[cart_id]'";
								$rchk2x = mysql_db_query($wb_dbname,$qchk2x);
								$fchk2x = mysql_num_rows($rchk2x);
								if ($fchk2x==0) 
								{
									echo "<script>alert('Please enter order details');location.href='index.php?mod=home&lang=$lang&smod=view_cart';</script>";
									die;
								}
								
							?>
			                <TR VALIGN="MIDDLE" BGCOLOR="#FFCC99">
			                    <TD COLSPAN="6" height="20">
								<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" ><b>
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
							if( ($row[p_id]==79) OR ($row[p_id]==163) )
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
			                <TR VALIGN="MIDDLE" BGCOLOR="#FFCC99">
			                    <TD COLSPAN="6" height="20">
								<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" ><b>
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
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="3" color="green"><b>
									&nbsp; You have products <?php echo $pfound; ?> item(s) in cart.
									<INPUT TYPE="hidden" name="trow" value="<?php echo $pfound; ?>">
									</FONT></b>
								</TD>
			                    <TD height="25" align="center">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="3" color="green">
									&nbsp; 
									<INPUT TYPE="hidden" name="t_qty" value="1">
									</FONT>
								</TD>
								<TD height="25">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="3" color="green">
									&nbsp; 		
									</FONT>
								</TD>
							</TR>


							<?php
							
							// Ted Baker
							if($session_cid>=1)
							{
							?>
			                <TR bgcolor="#CCCC99" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2" color="#0000FF">
									&nbsp; <b>Ship to address</b> (<a href="index.php?mod=home&lang=en&smod=pref&tr=3">Add new address</a>)
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<?php include("ship_add.php"); ?>
								</TD>
							</TR>

			                <TR bgcolor="#99CC99" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="6">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2" color="red">
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
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Please select the information you want to request</b>
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
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
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Other messages for the supplier :</b>
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <TEXTAREA NAME="other_mess" ROWS="8" COLS="60"  class="addcart"></TEXTAREA><br>
									&nbsp; <INPUT TYPE="checkbox" NAME="sendtome" value="1" checked>Send this inquiry document to my e-mail account also.<br>
									&nbsp; <INPUT TYPE="checkbox" NAME="sendtodoc" value="1">Send this inquiry document to :  <INPUT TYPE="text" NAME="sendtodoc_add" size="20" class="addcart"><br>
									</FONT>
									<br>
								</TD>
							</TR>

			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Documents required when delivery </b>
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="30" COLSPAN="5">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
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
										<OPTION VALUE="NA">--- N/A ---</OPTION>
										<OPTION VALUE="Thailand">Thailand</OPTION>
										<OPTION VALUE="Hong Kong">Hong Kong</OPTION>
										<OPTION VALUE="India">India</OPTION>
										<OPTION VALUE="Turkey">Turkey</OPTION>
										<OPTION VALUE="China">China</OPTION>
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
										<OPTION VALUE="5">5%</OPTION>
										<OPTION VALUE="10">10%</OPTION>
									</SELECT>
									&nbsp;

									<br>
									</FONT>
									<br>
								</TD>
							</TR>


						<?php
							$queryx ="select pay_credit,pay_tt from $wb_tbl_clients where cid='$session_cid' ";
							$resultx = mysql_db_query($wb_dbname,$queryx);
							while ( $rowx = mysql_fetch_array( $resultx ) )
							{
								$payment_by_credit=$rowx[0];
								$payment_by_tt=$rowx[1];
							}
						?>

			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; Please select a payment method . We have provided 1 method <br>
									&nbsp; for accepting your payments.
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="20" COLSPAN="5">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									
									<?php
									if ($payment_by_credit=="1")
									{
									?>
									<!--
									&nbsp; <INPUT TYPE="radio" NAME="payment_method" value="1" >Credit Card<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Just simply fill out your card information required by our system. After confirmation of <br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the transaction,we will proceed with your orders accordingly.<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All the credit card payment charges will have to be responsiblity of the buyer<br>
									-->
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

			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="30" COLSPAN="5" bgcolor="#FFE9D2">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="2" color="red">
									<b>
									&nbsp; <INPUT TYPE="checkbox" NAME="a30days" value="1" checked>30 days credit account</b><br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ** All bank charges required to be paid by customer
									</FONT>
								</TD>
							</TR>

			                <TR bgcolor="#F0F0F0" VALIGN="middle">
			                    <TD HEIGHT="25" COLSPAN="5" ALIGN="CENTER">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
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