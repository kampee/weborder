				<tr>
					<td bgcolor="#E8E8E8">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; 
						<a href="index.php?mod=home&lang=en&smod=stockman&mode=admin">Stock Details</a> | 
						<b>Stock Summary</b> | 
						Stock Query
						</font>
					</td>
				</tr>

<tr>
	<td bgcolor="white" height="20">

<?php
	//$query="select a.*,b.client_code,b.client_code2 from $wb_tbl_stock a,$wb_tbl_product b where a.stock_pid=b.pid and  stock_cid='$session_cid' group by a.stock_pid order by stock_pid";

	$query="select * from $wb_tbl_product where cid='$session_cid' group by pid order by client_code";

	$result = mysql_db_query($wb_dbname,$query);
	$lmfound = mysql_num_rows($result);
?>

			<table  width="100%" cellpadding="1" cellspacing="0" border="0">
				<tr>
					<td bgcolor="#000000" height="20">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="white">
						&nbsp; <b>Stock Summary Report</b>
						</font>
					</td>
				</tr>
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="#CCCCCC">
			                    <TD height="20" align="center">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; #
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Product Ref.</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Openning</b> (+)
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>New PO</b> (+)
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Call-out</b> (-)
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Adjust</b> (+/-)
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Balance</b> (+/-)
									</FONT>
								</TD>
							</TR>

					<?php
					$cnt=1;
					while ( $row = mysql_fetch_array( $result) ) 
					{
						if( $bgcol=="" )
						{
							$bgcol="white";
						}

						$stk_id=$row[pid];
						require("stockbal.php");

						
						/*//Openning stock
						$query_O="select sum(stock_qty) from $wb_tbl_stock where stock_pid='$row[pid]' and stock_type='O' ";
						$result_O = mysql_db_query($wb_dbname,$query_O);
						while ( $row_O = mysql_fetch_array( $result_O) ) 
						{
							$sum_openning=$row_O[0];
						}

						//Received stock
						$query_R="select sum(stock_qty) from $wb_tbl_stock where stock_pid='$row[pid]' and stock_type='R' ";
						$result_R = mysql_db_query($wb_dbname,$query_R);
						while ( $row_R = mysql_fetch_array( $result_R) ) 
						{
							$sum_received=$row_R[0];
						}

						//Issued stock
						$query_I="select sum(stock_qty) from $wb_tbl_stock where stock_pid='$row[pid]' and stock_type='I' ";
						$result_I = mysql_db_query($wb_dbname,$query_I);
						while ( $row_I = mysql_fetch_array( $result_I) ) 
						{
							$sum_issued=$row_I[0];
						}
						$query_C="select sum(p_qty) from $wb_tbl_cart where p_id='$row[pid]' and cart_flag='1' ";
						$result_C= mysql_db_query($wb_dbname,$query_C);
						while ( $row_C = mysql_fetch_array( $result_C) ) 
						{
							$sum_issued=$sum_issued+$row_C[0];
						}


						//adjust stock
						$query_A="select sum(stock_qty) from $wb_tbl_stock where stock_pid='$row[pid]' and stock_type='A' ";
						$result_A = mysql_db_query($wb_dbname,$query_A);
						while ( $row_A = mysql_fetch_array( $result_A) ) 
						{
							$sum_adjust=$row_A[0];
						}
						
						$sum_bal=$sum_openning+$sum_received-$sum_issued+$sum_adjust;*/

					?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">									
			                    <TD align="center">
									&nbsp; <font face="MS Sans Serif" size="2">
									<?php echo $cnt; ?>
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif" size="2">
									&nbsp; <a href="#"><?php echo $row[client_code]; ?></a>
									</font>
								</TD>
			                    <TD>
									&nbsp; 
									<font face="MS Sans Serif" size="2" >
									<?php 
										if($sum_openning==0)
										{
											echo "N/A";
										}
										else
										{
											echo number_format($sum_openning); 
										}
									?>
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif" size="2" color="green">
									&nbsp; <?php echo number_format($sum_received); ?>
									</font>
								</TD>
			                    <TD align="center">
									<font face="MS Sans Serif" size="2" color="red">
									&nbsp; <?php echo number_format($sum_issued); ?>
									</font>
								</TD>
			                    <TD align="center">
									<font face="MS Sans Serif" size="2" color="#6600FF">
									&nbsp; <?php echo number_format($sum_adjust); ?>
									</font>
								</TD>
			                    <TD align="center">
									<font face="MS Sans Serif" size="2"><b>
									&nbsp; 
									<?php 
										if($sum_bal<0)
										{
											$scol="red";
										}
										else
										{
											$scol="green";
										}
										echo "<font color=$scol>";
										echo number_format($sum_bal); 
										echo "</font>";
									?>
									</font></b>
								</TD>

							</TR>
							<?php
								if($bgcol=="#EAEAEA")
								{
									$bgcol="white";
								}
								else
								{
									$bgcol="#EAEAEA";
								}
								$cnt++;
							}
							?>

							</TABLE>
					</td>

				<tr>
					<td bgcolor="#EAEAEA" align="right">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp;&nbsp; Result <?php echo $lmfound; ?> items.
						</font>
					</td>
				</tr>

				</tr>
			</table>

	</td>
</tr>
