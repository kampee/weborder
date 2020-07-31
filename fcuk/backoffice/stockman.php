
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#CCCCCC" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#FFCC00" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="4" color="black">
		&nbsp; <b>Stock Inventory</b> 
		</font>
	</td>
</tr>

<?php
if($pst=="stksum")
{
	require("stockman_query.php");
}
?>


<?php
if($pst=="")
{
?>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=stockman&mode=admin&pst=update" method="post" name="prod" >
	<td bgcolor="white" height="20">
				<?php

				$link_src="index.php?mod=home&lang=".$lang."&smod=stockman&mode=admin";
				if ( !isset($startpage) && !isset($stoppage) ){
					$startpage=0;
					$stoppage=20;
				}

				$querysum="select a.*,b.client_code,b.client_code2 from $wb_tbl_stock a,$wb_tbl_product b where a.stock_pid=b.pid and stock_cid='$session_cid' order by stock_id DESC";
				$resultsum = mysql_db_query($wb_dbname,$querysum);
				$pfound = mysql_num_rows($resultsum);

				$query="select a.*,b.client_code,b.client_code2 from $wb_tbl_stock a,$wb_tbl_product b where a.stock_pid=b.pid and  stock_cid='$session_cid' order by stock_id DESC limit $startpage,$stoppage";
				$result = mysql_db_query($wb_dbname,$query);
				$lmfound = mysql_num_rows($result);
				?>
			<table  width="100%" cellpadding="1" cellspacing="0" border="0">
				<tr>
					<td bgcolor="#E8E8E8">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; 
						<b>Stock Details</b> | 
						<a href="index.php?mod=home&lang=en&smod=stockman&mode=admin&pst=stksum">Stock Summary</a> | Stock Query
						</font>
					</td>
				</tr>
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="#FFFF00">
			                    <TD height="20" align="center">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; #
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Stock Ref.</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Product Ref.</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Stock Type</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Stock Qty.</b>
									</FONT>
								</TD>
			                    <TD height="20" align="center">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Stock Date</b>
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
					?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">									
			                    <TD align="center">
									&nbsp; <font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									<?php
									if($cnt==$pfound)
									{
										$stkchecked="CHECKED";
									}
									else
									{
										$stkchecked="";
									}
									?>
									<INPUT TYPE="radio" NAME="stock_id" value="<?php echo $row[stock_id]; ?>" <?php echo $stkchecked; ?>>
									</font>
								</TD>
			                    <TD align="center">
									&nbsp; <font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									<?php addzero5($row[stock_id]); ?>
									</font>
								</TD>
								<TD>
									<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									&nbsp; <?php echo $row[client_code]." ".$row[client_code2] ; ?>
									</font>
								</TD>
			                    <TD>
									&nbsp; 
									<?php 
										$stkty=$row[stock_type]; 
										switch($stkty)
										{
											case "O":
												$stkname="Opening";
												$fc="black";
												break;
											case "R":
												$stkname="New PO"; //Receive
												$fc="green";
												break;
											case "I":
												$stkname="Call-out"; // Issue
												$fc="red";
												break;
											case "A":
												$stkname="Adjust";
												$fc="blue";
												break;
										}
									?>
									<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2" color="<?php echo $fc; ?>">
									<?php echo $stkname; ?>
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif" size="2" color="<?php echo $fc; ?>">
									&nbsp; <?php echo number_format($row[stock_qty]); ?>
									</font>
								</TD>
			                    <TD align="center">
									<font face="MS Sans Serif" size="2" color="green">
									&nbsp; <?php echo $row[stock_date]; ?>
									</font>
								</TD>
							</TR>
							<?php
								if($bgcol=="#FFFFCC")
								{
									$bgcol="white";
								}
								else
								{
									$bgcol="#FFFFCC";
								}
								$cnt++;
							}
							?>
							</TABLE>
						<?php
						$datafound=$pfound;
						$linkmaster=$link_src;
						$defpages=20;
						include("pagelist.php");
						?>
					</td>
				</tr>
				<tr>
					<td bgcolor="#E8E8E8">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; Result <?php echo $pfound; ?> items.
						</font>
					</td>
				</tr>
			</table>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#DEDEDE" height="25" align="center">
			<INPUT TYPE="button" name="add" value="  Add  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=stockman&mode=admin&pst=add';">
			&nbsp; 
			<INPUT TYPE="submit" name="submit" value="  Edit  " class="bkoffice">
			&nbsp;
			<!--<INPUT TYPE="submit" name="submit" value="Delete" class="bkoffice">
			&nbsp;-->
	</td>
</tr>
</form>
<?php
}
?>


<?php
if($pst=="add")
{
	echo "<form action=\"index.php?mod=home&lang=$lang&smod=stockman&mode=admin&pst=ins\" method=\"post\">";
	include("stockman_ext.php");
	echo "</form>";
}
?>

<?php
if($pst=="ins")
{	
	$stock_date=$regdate;
	$stock_time=$regtime;
	$stock_ip=$wb_remote_ipaddress;

	$query="INSERT INTO $wb_tbl_stock (stock_cid,stock_pid,stock_type,stock_qty,stock_date,stock_time,stock_ip,stock_uid,stock_rem) VALUES ('$session_cid','$stock_pid','$stock_type','$stock_qty','$stock_date','$stock_time','$stock_ip','$session_uid','$stock_rem')";
	$result = mysql_db_query($wb_dbname,$query);
	if($result)
	{
		AlertMsg("Stock has been created.","index.php?mod=home&lang=$lang&smod=stockman&mode=admin");
	}
	else
	{
		errmess("Couldn't create Stock");
		die;
		echo "</table></td></tr></table>";
	}
}
?>



<?php
if($pst=="update")
{
	switch($submit)
	{
		case "  Edit  ":
			echo "<form action=\"index.php?mod=home&lang=$lang&smod=stockman&mode=admin&pst=upd\" method=\"post\">";
			include("stockman_ext.php");
			echo "</form>";
			break;
		case "Delete":
			$query="delete from $wb_tbl_stock where stock_id='$stock_id' ";
			$result = mysql_db_query($wb_dbname,$query);			
			AlertMsg("Stock has been deleted.","index.php?mod=home&lang=$lang&smod=stockman&mode=admin");
			break;
	}
}
?>

<?php
if($pst=="upd")
{
	$stock_date=$regdate;
	$stock_time=$regtime;
	$stock_ip=$wb_remote_ipaddress;	

	$query="UPDATE $wb_tbl_stock SET stock_qty='$stock_qty',stock_date='$stock_date',stock_time='$stock_time',".
				"stock_ip='$stock_ip',stock_rem='$stock_rem',stock_uid='$session_uid' WHERE stock_id='$stock_id'" ;
	$result = mysql_db_query($wb_dbname,$query);

	AlertMsg("Stock has been updated.","index.php?mod=home&lang=$lang&smod=stockman&mode=admin");
}
?>
</table></td></tr></table>