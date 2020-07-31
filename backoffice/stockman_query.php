				<tr>
					<td bgcolor="#E8E8E8">
						<font face="arial" size="2">
						&nbsp; 

						<?php
							if($session_gid==4)
							{
								echo "Stock Details | ";
							}
							else
							{
								echo "<a href=\"index.php?mod=home&lang=en&smod=stockman&mode=admin\">Stock Details</a> | ";
							}
						?>

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
						<font face="arial" size="3" color="white">
						&nbsp; <b>Stock Summary Report</b>
						</font>
					</td>
				</tr>
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="#CCCCCC">
			                    <TD height="20" align="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; #
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Product Ref.</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Openning</b> (+)
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>New PO</b> (+)
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Call-out</b> (-)
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Adjust</b> (+/-)
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
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


					?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">									
			                    <TD align="center">
									&nbsp; <font face="MS Sans Serif" size="1">
									<?php echo $cnt; ?>
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif" size="1">
									&nbsp; <a href="#"><?php echo $row[client_code]; ?></a>
									</font>
								</TD>
			                    <TD>
									&nbsp; 
									<font face="MS Sans Serif" size="1" >
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
									<font face="MS Sans Serif" size="1" color="green">
									&nbsp; <?php echo number_format($sum_received); ?>
									</font>
								</TD>
			                    <TD align="center">
									<font face="MS Sans Serif" size="1" color="red">
									&nbsp; <?php echo number_format($sum_issued); ?>
									</font>
								</TD>
			                    <TD align="center">
									<font face="MS Sans Serif" size="1" color="#6600FF">
									&nbsp; <?php echo number_format($sum_adjust); ?>
									</font>
								</TD>
			                    <TD align="center">
									<font face="MS Sans Serif" size="1"><b>
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
						<font face="arial" size="1">
						&nbsp;&nbsp; Result <?php echo $lmfound; ?> items.
						</font>
					</td>
				</tr>

				</tr>
			</table>

	</td>
</tr>
