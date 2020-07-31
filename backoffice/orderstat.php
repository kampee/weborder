<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="4" color="red">
		<b>Order Status</b>
		</font>
	</td>
</tr>

<?php
if($pst=="")
{
?>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
	<?php
		$query="select a.*,b.uname from $wb_tbl_order a, $wb_tbl_users b ".
				"where a.order_cid='".$session_cid."' and a.order_uid=b.uid order by a.order_id";

		//$query="select * from $wb_tbl_order where order_cid='$session_cid' order by order_id";
		$result = mysql_db_query($wb_dbname,$query);
		$pfound = mysql_num_rows($result);
	?>
			<table  width="100%" cellpadding="1" cellspacing="0" border="0">
			<form action="index.php?mod=home&lang=en&smod=orderstat&mode=admin&pst=u" method="post" name="form1">
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">
							<INPUT TYPE="hidden" name="tnum" value="<?php echo $pfound; ?>">
			                <TR bgcolor="EEEEDD">
			                    <TD height="20">
									<FONT face="arial"  size="1">
									<b>Order No</b>
									</FONT>
								</TD>
								<TD height="20">
									<FONT face="arial"  size="1">
									<b>Factories</b>
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="arial"  size="1">
									<b>Date</b>
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="arial"  size="1">
									<b>Qty.</b>
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="arial"  size="1">
									<b>Amount</b>
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="arial"  size="1">
									<b>Status</b>
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="arial"  size="1">
									<b>Delivery Date</b>
									</FONT>
								</TD>
			                    <!--<TD height="20" align="center">
									<FONT face="arial"  size="1">
									<b>opt.</b>
									</FONT>
								</TD>-->
							</TR>

					<?php
					$i=0;
					while ( $row = mysql_fetch_array( $result) ) 
					{
						
						if( $bgcol=="" )
						{
							$bgcol="white";
						}
					?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">
			                    <TD>
									<font face="arial" size="1">
									<?php
										echo "<a href=\"vieworder.php?order_id=$row[order_id]&rd=".rand()."&sid=$row[order_sid]\" target=\"_blank\"><font face=arial size=1>";
										echo addzero5($row[order_id]);
										echo addzero3($row[order_cid]);
										echo "</font></a>";
									?>
									<INPUT TYPE="hidden" name="order_id[<?php echo $i; ?>]" value="<?php echo $row[order_id]; ?>">
									</font>
								</TD>
								<TD>
									<font face="arial" size="1">
									<?php 
										echo $row[uname]; 
									?>
									</font>
								</TD>
			                    <TD>
									<font face="arial" size="1">
									<?php echo $row[order_date]; ?>
									</font>
								</TD>
			                    <TD align="right">
									<font face="arial" size="1">
									<?php echo number_format($row[order_qty]); ?>&nbsp;
									</font>
								</TD>
			                    <TD align=right>
									<font face="arial" size="1">
									<?php chkcursy($row[order_cur],$row[order_amt],2); ?>
									</font>
								</TD>
								<TD>
									<font face="arial" size="1">
									<SELECT NAME="order_process[<?php echo $i; ?>]" class="bkoffice">
									<?php 
										$query3="select *from $wb_tbl_ostatus";
										$result3 = mysql_db_query($wb_dbname,$query3);
										while ( $row3 = mysql_fetch_array( $result3) ) 
										{
											if($row[order_process]==$row3[os_id])
											{
												echo "<OPTION VALUE=\"$row3[os_id]\" SELECTED>$row3[os_name]</OPTION>";
											}
											else
											{
												echo "<OPTION VALUE=\"$row3[os_id]\">$row3[os_name]</OPTION>";
											}
										}
									?>										
									</SELECT>
									</font>
									</td>
			                    <TD align="center">
									<font face="arial" size="1">
									&nbsp; <INPUT TYPE="text" NAME="del_date[<?php echo $i; ?>]" value="<?php echo $row[del_date]; ?>" class="bkoffice" size="10">&nbsp;
									
									<!--<a href="javascript:void(0)" onClick="javascript:popUpCalendar(this, form1.del_date[<?php echo $i; ?>], 'yyyy/mm/dd');"><img src="includes/popup-calendar/images/cal.gif" border=0 width="16"></a>
									</font>-->

								</TD>

			                    <!--<TD align="center">
									<font face="arial" size="1">
									&nbsp; <a href="index.php?mod=home&lang=en&smod=orderstat&mode=admin&pst=del&order_id=<?php //echo $row[order_id]; ?>"><img src="images/del.png" border="0"></a> &nbsp;
									</font>
								</TD>-->
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
							$i++;
							}
							?>
							</TABLE>
					</td>
				</tr>
				<tr>
					<td align="center" height="30" bgcolor="EEEEDD">
						<INPUT TYPE="submit" value="Update Order Status" class="bkoffice">
					</td>
				</tr>
				</form>
			</table>
	</td>
</tr>
<?php
}

if($pst=="u")
{
		$ar1 = $_REQUEST['order_id'];
		$ar2 = $_REQUEST['order_process'];
		for($i=0; $i<$tnum; $i++)
		{
			$query="UPDATE $wb_tbl_order SET order_process='$order_process[$i]',del_date='$del_date[$i]' WHERE order_id='$order_id[$i]' ";
			$result = mysql_db_query($wb_dbname,$query);
		}
		AlertMsg("Order Status has been updated","index.php?mod=home&lang=$lang&smod=orderstat&mode=admin");
}

if($pst=="del")
{
	$query="delete from $wb_tbl_order where order_id='$order_id' ";
	$result = mysql_db_query($wb_dbname,$query);			

	$query2="delete from $wb_tbl_cart where order_id='$order_id' ";
	$result2 = mysql_db_query($wb_dbname,$query2);			


	AlertMsg("Order has been deleted.","index.php?mod=home&lang=en&smod=orderstat&mode=admin");
}

?>


</table>

</td></tr></table>
