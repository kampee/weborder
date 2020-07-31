<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<form action="login.php" method="post">
	<td bgcolor="#99CC99" height="30" align="center">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="4"><B>
		&nbsp; 
		<INPUT TYPE="BUTTON" value="Close" OnClick="javascript:window.history.back();">
		</FONT></B>
	</td>
</tr>
</form>
</table>
			<table  width="100%" cellpadding="2" cellspacing="0" border="0">
				<tr>
					<td>
							<!--<div style="overflow:auto;height:150px">-->
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="#66CCFF">
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp;&nbsp; <b>Order No.</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Date</b>
									</FONT>
								</TD>

								<!--
			                    <TD height="20" align="right">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Qty.</b> &nbsp;
									</FONT>
								</TD>
			                    <TD height="20" align="right">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Amount</b> &nbsp;
									</FONT>
								</TD>
								-->

			                    <TD height="20" align="center">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Del. Date</b> &nbsp;
									</FONT>
								</TD>
								<TD>
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Status</b>
									</FONT>
								</TD>
							</TR>

					<?php
					while ( $rowX = mysql_fetch_array( $resultX) ) 
					{
						if( $bgcol=="" )
						{
							$bgcol="white";
						}
					?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">
			                    <TD>
									&nbsp; <font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
									<?php echo addzero5($rowX[order_id]); ?><?php echo addzero3($rowX[order_cid]); ?>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
									&nbsp; <?php echo $rowX[order_date]." ".$rowX[order_time]; ?>
									</font>
								</TD>
								<!--
			                    <TD ALIGN="right">
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
									&nbsp; <?php echo number_format($rowX[order_qty]); ?> &nbsp;
									</font>
								</TD>
			                    <TD ALIGN="right">
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
									&nbsp; <?php chkcursy($rowX[order_cur],$rowX[order_amt]); ?>&nbsp;
									</font>
								</TD>
								-->
			                    <TD ALIGN="center">
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
									&nbsp; <?php echo $rowX[del_date]; ?> &nbsp;
									</font>
								</TD>
								<TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
									&nbsp; 
									<?php 
										$query3="select *from wb_ostatus where os_id='$rowX[order_process]' ";
										$result3 = mysql_db_query($wb_dbname,$query3);
										while ( $row3 = mysql_fetch_array( $result3) ) 
										{
											echo "<a href=\"vieworder.php?order_id=$rowX[order_id]&rd=".rand()."&sid=$rowX[order_sid]\" target=\"_blank\">$row3[os_name]</a>";
										}
									?>										
									</font>
								</TD>
							</TR>
							<?php
								if($bgcol=="#E0F2FC")
								{
									$bgcol="white";
								}
								else
								{
									$bgcol="#E0F2FC";
								}
							}
							?>
							</TABLE>
							<!--</div>-->
					</td>
				</tr>
			</table>

