<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<?php
include("order_stats.php");
?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">


<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=view_cart&upd=yes" method="post" name="form1">

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3">
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
			                <TR bgcolor="#99CCFF" VALIGN="middle">
			                    <TD HEIGHT="25" COLSPAN="5" ALIGN="CENTER">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									<INPUT TYPE="submit" name="submit" value="<?php echo $_delete_btn; ?>" class="addcart">
									&nbsp;&nbsp;
									<!--
									<INPUT TYPE="submit" name="submit" value="<?php echo $_update_btn; ?>" class="addcart">
									-->
									&nbsp;&nbsp;
									<INPUT TYPE="button" name="order" value="<?php echo $_order_now_btn; ?>" class="addcart" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=order';">
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
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; 
									</FONT>
								</TD>
							<?php
							}
							?>

			                <TR bgcolor="#D8D8D8">
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <INPUT type=checkbox name=chkall onclick="sel()">
									</FONT>
								</TD>
			                    <TD>
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; File Name
									</FONT>
								</TD>
			                    <TD>
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; Product Code
									</FONT>
								</TD>
			                    <TD>
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; Product Name
									</FONT>
								</TD>
			                    <TD>
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; Download
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
									&nbsp; <INPUT TYPE="checkbox" NAME="cart_id[<?php echo $n; ?>]" value="<?php echo $row[cart_id]; ?>"> 	
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
						include("wb1.php");
						include("wb2.php");

						// katies
						include("katies_care.php");
						include("katies_size.php");

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
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="3" color="green"><b>
									&nbsp; You have product <?php echo $pfound; ?> item(s) in cart.
									</FONT></b>
								</TD>
			                    <TD height="25" >
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="3" color="green">
									&nbsp;&nbsp; <b><!--<?php echo number_format($qnt); ?>--></b>
									</FONT>
								</TD>
			                    <TD height="25">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="3" color="green">
									&nbsp; <b><!--<?php chkcursy($a_cur,$cnt); ?>--></b>
									</FONT>
								</TD>
							</TR>
	
							<?php
							if($pfound>=1)
							{
							?>
			                <TR bgcolor="#99CCFF" VALIGN="middle">
			                    <TD HEIGHT="25" COLSPAN="5" ALIGN="CENTER">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									<INPUT TYPE="submit" name="submit" value="<?php echo $_delete_btn; ?>" class="addcart">
									&nbsp;&nbsp;
									<INPUT TYPE="button" name="order" value="<?php echo $_order_now_btn; ?>" class="addcart" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=order';">
									</FONT>
								</TD>
							</TR>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="10" COLSPAN="4">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif,Helvetica Condensed,Arial,verdana,sans-serif"  size="1">
									&nbsp;
									</FONT>
								</TD>
			                    <TD HEIGHT="25" align="center">
									<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" bgcolor="F9F9F6" align="center">
									<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
										<td bgcolor="#FFCC00" align="center" height="25">		
											&nbsp; <a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=list"><font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="red">Add more files</font></a> &nbsp;		
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

