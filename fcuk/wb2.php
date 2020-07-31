<?php
// CER-LB019 
if( ($row[p_id]==113))
{
	$qchk2="select sum(sl_qty) from $wb_tbl_ccse where sl_cartid='$row[cart_id]' ";
	$rchk2 = mysql_db_query($wb_dbname,$qchk2);
	while ( $rw2 = mysql_fetch_array( $rchk2 ) )
	{
		if($rw2[0]>0)
		{
			$bc2="black";
		}
		else
		{
			$bc2="#CC0000";
		}
	}
?>
<TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bc2; ?>">
<TD COLSPAN="6" height="20">
<font face="arial" size="2" color="white"><b>
&nbsp; <a href="javascript:OrderForm2('orderform2.php?cart_id=<?php echo $row[cart_id]; ?>&cart_qty=<?php echo $row[p_qty]; ?>&pid=<?php echo $row[p_id]; ?>');"><font color="#33FF00">Click Here</font></a> for fill-in order form of Care Label ***
</font></b>
</TD>
</TR>
<?php
}
?>