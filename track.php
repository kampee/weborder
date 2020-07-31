<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="3" color="black">
		&nbsp; <b><?php echo _track_order_txt; ?></b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=track" method="post" name="form2">
	<td bgcolor="white" >
				<?php
					$wh="";
					if($opt=="search")
					{		
						$order_no=substr($order_no,0,5);
						$wh="and order_id='$order_no' ";
					}
				$query="select * from $wb_tbl_order where order_uid='$session_uid' and order_cid='$session_cid' $wh order by order_id";
				$result = mysql_db_query($wb_dbname,$query);
				$pfound = mysql_num_rows($result);
				?>
			<table  width="100%" cellpadding="2" cellspacing="0" border="0">
				<tr>
					<td>
							<!--<div style="overflow:auto;height:150px">-->
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="EEEEDD">
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp;&nbsp; <b>Order No.</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Date</b>
									</FONT>
								</TD>
			                    <TD height="20" align="right">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Qty.</b> &nbsp;
									</FONT>
								</TD>
			                    <TD height="20" align="right">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Amount</b> &nbsp;
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Del. Date</b> &nbsp;
									</FONT>
								</TD>
								<TD>
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Status</b>
									</FONT>
								</TD>
							</TR>

					<?php
					while ( $row = mysql_fetch_array( $result) ) 
					{
						if( $bgcol=="" )
						{
							$bgcol="white";
						}
					?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">
			                    <TD>
									&nbsp; <font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									<?php echo "<a href=\"vieworder.php?order_id=$row[order_id]&rd=".rand()."&sid=$row[order_sid]\" target=\"_blank\">"; ?>
									<?php echo addzero5($row[order_id]); ?><?php echo addzero3($row[order_cid]); ?>
									<?php echo "</a>"; ?>
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php echo $row[order_date]." ".$row[order_time]; ?>
									</font>
								</TD>
			                    <TD ALIGN="right">
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php echo number_format($row[order_qty]); ?> &nbsp;
									</font>
								</TD>
			                    <TD ALIGN="right">
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php chkcursy($row[order_cur],$row[order_amt],2); ?>&nbsp;
									</font>
								</TD>
			                    <TD ALIGN="center">
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php echo $row[del_date]; ?> &nbsp;
									</font>
								</TD>
								<TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; 
									<?php 
										$query3="select *from $wb_tbl_ostatus where os_id='$row[order_process]' ";
										$result3 = mysql_db_query($wb_dbname,$query3);
										while ( $row3 = mysql_fetch_array( $result3) ) 
										{
											echo "<a href=\"vieworder.php?order_id=$row[order_id]&rd=".rand()."&sid=$row[order_sid]\" target=\"_blank\">$row3[os_code]</a>";
										}
									?>										
									</font>
								</TD>
							</TR>
							<?php
								if($bgcol=="EEEEDD")
								{
									$bgcol="white";
								}
								else
								{
									$bgcol="EEEEDD";
								}
							}
							?>
							</TABLE>
							<!--</div>-->
					</td>
				</tr>
			</table>
	</td>
</tr>
</form>
</table>

</td></tr></table>