<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>
<?php
include("order_stats.php");
?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">


<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=view_cart&upd=yes" method="post" name="form1">

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="3">
		&nbsp; <b><?php echo _view_cart_txt; ?></b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="white" height="40">

				<?php
				$cnt=0;
				$n=0;
				$qnt=0;
				$query="select * from $wb_tbl_cart where uid='$session_uid' and cid='$session_cid' and cart_flag='0' ";
				$result = mysql_db_query($wb_dbname,$query);
				$pfound = mysql_num_rows($result);

				if($pfound=="0")
				{
				echo "<center><b><font color=red>".$_Your_cart_is_empty."</b></font></center>";
				}
				else
				{
				?>
			<table  width="100%" cellpadding="2" cellspacing="0" border="0">

							<?php
							if($pfound>=1)
							{
							?>
			                <TR bgcolor="EEEEDD" VALIGN="middle">
			                    <TD HEIGHT="25" COLSPAN="5" ALIGN="CENTER">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									<INPUT TYPE="submit" name="submit" value="<?php echo $_delete_btn; ?>">
									&nbsp;&nbsp;
									<INPUT TYPE="submit" name="submit" value="<?php echo $_update_btn; ?>">
									&nbsp;&nbsp;
									<INPUT TYPE="button" name="order" value="<?php echo $_order_now_btn; ?>" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=order';">
									</FONT>
								</TD>
							</TR>
							<?
							}
							?>

				<tr>
					<td>
							<TABLE cellSpacing="2" cellPadding="0" width="100%" bgColor="white" border="0">
							
							<?php
							if($upd=="yes")
							{
								if($pfound>=1)
								{
									switch($submit)
									{
										case "Effacer":
										case "Delete":
											$v1 = $_REQUEST['cart_id'];
											for($i=0; $i<$pfound; $i++)
											{
												$query_d="delete from $wb_tbl_cart where cart_id='".$cart_id[$i]."'";
												$result_d = mysql_db_query($wb_dbname,$query_d);
											}											
											echo "<script>location.href='index.php?mod=home&lang=$lang&smod=view_cart';</script>";
											break;	
										case "Mettre à jour Modifier":
										case "Update":
												$v1 = $_REQUEST['cart_id'];
												$v2 = $_REQUEST['p_qty'];
												for($i=0; $i<$pfound; $i++)
												{
													if($p_qty[$i]==0)
													{
														echo "<script>alert('Please enter QTY.');location.href='index.php?mod=home&lang=$lang&smod=view_cart';</script>";
														die;
													}
													$query_u="UPDATE $wb_tbl_cart SET p_qty='$p_qty[$i]' where cart_id='$cart_id[$i]'";
													$result_u = mysql_db_query($wb_dbname,$query_u);
												}
											echo "<script>location.href='index.php?mod=home&lang=$lang&smod=view_cart';</script>";
											break;
									}
								}
							?>
							<TR bgcolor="#99CC99" >
			                    <TD height="20" COLSPAN="5">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; 
									</FONT>
								</TD>
							<?php
							}
							?>

			                <TR bgcolor="EEEEDD">
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									<INPUT type=checkbox name=chkall onclick="sel()">
									</FONT>
								</TD>
			                    <TD>
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <?php echo _product_txt; ?>
									</FONT>
								</TD>
			                    <TD>
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <?php echo $_Product_Description_txt; ?>
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
					$queryp="select * from $wb_tbl_product where pid='$row[p_id]'";
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
						require("stockbal.php");
						$care_flag=$rowp[prod_care];
						$size_flag=$rowp[prod_size];
						
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
									<INPUT TYPE="checkbox" NAME="cart_id[<?php echo $n; ?>]" value="<?php echo $row[cart_id]; ?>"> 									
									<?php //echo "cart_id_".$n; ?>
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
									<!--<?php chkcursy($cur,$price); ?>-->
									<?php chkcursy($a_cur,$a_price,4); ?>

									<font color="black">&nbsp;&nbsp;  Per <?php echo number_format($per).' '.$unit; ?></font>

									<?php
									if($session_cid==6)
									{
										$balstk=$sum_bal-$row[p_qty];
										$balstk=number_format($balstk);
										echo "<br><font color=\"gray\"><b>Stock Balances : <font color=\"#CC0000\">".number_format($sum_bal)."-".$row[p_qty]." = ".$balstk."</font></font></b>";
									}
									?>

									<br><font face='arial' size='1' color="gray"><i><?php echo $_Item_added_on_txt; ?> <?php echo $row[cart_date]." ".$row[cart_time]; ?></i></font>
									</FONT>
								</TD>
			                    <TD ALIGN="CENTER">
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									<INPUT TYPE="hidden" name="p_id" value="<?php echo $row[p_id]; ?>">
									<INPUT TYPE="text" NAME="p_qty[<?php echo $n; ?>]" size="8" value="<?php echo $row[p_qty]; ?>" class="addcart">
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <b><?php chkcursy($a_cur,(($row[p_qty]*$a_price)/$per),2); ?></b>
									</font>
								</TD>
							</TR>


				<?php
						include("wb1.php");
						include("wb2.php");

						// katies
						include("katies_care.php");
						include("katies_size.php");

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
									&nbsp; You have product <?php echo $pfound; ?> item(s) in cart.
									</FONT></b>
								</TD>
			                    <TD height="25" >
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="2" color="red">
									&nbsp;&nbsp; <b><?php echo number_format($qnt); ?></b>
									</FONT>
								</TD>
			                    <TD height="25">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="2" color="red">
									&nbsp; <b><?php chkcursy($a_cur,$cnt,2); ?></b>
									</FONT>
								</TD>
							</TR>
	
							<?php
							if($pfound>=1)
							{
							?>
			                <TR bgcolor="EEEEDD" VALIGN="middle">
			                    <TD HEIGHT="25" COLSPAN="5" ALIGN="CENTER">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									<INPUT TYPE="submit" name="submit" value="<?php echo $_delete_btn; ?>">
									&nbsp;&nbsp;
									<INPUT TYPE="submit" name="submit" value="<?php echo $_update_btn; ?>">
									&nbsp;&nbsp;
									<INPUT TYPE="button" name="order" value="<?php echo $_order_now_btn; ?>" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=order';">
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="25" COLSPAN="4">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; 1.	<?php echo $_view_cart_tip1_txt; ?><br>
									&nbsp; 2.	<?php echo $_view_cart_tip2_txt; ?><br>
									&nbsp; 3.	<?php echo $_view_cart_tip3_txt; ?><br><br>
									&nbsp; <?php echo $_view_cart_tick_txt; ?>
									</FONT>
								</TD>
			                    <TD HEIGHT="30" align="center">
									<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" bgcolor="F9F9F6" align="center" width="100">
									<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
										<td bgcolor="EEEEDD" align="center" height="20"><a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=list"><font face="arial" size="1" color="red"><?php echo $_Add_more_product_txt; ?></font></a> &nbsp;		
										</td>
									</tr>
									</table>
								</TD>
							</TR>

						<?php
							}
						?>

							</TABLE>		
					</td>
				</tr>

			</table>
	<?
		}
	?>
	</td>
</tr>
</form>
</table>

</td></tr></table>

